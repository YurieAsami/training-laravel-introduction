<!-- Modal Quikview -->
          <div class="modal fade modal-quickview" id="quickviewModal" tabindex="-1" role="dialog" aria-labelledby="quickviewModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title font-weight-normal" id="quickviewModalLabel"><a href="/test/detail" class="text-dark">{{$product->name}}</a></h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body px-0">
                  <div class="container-fluid">
                    <div class="row compact">
                       <div class="col col-sm-6">
                         <div class="swiper-container" id="quickview-slider">
                           <div class="swiper-wrapper">
                             <div class="swiper-slide"><img src="/img/product/polo1.jpg" alt="image" class="w-100"></div>
                             <div class="swiper-slide"><img src="/img/product/polo2.jpg" alt="image" class="w-100"></div>
                             <div class="swiper-slide"><img src="/img/product/polo3.jpg" alt="image" class="w-100"></div>
                           </div>
                           <div class="swiper-pagination"></div>
                           <div class="swiper-button-prev d-none d-sm-flex" id="quickview-prev"><i class="material-icons md-3">keyboard_arrow_left</i></div>
                           <div class="swiper-button-next d-none d-sm-flex" id="quickview-next"><i class="material-icons md-3">keyboard_arrow_right</i></div>
                         </div>
                       </div>
                       <div class="col col-sm-6">
                         <div class="list-detail">
                           <div>Price</div>
                           <div>
                             <ul class="list-inline mb-0">
                               @if(isset($product->sale))
                                 @php
                                   $prices=($product->price)*($product->sale)/100;
                                 @endphp
                               <li class="list-inline-item"><span class="price">{{$prices}}円</span></li>
                               <li class="list-inline-item"><del class="text-muted small">{{$product->price}}円</del></li>
                               <li class="list-inline-item d-none d-sm-inline-block"><span class="badge badge-theme">{{$product->sale}}% OFF</span></li>
                               @else
                               <li class="list-inline-item"><span class="price">{{$product->price}}円</span></li>
                               @endif
                             </ul>
                           </div>
                         </div>
                         <form action="/test/cart" method="post">
                           {{ csrf_field() }}
                         <div class="list-detail">
                           <div>Quantity</div>
                           <div>
                             <div class="input-group input-group-sm input-group-qty">
                               <div class="input-group-prepend"><button class="btn btn-light btn-down" type="button"><i class="material-icons">keyboard_arrow_down</i></button></div>
                               <input type="text" class="form-control text-center border-light" aria-label="Quantity" value="1" data-min="1" data-max="10" name="quantity">
                               <div class="input-group-append"><button class="btn btn-light btn-up" type="button"><i class="material-icons">keyboard_arrow_up</i></button></div>
                             </div>
                           </div>
                         </div>
                         <div class="list-detail">
                           <div>Size</div>
                           <div>
                             <select name="size" class="custom-select custom-select-sm w-50">
                              <option value="S">S</option>
                              <option value="M">M</option>
                              <option value="L">L</option>
                              <option value="XL">XL</option>
                              <option value="XXL">XXL</option>
                            </select>
                          </div>
                        </div>
                        <div class="list-detail">
                          <div>Checkbox</div>
                          <div>
                            <div class="custom-control custom-checkbox">
                              <input type="checkbox" class="custom-control-input" id="quickviewCheck">
                              <label class="custom-control-label" for="quickviewCheck">Check this</label>
                            </div>
                          </div>
                        </div>
                        <div class="list-detail">
                          <div>Radio Options</div>
                          <div>
                            <div class="custom-control custom-radio">
                              <input type="radio" id="quickviewOption1" name="quickview-option" class="custom-control-input">
                              <label class="custom-control-label" for="quickviewOption1">Yes</label>
                            </div>
                            <div class="custom-control custom-radio">
                              <input type="radio" id="quickviewOption2" name="quickview-option" class="custom-control-input">
                              <label class="custom-control-label" for="quickviewOption2">No</label>
                            </div>
                          </div>
                        </div>
                        <div class="list-detail">
                          <div class="btn-group btn-group-sm w-100" role="group" aria-label="quickview action">
                            <button class="btn btn-theme w-75" type="submit" name="cart" value={{$product->id}}><i class="material-icons">add_circle</i> Add to Cart</button></form>
                            <form action="/test/wishlist" method="post">
                              {{ csrf_field() }}
                            <button type="submit" class="btn btn-outline-theme w-25" name="wish" value={{$product->id}}><i class="material-icons">favorite</i></button></form>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-6">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
