<form action="/home" method="post">
<div class="modal" id="add">
  <div class="modal-background" onclick="refs.add.close()"></div>
  <div class="modal-card">
    <header class="modal-card-head">
      <p class="modal-card-title">Tilføj medlem</p>
      <button class="delete" onclick="refs.add.close()" aria-label="close"></button>
    </header>


      @csrf
      <section class="modal-card-body">

        <!-- Content -->
        <div class="field">
          <label class="label">Navn</label>
          <div class="control has-icons-left has-icons-right">
            <p><input class="input" type="text" placeholder="Navn" name="name" required id="name"></p>
            <span class="icon is-small is-left">
              <i class="fas fa-user"></i>
            </span>
          </div>
        </div>

        <div class="field">
          <label class="label">E-mail</label>
          <div class="control has-icons-left has-icons-right">
            <input class="input" type="email" placeholder="E-mail" name="email" required>
            <span class="icon is-small is-left">
              <i class="fas fa-at"></i>
            </span>
          </div>
        </div>

        <div class="field">
          <label class="label">Telefon</label>
          <div class="control has-icons-left has-icons-right">
            <input class="input" type="tel" placeholder="Telefon" name="phone" required>
            <span class="icon is-small is-left">
              <i class="fas fa-phone"></i>
            </span>
          </div>
        </div>

        <div class="field">
          <label class="label">Forening</label>
          <div class="control has-icons-left has-icons-right">
            <input class="input" type="text" placeholder="Forening" name="organization" required>
            <span class="icon is-small is-left">
              <i class="fas fa-building"></i>
            </span>
          </div>
        </div>

        <div class="field">
          <label class="label">T-shirt</label>
          <div class="control has-icons-left has-icons-right">
            <input class="input" type="text" placeholder="T-shirt" name="size" required>
            <span class="icon is-small is-left">
              <i class="fas fa-tshirt"></i>
            </span>
          </div>
        </div>

        <div class="field">
          <label class="label">Points</label>
          <div class="control has-icons-left has-icons-right">
            <input class="input" type="number" placeholder="Points" name="points" required>
            <span class="icon is-small is-left">
              <i class="fas fa-coins"></i>
            </span>
          </div>
        </div>
        <!-- Content -->

      </section>
      <footer class="modal-card-foot">
        <button class="button is-success">Gem</button>
      </footer>


  </div>
</div>
</form>
