<?php

/*

  type: layout
  content_type: static
  name: Home
  position: 11
  description: Home layout

*/
?>
<?php include THIS_TEMPLATE_DIR . "header.php"; ?>

<body>
  <div class="kaizen-wraper edit allow-drop safe-element" rel="sub-content" field="content">
    <module type="pictures" template="default" />
    <module type="layouts" template="kaizen/kz-title" />
    <module type="layouts" template="kaizen/kz-shape-title" />

    <div class="kz-form" id="scroll-form">
      <h3 class="form-headline">
        Thông tin đặt hàng<br>
      </h3>
      <div class="kz-container">
        <div class="kz-form">
          <module type="layouts" template="kaizen/kz-shape-title" />

          <form action="" autocomplete="off">
            <div class="kaizen-form-item">
              <input type="text" placeholder="Họ và tên " />
            </div>
            <div class="kaizen-form-item">
              <input type="text" placeholder="Số điện thoại" />
            </div>
            <div class="kaizen-form-item">
              <input type="text" placeholder="Địa chỉ" />
            </div>
            <div class="kaizen-animation">
              <div class="kaizen-button kaizen-transition">
                <div class="kaizen-button-headline">
                  <p class="kaizen-form-headline">Mua ngay</p>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
    <module type="layouts" template="kaizen/kz-product-info" />
    <div class="list-image edit" rel="image-content-1" field="content">
      <img src="https://w.ladicdn.com/s750x800/5c7362c6c417ab07e5196b05/anh-2-20231115032210-x6opb.jpg" alt="">
      <img src="https://w.ladicdn.com/s750x800/5c7362c6c417ab07e5196b05/anh-2-20231115032210-x6opb.jpg" alt="">
      <img src="https://w.ladicdn.com/s750x800/5c7362c6c417ab07e5196b05/anh-2-20231115032210-x6opb.jpg" alt="">
    </div>
    <module type="layouts" template="kaizen/kz-product-info" />
    <div class="list-image edit" rel="image-content-2" field="content">
      <img src="https://w.ladicdn.com/s750x800/5c7362c6c417ab07e5196b05/anh-2-20231115032210-x6opb.jpg" alt="">
      <img src="https://w.ladicdn.com/s750x800/5c7362c6c417ab07e5196b05/anh-2-20231115032210-x6opb.jpg" alt="">
      <img src="https://w.ladicdn.com/s750x800/5c7362c6c417ab07e5196b05/anh-2-20231115032210-x6opb.jpg" alt="">
    </div>
    <module type="testimonials" template="default" />
    <div class="footer">
      <div class="logo edit" rel="content" field="logo-footer">
        <img src="data:image/png;base64,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" alt="">
      </div>
      <div class="info">
        <div class="kz-container edit" rel="content" field="footer">
          <div class="address cloneable">
            <span style="font-weight: bold">Địa chỉ:</span>
            Address number,
            Street, District, City, District
          </div>
          <div class="phone cloneable">
            <span style="font-weight: bold">Số điện thoại:</span>
            +84 10000000000
          </div>
        </div>
      </div>
      <div class="kz-container">
        <div class="custom-service">
          <div class="service-title">Chính sách</div>
          <div class="cs-footer">
            <div class="pt50 sf cs1">
              <div class="shape-cs">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve" preserveAspectRatio="none" width="100%" height="100%" class="" fill="rgb(255, 255, 255)">
                  <g>
                    <rect x="-192" width="185" height="99"></rect>
                    <rect y="-36" width="100" height="30"></rect><text transform="matrix(1 0 0 1 66 -19.5)" font-family="'Helvetica'" font-size="2.4">http://thenounproject.com</text><text transform="matrix(1 0 0 1 7.166 -24.5)">
                      <tspan x="0" y="0" font-family="'Helvetica-Bold'" font-size="6.1578">The Noun Project</tspan>
                      <tspan x="1.12" y="4.8" font-family="'Helvetica-Bold'" font-size="4">Icon Template</tspan>
                    </text><text transform="matrix(1 0 0 1 -178.5 10.5)" font-family="'Helvetica-Bold'" font-size="6.1578">Reminders</text>
                    <line stroke="#FFFFFF" stroke-miterlimit="10" x1="8" y1="-14.5" x2="18" y2="-14.5"></line>
                    <line stroke="#FFFFFF" stroke-miterlimit="10" x1="-179" y1="16.5" x2="-162" y2="16.5"></line>
                    <g>
                      <g>
                        <g>
                          <rect x="-170.802" y="31.318" width="8.721" height="8.642"></rect>
                          <path d="M-164.455,42.312h4.747v-4.703h-4.747V42.312z M-159.266,42.749h-5.63V37.17h5.63V42.749      L-159.266,42.749z M-166.221,44.062h8.279v-8.203h-8.279V44.062L-166.221,44.062z M-157.5,44.5h-9.163v-9.079h9.163V44.5      L-157.5,44.5z">
                          </path>
                          <polygon points="-166.149,44.133 -166.292,43.991 -158.013,35.787 -157.871,35.929     ">
                          </polygon>
                        </g>
                      </g>
                    </g>
                    <rect x="-179" y="58" width="35" height="32.5"></rect><text transform="matrix(1 0 0 1 -179 60.1572)">
                      <tspan x="0" y="0" font-family="'Helvetica-Bold'" font-size="3">Strokes</tspan>
                      <tspan x="0" y="5" font-family="'Helvetica'" font-size="2.4">Try to keep strokes at 4px</tspan>
                      <tspan x="0" y="10" font-family="'Helvetica'" font-size="2.4">Minimum stroke weight is 2px</tspan>
                      <tspan x="0" y="14.5" font-family="'Helvetica'" font-size="2.4">For thicker strokes use even
                      </tspan>
                      <tspan x="0" y="17.5" font-family="'Helvetica'" font-size="2.4">numbers: 6px, 8px etc.</tspan>
                      <tspan x="0" y="22" font-family="'Helvetica-Bold'" font-size="2.4">Remember to expand strokes
                      </tspan>
                      <tspan x="0" y="25" font-family="'Helvetica-Bold'" font-size="2.4">before saving as an SVG
                      </tspan>
                    </text>
                    <rect x="-136.5" y="58" width="35" height="32.5"></rect><text transform="matrix(1 0 0 1 -136.5 60.1572)">
                      <tspan x="0" y="0" font-family="'Helvetica-Bold'" font-size="3">Size</tspan>
                      <tspan x="0" y="5" font-family="'Helvetica'" font-size="2.4">Cannot be wider or taller than
                      </tspan>
                      <tspan x="0" y="8.5" font-family="'Helvetica'" font-size="2.4">100px (artboard size)</tspan>
                      <tspan x="0" y="13.5" font-family="'Helvetica'" font-size="2.4">Scale your icon to fill as much of
                      </tspan>
                      <tspan x="0" y="16.5" font-family="'Helvetica'" font-size="2.4">the artboard as possible</tspan>
                    </text>
                    <rect x="-94" y="58" width="35" height="32.5"></rect><text transform="matrix(1 0 0 1 -94 60.1572)">
                      <tspan x="0" y="0" font-family="'Helvetica-Bold'" font-size="3">Ungroup</tspan>
                      <tspan x="0" y="5" font-family="'Helvetica'" font-size="2.4">If your design has more than one
                      </tspan>
                      <tspan x="0" y="8" font-family="'Helvetica'" font-size="2.4">shape, make sure to ungroup</tspan>
                    </text>
                    <rect x="-50" y="58" width="35" height="32.5"></rect><text transform="matrix(1 0 0 1 -50 60.1572)">
                      <tspan x="0" y="0" font-family="'Helvetica-Bold'" font-size="3">Save as</tspan>
                      <tspan x="0" y="5" font-family="'Helvetica'" font-size="2.4">Save as .SVG and make sure </tspan>
                      <tspan x="0" y="8" font-family="'Helvetica'" font-size="2.4">“Use Artboards” is checked</tspan>
                    </text><text transform="matrix(1.0074 0 0 1 -125.542 30.5933)" font-family="'Helvetica'" font-size="2.5731">100px</text><text transform="matrix(1.0074 0 0 1 -41 39)" font-family="'Helvetica-Bold'" font-size="5.1462">.SVG</text>
                    <rect x="-126.514" y="34.815" width="10.261" height="10.185"></rect>
                    <rect x="-126.477" y="31.766" width="0.522" height="2.337"></rect>
                    <rect x="-116.812" y="31.766" width="0.523" height="2.337"></rect>
                    <rect x="-127" y="32.337" width="11.233" height="0.572"></rect>
                    <g>
                      <rect x="-83.805" y="33.844" width="10.305" height="10.156"></rect>
                      <rect x="-76.809" y="28.707" width="3.308" height="3.261"></rect>
                    </g>
                    <rect x="-178.5" y="22.5" stroke="#FFFFFF" stroke-miterlimit="10" width="30" height="30"></rect>
                    <rect x="-136.5" y="22.5" stroke="#FFFFFF" stroke-miterlimit="10" width="30" height="30"></rect>
                    <rect x="-93.5" y="22.5" stroke="#FFFFFF" stroke-miterlimit="10" width="30" height="30"></rect>
                    <rect x="-49.5" y="22.5" stroke="#FFFFFF" stroke-miterlimit="10" width="30" height="30"></rect>
                  </g>
                  <g>
                    <path d="M83.64,40H78v-9.208c0-15.24-12.76-27.638-28-27.638c-15.239,0-28,12.398-28,27.638V40h-6.217   C14.542,40,13,42.119,13,43.36v50.332C13,94.932,14.542,96,15.783,96H83.64c1.241,0,3.36-1.068,3.36-2.308V43.36   C87,42.119,84.881,40,83.64,40z M58.015,83.265C57.719,83.665,57.249,84,56.75,84H43.571c-0.5,0-0.969-0.335-1.266-0.735   c-0.296-0.403-0.384-0.97-0.238-1.448l4.511-14.673c-2.112-1.368-3.616-4.102-3.616-6.835c0-3.924,3.228-7.121,7.198-7.121   c3.901,0,7.198,3.37,7.198,7.363c0,2.698-1.452,5.236-3.607,6.552l4.502,14.717C58.399,82.296,58.312,82.862,58.015,83.265z M62,40   H38v-9.208c0-6.567,5.434-11.91,12-11.91c6.567,0,12,5.343,12,11.91V40z">
                    </path>
                  </g>
                </svg>
              </div>
              <div id="csbm-btn">
                Chính sách bảo mật
              </div>
            </div>
            <div class="pt50 sf cs2">
              <div class="shape-cs">
                <svg xmlns="http://www.w3.org/2000/svg" data-name="Layer 1" viewBox="0 0 100 100" x="0px" y="0px" preserveAspectRatio="none" width="100%" height="100%" class="" fill="rgb(255, 255, 255)">
                  <title>Artboard 26</title>
                  <path d="M98.85,61.58a4.85,4.85,0,0,1-3.52,5.89L40.13,81.36A9.78,9.78,0,1,1,29.35,76.9c.31-.08.63-.14.94-.19L17.06,24.11,2.78,12.44A4.85,4.85,0,1,1,8.92,4.93L24.44,17.62a4.85,4.85,0,0,1,1.63,2.57L39,71.64,93,58.06A4.85,4.85,0,0,1,98.85,61.58Zm-65.08-40a3.57,3.57,0,0,1,2.59-4.33l8.46-2.13,6.26-1.57L60,11.33l6.66-1.67,7.68-1.93a3.57,3.57,0,0,1,4.33,2.59l9.55,37.94a3.57,3.57,0,0,1-2.59,4.33L47.65,62.13a3.57,3.57,0,0,1-4.33-2.59ZM50.89,31.77c1,3.85,4.37,5.11,9,5.47,3.19.25,4.7.89,5.08,2.4s-.93,2.85-3.19,3.42a13.79,13.79,0,0,1-4.48.34,2.43,2.43,0,0,0-.8.06,2.32,2.32,0,0,0-1.77,2.23v.2a2.37,2.37,0,0,0,2.22,2.38,18.93,18.93,0,0,0,5-.35l.46,1.83a2,2,0,1,0,3.89-1l-.53-2.11c4.37-1.94,6.11-5.59,5.22-9.13s-3.36-5.28-8.51-5.76c-3.7-.42-5.3-.91-5.63-2.22-.28-1.11.27-2.44,2.86-3.08a12.59,12.59,0,0,1,3.64-.38A2.29,2.29,0,0,0,64,26a2.37,2.37,0,0,0-.55-4.67,17.49,17.49,0,0,0-3.76.39l-.39-1.55a2,2,0,0,0-3.89,1L55.82,23C51.78,24.91,50,28.27,50.89,31.77Z">
                  </path>
                </svg>

              </div>
              <div id="csbhg-btn">
                Chính sách bán hàng
              </div>
            </div>
          </div>
          <div class="cs-footer">
            <div class="pt50 sf cs3">
              <div class="shape-cs">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 64 64" enable-background="new 0 0 64 64" xml:space="preserve" preserveAspectRatio="none" width="100%" height="100%" class="" fill="rgb(255, 255, 255)">
                  <g display="none">
                    <rect x="-306.495" y="-10.779" display="inline" width="787" height="375.042"></rect>
                  </g>
                  <g display="none">
                    <g display="inline">
                      <path d="M60,64H4c-2.2,0-4-1.8-4-4V4c0-2.2,1.8-4,4-4h56c2.2,0,4,1.8,4,4v56C64,62.2,62.2,64,60,64z">
                      </path>
                      <line stroke="#FFFFFF" stroke-width="6" stroke-miterlimit="10" x1="12.5" y1="15.333" x2="51.5" y2="15.333"></line>
                      <line stroke="#FFFFFF" stroke-width="6" stroke-miterlimit="10" x1="12.5" y1="32" x2="51.5" y2="32"></line>
                      <line stroke="#FFFFFF" stroke-width="6" stroke-miterlimit="10" x1="12.5" y1="48.667" x2="51.5" y2="48.667"></line>
                    </g>
                  </g>
                  <g display="none">
                    <path display="inline" stroke="#000000" stroke-width="2" stroke-miterlimit="10" d="M59.127,62.969H4.873   C2.743,62.969,1,61.226,1,59.096V4.904c0-2.13,1.743-3.873,3.873-3.873h54.254c2.13,0,3.873,1.743,3.873,3.873v54.191   C63,61.226,61.257,62.969,59.127,62.969z">
                    </path>
                    <rect x="13.109" y="12.967" display="inline" stroke="#000000" stroke-width="2" stroke-miterlimit="10" width="37.781" height="5.807"></rect>
                    <rect x="13.109" y="29.097" display="inline" stroke="#000000" stroke-width="2" stroke-miterlimit="10" width="37.781" height="5.807"></rect>
                    <rect x="13.109" y="45.227" display="inline" stroke="#000000" stroke-width="2" stroke-miterlimit="10" width="37.781" height="5.807"></rect>
                  </g>
                  <g>
                    <g>
                      <path d="M4.873,63.969h54.254c2.687,0,4.873-2.187,4.873-4.873V4.904c0-2.687-2.187-4.873-4.873-4.873H4.873    C2.187,0.031,0,2.217,0,4.904v54.191C0,61.782,2.187,63.969,4.873,63.969z M13.109,12.967h37.781v5.807H13.109V12.967z     M13.109,29.097h37.781v5.807H13.109V29.097z M13.109,45.227h37.781v5.807H13.109V45.227z">
                      </path>
                    </g>
                  </g>
                  <g display="none">
                    <path display="inline" stroke="#000000" stroke-width="2" stroke-miterlimit="10" d="M59.127,62.969H4.873   C2.743,62.969,1,61.226,1,59.096V4.904c0-2.13,1.743-3.873,3.873-3.873h54.254c2.13,0,3.873,1.743,3.873,3.873v54.191   C63,61.226,61.257,62.969,59.127,62.969z">
                    </path>
                    <rect x="13.109" y="12.967" display="inline" stroke="#000000" stroke-width="2" stroke-miterlimit="10" width="37.781" height="5.807"></rect>
                    <rect x="13.109" y="29.097" display="inline" stroke="#000000" stroke-width="2" stroke-miterlimit="10" width="37.781" height="5.807"></rect>
                    <rect x="13.109" y="45.227" display="inline" stroke="#000000" stroke-width="2" stroke-miterlimit="10" width="37.781" height="5.807"></rect>
                  </g>
                </svg>
              </div>
              <div id="cstt-btn">
                Chính sách thanh toán
              </div>
            </div>
            <div class="pt50 sf cs4">
              <div class="shape-cs">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 64 64" enable-background="new 0 0 64 64" xml:space="preserve" preserveAspectRatio="none" width="100%" height="100%" class="" fill="rgb(255, 255, 255)">
                  <g display="none">
                    <rect x="-306.495" y="-10.779" display="inline" width="787" height="375.042"></rect>
                  </g>
                  <g display="none">
                    <g display="inline">
                      <path d="M60,64H4c-2.2,0-4-1.8-4-4V4c0-2.2,1.8-4,4-4h56c2.2,0,4,1.8,4,4v56C64,62.2,62.2,64,60,64z">
                      </path>
                      <line stroke="#FFFFFF" stroke-width="6" stroke-miterlimit="10" x1="12.5" y1="15.333" x2="51.5" y2="15.333"></line>
                      <line stroke="#FFFFFF" stroke-width="6" stroke-miterlimit="10" x1="12.5" y1="32" x2="51.5" y2="32"></line>
                      <line stroke="#FFFFFF" stroke-width="6" stroke-miterlimit="10" x1="12.5" y1="48.667" x2="51.5" y2="48.667"></line>
                    </g>
                  </g>
                  <g display="none">
                    <path display="inline" stroke="#000000" stroke-width="2" stroke-miterlimit="10" d="M59.127,62.969H4.873   C2.743,62.969,1,61.226,1,59.096V4.904c0-2.13,1.743-3.873,3.873-3.873h54.254c2.13,0,3.873,1.743,3.873,3.873v54.191   C63,61.226,61.257,62.969,59.127,62.969z">
                    </path>
                    <rect x="13.109" y="12.967" display="inline" stroke="#000000" stroke-width="2" stroke-miterlimit="10" width="37.781" height="5.807"></rect>
                    <rect x="13.109" y="29.097" display="inline" stroke="#000000" stroke-width="2" stroke-miterlimit="10" width="37.781" height="5.807"></rect>
                    <rect x="13.109" y="45.227" display="inline" stroke="#000000" stroke-width="2" stroke-miterlimit="10" width="37.781" height="5.807"></rect>
                  </g>
                  <g>
                    <g>
                      <path d="M4.873,63.969h54.254c2.687,0,4.873-2.187,4.873-4.873V4.904c0-2.687-2.187-4.873-4.873-4.873H4.873    C2.187,0.031,0,2.217,0,4.904v54.191C0,61.782,2.187,63.969,4.873,63.969z M13.109,12.967h37.781v5.807H13.109V12.967z     M13.109,29.097h37.781v5.807H13.109V29.097z M13.109,45.227h37.781v5.807H13.109V45.227z">
                      </path>
                    </g>
                  </g>
                  <g display="none">
                    <path display="inline" stroke="#000000" stroke-width="2" stroke-miterlimit="10" d="M59.127,62.969H4.873   C2.743,62.969,1,61.226,1,59.096V4.904c0-2.13,1.743-3.873,3.873-3.873h54.254c2.13,0,3.873,1.743,3.873,3.873v54.191   C63,61.226,61.257,62.969,59.127,62.969z">
                    </path>
                    <rect x="13.109" y="12.967" display="inline" stroke="#000000" stroke-width="2" stroke-miterlimit="10" width="37.781" height="5.807"></rect>
                    <rect x="13.109" y="29.097" display="inline" stroke="#000000" stroke-width="2" stroke-miterlimit="10" width="37.781" height="5.807"></rect>
                    <rect x="13.109" y="45.227" display="inline" stroke="#000000" stroke-width="2" stroke-miterlimit="10" width="37.781" height="5.807"></rect>
                  </g>
                </svg>
              </div>
              <div id="csbh-btn">
                Bảo Hành và đổi trả
              </div>
            </div>

          </div>
          <div class="cs-footer">
            <div class="pt50 sf cs3">
              <div class="shape-cs">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 64 64" enable-background="new 0 0 64 64" xml:space="preserve" preserveAspectRatio="none" width="100%" height="100%" class="" fill="rgb(255, 255, 255)">
                  <g display="none">
                    <rect x="-306.495" y="-10.779" display="inline" width="787" height="375.042"></rect>
                  </g>
                  <g display="none">
                    <g display="inline">
                      <path d="M60,64H4c-2.2,0-4-1.8-4-4V4c0-2.2,1.8-4,4-4h56c2.2,0,4,1.8,4,4v56C64,62.2,62.2,64,60,64z">
                      </path>
                      <line stroke="#FFFFFF" stroke-width="6" stroke-miterlimit="10" x1="12.5" y1="15.333" x2="51.5" y2="15.333"></line>
                      <line stroke="#FFFFFF" stroke-width="6" stroke-miterlimit="10" x1="12.5" y1="32" x2="51.5" y2="32"></line>
                      <line stroke="#FFFFFF" stroke-width="6" stroke-miterlimit="10" x1="12.5" y1="48.667" x2="51.5" y2="48.667"></line>
                    </g>
                  </g>
                  <g display="none">
                    <path display="inline" stroke="#000000" stroke-width="2" stroke-miterlimit="10" d="M59.127,62.969H4.873   C2.743,62.969,1,61.226,1,59.096V4.904c0-2.13,1.743-3.873,3.873-3.873h54.254c2.13,0,3.873,1.743,3.873,3.873v54.191   C63,61.226,61.257,62.969,59.127,62.969z">
                    </path>
                    <rect x="13.109" y="12.967" display="inline" stroke="#000000" stroke-width="2" stroke-miterlimit="10" width="37.781" height="5.807"></rect>
                    <rect x="13.109" y="29.097" display="inline" stroke="#000000" stroke-width="2" stroke-miterlimit="10" width="37.781" height="5.807"></rect>
                    <rect x="13.109" y="45.227" display="inline" stroke="#000000" stroke-width="2" stroke-miterlimit="10" width="37.781" height="5.807"></rect>
                  </g>
                  <g>
                    <g>
                      <path d="M4.873,63.969h54.254c2.687,0,4.873-2.187,4.873-4.873V4.904c0-2.687-2.187-4.873-4.873-4.873H4.873    C2.187,0.031,0,2.217,0,4.904v54.191C0,61.782,2.187,63.969,4.873,63.969z M13.109,12.967h37.781v5.807H13.109V12.967z     M13.109,29.097h37.781v5.807H13.109V29.097z M13.109,45.227h37.781v5.807H13.109V45.227z">
                      </path>
                    </g>
                  </g>
                  <g display="none">
                    <path display="inline" stroke="#000000" stroke-width="2" stroke-miterlimit="10" d="M59.127,62.969H4.873   C2.743,62.969,1,61.226,1,59.096V4.904c0-2.13,1.743-3.873,3.873-3.873h54.254c2.13,0,3.873,1.743,3.873,3.873v54.191   C63,61.226,61.257,62.969,59.127,62.969z">
                    </path>
                    <rect x="13.109" y="12.967" display="inline" stroke="#000000" stroke-width="2" stroke-miterlimit="10" width="37.781" height="5.807"></rect>
                    <rect x="13.109" y="29.097" display="inline" stroke="#000000" stroke-width="2" stroke-miterlimit="10" width="37.781" height="5.807"></rect>
                    <rect x="13.109" y="45.227" display="inline" stroke="#000000" stroke-width="2" stroke-miterlimit="10" width="37.781" height="5.807"></rect>
                  </g>
                </svg>
              </div>
              <div id="csvc-btn">
                Chính sách vận chuyển
              </div>
            </div>
            <div class="pt50 sf cs4">
              <div class="shape-cs">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 64 64" enable-background="new 0 0 64 64" xml:space="preserve" preserveAspectRatio="none" width="100%" height="100%" class="" fill="rgb(255, 255, 255)">
                  <g display="none">
                    <rect x="-306.495" y="-10.779" display="inline" width="787" height="375.042"></rect>
                  </g>
                  <g display="none">
                    <g display="inline">
                      <path d="M60,64H4c-2.2,0-4-1.8-4-4V4c0-2.2,1.8-4,4-4h56c2.2,0,4,1.8,4,4v56C64,62.2,62.2,64,60,64z">
                      </path>
                      <line stroke="#FFFFFF" stroke-width="6" stroke-miterlimit="10" x1="12.5" y1="15.333" x2="51.5" y2="15.333"></line>
                      <line stroke="#FFFFFF" stroke-width="6" stroke-miterlimit="10" x1="12.5" y1="32" x2="51.5" y2="32"></line>
                      <line stroke="#FFFFFF" stroke-width="6" stroke-miterlimit="10" x1="12.5" y1="48.667" x2="51.5" y2="48.667"></line>
                    </g>
                  </g>
                  <g display="none">
                    <path display="inline" stroke="#000000" stroke-width="2" stroke-miterlimit="10" d="M59.127,62.969H4.873   C2.743,62.969,1,61.226,1,59.096V4.904c0-2.13,1.743-3.873,3.873-3.873h54.254c2.13,0,3.873,1.743,3.873,3.873v54.191   C63,61.226,61.257,62.969,59.127,62.969z">
                    </path>
                    <rect x="13.109" y="12.967" display="inline" stroke="#000000" stroke-width="2" stroke-miterlimit="10" width="37.781" height="5.807"></rect>
                    <rect x="13.109" y="29.097" display="inline" stroke="#000000" stroke-width="2" stroke-miterlimit="10" width="37.781" height="5.807"></rect>
                    <rect x="13.109" y="45.227" display="inline" stroke="#000000" stroke-width="2" stroke-miterlimit="10" width="37.781" height="5.807"></rect>
                  </g>
                  <g>
                    <g>
                      <path d="M4.873,63.969h54.254c2.687,0,4.873-2.187,4.873-4.873V4.904c0-2.687-2.187-4.873-4.873-4.873H4.873    C2.187,0.031,0,2.217,0,4.904v54.191C0,61.782,2.187,63.969,4.873,63.969z M13.109,12.967h37.781v5.807H13.109V12.967z     M13.109,29.097h37.781v5.807H13.109V29.097z M13.109,45.227h37.781v5.807H13.109V45.227z">
                      </path>
                    </g>
                  </g>
                  <g display="none">
                    <path display="inline" stroke="#000000" stroke-width="2" stroke-miterlimit="10" d="M59.127,62.969H4.873   C2.743,62.969,1,61.226,1,59.096V4.904c0-2.13,1.743-3.873,3.873-3.873h54.254c2.13,0,3.873,1.743,3.873,3.873v54.191   C63,61.226,61.257,62.969,59.127,62.969z">
                    </path>
                    <rect x="13.109" y="12.967" display="inline" stroke="#000000" stroke-width="2" stroke-miterlimit="10" width="37.781" height="5.807"></rect>
                    <rect x="13.109" y="29.097" display="inline" stroke="#000000" stroke-width="2" stroke-miterlimit="10" width="37.781" height="5.807"></rect>
                    <rect x="13.109" y="45.227" display="inline" stroke="#000000" stroke-width="2" stroke-miterlimit="10" width="37.781" height="5.807"></rect>
                  </g>
                </svg>
              </div>
              <div id="csdk-btn">
                Điều kiện và điều khoản
              </div>
            </div>
          </div>
        </div>
      </div>
    <div>
  </div>
  <module type="layouts" template="kaizen/kz-modal" />

