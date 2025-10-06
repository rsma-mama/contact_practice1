<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Contact Form</title>
  <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/confirm.css') }}" />
</head>

<body>
  <header class="header">
    <div class="header__inner">
      <a class="header__logo" href="/">
        FashionablyLate
      </a>
    </div>
  </header>

  <main>
    <div class="confirm__content">
      <div class="confirm__heading">
        <h2>Confirm</h2>
      </div>
      <form class="form">
        <div class="confirm-table">
          <table class="confirm-table__inner">
            <tr class="confirm-table__row">
              <th class="confirm-table__header">お名前</th>
              <td class="confirm-table__text">
                <input type="text" name="name" value="サンプルテキスト" />
              </td>
            </tr>
            @@php
                $genders = ['male' =>'男'　]
            @endphp
            <tr class="confirm-table__row">
              <th class="confirm-table__header">性別</th>
              <td class="confirm-table__text">
                @if(($gender ?? '')==1)
                男性
                @elseif(($gender ?? '')==2)
                女性
                @elseif(($gender ?? '')==3)
                その他
                @endif
                <input type="radio" name="gender" value="サンプルテキスト" />
              </td>
            </tr>
            <tr class="confirm-table__row">
              <th class="confirm-table__header">メールアドレス</th>
              <td class="confirm-table__text">
                <input type="email" name="email" value="サンプルテキスト" />
              </td>
            </tr>
            <tr class="confirm-table__row">
              <th class="confirm-table__header">電話番号</th>
              <td class="confirm-table__text">
                <input type="tel" name="tel1" value="サンプルテキスト" />
                <input type="tel" name="tel2" value="サンプルテキスト" />
                <input type="tel" name="tel3" value="サンプルテキスト" />
              </td>
            </tr>
            <tr class="confirm-table__row">
              <th class="confirm-table__header">住所</th>
              <td class="confirm-table__text">
                <input type="text" name="address" value="サンプルテキスト" />
              </td>
            </tr>
            <tr class="confirm-table__row">
              <th class="confirm-table__header">建物名</th>
              <td class="confirm-table__text">
                <input type="text" name="building" value="サンプルテキスト" />
              </td>
            </tr>
            <tr class="confirm-table__row">
              <th class="confirm-table__header">お問い合わせの種類</th>
              <td class="confirm-table__text">
                @if(($inquiry_type ?? '')==1)
                商品のお届けについて
                @elseif(($inquiry_type ??'')==2)
                商品の交換について
                @elseif(($inquiry_type ??'')==3)
                商品トラブル
                @elseif(($inquiry_type ??'')==4)
                ショップへのお問い合わせ
                @elseif(($inquiry_type ??'')==5)
                その他
                @endif
                <input type="select" name="inquiry_type" value="サンプルテキスト" />
              </td>
            </tr>
            <tr class="confirm-table__row">
              <th class="confirm-table__header">お問い合わせ内容</th>
              <td class="confirm-table__text">
                <input type="textarea" name="content" value="サンプルテキスト"></=>
              </td>
            </tr>
          </table>
        </div>
        <div class="form__button">
          <button class="form__button-submit" type="submit">送信</button>
          <a href="/" class="form__button-cancel">修正</a>
        </div>
      </form>
    </div>
  </main>
</body>

</html>