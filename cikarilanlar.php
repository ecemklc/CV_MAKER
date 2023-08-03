stylecss

1660:
.table {
  width: 100%;
  margin-bottom: 1rem;
  color: #212529;
}
.table th,
.table td {
  padding: 0.75rem;
  vertical-align: top;
  border-top: 1px solid #dee2e6;
}
.table thead th {
  vertical-align: bottom;
  border-bottom: 2px solid #dee2e6;
}
.table tbody + tbody {
  border-top: 2px solid #dee2e6;
}

.table-sm th,
.table-sm td {
  padding: 0.3rem;
}

.table-bordered {
  border: 1px solid #dee2e6;
}
.table-bordered th,
.table-bordered td {
  border: 1px solid #dee2e6;
}
.table-bordered thead th,
.table-bordered thead td {
  border-bottom-width: 2px;
}

.table-borderless th,
.table-borderless td,
.table-borderless thead th,
.table-borderless tbody + tbody {
  border: 0;
}

.table-striped tbody tr:nth-of-type(odd) {
  background-color: rgba(0, 0, 0, 0.05);
}

.table-hover tbody tr:hover {
  color: #212529;
  background-color: rgba(0, 0, 0, 0.075);
}

.table-primary,
.table-primary > th,
.table-primary > td {
  background-color: #fff2c7;
}
.table-primary th,
.table-primary td,
.table-primary thead th,
.table-primary tbody + tbody {
  border-color: #fee796;
}

.table-hover .table-primary:hover {
  background-color: #ffecae;
}
.table-hover .table-primary:hover > td,
.table-hover .table-primary:hover > th {
  background-color: #ffecae;
}

.table-secondary,
.table-secondary > th,
.table-secondary > td {
  background-color: #d6d8db;
}
.table-secondary th,
.table-secondary td,
.table-secondary thead th,
.table-secondary tbody + tbody {
  border-color: #b3b7bb;
}

.table-hover .table-secondary:hover {
  background-color: #c8cbcf;
}
.table-hover .table-secondary:hover > td,
.table-hover .table-secondary:hover > th {
  background-color: #c8cbcf;
}

.table-success,
.table-success > th,
.table-success > td {
  background-color: #c3e6cb;
}
.table-success th,
.table-success td,
.table-success thead th,
.table-success tbody + tbody {
  border-color: #8fd19e;
}

.table-hover .table-success:hover {
  background-color: #b1dfbb;
}
.table-hover .table-success:hover > td,
.table-hover .table-success:hover > th {
  background-color: #b1dfbb;
}

.table-info,
.table-info > th,
.table-info > td {
  background-color: #bee5eb;
}
.table-info th,
.table-info td,
.table-info thead th,
.table-info tbody + tbody {
  border-color: #86cfda;
}

.table-hover .table-info:hover {
  background-color: #abdde5;
}
.table-hover .table-info:hover > td,
.table-hover .table-info:hover > th {
  background-color: #abdde5;
}

.table-warning,
.table-warning > th,
.table-warning > td {
  background-color: #fff2c7;
}
.table-warning th,
.table-warning td,
.table-warning thead th,
.table-warning tbody + tbody {
  border-color: #fee796;
}

.table-hover .table-warning:hover {
  background-color: #ffecae;
}
.table-hover .table-warning:hover > td,
.table-hover .table-warning:hover > th {
  background-color: #ffecae;
}

.table-danger,
.table-danger > th,
.table-danger > td {
  background-color: #f5c6cb;
}
.table-danger th,
.table-danger td,
.table-danger thead th,
.table-danger tbody + tbody {
  border-color: #ed969e;
}

.table-hover .table-danger:hover {
  background-color: #f1b0b7;
}
.table-hover .table-danger:hover > td,
.table-hover .table-danger:hover > th {
  background-color: #f1b0b7;
}

.table-light,
.table-light > th,
.table-light > td {
  background-color: #fdfdfe;
}
.table-light th,
.table-light td,
.table-light thead th,
.table-light tbody + tbody {
  border-color: #fbfcfc;
}

.table-hover .table-light:hover {
  background-color: #ececf6;
}
.table-hover .table-light:hover > td,
.table-hover .table-light:hover > th {
  background-color: #ececf6;
}

.table-dark,
.table-dark > th,
.table-dark > td {
  background-color: #c6c8ca;
}
.table-dark th,
.table-dark td,
.table-dark thead th,
.table-dark tbody + tbody {
  border-color: #95999c;
}

.table-hover .table-dark:hover {
  background-color: #b9bbbe;
}
.table-hover .table-dark:hover > td,
.table-hover .table-dark:hover > th {
  background-color: #b9bbbe;
}

.table-active,
.table-active > th,
.table-active > td {
  background-color: rgba(0, 0, 0, 0.075);
}

.table-hover .table-active:hover {
  background-color: rgba(0, 0, 0, 0.075);
}
.table-hover .table-active:hover > td,
.table-hover .table-active:hover > th {
  background-color: rgba(0, 0, 0, 0.075);
}

.table .thead-dark th {
  color: #fff;
  background-color: #343a40;
  border-color: #454d55;
}
.table .thead-light th {
  color: #495057;
  background-color: #e9ecef;
  border-color: #dee2e6;
}

.table-dark {
  color: #fff;
  background-color: #343a40;
}
.table-dark th,
.table-dark td,
.table-dark thead th {
  border-color: #454d55;
}
.table-dark.table-bordered {
  border: 0;
}
.table-dark.table-striped tbody tr:nth-of-type(odd) {
  background-color: rgba(255, 255, 255, 0.05);
}
.table-dark.table-hover tbody tr:hover {
  color: #fff;
  background-color: rgba(255, 255, 255, 0.075);
}

@media (max-width: 575.98px) {
  .table-responsive-sm {
    display: block;
    width: 100%;
    overflow-x: auto;
    -webkit-overflow-scrolling: touch;
  }
  .table-responsive-sm > .table-bordered {
    border: 0;
  }
}
@media (max-width: 767.98px) {
  .table-responsive-md {
    display: block;
    width: 100%;
    overflow-x: auto;
    -webkit-overflow-scrolling: touch;
  }
  .table-responsive-md > .table-bordered {
    border: 0;
  }
}
@media (max-width: 991.98px) {
  .table-responsive-lg {
    display: block;
    width: 100%;
    overflow-x: auto;
    -webkit-overflow-scrolling: touch;
  }
  .table-responsive-lg > .table-bordered {
    border: 0;
  }
}
@media (max-width: 1199.98px) {
  .table-responsive-xl {
    display: block;
    width: 100%;
    overflow-x: auto;
    -webkit-overflow-scrolling: touch;
  }
  .table-responsive-xl > .table-bordered {
    border: 0;
  }
}
.table-responsive {
  display: block;
  width: 100%;
  overflow-x: auto;
  -webkit-overflow-scrolling: touch;
}
.table-responsive > .table-bordered {
  border: 0;
}

314:
-webkit-print-color-adjust: exact;
          color-adjust: exact;






Başlangıç