</body>
<script>
  $(document).ready(function() {
    $(document).ready(function() {
      $(".owl-carousel").owlCarousel();
    });
    $(".kaizen-form-headline").click(function() {
      $('html, body').animate({
        scrollTop: $("#scroll-form").offset().top
      }, 1000);
    });
    $('#my-carousel').owlCarousel({
      loop: true,
      autoplay: true,
      autoplayTimeout: 3000,
      nav: true,
      dots: true,
      navText: ['<svg width="100%" height="100%" viewBox="0 0 11 20"><path style="fill:none;stroke-width: 1px;stroke: #000;" d="M9.554,1.001l-8.607,8.607l8.607,8.606"/></svg>', '<svg width="100%" height="100%" viewBox="0 0 11 20" version="1.1"><path style="fill:none;stroke-width: 1px;stroke: #000;" d="M1.054,18.214l8.606,-8.606l-8.606,-8.607"/></svg>'],
      singleItem: true,
      responsive: {
        0: {
          items: 1
        },
        600: {
          items: 1
        },
        1000: {
          items: 1
        }
      }
    });
  });
</script>

<script>
  // Get the modal
  var modal_csbm = document.getElementById("csbm");
  var modal_csvc = document.getElementById("csvc");
  var modal_csbh = document.getElementById("csbh");
  var modal_csbhg = document.getElementById("csbhg");
  var modal_cstt = document.getElementById("cstt");
  var modal_csdk = document.getElementById("csdk");

  // Get the button that opens the modal
  var btn_csbm = document.getElementById("csbm-btn");
  var btn_csvc = document.getElementById("csvc-btn");
  var btn_csbh = document.getElementById("csbh-btn");
  var btn_csbhg = document.getElementById("csbhg-btn");
  var btn_cstt = document.getElementById("cstt-btn");
  var btn_csdk = document.getElementById("csdk-btn");

  // When the user clicks the button, open the modal 
  $('.close').on('click', function() {
    modal_csbm.style.display = "none";
    modal_csvc.style.display = "none";
    modal_csbh.style.display = "none";
    modal_csbhg.style.display = "none";
    modal_cstt.style.display = "none";
    modal_csdk.style.display = "none";
  })
  btn_csbm.onclick = function() {
    modal_csbm.style.display = "block";
  }
  btn_csvc.onclick = function() {
    modal_csvc.style.display = "block";
  }
  btn_csbh.onclick = function() {
    modal_csbh.style.display = "block";
  }
  btn_csbhg.onclick = function() {
    modal_csbhg.style.display = "block";
  }
  btn_cstt.onclick = function() {
    modal_cstt.style.display = "block";
  }
  btn_csdk.onclick = function() {
    modal_csdk.style.display = "block";
  }

  // When the user clicks anywhere outside of the modal, close it
  window.onclick = function(event) {
    if (event.target == modal_csbm) {
      modal_csbm.style.display = "none";
    }
    if (event.target == modal_csvc) {
      modal_csvc.style.display = "none";
    }
    if (event.target == modal_csbh) {
      modal_csbh.style.display = "none";
    }
    if (event.target == modal_csbhg) {
      modal_csbhg.style.display = "none";
    }
    if (event.target == modal_cstt) {
      modal_cstt.style.display = "none";
    }
    if (event.target == modal_csdk) {
      modal_csdk.style.display = "none";
    }
  }
</script>
<?php include THIS_TEMPLATE_DIR . "footer.php"; ?>
</html>