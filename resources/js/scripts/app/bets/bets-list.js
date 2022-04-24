$(function () {
    'use strict';
   var dtUserTable = $('.bet-list-table');
    // Users List datatable
    if (dtUserTable.length) {
     var dataTable =  dtUserTable.DataTable({
        processing: true,
        serverSide: true,
        ajax:{
          url:'/admin/bets/',
          
  
        },  
        columns: [
          // columns according to JSON
          { data: 'id' },
          { data: 'name' },
          {data:'description'},
          { data: 'status',render:function(data){
              if(data==1){
                  return '<span class="badge badge-pill badge-light-success">Active</span>'
              }
              return '<span class="badge badge-pill badge-light-danger">Ended</span>'
          } },
          { data: 'actions',
            render:function(data){
              return data;
            }
        },
        ],
        columnDefs: [
          {
            // For Responsive
            className: 'control',
            orderable: false,
            responsivePriority: 2,
            targets: 0
          },
          {
            // Club name
            targets: 1,
            responsivePriority: 3,
            render: function (data, type, association, meta) {
                var name = '';
                  if (association.name)
                      name += '<a class="emp_name text-truncate fw-bold ml-1" href="/admin/association/'+ association.id + '" title="View ' + association.name + '">' + association.name + '</span>';
                  else
                      name += '<span class="emp_name text-truncate fw-bold ml-1" >' +association.name + '</span>';               
                  return name;
            },
          },      
        ],
        order: [[0, 'desc']],
        dom:
          '<"d-flex justify-content-between align-items-center header-actions mx-1 row mt-75"' +
          '<"col-lg-12 col-xl-6" l>' +
          '<"col-lg-12 col-xl-6 pl-xl-75 pl-0"<"dt-action-buttons text-xl-right text-lg-left text-md-right text-left d-flex align-items-center justify-content-lg-end align-items-center flex-sm-nowrap flex-wrap mr-1"<"mr-1"f>B>>' +
          '>t' +
          '<"d-flex justify-content-between mx-2 row mb-1"' +
          '<"col-sm-12 col-md-6"i>' +
          '<"col-sm-12 col-md-6"p>' +
          '>',
        language: {
          sLengthMenu: 'Show _MENU_',
          search: 'Search',
          searchPlaceholder: 'Search..'
        },
        // Buttons with Dropdown
        buttons: [
                    
        ],
        // For responsive popup
        responsive: {
          details: {
            display: $.fn.dataTable.Responsive.display.modal({
              header: function (row) {
                var data = row.data();
                return 'Details of ' + data['name'];
              }
            }),
            type: 'column',
            renderer: $.fn.dataTable.Responsive.renderer.tableAll({
              tableClass: 'table',
              columnDefs: [
                {
                  targets: 2,
                  visible: false
                },
                {
                  targets: 3,
                  visible: true
                }
              ]
            })
          }
        },
        language: {
          paginate: {
            // remove previous & next text from pagination
            previous: '&nbsp;',
            next: '&nbsp;'
          }
        },
       
      });
    }
  
    // To initialize tooltip with body container
    $('body').tooltip({
      selector: '[data-toggle="tooltip"]',
      container: 'body'
    });
      
     
  
      $("body").on("click", ".delete", function () {
          
          var id = $(this).attr('id');
      
          bootbox.confirm({
              message: "Do you want to delete this Bet?",
              buttons: {
                  confirm: {
                      label: 'Yes',
                      className: 'btn-success'
                  },
                  cancel: {
                      label: 'No',
                      className: 'btn-danger'
                  }
              },
              callback: function (result) {
                  if (result) {
                      $.ajax({
                          url: '/admin/bets/delete',
                          type: 'DELETE',
                          data: { "id": id },
                          success: function (response) {
                              if (response.success) {
                                  $("#" + id).parents('tr').remove();
                          
                                  toastr['success'](
                                      response.message,
                                      'Success!', {
                                      closeButton: true,
                                      tapToDismiss: false,
                                  }
                                  );
  
                              } else {
                                  toastr['error'](
                                      response.error,
                                      'Error!', {
                                      closeButton: true,
                                      tapToDismiss: false,
                                  }
                                  );
                              }
                          }
                      })
                  }
              }
          });
  
      });
  
      $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
      });
  
  //server side datatable custome filtering
  $('#district,#state').on('change',function(){
    dataTable.draw()
  })
  
  });
  