sonu:
<!--
<div tabindex="0" class="WizardCont-sc-15exdwh-0 kJbPwr">
                    <h4 class="HeadingBase-sc-17sbknx-0 gOcFHe WizardHeader-sc-1pxgdek-0 eAIcya">
                      <div>Lütfen <span>iletişim</span> bilgilerinizi girin</div>
                    </h4>
                    <p class="Text-sc-12rbf6x-0 WizardSubHeader-somnv-0 guCuRQ ezXLdO">İşverenlerin sizinle nasıl iletişim kurabileceklerini görmelerini sağlar.</p>
                    <form><div class="Flex-s284b4-0 grYXCk FlexCont-god6th-1 bKrIMo">
                      <div class="Box-sc-1lf5w2i-0 FormBox-god6th-0 jTfJSO kUgoUc">
                        <label summary="0" class="Label-i29hl4-0 StyledLabel-gm2sg-0 iVaVVT RmEiT">
                          <span>AD</span>
                          <div class="OverlayBackground-gm2sg-1 llNDJU"></div>
                        </label>
                        <div class="Wrap-ysvhe-0 iPaibK">
                          <input class="Input-ysvhe-1 vkJUB" label="First name" type="text" name="firstName" placeholder="Peter" value="">
                          <div class="Container-sc-6rqr7l-0 bWZNja">
                            <svg class="SVG-lvke6x-0 kpCbZp Icon-sc-6rqr7l-1 iJLkb" width="24px" height="24px" viewBox="0 0 18 18" version="1.1" xmlns="http://www.w3.org/2000/svg">
                              <path d="M9,0 C4.00909091,0 0,4.00909091 0,9 C0,13.9909091 4.00909091,18 9,18 C13.9909091,18 18,13.9909091 18,9 C18,4.00909091 13.9909091,0 9,0 Z M14.1954545,6.17727273 L14.1954545,6.17727273 L7.65,12.9681818 C7.56818182,13.05 7.48636364,13.0909091 7.36363636,13.0909091 C7.24090909,13.0909091 7.11818182,13.05 7.07727273,12.9681818 L3.88636364,9.53181818 L3.80454545,9.45 C3.72272727,9.36818182 3.68181818,9.24545455 3.68181818,9.16363636 C3.68181818,9.08181818 3.72272727,8.95909091 3.80454545,8.87727273 L4.37727273,8.30454545 C4.54090909,8.14090909 4.78636364,8.14090909 4.95,8.30454545 L4.99090909,8.34545455 L7.24090909,10.7590909 C7.32272727,10.8409091 7.44545455,10.8409091 7.52727273,10.7590909 L13.0090909,5.07272727 L13.05,5.07272727 C13.2136364,4.90909091 13.4590909,4.90909091 13.6227273,5.07272727 L14.1954545,5.64545455 C14.3590909,5.76818182 14.3590909,6.01363636 14.1954545,6.17727273 L14.1954545,6.17727273 Z"> 

                              </path>
                            </svg>
                          </div>
                        </div>
                      </div>
                      <div class="Box-sc-1lf5w2i-0 FormBox-god6th-0 jTfJSO kUgoUc">
                        <label summary="0" class="Label-i29hl4-0 StyledLabel-gm2sg-0 iVaVVT RmEiT">
                          <span>SOYADI</span>
                          <div class="OverlayBackground-gm2sg-1 llNDJU">

                          </div>
                        </label>
                        <div class="Wrap-ysvhe-0 iPaibK">
                          <input class="Input-ysvhe-1 vkJUB" label="Last name" type="text" name="lastName" placeholder="Johnson" value="">
                          <div class="Container-sc-6rqr7l-0 bWZNja">
                            <svg class="SVG-lvke6x-0 kpCbZp Icon-sc-6rqr7l-1 iJLkb" width="24px" height="24px" viewBox="0 0 18 18" version="1.1" xmlns="http://www.w3.org/2000/svg">
                              <path d="M9,0 C4.00909091,0 0,4.00909091 0,9 C0,13.9909091 4.00909091,18 9,18 C13.9909091,18 18,13.9909091 18,9 C18,4.00909091 13.9909091,0 9,0 Z M14.1954545,6.17727273 L14.1954545,6.17727273 L7.65,12.9681818 C7.56818182,13.05 7.48636364,13.0909091 7.36363636,13.0909091 C7.24090909,13.0909091 7.11818182,13.05 7.07727273,12.9681818 L3.88636364,9.53181818 L3.80454545,9.45 C3.72272727,9.36818182 3.68181818,9.24545455 3.68181818,9.16363636 C3.68181818,9.08181818 3.72272727,8.95909091 3.80454545,8.87727273 L4.37727273,8.30454545 C4.54090909,8.14090909 4.78636364,8.14090909 4.95,8.30454545 L4.99090909,8.34545455 L7.24090909,10.7590909 C7.32272727,10.8409091 7.44545455,10.8409091 7.52727273,10.7590909 L13.0090909,5.07272727 L13.05,5.07272727 C13.2136364,4.90909091 13.4590909,4.90909091 13.6227273,5.07272727 L14.1954545,5.64545455 C14.3590909,5.76818182 14.3590909,6.01363636 14.1954545,6.17727273 L14.1954545,6.17727273 Z">

                              </path>
                            </svg>
                          </div>
                        </div>
                      </div>
                      <div class="Box-sc-1lf5w2i-0 FormBox-god6th-0 fgyfwu kUgoUc">
                        <label summary="0" class="Label-i29hl4-0 StyledLabel-gm2sg-0 iVaVVT RmEiT">
                          <span>ADRES</span>
                          <div class="OverlayBackground-gm2sg-1 llNDJU">

                          </div>
                        </label>
                        <div class="Wrap-sc-1cdsnbm-4 kbquFB">
                          <input type="text" autocomplete="off" role="combobox" aria-autocomplete="list" aria-expanded="false" placeholder="Lokasyon gir" class="Autocomplete-sc-1cdsnbm-5 yetQx" value="">
                          <div class="Container-sc-6rqr7l-0 bWZNja"><svg class="SVG-lvke6x-0 kpCbZp Icon-sc-6rqr7l-1 iJLkb" width="24px" height="24px" viewBox="0 0 18 18" version="1.1" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9,0 C4.00909091,0 0,4.00909091 0,9 C0,13.9909091 4.00909091,18 9,18 C13.9909091,18 18,13.9909091 18,9 C18,4.00909091 13.9909091,0 9,0 Z M14.1954545,6.17727273 L14.1954545,6.17727273 L7.65,12.9681818 C7.56818182,13.05 7.48636364,13.0909091 7.36363636,13.0909091 C7.24090909,13.0909091 7.11818182,13.05 7.07727273,12.9681818 L3.88636364,9.53181818 L3.80454545,9.45 C3.72272727,9.36818182 3.68181818,9.24545455 3.68181818,9.16363636 C3.68181818,9.08181818 3.72272727,8.95909091 3.80454545,8.87727273 L4.37727273,8.30454545 C4.54090909,8.14090909 4.78636364,8.14090909 4.95,8.30454545 L4.99090909,8.34545455 L7.24090909,10.7590909 C7.32272727,10.8409091 7.44545455,10.8409091 7.52727273,10.7590909 L13.0090909,5.07272727 L13.05,5.07272727 C13.2136364,4.90909091 13.4590909,4.90909091 13.6227273,5.07272727 L14.1954545,5.64545455 C14.3590909,5.76818182 14.3590909,6.01363636 14.1954545,6.17727273 L14.1954545,6.17727273 Z">

                            </path>
                          </svg>
                        </div>
                      </div>
                    </div>
                    <div class="Box-sc-1lf5w2i-0 FormBox-god6th-0 jTfJSO kUgoUc">
                      <label summary="0" class="Label-i29hl4-0 StyledLabel-gm2sg-0 iVaVVT RmEiT">
                        <span>ŞEHİR</span>
                        <div class="OverlayBackground-gm2sg-1 llNDJU">

                        </div>
                      </label>
                      <div class="Wrap-ysvhe-0 iPaibK">
                        <input class="Input-ysvhe-1 vkJUB" label="City" type="text" name="city" placeholder="San Francisco" value="">
                        <div class="Container-sc-6rqr7l-0 bWZNja">
                          <svg class="SVG-lvke6x-0 kpCbZp Icon-sc-6rqr7l-1 iJLkb" width="24px" height="24px" viewBox="0 0 18 18" version="1.1" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9,0 C4.00909091,0 0,4.00909091 0,9 C0,13.9909091 4.00909091,18 9,18 C13.9909091,18 18,13.9909091 18,9 C18,4.00909091 13.9909091,0 9,0 Z M14.1954545,6.17727273 L14.1954545,6.17727273 L7.65,12.9681818 C7.56818182,13.05 7.48636364,13.0909091 7.36363636,13.0909091 C7.24090909,13.0909091 7.11818182,13.05 7.07727273,12.9681818 L3.88636364,9.53181818 L3.80454545,9.45 C3.72272727,9.36818182 3.68181818,9.24545455 3.68181818,9.16363636 C3.68181818,9.08181818 3.72272727,8.95909091 3.80454545,8.87727273 L4.37727273,8.30454545 C4.54090909,8.14090909 4.78636364,8.14090909 4.95,8.30454545 L4.99090909,8.34545455 L7.24090909,10.7590909 C7.32272727,10.8409091 7.44545455,10.8409091 7.52727273,10.7590909 L13.0090909,5.07272727 L13.05,5.07272727 C13.2136364,4.90909091 13.4590909,4.90909091 13.6227273,5.07272727 L14.1954545,5.64545455 C14.3590909,5.76818182 14.3590909,6.01363636 14.1954545,6.17727273 L14.1954545,6.17727273 Z">

                            </path>
                          </svg>
                        </div>
                      </div>
                    </div>
                    <div class="Box-sc-1lf5w2i-0 FormBox-god6th-0 jTfJSO kUgoUc">
                      <label summary="0" class="Label-i29hl4-0 StyledLabel-gm2sg-0 iVaVVT RmEiT">
                        <span>POSTA KODU</span>
                        <div class="OverlayBackground-gm2sg-1 llNDJU">

                        </div>
                      </label>
                      <div class="Wrap-ysvhe-0 iPaibK">
                        <input class="Input-ysvhe-1 vkJUB" label="Postal Code" type="text" name="postalCode" placeholder="94120" value="">
                        <div class="Container-sc-6rqr7l-0 bWZNja">
                          <svg class="SVG-lvke6x-0 kpCbZp Icon-sc-6rqr7l-1 iJLkb" width="24px" height="24px" viewBox="0 0 18 18" version="1.1" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9,0 C4.00909091,0 0,4.00909091 0,9 C0,13.9909091 4.00909091,18 9,18 C13.9909091,18 18,13.9909091 18,9 C18,4.00909091 13.9909091,0 9,0 Z M14.1954545,6.17727273 L14.1954545,6.17727273 L7.65,12.9681818 C7.56818182,13.05 7.48636364,13.0909091 7.36363636,13.0909091 C7.24090909,13.0909091 7.11818182,13.05 7.07727273,12.9681818 L3.88636364,9.53181818 L3.80454545,9.45 C3.72272727,9.36818182 3.68181818,9.24545455 3.68181818,9.16363636 C3.68181818,9.08181818 3.72272727,8.95909091 3.80454545,8.87727273 L4.37727273,8.30454545 C4.54090909,8.14090909 4.78636364,8.14090909 4.95,8.30454545 L4.99090909,8.34545455 L7.24090909,10.7590909 C7.32272727,10.8409091 7.44545455,10.8409091 7.52727273,10.7590909 L13.0090909,5.07272727 L13.05,5.07272727 C13.2136364,4.90909091 13.4590909,4.90909091 13.6227273,5.07272727 L14.1954545,5.64545455 C14.3590909,5.76818182 14.3590909,6.01363636 14.1954545,6.17727273 L14.1954545,6.17727273 Z">

                            </path>
                          </svg>
                        </div>
                      </div>
                    </div>
                    <div class="Box-sc-1lf5w2i-0 FormBox-god6th-0 hjhWda kUgoUc">
                      <label summary="0" class="Label-i29hl4-0 StyledLabel-gm2sg-0 iVaVVT RmEiT">
                        <span>TELEFON</span>
                        <div class="OverlayBackground-gm2sg-1 llNDJU">

                        </div>
                      </label>
                      <div class="Wrap-ysvhe-0 iPaibK">
                        <input class="Input-ysvhe-1 vkJUB" label="Phone" type="text" name="phone" placeholder="305-123-44444" value="">
                        <div class="Container-sc-6rqr7l-0 bWZNja">
                          <svg class="SVG-lvke6x-0 kpCbZp Icon-sc-6rqr7l-1 iJLkb" width="24px" height="24px" viewBox="0 0 18 18" version="1.1" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9,0 C4.00909091,0 0,4.00909091 0,9 C0,13.9909091 4.00909091,18 9,18 C13.9909091,18 18,13.9909091 18,9 C18,4.00909091 13.9909091,0 9,0 Z M14.1954545,6.17727273 L14.1954545,6.17727273 L7.65,12.9681818 C7.56818182,13.05 7.48636364,13.0909091 7.36363636,13.0909091 C7.24090909,13.0909091 7.11818182,13.05 7.07727273,12.9681818 L3.88636364,9.53181818 L3.80454545,9.45 C3.72272727,9.36818182 3.68181818,9.24545455 3.68181818,9.16363636 C3.68181818,9.08181818 3.72272727,8.95909091 3.80454545,8.87727273 L4.37727273,8.30454545 C4.54090909,8.14090909 4.78636364,8.14090909 4.95,8.30454545 L4.99090909,8.34545455 L7.24090909,10.7590909 C7.32272727,10.8409091 7.44545455,10.8409091 7.52727273,10.7590909 L13.0090909,5.07272727 L13.05,5.07272727 C13.2136364,4.90909091 13.4590909,4.90909091 13.6227273,5.07272727 L14.1954545,5.64545455 C14.3590909,5.76818182 14.3590909,6.01363636 14.1954545,6.17727273 L14.1954545,6.17727273 Z">

                            </path>
                          </svg>
                        </div>
                      </div>
                    </div>
                    <div class="Box-sc-1lf5w2i-0 FormBox-god6th-0 hjhWda kUgoUc">
                      <label summary="0" class="Label-i29hl4-0 StyledLabel-gm2sg-0 iVaVVT RmEiT">
                        <span>E-POSTA</span>
                        <div class="OverlayBackground-gm2sg-1 llNDJU">

                        </div>
                      </label>
                      <div class="InputCont-ftuj56-0 fUkOYk">
                        <div class="Wrap-ysvhe-0 iPaibK">
                          <input class="Input-ysvhe-1 vkJUB" label="Email" type="email" name="email" id="field-control" placeholder="örn. mail@example.com" value="">
                          <div class="Container-sc-6rqr7l-0 bWZNja">
                            <svg class="SVG-lvke6x-0 kpCbZp Icon-sc-6rqr7l-1 iJLkb" width="24px" height="24px" viewBox="0 0 18 18" version="1.1" xmlns="http://www.w3.org/2000/svg">
                              <path d="M9,0 C4.00909091,0 0,4.00909091 0,9 C0,13.9909091 4.00909091,18 9,18 C13.9909091,18 18,13.9909091 18,9 C18,4.00909091 13.9909091,0 9,0 Z M14.1954545,6.17727273 L14.1954545,6.17727273 L7.65,12.9681818 C7.56818182,13.05 7.48636364,13.0909091 7.36363636,13.0909091 C7.24090909,13.0909091 7.11818182,13.05 7.07727273,12.9681818 L3.88636364,9.53181818 L3.80454545,9.45 C3.72272727,9.36818182 3.68181818,9.24545455 3.68181818,9.16363636 C3.68181818,9.08181818 3.72272727,8.95909091 3.80454545,8.87727273 L4.37727273,8.30454545 C4.54090909,8.14090909 4.78636364,8.14090909 4.95,8.30454545 L4.99090909,8.34545455 L7.24090909,10.7590909 C7.32272727,10.8409091 7.44545455,10.8409091 7.52727273,10.7590909 L13.0090909,5.07272727 L13.05,5.07272727 C13.2136364,4.90909091 13.4590909,4.90909091 13.6227273,5.07272727 L14.1954545,5.64545455 C14.3590909,5.76818182 14.3590909,6.01363636 14.1954545,6.17727273 L14.1954545,6.17727273 Z">

                              </path>
                            </svg>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </form>
                <div class="Footer-sc-15exdwh-1 joApoj">
                  <button class="Button-e62odf-0 jaVlbl Back-sc-15exdwh-2 LhDIP">
                    <span class="IconCont-sc-15z3eib-0 jbBEeq">
                      <svg width="16" height="11" xmlns="http://www.w3.org/2000/svg" class="SvgIcon-sc-15z3eib-1 fVhtwn">
                        <path d="M.218 4.95L4.979.218a.747.747 0 011.052 0c.29.289.29.757 0 1.046l-3.49 3.471h12.715c.41 0 .744.331.744.74 0 .408-.333.74-.744.74H2.54l3.491 3.47c.29.29.29.758 0 1.047a.744.744 0 01-1.052 0L.218 5.997a.737.737 0 010-1.046z" fill-rule="nonzero">

                        </path>
                      </svg>
                    </span>
                    Geri
                  </button>
                  <div class="NextWrapper-sc-15exdwh-4 esMEeI">
                    <button class="Button-e62odf-0 iTOSBb Next-sc-15exdwh-5 iQKYJA">Deneyim için Devam Et<span class="IconCont-sc-13brnxu-0 jJlpdg">
                      <svg width="20" height="14" xmlns="http://www.w3.org/2000/svg" class="SvgIcon-sc-13brnxu-1 cpaVyx">
                        <path d="M19.728 6.188L13.776.271a.934.934 0 00-1.315 0 .92.92 0 000 1.307l4.364 4.34H.93a.927.927 0 00-.93.924c0 .51.416.925.93.925h15.895l-4.364 4.339a.92.92 0 000 1.307.93.93 0 001.315 0l5.952-5.917a.92.92 0 000-1.308z" fill-rule="nonzero">

                        </path>
                      </svg>
                    </span>
                  </button>
                </div>
              </div>
            </div>
