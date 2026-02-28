#!/usr/bin/env bash
set -euo pipefail

SCRIPT_DIR="$(cd "$(dirname "${BASH_SOURCE[0]}")" && pwd)"
PROJECT_ROOT="$(cd "${SCRIPT_DIR}/.." && pwd)"
PID_FILE="${SCRIPT_DIR}/.php-server.pid"
LOG_FILE="${SCRIPT_DIR}/.php-server.log"

HOST="${HOST:-127.0.0.1}"
PORT="${PORT:-8000}"

if ! command -v php >/dev/null 2>&1; then
  echo "php が見つかりません。PHP をインストールしてください。" >&2
  exit 1
fi

if [[ -f "${PID_FILE}" ]]; then
  EXISTING_PID="$(cat "${PID_FILE}")"
  if kill -0 "${EXISTING_PID}" >/dev/null 2>&1; then
    echo "PHP サーバーは既に起動しています (PID: ${EXISTING_PID})。" >&2
    exit 1
  fi
  rm -f "${PID_FILE}"
fi

cd "${PROJECT_ROOT}"
nohup php -S "${HOST}:${PORT}" -t "${PROJECT_ROOT}" >"${LOG_FILE}" 2>&1 &
SERVER_PID=$!
echo "${SERVER_PID}" >"${PID_FILE}"

echo "PHP サーバーを起動しました (PID: ${SERVER_PID})。"
echo "URL: http://${HOST}:${PORT}/index.php"
echo "SR : http://${HOST}:${PORT}/index.php?mode=sr"
echo "LOG: ${LOG_FILE}"
