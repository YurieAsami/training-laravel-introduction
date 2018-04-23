<!-- Modal Menu -->
<div class="modal fade modal-menu" id="menuModal" tabindex="-1" role="dialog" aria-labelledby="menuModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="menuModalLabel">
          <a href="/test/index" class="d-inline-block"><img src="/img/logo.svg" alt="Mimity" height="35"></a>
        </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="list-group list-group-no-border" id="list-menu" data-children=".list-submenu">
          <a href="/test/index" class="list-group-item list-group-item-action">HOME</a>
          <div class="list-group-collapse list-submenu">
            <a class="list-group-item list-group-item-action" href="#list-submenu-1" data-toggle="collapse" aria-expanded="false" aria-controls="list-submenu-1">
              お取り扱い商品
            </a>
            <div class="collapse" id="list-submenu-1" data-parent="#list-menu">
              <div class="list-group">
                <a class="list-group-item list-group-item-action" href="/test/grid">商品一覧</a>
                <a class="list-group-item list-group-item-action" href="/test/cart">ショッピングカート</a>
                <a class="list-group-item list-group-item-action" href="/test/checkout">注文</a>
                <a class="list-group-item list-group-item-action" href="/test/order">購入履歴</a>
              </div>
            </div>
          </div>
          <div class="list-group-collapse list-submenu">
            <a class="list-group-item list-group-item-action" href="#list-submenu-4" data-toggle="collapse" aria-expanded="false" aria-controls="list-submenu-4">
              アカウント
            </a>
            <div class="collapse" id="list-submenu-4" data-parent="#list-menu">
              <div class="list-group">
                <a class="list-group-item list-group-item-action" href="/test/profile">プロフィール</a>
                <a class="list-group-item list-group-item-action" href="/test/cart">ショッピングカート</a>
                <a class="list-group-item list-group-item-action" href="/test/order">注文履歴</a>
                <a class="list-group-item list-group-item-action" href="/test/wishlist">お気に入りリスト</a>
                <a class="list-group-item list-group-item-action" href="/test/address">住所変更</a>
                <a class="list-group-item list-group-item-action" href="/test/password">パスワード変更</a>
                <a class="list-group-item list-group-item-action" href="/test/login">ログイン</a>
                <a href="/test/logout" class="list-group-item list-group-item-action">ログアウト</a>
                <a class="list-group-item list-group-item-action" href="/test/register">会員登録</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