-->




<!--
<div id="scroll-cont" class="Side-sc-19cefps-3 iVceqn">
  <header class="Header-sc-1l80oh1-0 gBeQBg">
    <div class="Stripe-sc-1l80oh1-3 hotdKJ"></div>
    <div class="HeaderItem-sc-1l80oh1-1 jHmzai">
      <div class="HeaderItemTitle-sc-1l80oh1-2 dpzdms">İLETİŞİM</div><div></div></div>
      <div class="HeaderItem-sc-1l80oh1-1 cAuudr">
        <div class="HeaderItemTitle-sc-1l80oh1-2 duJykj">DENEYİM</div><div></div></div>
        <div class="HeaderItem-sc-1l80oh1-1 cAuudr">
          <div class="HeaderItemTitle-sc-1l80oh1-2 duJykj">EĞİTİM</div><div></div></div>
          <div class="HeaderItem-sc-1l80oh1-1 cAuudr">
            <div class="HeaderItemTitle-sc-1l80oh1-2 duJykj">BECERİLER</div><div></div></div>
            <div class="HeaderItem-sc-1l80oh1-1 cAuudr">
              <div class="HeaderItemTitle-sc-1l80oh1-2 duJykj">HAKKINDA</div><div></div></div>
              <div class="HeaderItem-sc-1l80oh1-1 cAuudr">
                <div class="HeaderItemTitle-sc-1l80oh1-2 duJykj">BİTİR</div><div></div></div></header>
                <div tabindex="0" class="WizardCont-sc-15exdwh-0 kJbPwr">
                  <h4 class="HeadingBase-sc-17sbknx-0 gOcFHe WizardHeader-sc-1pxgdek-0 eAIcya"><div>Lütfen <span>iletişim</span> bilgilerinizi girin</div></h4>
                  <p class="Text-sc-12rbf6x-0 WizardSubHeader-somnv-0 guCuRQ ezXLdO">İşverenlerin sizinle nasıl iletişim kurabileceklerini görmelerini sağlar.</p>
                  <form><div class="Flex-s284b4-0 grYXCk FlexCont-god6th-1 bKrIMo">
                    <div class="Box-sc-1lf5w2i-0 FormBox-god6th-0 jTfJSO kUgoUc">
                      <label summary="0" class="Label-i29hl4-0 StyledLabel-gm2sg-0 iVaVVT RmEiT"><span>AD</span>
                      <div class="OverlayBackground-gm2sg-1 llNDJU"></div></label>
                      <div class="Wrap-ysvhe-0 iPaibK">
                        <input class="Input-ysvhe-1 hLoIll" label="First name" type="text" name="firstName" placeholder="Peter" value="">
                        <div class="Container-sc-6rqr7l-0 cLRXpj"></div></div></div>
                        <div class="Box-sc-1lf5w2i-0 FormBox-god6th-0 jTfJSO kUgoUc">
                          <label summary="0" class="Label-i29hl4-0 StyledLabel-gm2sg-0 iVaVVT RmEiT"><span>SOYADI</span>
                          <div class="OverlayBackground-gm2sg-1 llNDJU"></div></label>
                          <div class="Wrap-ysvhe-0 iPaibK"><input class="Input-ysvhe-1 hLoIll" label="Last name" type="text" name="lastName" placeholder="Johnson" value="">
                          <div class="Container-sc-6rqr7l-0 cLRXpj"></div></div></div>
                          <div class="Box-sc-1lf5w2i-0 FormBox-god6th-0 fgyfwu kUgoUc">
                            <label summary="0" class="Label-i29hl4-0 StyledLabel-gm2sg-0 iVaVVT RmEiT"><span>ADRES</span>
                            <div class="OverlayBackground-gm2sg-1 llNDJU"></div></label><div class="Wrap-sc-1cdsnbm-4 kbquFB">
                              <input type="text" autocomplete="off" role="combobox" aria-autocomplete="list" aria-expanded="false" placeholder="Lokasyon gir" class="Autocomplete-sc-1cdsnbm-5 hFVrBP" value="">
                              <div class="Container-sc-6rqr7l-0 cLRXpj"></div></div></div><div class="Box-sc-1lf5w2i-0 FormBox-god6th-0 jTfJSO kUgoUc">
                                <label summary="0" class="Label-i29hl4-0 StyledLabel-gm2sg-0 iVaVVT RmEiT"><span>ŞEHİR</span>
                                <div class="OverlayBackground-gm2sg-1 llNDJU"></div></label>
                                <div class="Wrap-ysvhe-0 iPaibK"><input class="Input-ysvhe-1 hLoIll" label="City" type="text" name="city" placeholder="San Francisco" value="">
                                <div class="Container-sc-6rqr7l-0 cLRXpj"></div></div></div>
                                <div class="Box-sc-1lf5w2i-0 FormBox-god6th-0 jTfJSO kUgoUc">
                                  <label summary="0" class="Label-i29hl4-0 StyledLabel-gm2sg-0 iVaVVT RmEiT"><span>POSTA KODU</span>
                                  <div class="OverlayBackground-gm2sg-1 llNDJU"></div></label>
                                  <div class="Wrap-ysvhe-0 iPaibK"><input class="Input-ysvhe-1 hLoIll" label="Postal Code" type="text" name="postalCode" placeholder="94120" value="">
                                  <div class="Container-sc-6rqr7l-0 cLRXpj"></div></div></div><div class="Box-sc-1lf5w2i-0 FormBox-god6th-0 hjhWda kUgoUc">
                                    <label summary="0" class="Label-i29hl4-0 StyledLabel-gm2sg-0 iVaVVT RmEiT"><span>TELEFON</span>
                                    <div class="OverlayBackground-gm2sg-1 llNDJU"></div></label>
                                    <div class="Wrap-ysvhe-0 iPaibK">
                                      <input class="Input-ysvhe-1 hLoIll" label="Phone" type="text" name="phone" placeholder="305-123-44444" value="">
                                      <div class="Container-sc-6rqr7l-0 cLRXpj"></div></div></div>
                                      <div class="Box-sc-1lf5w2i-0 FormBox-god6th-0 hjhWda kUgoUc">
                                        <label summary="0" class="Label-i29hl4-0 StyledLabel-gm2sg-0 iVaVVT RmEiT"><span>E-POSTA</span>
                                        <div class="OverlayBackground-gm2sg-1 llNDJU"></div></label>
                                        <div class="InputCont-ftuj56-0 fUkOYk"><div class="Wrap-ysvhe-0 iPaibK">
                                          <input class="Input-ysvhe-1 jBzuWU" label="Email" type="email" name="email" id="field-control" placeholder="örn. mail@example.com" value="">
                                          <div class="Container-sc-6rqr7l-0 cLRXpj">
                                            <svg class="SVG-lvke6x-0 kpCbZp ErrorIcon-sc-6rqr7l-2 fuJZEX" width="24px" height="24px" viewBox="0 0 15 15" version="1.1" xmlns="http://www.w3.org/2000/svg">
                                              <path d="M7,0 C3.13425,0 0,3.13425 0,7 C0,10.86575 3.13425,14 7,14 C10.86575,14 14,10.86575 14,7 C14,3.13425 10.86575,0 7,0 Z M7,11.4683333 C6.45283333,11.4683333 6.07833333,11.0465833 6.07833333,10.5 C6.07833333,9.93766667 6.46858333,9.53166667 7,9.53166667 C7.56175,9.53166667 7.92166667,9.93766667 7.92166667,10.5 C7.92166667,11.0471667 7.56175,11.4683333 7,11.4683333 Z M7.36283333,7.77058333 C7.22341667,8.246 6.78416667,8.25416667 6.63775,7.77058333 C6.46916667,7.21291667 5.87008333,5.096 5.87008333,3.72108333 C5.87008333,1.90691667 8.13983333,1.89816667 8.13983333,3.72108333 C8.13925,5.10416667 7.50808333,7.27591667 7.36283333,7.77058333 Z"></path></svg></div></div>
                                              <span name="email" color="#e84c85" data-error="error" class="InputErrorMessage-lhkbz1-0 bdrBfs">Lütfen e-posta adresinizi giriniz</span></div></div></div></form>
                                              <div class="Footer-sc-15exdwh-1 joApoj"><button class="Button-e62odf-0 jaVlbl Back-sc-15exdwh-2 LhDIP">
                                                <span class="IconCont-sc-15z3eib-0 jbBEeq"><svg width="16" height="11" xmlns="http://www.w3.org/2000/svg" class="SvgIcon-sc-15z3eib-1 fVhtwn">
                                                  <path d="M.218 4.95L4.979.218a.747.747 0 011.052 0c.29.289.29.757 0 1.046l-3.49 3.471h12.715c.41 0 .744.331.744.74 0 .408-.333.74-.744.74H2.54l3.491 3.47c.29.29.29.758 0 1.047a.744.744 0 01-1.052 0L.218 5.997a.737.737 0 010-1.046z" fill-rule="nonzero"></path></svg></span>Geri</button>
                                                  <div class="NextWrapper-sc-15exdwh-4 esMEeI"><button class="Button-e62odf-0 iTOSBb Next-sc-15exdwh-5 iQKYJA">Deneyim için Devam Et<span class="IconCont-sc-13brnxu-0 jJlpdg">
                                                    <svg width="20" height="14" xmlns="http://www.w3.org/2000/svg" class="SvgIcon-sc-13brnxu-1 cpaVyx">
                                                      <path d="M19.728 6.188L13.776.271a.934.934 0 00-1.315 0 .92.92 0 000 1.307l4.364 4.34H.93a.927.927 0 00-.93.924c0 .51.416.925.93.925h15.895l-4.364 4.339a.92.92 0 000 1.307.93.93 0 001.315 0l5.952-5.917a.92.92 0 000-1.308z" fill-rule="nonzero"></path></svg></span></button></div></div></div></div>
    -->






