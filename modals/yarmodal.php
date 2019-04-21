<div id="mymodal<?php echo $row['id']; ?>" class="modal fade" role="dialog" tabindex="-1" id="mymodal">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Sonuçlar</h4><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button></div>
            <div class="modal-body">
              <p class="text-center text-light bg-info">Arama yapmak için tarayıcınızın CTRL+F fonksiyonunu kullanabilirsiniz.</p>
              <p class="text-center text-danger">Sonuçlar benzing sisteminden otomatik olarak alındığı için arama yaparken Türkçe karekter kullanmamaya dikkat ediniz.</p>
              <div class="container">
                  <iframe src="yarislar/<?php echo $row['dosyaadi']; ?>" style="border:none; width: 100%; height: 100vh;"></iframe>
              </div>
            </div>
            <div class="modal-footer"><button class="btn btn-light" type="button" data-dismiss="modal">Kapat</button></div>
        </div>
    </div>
</div>
