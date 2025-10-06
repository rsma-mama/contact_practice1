<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Contact Form</title>
  <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/contact.css') }}" />
</head>

<body>
  <header class="header">
    <div class="header__inner">
      <a class="header__logo" href="/">
        Fashionably Late
      </a>
    </div>
  </header>

  <main>
    <div class="contact-form__content">
      <div class="contact-form__heading">
        <h2>Contact</h2>
      </div>
      <!-- お名前 -->
      <form class="form" action="/contact_practice1/confirm" method="post">
        @csrf
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item1">お名前</span>
            <span class="form__label--required">※</span>
          </div>
          <div class="form__group-content--name">
            <div class="form__input--text">
              <input type="text" name="first_name" placeholder="例:山田" />
            </div>
            <div class="form__input--text">
              <input type="text" name="last_name" placeholder="例:太郎" />
            </div>
          </div>
        </div>
        <div class="form__error">
          <!--バリデーション機能を実装したら記述します。-->
          @error('name')
          {{$message}}
          @enderror
        </div>
        <!--性別-->
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">性別</span>
            <span class="form__label--required">※</span>
          </div>
          <div class="form__group-content">
            <div class="form__radios">
              <label class="form__radio-title">
                <input type="radio" name="gender" value="1">男性
              </label>
              <label class="form__radio-title">
                <input type="radio" name="gender" value="2">女性
              </label>
              <label class="form__radio-title">
                <input type="radio" name="gender" value="3">その他
              </label>
            </div>
          </div>
          <div class="form__error">
            <!--バリデーション機能を実装したら記述します。-->
            @error('gender')
          {{$message}}
          @enderror
          </div>
        </div>
    </div>
    <!--メールアドレス-->
    <div class="form__group">
      <div class="form__group-title">
        <span class="form__label--item">メールアドレス</span>
        <span class="form__label--required">※</span>
      </div>
      <div class="form__group-content">
        <div class="form__input--text">
          <input type="email" name="email" placeholder="例:test@example.com" />
        </div>
        <div class="form__error">
          <!--バリデーション機能を実装したら記述します。-->
        </div>
      </div>
    </div>
    <!--電話番号-->
    <div class="form__group">
      <div class="form__group-title">
        <span class="form__label--item">電話番号</span>
        <span class="form__label--required">※</span>
      </div>
      <div class="form__group-content form__group-content--tel">
        <div class="form__input--text">
          <input type="tel" name="tel1" maxlength="4" placeholder="080" />
        </div>
        <span class="form__hyphen">-</span>
        <div class="form__input--text">
          <input type="tel" name="tel2" maxlength="4" placeholder="1234" />
        </div>
        <span class="form__hyphen">-</span>
        <div class="form__input--text">
          <input type="tel" name="tel3" maxlength="4" placeholder="5678" />
        </div>
        <div class="form__error">
          <!--バリデーション機能を実装したら記述します。-->
        </div>
      </div>
    </div>
    <!--住所-->
    <div class="form__group">
      <div class="form__group-title">
        <span class="form__label--item">住所</span>
        <span class="form__label--required">※</span>
      </div>
      <div class="form__group-content">
        <div class="form__input--text">
          <input type="text" name="address" placeholder="例:東京都渋谷区千駄ヶ谷1-2-3" />
        </div>
        <div class="form__error">
          <!--バリデーション機能を実装したら記述します。-->
        </div>
      </div>
    </div>
    <!--建物名-->
    <div class="form__group">
      <div class="form__group-title">
        <span class="form__label--item">建物名</span>
        <!-- 任意なので必須マークなし -->
      </div>
      <div class="form__group-content">
        <div class="form__input--text">
          <input type="text" name="building" placeholder="例:千駄ヶ谷マンション101" />
        </div>
      </div>
    </div>
    <!--お問い合せの種類-->
    <div class="form__group">
      <div class="form__group-title">
        <span class="form__label--text">お問い合わせの種類</span>
        <span class="form__label--required">※</span>
      </div>
      <div class="form__group-content">
        <div class="form__input--select">
          <select name="inquiry_type">
            <option value="" selected disabled>選択してください</option>
            <option value="1">1.商品のお届けについて</option>
            <option value="2">2.商品の交換について</option>
            <option value="3">3.商品トラブル</option>
            <option value="4">4.ショップへのお問い合わせ</option>
            <option value="5">5.その他</option>
          </select>
        </div>
      </div>
      <div class="form__error">
        <!--バリデーション機能を実装したら記述します。-->
      </div>
    </div>
    <!--お問い合わせ内容-->
    <div class="form__group">
      <div class="form__group-title">
        <span class="form__label--item">お問い合わせ内容</span>
        <span class="form__label--required">※</span>
      </div>
      <div class="form__group-content">
        <div class="form__input--textarea">
          <textarea name="detail" placeholder="お問い合わせの内容をご記載ください"></textarea>
        </div>
      </div>
      <div class="form__error">
        <!--バリデーション機能を実装したら記述します。-->
      </div>
    </div>
    <div class="form__button">
      <button class="form__button-submit" type="submit">確認画面</button>
    </div>
    </div>
  </main>
</body>

</html>