BİLGİLER

İş Deneyimi Bitişten Sonra
        <tr>
          <td>Ayrılma Sebebiniz: </td> 
          <td><Input type="text" name="isdeneyimi_sebep[]" class="form-control"></td>
        </tr>






<!--
  
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js'></script>
<script>
  $(document).ready(function() {
    $(".add_item_btn").click(function(e) {
      e.preventDefault();
      $("#tekrarlanan_is").prepend('      
      <table>
        <h1>İş Deneyimi</h1>
        <tr>
          <td>Daha Önce Çalıştığınız Şirketin Adı: </td> 
          <td><Input type="text" name="isdeneyimi_sirketadı[]" class="form-control"></td>
        </tr>
        <tr>
          <td>Başlangıç Tarihiniz: </td> 
          <td><Input type="date" name="isdeneyimi_baslangic[]" class="form-control"></td>
        </tr>
        <tr>
          <td>İşten Ayrılış Tarihiniz: </td> 
          <td><Input type="date" name="isdeneyimi_ayrilis[]" class="form-control"></td>
        </tr>
        <tr>
          <td>Ayrılma Sebebiniz: </td> 
          <td><Input type="text" name="isdeneyimi_sebep[]" class="form-control"></td>
        </tr>
        <tr></tr>
      </table>
      <table>
        <button class="btn btn-dark add_item_btn">+</button>
      </table>
      ');
    });
  });
</script>

-->







<!--    
    <form name="ogrenim_bilgileri" action="db.php" method="POST">
      <table>
        <h1>Öğrenim  Bilgileri</h1>
        <tr>
          <td>İlk Okul: </td> 
          <td><Input type="text" name="ilk_okul"></td>
        </tr>
        <tr>
          <td>Lise: </td> 
          <td><Input type="text" name="lise"></td>
        </tr>
        <tr>
          <td>Üniversite: </td> 
          <td><Input type="text" name="uni"></td>
        </tr>
        <tr>
          <td>Yüksel Lisans: </td> 
          <td><Input type="text" name="y_lisans"></td>
        </tr>
        <tr></tr>
      </table>
    </from>

    <--döngü eklemem lazım->
    <ol>
    <form name="is_deneyimi" action="db.php" method="POST">
      <table>
        <h1>İş Deneyimi</h1>
        <tr>
          <td>Daha Önce Çalıştığınız Şirketin Adı: </td> 
          <td><Input type="text" name="isdeneyimi_sirketadı"></td>
        </tr>
        <tr>
          <td>Başlangıç Tarihiniz: </td> 
          <td><Input type="date" name="isdeneyimi_baslangic"></td>
        </tr>
        <tr>
          <td>İşten Ayrılış Tarihiniz: </td> 
          <td><Input type="date" name="isdeneyimi_ayrilis"></td>
        </tr>
        <tr>
          <td>Ayrılma Sebebiniz: </td> 
          <td><Input type="text" name="isdeneyimi_sebep"></td>
        </tr>
        <tr></tr>
      </table>
    </from>
    </ol>
      <td><button id="btn_isdeneyimi">İş Deneyimi Ekle</button></td>


    <--döngü eklemem lazım->
    <ol>
    <form name="yabanci_dil" action="db.php" method="POST">
      <table>
        <h1>Yabancı Dil Bilgisi</h1>
        <tr>
          <td>Bildiğiniz Yabancı Dil ve Seviyesi: </td> 
          <td><Input type="text" name="y_dil" ></td>
        </tr>
        <tr></tr>
      </table>
    </from>
    </ol>
      <td><button id="btn_yabancidil">Yabancı Dil Ekle</button></td>

    <--döngü eklemem lazım->
    <ol>
    <form name="sertifika" action="db.php" method="POST">
      <table>
        <h1>Sertifika / Eğitim</h1>
        <tr>
          <td>Aldığınız Sertifika / Eğitim: </td> 
          <td><Input type="text" name="setifika_eğitim" ></td>
        </tr>
        <tr></tr>
      </table>
    </from>
    </ol>
      <td><button id="btn_sertifika">Sertifika Ekle</button></td>

    <--döngü eklemem lazım->
    <ol>
    <form name="referans" action="db.php" method="POST">
      <table>
        <h1>Referansınız</h1>
        <tr>
          <td>Referans: </td> 
          <td><Input type="text" name="referans_veri" ></td>
        </tr>
        <tr></tr>
      </table>
    </from>
    </ol>
      <td><button id="btn_referans">Referans Ekle</button></td>

    <form name="onyazi" action="db.php" method="POST">
      <table>
        <h1>Önyazı</h1>
        <tr>
          <td>Başvuracağınız Şirkete Önyazınız: </td> 
          <td><Input type="text" name="onyazi" ></td>
        </tr>
        <tr></tr>
      </table>
    </from>
-->    


<!--
            <div id="is_deneyimi">
                <div class="inpt-group mb-3">
                <form method="post" action="db.php">
                    <div class="row">
                        <div class="col-lg-12">
                            <div id="is_deneyimi">
                                <div class="input-group mb-3">
                                    <input type="text" name="is_deneyimi[]">
                                    <div class="input-group-append">
                                    <button id="sil_isdeneyimi" type="button" class="btn btn-danger">Sil</button>
                                </div>
                            </div>
                        </div>

                    <div id="ekle_isdeneyimi"></div>
                    <button id="ekle_isdeneyimi" type="button" class="btn btn-info">Yeni İş Deneyimi</button>
                    </div>
                </div>
                </form>
                </div>
            </div>


            <script type="text/javascript">
                // add row
                $("#yeni_is").click(function () {
                    var html = '';
                    html += '<div id="is_deneyimi">';
                    html += '<div class="input-group mb-3">';
                    html += '<input type="text" name="is_deneyimi[]">';
                    html += '<div class="input-group-append">';
                    html += '<button id="sil_isdeneyimi" type="button" class="btn btn-danger">Sil</button>';
                    html += '</div>';
                    html += '</div>';

                    $('#is_deneyimi').append(bilgiler.php);
                });

                // remove row
                $(document).on('click', '#sil_isdeneyimi', function () {
                    $(bilgiler).closest('#is_deneyimi').remove();
                });
            </script>
-->


HAKKIMDA

continuing sonrası
<!-- Team-->
<section class="page-section bg-light" id="team">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Our Amazing Team</h2>
                    <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="assets/img/team/1.jpg" alt="" />
                            <h4>Kay Garland</h4>
                            <p class="text-muted">Lead Designer</p>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="assets/img/team/2.jpg" alt="" />
                            <h4>Larry Parker</h4>
                            <p class="text-muted">Lead Marketer</p>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="assets/img/team/3.jpg" alt="" />
                            <h4>Diana Petersen</h4>
                            <p class="text-muted">Lead Developer</p>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 mx-auto text-center"><p class="large text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut eaque, laboriosam veritatis, quos non quis ad perspiciatis, totam corporis ea, alias ut unde.</p></div>
                </div>
            </div>
        </section>


whileparantezi kapandıktan sonra
        <li class="timeline-inverted">
                        <div class="timeline-image bg-dark">
                            <h4>
                                And
                                <br />
                                Its Still
                                <br />
                                Continuing
                            </h4>
                        </div>
                    </li>






FOOTER

<!-- Core theme JS--> üstünden
<script src="assets/mail/contact_me.js"></script>

<script src="assets/mail/jqBootstrapValidation.js"></script>


deneme

/body üstü
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
















<form>
  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
    </div>
  </div>
  <fieldset class="form-group">
    <div class="row">
      <legend class="col-form-label col-sm-2 pt-0">Radios</legend>
      <div class="col-sm-10">
        <div class="form-check">
          <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
          <label class="form-check-label" for="gridRadios1">
            First radio
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
          <label class="form-check-label" for="gridRadios2">
            Second radio
          </label>
        </div>
        <div class="form-check disabled">
          <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3" value="option3" disabled>
          <label class="form-check-label" for="gridRadios3">
            Third disabled radio
          </label>
        </div>
      </div>
    </div>
  </fieldset>
  <div class="form-group row">
    <div class="col-sm-2">Checkbox</div>
    <div class="col-sm-10">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" id="gridCheck1">
        <label class="form-check-label" for="gridCheck1">
          Example checkbox
        </label>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" class="btn btn-primary">Sign in</button>
    </div>
  </div>
</form>





db.php



$host = '127.0.0.1'; //localhost
$dbname = 'sitedb';
$username = 'root';
$password = '';
$charset = 'utf8';
//$collate = 'utf8_unicode_ci';
$dsn = "mysql:host=$host;dbname=$dbname;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_PERSISTENT => false,
    PDO::ATTR_EMULATE_PREPARES => false,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    //   PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES $charset COLLATE $collate"
];
try {
    $baglanti = new PDO($dsn, $username, $password, $options);
    $baglanti->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo 'Bağlantı hatası: ' . $e->getMessage();
    exit;
}



