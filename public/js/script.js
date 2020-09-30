$(document).ready(function () {

    function archiveFunction() {
        swal({
            title: "Are you sure?",
            text: "But you will still be able to retrieve this file.",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Yes, archive it!",
            cancelButtonText: "No, cancel please!",
            closeOnConfirm: false,
            closeOnCancel: false
        },
            function (isConfirm) {
                if (isConfirm) {
                    swal("Deleted!", "Your imaginary file has been archived.", "success");
                    return true;
                } else {
                    swal("Cancelled", "Your imaginary file is safe :)", "error");
                    return false;
                }
            });
    }

});



function OpenModal(url) {
    $("#spinner").addClass('lds-ellipsis');
    $('#PartialView').html("");
    $.ajax(url)
        .done(function (page) {
            $('#PartialView').html(page);
            $("#spinner").removeClass("lds-ellipsis");
        })
        .fail(function () {
            alert("une erreur est survenue");
        })
        .always(function () {
            $(":input").prop("disabled", false);
        });
}

$("#formDelete").click(function () {
    archiveFunction();
});





//****sidebar****//

$(document).ready(function () {
    switch (window.location.pathname) {

        case "/etudiant/":
            activeMenu('Etudiants');
            break;

        case "/Accueil":
            activeMenu('Accueil');
            break;

        case "/documentation":
            activeMenu('Documentation');
            break;

        case "/formation/":
            activeMenu('Formations');
            break;

        default:
            break;

    }
});


function activeMenu(idHtml) {
    $("#" + idHtml).css({ "background-color": "#846bab" });
}




//****chart****//

if (window.location.pathname == "/Accueil") {
    ///////////////////
    // SUR L'ACCUEIL //
    //////////////////

    $('.count').each(function () {
        $(this).prop('Counter', 0).animate({
            Counter: $(this).text()
        }, {
            duration: 700,
            easing: 'swing',
            step: function (now) {
                $(this).text(Math.ceil(now));
            }
        });
    });


    var ctx = document.getElementById('myChart').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
            datasets: [{
                label: '# of Votes',
                data: [12, 19, 3, 5, 2, 3],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)'
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        }
    });
}