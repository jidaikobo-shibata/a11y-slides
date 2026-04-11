# AGENTS.md

## 本番反映

- ユーザーが「本番に反映して」と指示したら、`/home/shibata/dev/slides/` から `jidaikobo.sakura:www/www.jidaikobo.com/slides/main/` へ `rsync -avh` で同期する
- `--delete` は付けない
- 配信時は少なくとも以下を除外する
  - `.git/`
  - `.serena/`
  - `.codex/`
  - `.backups/`
  - `scripts/.php-server.pid`
  - `scripts/.php-server.log`
  - `.gitignore` で非公開扱いになっている配布対象外ファイル
- 実行後は、主な転送対象と除外内容を簡潔に報告する
