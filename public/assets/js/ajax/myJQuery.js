$(document).ready(
  function () {
    // alert('Bonjour');
    // handicap set yes
    $('#div_type_handicap').hide();
    $('#divNation').addClass('col-md-8');
    $('#handicap_demandeur').change(
      function () {
        // alert('Bonjour');
        let handicap = $('#handicap_demandeur').val();
        let type = $('#div_type_handicap');
        switch (handicap) {
          case "Oui":
            $('#divNation').attr('class', 'col-md-4');
            type.show();
            break;
          case "Non":
            $('#divNation').attr('class', 'col-md-8');
            type.hide();
            break

          default:
            break;
        }
      }
    );

    // niveau d'etude
    $('#Div_diplome').hide();
    $('#nivetude_demandeur').change(
      function () {
        // alert('Bonjour');
        let niveau = $('#nivetude_demandeur').val();
        let rowDiplome = $('#Div_diplome');
        switch (niveau) {
          case "NON SCOLARISE":
            rowDiplome.hide();
            break;
          default:
            rowDiplome.show();
            break;
        }
      });

    // diplome
    $('#Div_annee_diplo').hide();
    $('#Div_specialite').hide();
    $('#col_diplome').addClass('col-md-12');
    $('#diplome_demandeur').change(
      function () {
        // alert('Bonjour');
        let diplomeValeur = $('#diplome_demandeur').val();
        let anneDiplome = $('#Div_annee_diplo');
        let specialite = $('#Div_specialite');
        switch (diplomeValeur) {
          case "AUCUN":

            anneDiplome.hide();
            specialite.hide();
            break;

          default:
            $('#col_diplome').attr('class', 'col-md-4');
            anneDiplome.show();
            specialite.show();
            break;
        }
      }
    );

    // piece
    piec = $('#piece_demandeur');
    piec.on("mouseout", function () {
      let piece = piec.val();
      let ext = piece.split('.').pop();
      if (piece != "" && ext != "pdf") {
        alert("La piece doit etre un fichier pdf! \nVotre fichier est:  " + ext);
        $('#piece_demandeur').val('');//on vide
      }
    });




  }
);