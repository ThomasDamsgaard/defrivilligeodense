@extends('layouts.app')

@section('content')
<div class="container">
  <div class="columns is-centered">
    <div class="column is-12">

      <!-- Form -->
      <form action="{{ action('HomeController@update', $id) }}" method="post">
        @csrf
        <input type="hidden" name="_method" value="PATCH">

        <div class="modal is-active">
          <div class="modal-background"></div>
          <div class="modal-card">
            <header class="modal-card-head">
              <p class="modal-card-title">Modal title</p>
              <button class="delete" aria-label="close"></button>
            </header>
            <section class="modal-card-body">

              <!-- Content -->
              <div class="field">
                <label class="label">Navn</label>
                <div class="control has-icons-left has-icons-right">
                  <input class="input" type="text" placeholder="Navn" name="name" value="{{ $member->name }}" required>
                  <span class="icon is-small is-left">
                    <i class="fas fa-user"></i>
                  </span>
                </div>
              </div>

              <div class="field">
                <label class="label">E-mail</label>
                <div class="control has-icons-left has-icons-right">
                  <input class="input" type="email" placeholder="E-mail" name="email" value="{{ $member->email }}" required>
                  <span class="icon is-small is-left">
                    <i class="fas fa-at"></i>
                  </span>
                </div>
              </div>

              <div class="field">
                <label class="label">Telefon</label>
                <div class="control has-icons-left has-icons-right">
                  <input class="input" type="tel" placeholder="Telefon" name="phone" value="{{ $member->phone }}" required>
                  <span class="icon is-small is-left">
                    <i class="fas fa-phone"></i>
                  </span>
                </div>
              </div>

              <div class="field">
                <label class="label">T-shirt</label>
                <div class="control has-icons-left has-icons-right">
                  <input class="input" type="text" placeholder="T-shirt" name="size" value="{{ $member->size }}" required>
                  <span class="icon is-small is-left">
                    <i class="fas fa-tshirt"></i>
                  </span>
                </div>
              </div>

              <div class="field">
                <label class="label">Points</label>
                <div class="control has-icons-left has-icons-right">
                  <input class="input" type="number" placeholder="Points" name="points" value="{{ $member->points }}" required>
                  <span class="icon is-small is-left">
                    <i class="fas fa-coins"></i>
                  </span>
                </div>
              </div>
              <!-- Content -->

            </section>
            <footer class="modal-card-foot">
              <button class="button is-success" type="submit">Gem</button>
            </footer>
          </div>
        </div>
      </form>
      <!-- Form -->

    </div>
  </div>
</div>


@endsection
