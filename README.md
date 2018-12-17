# American Village

OJT課題用のアメリカンビレッジマガジンのサイトです。


## Directory

OJT課題用ではGulp設定ファイルはプッシュしていません。

- src(開発ディレクトリ)
- public_html(公開ディレクトリ)
- ~~node_modules(モジュールディレクトリ)~~
- ~~gulpfile.js(gulp 設定ファイル)~~
- ~~webpack.config.dev.js(webpack設定ファイル 開発用)~~
- ~~webpack.config.js(webpack 設定ファイル 公開用)~~
- ~~config.js(全体の設定ファイル)~~


## CSS（SCSS）
- setting = mixin、変数など
- foundation = ベースなど
- layout = ページのレイアウトを構成する共通要素（ヘッダー、サイドナビなど）
- object > component = 最小単位のパーツ（ボタン、タイトルなど）
- object > project = componentを含むもしくはそれ以外の要素で構成されたサイト内で使い回しが効くパーツ
- object > utility = ユーティリティクラス（マージンの微調整などが必要な場合用）
- pages = componentもprojectにも当てはまらないそのページ固有のスタイル → 基本使用しない。使用する場合はそのページのみに読み込むなどして他モジュールへの影響がないように使用すること

FLOCSSをベースとしたCSS設計を使用します。FLOCSSについては以下参照。
[FLOCSS](https://github.com/hiloki/flocss)