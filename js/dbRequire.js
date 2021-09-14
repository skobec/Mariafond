const newDiv = document.createElement('div');
document.body.appendChild(newDiv);


fetch('http://localhost:8888/queryBuilder/admin/json.php')
  .then((res) => {
    if (res.ok) {
      console.log('status', res.status);
      return res.json();
    }
  })
  .then((data) => {
    var a = data;
      a.forEach(function(data) {
          console.log(data);
          addedLayoutToPage(data.name, data.last_name, data.avatar, data.history)
      });
    
  })


function addedLayoutToPage(name, secondName, image, history) {
  newDiv.innerHTML = `

  <section class="modal">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="modal-window">
            <div class="modal-window__img">
              <img src="${image}" alt="Фото - ${secondName}">
            </div>
            <!-- /.modal-window__img -->
            <div class="modal-window__text">
              <img class="modal__btn-close" src="img/header/close_btn.svg" alt="Закрыть окно">
              <h2>${name} ${secondName}</h2>
              <p>
              ${history}
              </p>
              <a class="main__btn" href="#">Фото и документы</a>
            </div>
            <!-- /.modal-window__text -->
          </div>
          <!-- /.modal-window -->
        </div>
        <!-- /.col-12 -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.contaner -->
  </section>
  <!-- /.modal -->
`;
console.log('es');
}