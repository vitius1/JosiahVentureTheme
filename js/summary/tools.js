// edit https://mvp1portal.josiahventure.com/civicrm/contact/view/cd/edit?reset=1&type=Individual&groupID=2&entityID=3&cgcount=1&multiRecordDisplay=single&mode=edit
// view https://mvp1portal.josiahventure.com/civicrm/contact/view/cd?reset=1&gid=2&cid=3&recId=6&cgcount=1&multiRecordDisplay=single&mode=view
// add https://mvp1portal.josiahventure.com/civicrm/contact/view/cd/edit?reset=1&type=Individual&groupID=2&entityID=3&cgcount=6&multiRecordDisplay=single&mode=add
// list https://mvp1portal.josiahventure.com/civicrm/contact/view/cd?reset=1&gid=2&cid=3&selectedChild=custom_2

CRM.$(function() {
  var cid=getCid();
  function loadTolls(cid) {
    $.ajax({
      type: "GET",
      dataType: "json",
      url: prefix+"/civicrm/ajax/ToolsList",
      data: "cid="+cid+"&type=0&gid=2",
      complete: function(data) {
        var status = data.responseJSON["current_level:label"];
        if(status != undefined) {
          $(".discipline-result").html(status);
        } else {
          $(".discipline-result").html("D"); 
        }
      }
    });
    
    $.ajax({
      type: "GET",
      dataType: "json",
      url: prefix+"/civicrm/ajax/ToolsList",
      data: "cid="+cid+"&type=0&gid=3",
      complete: function(data) {
        var status = data.responseJSON["current_level:label"];
        if(status != undefined) {
          $(".gro-result").html("GRO: "+status);
        } else {
          $(".gro-result").html("GRO:"); 
        }
      }
    });
  }
  loadTolls(cid);
  
  $("body").on("submit", "form.CRM_Contact_Form_CustomData", function(e) {
    $("#discipline-result").html("");
    setTimeout(function(){
      loadTolls(cid);
    }, 2000);
    
  });
  
  $('.tool-dropdown').click(function(){
    if($(this).hasClass('collapsed')) {
      $(this).closest('.heading').attr('style', 'background: var(--color-lightest-gray)');
    } else {
      $(this).closest('.heading').attr('style', '');
    }
  });
});