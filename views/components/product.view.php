
                  <div class="card" onclick="window.location.href='./products/<?php echo $product['id']; ?>'">
                  <div class="image_container">
                    <img src="/public/images/products/<?php echo $product['image_url']; ?>" alt="" />
                  </div>
                  <div class="title">
                    <span><?php echo $product['name']; ?></span>
                  </div>
                  <div class="description">
                  <?php echo $product['description']; ?>
                  </div>
                  <div class="action">
                    <div class="price">
                      <span><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-baseline"><path d="M4 20h16"/><path d="m6 16 6-12 6 12"/><path d="M8 12h8"/></svg> <?php echo $product['price']; ?></span>
                    </div>
                    <button class="cart-button">
                      <svg
                      class="cart-icon"
                      stroke="currentColor"
                      stroke-width="1.5"
                      viewBox="0 0 24 24"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg">
                      <path
                        d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 0 0-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 0 0-16.536-1.84M7.5 14.25 5.106 5.272M6 20.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Zm12.75 0a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z"
                        stroke-linejoin="round"
                        stroke-linecap="round">
                      </path>
                    </svg>
                      <span>Add to Cart</span>
                    </button>
                  </div>
          </div>
