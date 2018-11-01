<div class="modal" id="show">
  <div class="modal-background" onclick="refs.show.close()"></div>
  <div class="modal-card">
    <header class="modal-card-head">
      <p class="modal-card-title">{{ $member->name }}</p>
      <button class="delete" onclick="refs.show.close()" aria-label="close"></button>
    </header>
      <section class="modal-card-body">

        <!-- Content -->
        <li class="panel-block">
          <label class="column is-2"><b>E-mail</b></label>{{ $member->email }}
        </li>

        <li class="panel-block">
          <label class="column is-2"><b>T-shirt</b></label>{{ $member->size }}
        </li>

        <li class="panel-block">
          <label class="column is-2"><b>Cardigan</b></label>{{ $member->sweatsize }}
        </li>

        <li class="panel-block">
          <label class="column is-2"><b>Points</b></label>{{ $member->points }}
        </li>
        <!-- Content -->

      </section>
      <footer class="modal-card-foot">
        <button class="button is-outline" onclick="refs.show.close()">Luk</button>
      </footer>

  </div>
</div>