$mysqlsunucu = "localhost";
$mysqlkullanici = "root";
$mysqlsifre = "";
$mysqlvt = "sitedb";

//PDO

try{
    $db = new PDO("mysql:host=localhost;dbname=sitedb;charset=utf8",$mysqlkullanici,$mysqlsifre);

    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "bağlanti başarılı";
    }
    catch(PDOException $e){
        echo "bağlantı hatası";
    $e->getMessage();
    }






    İLETİŞİM


    
    $mail="";
                        if(filter_var($mail, FILTER_VALIDATE_EMAIL)){
                            echo "<script> alert('Mesajınız Başarıyla İletildi')</script>";
                        }
                    }
                    else{
                        echo "<script> alert('lütfen bilgilerinizi kontrol edip tekrar deneyin')</script>";}








BİLGİLER İÇİN KULLANILABİLİR
<div class="panel-body">
  
  <div id="education_fields">
          
        </div>
       <div class="col-sm-3 nopadding">
  <div class="form-group">
    <input type="text" class="form-control" id="Schoolname" name="Schoolname[]" value="" placeholder="School name">
  </div>
</div>
<div class="col-sm-3 nopadding">
  <div class="form-group">
    <input type="text" class="form-control" id="Major" name="Major[]" value="" placeholder="Major">
  </div>
