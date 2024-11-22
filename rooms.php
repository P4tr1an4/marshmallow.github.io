<!DOCTYPE html>

<html>
<head>
  <?php include("_partial/html_head.php"); ?>
</head>

<body>
    <?php session_start(); ?>
    <?php include("_partial/svg.php"); ?>

    <div class="preloader">
        <div class="loader"></div>
    </div>

    <header id="header">
        <?php include("_partial/menu_one.php"); ?>
        <?php include("_partial/menu_two.php"); ?>
    </header>

    <section id="room" class="padding-medium">
    <div class="container-fluid padding-side" data-aos="fade-up">
      <div class="d-flex flex-wrap align-items-center justify-content-between">
        <div>
          <h3 class="display-3 fw-normal text-center">Explore our rooms</h3>
        </div>
        <a href="room.html" class="btn btn-arrow btn-primary mt-3">
          <span>Explore rooms<svg width="18" height="18">
              <use xlink:href="#arrow-right"></use>
            </svg></span>
        </a>
      </div>

      <div class="swiper room-swiper mt-5">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <div class="room-item position-relative bg-black rounded-4 overflow-hidden">
              <img src="images/room1.jpg" alt="img" class="post-image img-fluid rounded-4">
              <div class="product-description position-absolute p-5 text-start">
                <h4 class="display-6 fw-normal text-white">Grand deluxe rooms</h4>
                <p class="product-paragraph text-white">Filled with queen's bed with aesthetic white furntures and
                  with a plus of vanilla scent all over the room.
                </p>
                <table>
                  <tbody>
                    <tr class="text-white">
                      <td class="pe-2">Price:</td>
                      <td class="price">299$ /Pernight</td>
                    </tr>
                    <tr class="text-white">
                      <td class="pe-2">Size:</td>
                      <td>10 ft</td>
                    </tr>
                    <tr class="text-white">
                      <td class="pe-2">Capacity:</td>
                      <td>Max persion 2</td>
                    </tr>
                    <tr class="text-white">
                      <td class="pe-2">Bed:</td>
                      <td>Normal Beds</td>
                    </tr>
                    <tr class="text-white">
                      <td class="pe-2">Services:</td>
                      <td>Wifi, Television, Bathroom,...</td>
                    </tr>
                  </tbody>
                </table>
                <a href="room-details.html">
                  <p class="text-decoration-underline text-white m-0 mt-2">Browse Now</p>
                </a>
              </div>
            </div>
            <div class="room-content text-center mt-3">
              <h4 class="display-6 fw-normal"><a href="room-details.html">Grand deluxe rooms</a></h4>
              <p><span class="text-primary fs-4">$269</span>/night</p>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="room-item position-relative bg-black rounded-4 overflow-hidden">
              <img src="images/room3.jpg" alt="img" class="post-image img-fluid rounded-4">
              <div class="product-description position-absolute p-5 text-start">
                <h4 class="display-6 fw-normal text-white">Sweet Family room</h4>
                <p class="product-paragraph text-white">Filled with king's bed with aesthetic brown furntures and
                  with a plus of chocolate scent all over the room.
                </p>
                <table>
                  <tbody>
                    <tr class="text-white">
                      <td class="pe-2">Price:</td>
                      <td class="price">299$ /Pernight</td>
                    </tr>
                    <tr class="text-white">
                      <td class="pe-2">Size:</td>
                      <td>10 ft</td>
                    </tr>
                    <tr class="text-white">
                      <td class="pe-2">Capacity:</td>
                      <td>Max persion 4</td>
                    </tr>
                    <tr class="text-white">
                      <td class="pe-2">Bed:</td>
                      <td>Queen's Bed</td>
                    </tr>
                    <tr class="text-white">
                      <td class="pe-2">Services:</td>
                      <td>Wifi, Television, Bathroom,...</td>
                    </tr>
                  </tbody>
                </table>
                <a href="room-details.html">
                  <p class="text-decoration-underline text-white m-0 mt-2">Browse Now</p>
                </a>
              </div>
            </div>
            <div class="room-content text-center mt-3">
              <h4 class="display-6 fw-normal"><a href="room-details.html">Sweet Family room</a></h4>
              <p><span class="text-primary fs-4">$360</span>/night</p>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="room-item position-relative bg-black rounded-4 overflow-hidden">
              <img src="images/room2.jpg" alt="img" class="post-image img-fluid rounded-4">
              <div class="product-description position-absolute p-5 text-start">
                <h4 class="display-6 fw-normal text-white">Perfect Double Room</h4>
                <p class="product-paragraph text-white">Filled with king's bed with aesthetic white and pink furnitures and
                  with a plus of vanilla and strawberry scent all over the room.</p>
                <table>
                  <tbody>
                    <tr class="text-white">
                      <td class="pe-2">Price:</td>
                      <td class="price">299$ /Pernight</td>
                    </tr>
                    <tr class="text-white">
                      <td class="pe-2">Size:</td>
                      <td>10 ft</td>
                    </tr>
                    <tr class="text-white">
                      <td class="pe-2">Capacity:</td>
                      <td>Max persion 2</td>
                    </tr>
                    <tr class="text-white">
                      <td class="pe-2">Bed:</td>
                      <td>King's Bed</td>
                    </tr>
                    <tr class="text-white">
                      <td class="pe-2">Services:</td>
                      <td>Wifi, Television, Bathroom,...</td>
                    </tr>
                  </tbody>
                </table>
                <a href="room-details.html">
                  <p class="text-decoration-underline text-white m-0 mt-2">Browse Now</p>
                </a>
              </div>
            </div>
            <div class="room-content text-center mt-3">
              <h4 class="display-6 fw-normal"><a href="room-details.html">Perfect Double Room</a></h4>
              <p><span class="text-primary fs-4">$450</span>/night</p>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="room-item position-relative bg-black rounded-4 overflow-hidden">
              <img src="images/room1.jpg" alt="img" class="post-image img-fluid rounded-4">
              <div class="product-description position-absolute p-5 text-start">
                <h4 class="display-6 fw-normal text-white">Grand deluxe rooms</h4>
                <p class="product-paragraph text-white">Perfect room with 2 beds build for you and your loved ones, 
                  all over covered with roses scents</p>
                <table>
                  <tbody>
                    <tr class="text-white">
                      <td class="pe-2">Price:</td>
                      <td class="price">299$ /Pernight</td>
                    </tr>
                    <tr class="text-white">
                      <td class="pe-2">Size:</td>
                      <td>10 ft</td>
                    </tr>
                    <tr class="text-white">
                      <td class="pe-2">Capacity:</td>
                      <td>Max persion 2</td>
                    </tr>
                    <tr class="text-white">
                      <td class="pe-2">Bed:</td>
                      <td>Normal Beds</td>
                    </tr>
                    <tr class="text-white">
                      <td class="pe-2">Services:</td>
                      <td>Wifi, Television, Bathroom,...</td>
                    </tr>
                  </tbody>
                </table>
                <a href="room-details.html">
                  <p class="text-decoration-underline text-white m-0 mt-2">Browse Now</p>
                </a>
              </div>
            </div>
            <div class="room-content text-center mt-3">
              <h4 class="display-6 fw-normal"><a href="room-details.html">Grand deluxe rooms</a></h4>
              <p><span class="text-primary fs-4">$269</span>/night</p>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="room-item position-relative bg-black rounded-4 overflow-hidden">
              <img src="images/room3.jpg" alt="img" class="post-image img-fluid rounded-4">
              <div class="product-description position-absolute p-5 text-start">
                <h4 class="display-6 fw-normal text-white">Sweet Family room</h4>
                <p class="product-paragraph text-white">Perfect room with 3 beds build your loved two, 
                  all over covered with tulip scents.
                </p>
                <table>
                  <tbody>
                    <tr class="text-white">
                      <td class="pe-2">Price:</td>
                      <td class="price">299$ /Pernight</td>
                    </tr>
                    <tr class="text-white">
                      <td class="pe-2">Size:</td>
                      <td>10 ft</td>
                    </tr>
                    <tr class="text-white">
                      <td class="pe-2">Capacity:</td>
                      <td>Max persion 4</td>
                    </tr>
                    <tr class="text-white">
                      <td class="pe-2">Bed:</td>
                      <td>Normal Beds</td>
                    </tr>
                    <tr class="text-white">
                      <td class="pe-2">Services:</td>
                      <td>Wifi, Television, Bathroom,...</td>
                    </tr>
                  </tbody>
                </table>
                <a href="room-details.html">
                  <p class="text-decoration-underline text-white m-0 mt-2">Browse Now</p>
                </a>
              </div>
            </div>
            <div class="room-content text-center mt-3">
              <h4 class="display-6 fw-normal"><a href="room-details.html">Sweet Family room</a></h4>
              <p><span class="text-primary fs-4">$360</span>/night</p>
            </div>
          </div>
        </div>
        <div class="swiper-pagination room-pagination position-relative mt-5"></div>
      </div>
    </div>
  </section>
  
    <?php include("_partial/html_footer.php"); ?>
    <?php include("_partial/html_script.php"); ?>
</body>
</html>