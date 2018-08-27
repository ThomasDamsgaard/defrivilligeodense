@extends('layouts.app')

@section('content')
<div class="container has-padding-top">
  <div class="columns is-centered">
    <div class="column is-12">

      <!-- Buttons -->
      <div class="buttons is-centered">

        <button class="button is-success" type="button" onclick="refs.add.open()">
          Tilføj medlem
        </button>

        <form action="/pdf" method="post" id="pdfForm" style="margin-right: 0.5em;">
          @csrf
          <input type="hidden" name="pdfUsers" id="pdfUsers" value="">
          <button class="button is-info" type="button" name="pdf" id="pdf">Download PDF</button>
        </form>

        <form action="/addpoints" method="post" id="addPointsForm">
          <input type="hidden" name="checkedUsers" id="checkedUsers" value="">
          @csrf
          <div class="field has-addons">
            <div class="control">
              <button class="button is-warning" id="addPoints">Tilføj Points</button>
            </div>
            <div class="control has-icons-left">
              <input class="input" type="tel" placeholder="" id="pointsInput" name="pointsInput">
              <span class="icon is-small is-left">
                <i class="fas fa-coins"></i>
              </span>
            </div>
          </div>
        </form>




      </div>
      <!-- Buttons -->

      <!-- Table -->
      <div class="has-padding-top">
        <table class="table is-fullwidth is-hoverable" id="membersTable">
          <thead>
            <tr>
              <th><abbr title=""></abbr></th>
              <th><abbr title="Navn"><i class="fas fa-user" aria-hidden="true"></i></abbr></th>
              <th><abbr title="Email"><i class="fas fa-at" aria-hidden="true"></i></abbr></th>
              <th><abbr title="Telefon"><i class="fas fa-phone" aria-hidden="true"></i></abbr></th>
              <th><abbr title="Tshirt"><i class="fas fa-tshirt" aria-hidden="true"></i></abbr></th>
              <th><abbr title="Points"><i class="fas fa-coins" aria-hidden="true"></i></abbr></th>
              <th><abbr title="Edit"><i class="fas fa-user-edit"></i></i></abbr></th>
              <th><abbr title="Delete"><i class="fas fa-trash"></i></i></abbr></th>
            </tr>
          </thead>
          <tbody>

            @foreach ($members as $member)

            @include('partials.tableRow')

            @endforeach

          </tbody>
        </table>
      </div>
      <!-- Table -->

    </div>
  </div>

  <!-- Add Modal -->
  @include('partials.addMember')
  <!-- Add Modal -->

</div>
@endsection

@section('scripts')
<script type="text/javascript">
var refs = {
  add: {
    open: function() {
      document.getElementById('add').classList.add('is-active');
    },

    close:function() {
      document.getElementById('add').classList.remove('is-active');
    }
  }
};
</script>

<script type="text/javascript">
  $(document).ready(function() {

    //Delete Member
    $('.deleteForm').on('submit', function() {
      if (confirm('Er du sikker på du vil slette medlemmet?')) {
        return true;
      } else {
        return false;
      }
    });

    //Add Points
    $('#addPoints').click(function(e) {

      e.preventDefault();

      var checked = $('#membersTable input:checked');
      var values = [];
      checked.each(function() {
        values.push($(this).val());
      });

      $('#checkedUsers').val(JSON.stringify(values));

      $('#addPointsForm').submit();
    });

    $('#pdf').click(function(e) {

      e.preventDefault();

      var checked = $('#membersTable input:checked');
      var values = [];
      checked.each(function() {
        values.push($(this).val());
      });
      $('#pdfUsers').val(JSON.stringify(values));

      $('#pdfForm').submit();
    });

   });


</script>
@endsection
