<style>

h1 {
  color: #fff;
}

.lead {
  color: #aaa;
}

.wrapper {
  margin: 10vh;
}

/* Post card styles */

.card {
  border: none;
  transition: all 500ms cubic-bezier(0.19, 1, 0.22, 1);
  overflow: hidden;
  border-radius: 20px;
  min-height: 450px;
  box-shadow: 0 0 12px 0 rgba(0, 0, 0, 0.2);
}

@media (max-width: 768px) {
  .card {
    min-height: 350px;
  }
}

@media (max-width: 420px) {
  .card {
    min-height: 300px;
  }
}

.card.card-has-bg {
  transition: all 500ms cubic-bezier(0.19, 1, 0.22, 1);
  background-size: 120%;
  background-repeat: no-repeat;
  background-position: center center;
}

.card.card-has-bg:before {
  content: '';
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  background: inherit;
  -webkit-filter: grayscale(1);
  -moz-filter: grayscale(100%);
  -ms-filter: grayscale(100%);
  -o-filter: grayscale(100%);
  filter: grayscale(100%);
}

.card.card-has-bg:hover {
  transform: scale(0.98);
  box-shadow: 0 0 5px -2px rgba(0, 0, 0, 0.3);
  background-size: 130%;
  transition: all 500ms cubic-bezier(0.19, 1, 0.22, 1);
}

.card.card-has-bg:hover .card-img-overlay {
  transition: all 800ms cubic-bezier(0.19, 1, 0.22, 1);
  background: rgb(255, 186, 33);
  background: linear-gradient(0deg, rgba(255, 186, 33, 0.5) 0%, rgba(255, 186, 33, 1) 100%);
}

.card.card-footer {
  background: none;
  border-top: none;
}

.card.card-footer .media img {
  border: solid 3px rgba(255, 255, 255, 0.3);
}

.card .card-title {
  font-weight: 800;
}

.card .card-meta {
  color: rgba(0, 0, 0, 0.3);
  text-transform: uppercase;
  font-weight: 500;
  letter-spacing: 2px;
}

.card .card-body {
  transition: all 500ms cubic-bezier(0.19, 1, 0.22, 1);
}

.card:hover .card-body {
  margin-top: 30px;
  transition: all 800ms cubic-bezier(0.19, 1, 0.22, 1);
}

.card:hover {
  cursor: pointer;
  transition: all 800ms cubic-bezier(0.19, 1, 0.22, 1);
}

.card .card-img-overlay {
  transition: all 800ms cubic-bezier(0.19, 1, 0.22, 1);
  background: rgb(255, 186, 33);
  background: linear-gradient(0deg, rgba(255, 186, 33, 0.3785889355742297) 0%, rgba(255, 186, 33, 1) 100%);
}

@media (max-width: 767px) {
  /* Add responsive styles here if needed */
}

</style>

<section class="wrapper">
  <div class="container">
    <div class="row">
      <div class="col text-center mb-5">
         <h1 class="display-4 font-weight-bolder text-dark">Chào mừng bạn đến với trang quản trị</h1>
  <p class="lead">Fast News </p>
      </div>
    </div>
  <div class="row">
 <div class="col-sm-12 col-md-6 col-lg-4 mb-4"><div class="card text-dark card-has-bg click-col" style="background-image:url('https://source.unsplash.com/600x900/?tech,street');">
         <img class="card-img d-none" src="https://source.unsplash.com/600x900/?tech,street" alt="Creative Manner Design Lorem Ipsum Sit Amet Consectetur dipisi?">
        <div class="card-img-overlay d-flex flex-column">
         <div class="card-body">
            <small class="card-meta mb-2">Công nghệ</small>
            <h4 class="card-title mt-0 "><a class="text-dark" herf="https://creativemanner.com">Bước tiến của AI</a></h4>
           <small><i class="far fa-clock"></i> 10/11/2023</small>
          </div>
          <div class="card-footer">
           <div class="media">
  <img class="mr-3 rounded-circle" src="https://assets.codepen.io/460692/internal/avatars/users/default.png?format=auto&version=1688931977&width=80&height=80" alt="Generic placeholder image" style="max-width:50px">
  <div class="media-body">
    <h6 class="my-0 text-dark d-block">Oz Coruhlu</h6>
     <small>Creator</small>
  </div>
</div>
          </div>
        </div>
      </div></div>
     <div class="col-sm-12 col-md-6 col-lg-4 mb-4"><div class="card text-dark card-has-bg click-col" style="background-image:url('https://source.unsplash.com/600x900/?tree,nature');">
         <img class="card-img d-none" src="https://source.unsplash.com/600x900/?tree,nature" alt="Creative Manner Design Lorem Ipsum Sit Amet Consectetur dipisi?">
        <div class="card-img-overlay d-flex flex-column">
         <div class="card-body">
            <small class="card-meta mb-2">Thể thao</small>
            <h4 class="card-title mt-0 "><a class="text-dark" herf="https://creativemanner.com">Roma mất quyền tự quyết đỉnh bảng ở Europa League</a></h4>
           <small><i class="far fa-clock"></i> 10/11/2023</small>
          </div>
          <div class="card-footer">
           <div class="media">
  <img class="mr-3 rounded-circle" src="https://assets.codepen.io/460692/internal/avatars/users/default.png?format=auto&version=1688931977&width=80&height=80" alt="Generic placeholder image" style="max-width:50px">
  <div class="media-body">
    <h6 class="my-0 text-dark d-block">Oz Coruhlu</h6>
     <small>Director of UI/UX</small>
  </div>
</div>
          </div>
        </div>
      </div>
    </div>
     <div class="col-sm-12 col-md-6 col-lg-4 mb-4"><div class="card text-dark card-has-bg click-col" style="background-image:url('https://source.unsplash.com/600x900/?tree,nature');">
         <img class="card-img d-none" src="https://source.unsplash.com/600x900/?tree,nature" alt="Creative Manner Design Lorem Ipsum Sit Amet Consectetur dipisi?">
        <div class="card-img-overlay d-flex flex-column">
         <div class="card-body">
            <small class="card-meta mb-2">Kinh tế</small>
            <h4 class="card-title mt-0 "><a class="text-dark" herf="https://creativemanner.com">Đức tung gói trợ giá điện 12 tỷ euro cho ngành sản xuất</a></h4>
           <small><i class="far fa-clock"></i> 10/11/2023</small>
          </div>
          <div class="card-footer">
           <div class="media">
  <img class="mr-3 rounded-circle" src="https://assets.codepen.io/460692/internal/avatars/users/default.png?format=auto&version=1688931977&width=80&height=80" alt="Generic placeholder image" style="max-width:50px">
  <div class="media-body">
    <h6 class="my-0 text-dark d-block">Oz Coruhlu</h6>
     <small>Director of UI/UX</small>
  </div>
</div>
          </div>
        </div>
      </div></div>
 
  
</div>
  
</div>
</section>
