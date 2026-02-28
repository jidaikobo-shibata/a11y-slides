#!/usr/bin/env bash
set -euo pipefail

SCRIPT_DIR="$(cd "$(dirname "${BASH_SOURCE[0]}")" && pwd)"
PID_FILE="${SCRIPT_DIR}/.php-server.pid"

if [[ ! -f "${PID_FILE}" ]]; then
  echo "PID ファイルがありません。PHP サーバーは停止済みの可能性があります。" >&2
  exit 1
fi

SERVER_PID="$(cat "${PID_FILE}")"

if kill -0 "${SERVER_PID}" >/dev/null 2>&1; then
  kill "${SERVER_PID}"
  rm -f "${PID_FILE}"
  echo "PHP サーバーを停止しました (PID: ${SERVER_PID})。"
else
  rm -f "${PID_FILE}"
  echo "対象プロセスは既に存在しません。PID ファイルを削除しました。" >&2
  exit 1
fi