</div>
<div class="col-sm-3 nopadding">
  <div class="form-group">
    <input type="text" class="form-control" id="Degree" name="Degree[]" value="" placeholder="Degree">
  </div>
</div>

<div class="col-sm-3 nopadding">
  <div class="form-group">
    <div class="input-group">
      <select class="form-control" id="educationDate" name="educationDate[]">
      
        <option value="">Date</option>
        <option value="2015">2015</option>
        <option value="2016">2016</option>
        <option value="2017">2017</option>
        <option value="2018">2018</option>
      </select>
      <div class="input-group-btn">
        <button class="btn btn-success" type="button" onclick="education_fields();"> <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> </button>
      </div>
    </div>
  </div>
</div>
<div class="clear"></div>
  
  </div>


  <div class="container py-4">
  <div class="row">
    <div class="col-md-12 form_sec_outer_task border">
      <div class="row">
        <div class="col-md-12 bg-light p-2 mb-3">
          <div class="row">
            <div class="col-md-6">
              <div class="row">
                <div class="col-md-6">
                  <h4 class="frm_section_n">Form Title</h4>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <label>Mobile No.</label>
        </div>
        <div class="col-md-4">
          <label> Type </label>
        </div>
      </div>
      <div class="col-md-12 p-0">
        <div class="col-md-12 form_field_outer p-0">
          <div class="row form_field_outer_row">
            <div class="form-group col-md-6">
              <input type="text" class="form-control w_90" name="mobileb_no[]" id="mobileb_no_1" placeholder="Enter mobiel no." />
            </div>
            <div class="form-group col-md-4">
              <select name="no_type[]" id="no_type_1" class="form-control">
                <option>--Select type--</option>
                <option>Personal No.</option>
                <option>Company No.</option>
                <option>Parents No.</option>
              </select>
            </div>
            <div class="form-group col-md-2 add_del_btn_outer">
              <button class="btn_round add_node_btn_frm_field" title="Copy or clone this row">
                <i class="fas fa-copy"></i>
              </button>

              <button class="btn_round remove_node_btn_frm_field" disabled>
                <i class="fas fa-trash-alt"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row ml-0 bg-light mt-3 border py-3">
      <div class="col-md-12">
        <button class="btn btn-outline-lite py-0 add_new_frm_field_btn"><i class="fas fa-plus add_icon"></i> Add New field row</button>
      </div>
    </div>
  </div>
