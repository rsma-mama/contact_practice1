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
      <form class="form" action="/contact_practice1" method="post">
        @csrf
        <!--お名前-->
        <div class="confirm-table">
          <table class="confirm-table__inner">
            <tr class="confirm-table__row">
              <th class="confirm-table__header">お名前</th>
              <td class="confirm-table__text">
                <input type="text" name="name" value="{{ $contact['name'] }}" readonly />
              </td>
            </tr>
            <!--性別-->
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
                <input type="radio" name="gender" value="{{ $contact['gender'] }}" />
              </td>
            </tr>
            <!--メールアドレス-->
            <tr class="confirm-table__row">
              <th class="confirm-table__header">メールアドレス</th>
              <td class="confirm-table__text">
                <input type="email" name="email" value="{{ $contact['email'] }}" readonly />
              </td>
            </tr>
            <!--電話番号-->
            <tr class="confirm-table__row">
              <th class="confirm-table__header">電話番号</th>
              <td class="confirm-table__text">
                <input type="tel" name="tel1" value="{{ $contact['tel1'] }}" readonly />
                <input type="tel" name="tel2" value="{{ $contact['tel2'] }}" readonly />
                <input type="tel" name="tel3" value="{{ $contact['tel3'] }}" readonly />
              </td>
            </tr>
            <!--
            <tr class="confirm-table__row">
              <th class="confirm-table__header">住所</th>
              <td class="confirm-table__text">
                <input type="text" name="address" value="{{ $contact['address'] }}" readonly />
              </td>
            </tr>
            <tr class="confirm-table__row">
              <th class="confirm-table__header">建物名</th>
              <td class="confirm-table__text">
                <input type="text" name="building" value="{{ $contact['building'] }}" readonly />
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
                <input type="select" name="inquiry_type" value="{{ $contact['inquiry_type'] }}" />
              </td>
            </tr>
            <tr class="confirm-table__row">
              <th class="confirm-table__header">お問い合わせ内容</th>
              <td class="confirm-table__text">
                <textarea name="content" readonly>{{ $contact['content'] }}</textarea>
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