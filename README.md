# slides

ウェブアクセシビリティ教材用のスライド一式です。PHP ファイルをそのまま配信し、ブラウザで表示します。

## 動作要件

- PHP がローカルにインストールされていること

確認:

```bash
php -v
```

## ローカル起動

バックグラウンドで PHP の組み込みサーバーを起動します。

```bash
./scripts/start.sh
```

スライドの URL:

- `http://127.0.0.1:8000/index.php`
- `http://127.0.0.1:8000/index.php?mode=sr`

ポートを変更する場合:

```bash
PORT=8080 ./scripts/start.sh
```

## 停止

保存された PID を使って停止します。

```bash
./scripts/stop.sh
```

## 補足

- デフォルトテーマは `generic` です
- ログは `scripts/.php-server.log` に出力されます
- PID は `scripts/.php-server.pid` に保存されます
- これらのファイルは `.gitignore` で除外されています

## 主なファイル

- `index.php`: 全般向けスライド
- `for-creators.php`: 制作者向けスライド
- `for-editors.php`: 更新担当者向けスライド
- `for-orders.php`: 発注者向けスライド
- `policy.php`: ウェブアクセシビリティ方針の立て方

## ディレクトリ構成

- `css/`: スタイルシート
- `js/`: JavaScript
- `images/`: 画像素材
- `movies/`: 動画素材
- `scripts/`: ローカル起動用スクリプト