</div>












BİLGİLER



<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js'></script>
<script>
  $(document).ready(function() {
    $("form-group").on("click", ".add_item_btn", function(e) {
      var index = $(e.target).closest("form-group").find(".is_deneyim").lenght + 1;
      var cloned_el =  $(e.target).closest("is_deneyim").clone(true);

      $(e.target).closest("form-groupr").last().append(cloned_el).find(".remove_node_btn_frm_field:not(:first)").prop("disabled", false);

      $(e.target).closest("form-group").find(".remove_node_btn_frm_field").first().prop("disabled", true);

      //change id
      $(e.target)
      .closest(".form-group")
      .find(".is_deneyim")
      .last()
      .find("select")
      .attr("id", "no_type" + index)

      console.log(coloned_el);
      //count++;
    });
  });


  $(document).ready(function(){ 
    $("form-group").on("click",".add_item_btn", function (){ console.log("clicked"); 
      var index = $(".form-group").find(".is_deneyim").length + 1; $(".form-group").append(`
    <div id="is_deneyim">  
    <form name="is_deneyim" action="#is_deneyimi" method="POST" class="is_deneyim">   
      <table>
        <h1>İş Deneyimi</h1>
        <div class="form-group p-3">
          <label for="is_isim">Daha Önce Çalıştığınız Şirketin Adı:</label>
          <input type="text" class="form-control col-5 p-2" id="isdeneyimi_isim" name="isdeneyimi_isim[]">
        </div>
        <div class="form-group p-3">
          <label for="is_baslangic">Başlangıç Tarihiniz:</label>
          <input type="date" class="form-control col-5 p-2" id="isdeneyimi_baslangic" name="isdeneyimi_baslangic[]">
        </div>
        <div class="form-group p-3">
          <label for="is_ayrilis">İşten Ayrılış Tarihiniz:</label>
          <input type="date" class="form-control col-5 p-2" id="isdeneyimi_ayrilis" name="isdeneyimi_ayrilis[]">
        </div>
        <div class="form-group p-3">
          <label for="is_neden">İşten Ayrılma Sebebiniz:</label>
          <textarea input type="text" class="form-control col-5 p-2" id="isdeneyimi_neden" name="isdeneyimi_neden[]"></textarea>
        </div>

        <button class="btn btn-dark add_item_btn">+</button>

    </form>
    </div>
`); $(".form_field_outer").find(".remove_node_btn_frm_field:not(:first)").prop("disabled", false); $(".form_field_outer").find(".remove_node_btn_frm_field").first().prop("disabled", true); 
}); 
});

$(document).ready(function () {
  //===== delete the form fieed row
  $("body").on("click", ".remove_node_btn_frm_field", function () {
    $(this).closest(".form_field_outer_row").remove();
    console.log("success");
  });
});
</script>






remove functionun altından

$('#kaydet').click(function() {
      $.ajax({
        url: "action.php",
        method: "POST",
        data: $('#is_deneyim').serialize(),
        success: function(data) {
          alert(data);
          $('#is_deneyim')[0].reset();
        }
      });
    });



    <?php
if($_POST){
  $sorgu=$baglanti->prepare(query: "INSERT INTO bilgiler SET isim=:isim, cinsiyet1=:cinsiyet1, cinsiyet2=:cinsiyet2, medeni_durum1=:medeni_durum1, medeni_durum2=:medeni_durum2, d_tarihi=:d_tarihi, adres=:adres, tel=:tel, mail=:mail, lise=:lise, uni=:uni, ylisans=:ylisans, is_isim=:is_isim, is_baslangic=:is_baslangic, is_ayrilis=:is_ayrilis, is_neden=:is_neden, dil_bilgisi=:dil_bilgisi, dil_seviyesi=:dil_seviyesi, sertifika=:sertifika, referans=:referans, onyazi=:onyazi ");
  $ekle=$sorgu->execute(
    [
      'isim'=>($_POST["isim"]),
      'cinsiyet1'=>($_POST["cinsiyet1"]),
      'cinsiyet2'=>($_POST["cinsiyet2"]),
      'medeni_durum1'=>($_POST["medeni_durum1"]),
      'medeni_durum2'=>($_POST["medeni_durum2"]),
      'd_tarihi'=>($_POST["d_tarihi"]),
      'adres'=>($_POST["adres"]),
      'tel'=>($_POST["tel"]),
      'mail'=>($_POST["mail"]),
      'lise'=>($_POST["lise"]),
      'uni'=>($_POST["uni"]),
      'ylisans'=>($_POST["ylisans"]),
      'is_isim'=>($_POST["is_isim"]),
      'is_baslangic'=>($_POST["is_baslangic"]),
      'is_ayrilis'=>($_POST["is_ayrilis"]),
      'is_neden'=>($_POST["is_neden"]),
      'dil_bilgisi'=>($_POST["dil_bilgisi"]),
      'dil_seviyesi'=>($_POST["dil_seviyesi"]),
      'sertifika'=>($_POST["sertifika"]),
      'referans'=>($_POST["referans"]),
      'onyazi'=>($_POST["onyazi"]),
    ]
    );

    if($ekle){
      echo "<script> alert('Bilgileriniz Başarıyla İletildi')</script>";
    }

}
?>






