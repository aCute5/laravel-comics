<section class="black-section">
    <div class="content">
      <div class="header"></div>
      <div class="card-container">
        @foreach ($comics  as $item)
            <div class="card">
                <img src="{{$item['thumb'] }}" alt="/">
            </div>
        @endforeach
      </div>
    </div>
    <div class="shop">
      <img src="@/img/buy-comics-digital-comics.png" alt="" />
      <h4>DIGITAL COMICS</h4>
      <img src="@/img/buy-comics-merchandise.png" alt="" />
      <h4>MERCHANDISE</h4>
      <img src="@/img/buy-comics-subscriptions.png" alt="" />
      <h4>SUBSCRIPTIONS</h4>
      <img src="@/img/buy-comics-shop-locator.png" alt="" />
      <h4>LOCATOR</h4>
      <img src="@/img/buy-dc-power-visa.svg" alt="" />
      <h4>LOCATOR</h4>
    </div>
    <style lang="scss" scoped>
        .content {
          background-color: rgb(0, 0, 0);
          height: 80vh;
          color: white;
          font-size: 40px;
        }
        .content .header {
          width: 100%;
          height: 50%;
          position: relative;
          background-position: 90% 10%;
          background-size: cover;
          background-repeat: no-repeat;
          background-image: url("@/img/jumbotron.jpg");
        }
        .card-container {
          padding: 3rem;
          display: flex;
          flex-wrap: wrap;
          height: 50%;
        }
        .cardstyle {
          padding: 0.3rem;
          flex: 1 1 5%;
          max-height: 10%;
        }
        .black-section .shop {
          display: flex;
          justify-content: center;
          gap: 1rem;
          height: 20vh;
          background-color: #0282f9;
          color: rgb(255, 255, 255);
          align-items: center;
          padding: 10rem;
        }
        .shop img {
          width: 4rem;
        }
        .shop h4 {
          font-size: 1rem;
        }
        .card-text {
  font-size: 0.5rem;
}
.card-title {
  font-size: 1rem;
}
.card-body {
  padding: 0;
  font-size: 0.5rem;
}
.btn {
  font-size: 0.8rem;
}
        </style>
