

function submitFormAjax(formSelector, url, redirectUrl, successMessage = "Success!", failMessage = "failed!"){
    $(formSelector).on('submit', function(e) {
        e.preventDefault(); //prevent default behavior of reload hopefully works
    
        $.ajax({
          url: url,
          method:'POST',
          data:$(this).serialize(),
          success: function(res){
            console.log("Server Responded: "+res)
            if(res.status === "success"){
              toastr.success(successMessage);
            //   $('#message').text(successMessage)
    
              // a delay 1.5 sec
              setTimeout(function () {
                fetch(redirectUrl, {
                    headers: {
                        'X-Requested-With': 'XMLHttpRequest'
                    }
                })
                .then(res => res.text())
                .then(html => {
                    document.getElementById('container-load').innerHTML = html;
                    initAssets()
                });
            }, 1000);
            }else{
              toastr.error(failMessage + ": " + (res.message || "Unknown Error"));
            }
          }, error: function(){
            $('#message').text("something went wrong");
          }
        })
     })
 }

 function handleAjaxDelete(selector, confirmMessage = "Are you sure?", successMessage = "Deleted!", redirectUrl = null) {
  $(document).on('click', selector, function (e) {
    e.preventDefault();

    if (!confirm(confirmMessage)) return;

    const url = $(this).attr('href');

    $.ajax({
      url: url,
      method: 'POST',
      dataType: 'json',
      success: function (res) {
        if (redirectUrl) {
            fetch(redirectUrl, {
              headers: { 'X-Requested-With': 'XMLHttpRequest' }
            })
            .then(res => res.text())
            .then(html => {
              document.getElementById('container-load').innerHTML = html;
              initAssets(); // Re-init JS like DataTables
              toastr.success(successMessage);
            });
          } else {
            toastr.error(failMessage + ": " + (res.message || "Unknown Error"));
          }
      },
      error: function () {
        alert("Something went wrong during deletion.");
      }
    });
  });
}

function initAssets() {
    // Re-initialize DataTable
    if ($.fn.dataTable.isDataTable('#dataTable')) {
        $('#dataTable').DataTable().destroy(); 
    }
    $('#dataTable').DataTable({
        "paging": true,
        "searching": true,
        "info": true,
        "ordering": true,
        "lengthMenu": [ [10, 5, 15, 20], [10, 5, 15, 20] ],
        "pageLength": 10 // Default number of rows
    });
}


function loadPageAjax(url) {
    fetch(url, {
        headers: {
            'X-Requested-With': 'XMLHttpRequest'
        }
    })
    .then(res => res.text())
    .then(html => {
        document.getElementById('container-load').innerHTML = html;
    });
}

