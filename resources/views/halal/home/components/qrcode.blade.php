<div class="container">
  <div class="row s_product_inner">
    <div class="col-lg-12">
      <section class="product_description_area" style="margin-top: -10px; margin-bottom: 100px">
        <div class="container">
          <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item">
              <a class="nav-link active show" id="qrcode-tab" data-toggle="tab" href="#qrcode" role="tab" aria-controls="home" aria-selected="true">QR Code</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="qrcode2-tab" data-toggle="tab" href="#qrcode2" role="tab" aria-controls="profile" aria-selected="false">QR Code dengan Logo</a>
            </li>
          </ul>
          <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="qrcode" role="tabpanel" aria-labelledby="qrcode-tab" style="color: black">
              <div class="table-responsive">
                <table class="table">
                  <tbody>
                    <tr>
                      <td class="text-center">
                        <h5 style="color: black">Nomer Binaan : {{ $idBinaan }}</h5>
                        <a href="{{ $plainQRCode }}" download>
                          <img width="300px" src="{{ $plainQRCode }}">
                        </a>
                        <p>*Pasang kode ini di web anda untuk menampilkan QR Code anda di web</p>

                        <p><b>*Berlaku hingga <?php setlocale(LC_ALL, 'id_ID.UTF8', 'id_ID.UTF-8', 'id_ID.8859-1', 'id_ID', 'IND.UTF8', 'IND.UTF-8', 'IND.8859-1', 'IND', 'Indonesian.UTF8', 'Indonesian.UTF-8', 'Indonesian.8859-1', 'Indonesian', 'Indonesia', 'id', 'ID', 'en_US.UTF8', 'en_US.UTF-8', 'en_US.8859-1', 'en_US', 'American', 'ENG', 'English');
                                              $date = new DateTime($dateQRCode);
                                              echo strftime("%B", $date->getTimestamp()) . "\n";
                                              echo strftime("%Y", $date->getTimestamp()) + 2 . "\n";
                                              echo 'ini dari status_date'.$dateQRCode;
                                              ?></b></p>
                        <textarea readonly rows="15" id="myQrCode" name="description" placeholder="informasi mengenai deskripsi yang menarik" id="description" class="form-control"><a href="{{ $urlBinaan }}"><img src="{{ $plainQRCode }}"></a></textarea>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
            <div class="tab-pane fade" id="qrcode2" role="tabpanel" aria-labelledby="qrcode-tab">
              <div class="table-responsive">
                <table class="table">
                  <tbody>
                    <tr>
                      <td class="text-center">
                        <h5 style="color: black">Nomer Binaan : {{ $idBinaan }}</h5>
                        <a href="{{ $logoQRCode }}" download>
                          <img width="300px" src="{{ $logoQRCode }}">
                        </a>
                        <p>*Pasang kode ini di web anda untuk menampilkan QR Code anda di web</p>
                        <p><b>*Berlaku hingga <?php setlocale(LC_ALL, 'id_ID.UTF8', 'id_ID.UTF-8', 'id_ID.8859-1', 'id_ID', 'IND.UTF8', 'IND.UTF-8', 'IND.8859-1', 'IND', 'Indonesian.UTF8', 'Indonesian.UTF-8', 'Indonesian.8859-1', 'Indonesian', 'Indonesia', 'id', 'ID', 'en_US.UTF8', 'en_US.UTF-8', 'en_US.8859-1', 'en_US', 'American', 'ENG', 'English');
                                              echo strftime("%B") . "\n";
                                              echo strftime("%Y") + 2 . "\n"; ?></b></p>
                        <textarea readonly rows="15" id="myQrCodeLogo" name="description" placeholder="informasi mengenai deskripsi yang menarik" id="description" class="form-control"><a href="{{ $urlBinaan }}"><img src="{{ $logoQRCode }}"></a></textarea>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
  </div>
</div>