BOOTSTRAP.MİN.CSS

en sonundan
/*# sourceMappingURL=bootstrap.min.css.map */











ACTİON

<?php
$host = 'localhost';
$dbname = 'sitedb';
$username = 'root';
$password = '';
$charset = 'utf8mb4_turkish_ci';
$number = count($_POST["action"]);
if($number > 1)
{
    for($i=0; $i<$number; $i++)
    {
        if(trim($_POST["action"] [$i]) != '')
        {
            $sql = "INSERT INTO is_deneyim(is_isim, is_baslangic, is_ayrilis, is_neden) VALUES('".mysqli_real_escape_string($connect, $_POST["action"] [$i])."') ";
            mysqli_query($connect, $sql);
        }
    }
    echo 'Bilgileriniz Başarıyla Ulaştı';
}

else
{
    echo "Lütfen İş Deneyiminizi Giriniz";
}
?>



if(isset($_POST["action"])){
$number = count($_POST["action"]);
$i = 0;

while($i>0){

    $field_state = array(
        'is_isim' => $is_isim,
        'is_baslangic' => $is_baslangic,
        'is_ayrilis' => $is_ayrilis,
        'is_neden' => $is_neden,
        'items_count' => is_array($items) ? count($items) : count(array($items)),
      );
  

    $sql = "INSERT INTO is_deneyim(is_isim, is_baslangic, is_ayrilis, is_neden) VALUES('".mysqli_real_escape_string($connect, $_POST["action"] [$i])."') ";
    mysqli_query($connect, $sql);

    echo "bilgileriniz ulaştı";
    $i++;
    }

}






HEAD 

style içinden

<?php
include("bilgilerjs.php");
?>




19082022 BİLGİLER SCRİPT İÇİ


$('#kaydet_kisisel').click(function() {
      $.ajax({
        url: "action.php",
        method: "POST",
        data: $('#kisisel_bilgi').serialize(),
        success: function(data) {
          alert(data);
          $('#kisisel_bilgi')[0].reset();
        }
      });
    });








    KİSİSEL_BİLGİ 

    sayfanın başından

    <?php
$sayfa="kisisel_bilgi";
include("inc/db.php");

$tanimlama="kisisel_bilgi";
$key="bilgiler";

$sorgu=$baglanti->prepare(query: "SELECT * from kisisel_bilgi");
$sorgu->execute();
$sonuc=$sorgu->fetch();
?>







              

<?php
                if($_POST){
                    $sorgu=$baglanti->prepare(query: "INSERT INTO kisisel_bilgi SET isim=:isim, cinsiyet1=:cinsiyet1, cinsiyet2=:cinsiyet2, medeni_durum1=:medeni_durum1, medeni_durum2=:medeni_durum2, d_tarihi=:d_tarihi, adres=:adres, tel=:tel, mail=:mail ");
                    $ekle=$sorgu->execute(
                        [
                            'isim'=>htmlspecialchars($_POST["isim"]),
                            'cinsiyet1'=>htmlspecialchars($_POST["cinsiyet1"]),
                            'cinsiyet2'=>htmlspecialchars($_POST["cinsiyet2"]),
                            'medeni_durum1'=>htmlspecialchars($_POST["medeni_durum1"]),
                            'medeni_durum2'=>htmlspecialchars($_POST["medeni_durum2"]),
                            'd_tarihi'=>htmlspecialchars($_POST["d_tarihi"]),
                            'adres'=>htmlspecialchars($_POST["adres"]),
                            'tel'=>htmlspecialchars($_POST["tel"]),
                            'mail'=>htmlspecialchars($_POST["mail"]),
                        ]
                    );


                    if($ekle){
                        echo "<script> alert('Mesajınız Başarıyla İletildi')</script>";
                }
            }
                ?>














BİLGİLER 
kişisel bilgiler formid=bilgiler_form altından 

<section class="page-selection" id="kisisel_bilgi">
            <div id="kisisel_bilgi">
              <form name="kisisel_bilgi" name="kisisel_bilgi" method="POST" action="bilgiler" novalidate="novalidate">
                <table class="table_kisisel" id="table_kisisel">
                <h1>Kişisel Bilgiler</h1>
                <div class="form-group p-3">
                  <label for="isim">Adınız Soyadınız:</label>
                  <input type="text" class="form-control col-5 p-2" id="isim" name="isim[]" required="required">
                </div>
                <div class="form-group p-3">
                  <legend class="col-form-label">Cinsiyetiniz:</legend>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="cinsiyet1[]" id="cinsiyet1" value="kadin">
                    <label class="form-check-label" for="cinsiyet1">
                      Kadın
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="cinsiyet2[]" id="cinsiyet2" value="erkek">
                    <label class="form-check-label" for="cindiyet2">
                      Erkek
                    </label>
                  </div>
                </div>
                <div class="form-group p-3">
                  <legend class="col-form-label" name="medeni_durum" id="medeni_durum">Medeni Durumunuz:</legend>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="medeni_durum1[]" id="medeni_durum1" value="evli">
                    <label class="form-check-label" for="medeni_durum1">
                      Evli
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="medeni_durum2[]" id="medeni_durum2" value="bekar">
                    <label class="form-check-label" for="medeni_durum2">
                      Bekar
                    </label>
                  </div>
                </div>
                <div class="form-group p-3">
                  <label for="d_tarihi">Doğum Tarihiniz:</label>
                  <input type="date" class="form-control col-5 p-2" id="d_tarihi" name="d_tarihi[]" required="required">
                </div>
                <div class="form-group p-3">
                  <label for="adres">Adresiniz:</label>
                  <input type="text" class="form-control col-5 p-2" id="adres" name="adres[]">
                </div>
                <div class="form-group p-3">
                  <label for="tel">Telefon Numaranız:</label>
                  <input type="tel" class="form-control col-5 p-2" id="tel" name="tel[]">
                </div>
                <div class="form-group p-3">
                  <label for="mail">Mail Adresiniz:</label>
                  <input type="email" class="form-control col-5 p-2" id="mail" name="mail[]" required="required">
                </div>
                                  
                <button type="submit" class="btn btn-light" value="kaydet" name="kaydet_kisisel" id="kaydet_kisisel">Kaydet</button>

              </table>




              <?php
                if($_POST){
                    $sorgu=$baglanti->prepare(query: "INSERT INTO kisisel_bilgi SET isim=:isim, cinsiyet1=:cinsiyet1, cinsiyet2=:cinsiyet2, medeni_durum1=:medeni_durum1, medeni_durum2=:medeni_durum2, d_tarihi=:d_tarihi, adres=:adres, tel=:tel, mail=:mail ");
                    $ekle=$sorgu->execute(
                        [
                            'isim'=>htmlspecialchars($_POST["isim"]),
                            'cinsiyet1'=>htmlspecialchars($_POST["cinsiyet1"]),
                            'cinsiyet2'=>htmlspecialchars($_POST["cinsiyet2"]),
                            'medeni_durum1'=>htmlspecialchars($_POST["medeni_durum1"]),
                            'medeni_durum2'=>htmlspecialchars($_POST["medeni_durum2"]),
                            'd_tarihi'=>htmlspecialchars($_POST["d_tarihi"]),
                            'adres'=>htmlspecialchars($_POST["adres"]),
                            'tel'=>htmlspecialchars($_POST["tel"]),
                            'mail'=>htmlspecialchars($_POST["mail"]),
                        ]
                    );


                    if($ekle){
                        echo "<script> alert('Mesajınız Başarıyla İletildi')</script>";
                }
            }
                ?>





              </form>

            </div>
          </selection>