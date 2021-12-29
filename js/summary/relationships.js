


// load first data
CRM.$(function($) {
  firstLoadR();
});

function firstLoadR() {
  var cid=getCid();
  $.ajax({
    type: "GET",
    dataType: "json",
    url: prefix+"/civicrm/ajax/RelationshipList",
    data: "cid="+cid+"&offset=0&rows=7",
    complete: function(data) {
        var table = '<table id="relationships-table" class="table selector row-highlight">';
        table += '<thead class="sticky table-light"><tr>';
          table += '<th>Relationship</th>';
          table += '<th>Person</th>';
          table += '<th>Primary</th>';
          table += '<th>Approx. Duration</th>';
          table += '<th>Description</th>';
          table += '<th>Edit</th>';
        table += '</tr></thead><tbody>';
        
        var count=0;
        var getrows = getRows2(table, data, cid, count);
        table=getrows[0];
        var max=getrows[1];
        count=getrows[2];
        
        table += '</tbody></table>';
        table += '<div id="relationship-count" style="display: none;">'+count+'</div>';
        
        $('#relationships').append(table);
    }
});
}

// get data from json to table
// table html, json data with relationships, cid of current contact, count of displayed relatioships
function getRows2(table, data, cid, count) {
  var string = JSON.stringify(data.responseJSON);
  var json = $.parseJSON(string);
  var keys = Object.keys(json);
  var count = 0;
  var a_keys;
  for (var i = 0; i < keys.length; i++) {
    var item = json[keys[i]];
    var max = item["count"];
    var edit = prefix+"/civicrm/contact/view/rel?id="+item["id"]+"&action=update&type=relationship&reset=1&cid="+cid;
    var del = prefix+"/civicrm/contact/view/rel?id="+item["id"]+"&action=delete&reset=1&cid="+cid;
    
    if(cid==item["contact_id_a.id"]) {
      var role = item["relationship_type_id.label_a_b"].substr(15);
      var to_person = '<a href="'+prefix+'/civicrm/contact/view?reset=1&cid='+item["contact_id_b.id"]+'">'+item["contact_id_b.display_name"]+'</a>';
    } else {
      var role = item["relationship_type_id.label_b_a"].substr(15);
      var to_person = '<a href="'+prefix+'/civicrm/contact/view?reset=1&cid='+item["contact_id_a.id"]+'">'+item["contact_id_a.display_name"]+'</a>';
    }
    
    var start_date = new Date(item["start_date"]);

    var duration;
    if(item["end_date"]!=undefined) {
      var end_date = new Date(item["end_date"]);
      var diff = new Date(end_date - start_date);
    } else {
      duration=start_date; 
      var diff = new Date(Date.now() - start_date);
    }
    duration = Math.abs(diff.getUTCFullYear() - 1970)+" years";    
    
    if(item["description"]==undefined) {
      var description = "";    
    } else {
      var description = item["description"];    
    }
    
    if(item["custom_28"] == "1") {
      var primary = "yes";
    } else {
      var primary = "no";
    }
    
    table += '<tr class="odd-row relationship" id="relationship-'+item["id"]+'">';
      table += '<td>'+role+'</td>';
      table += '<td>'+to_person+'</td>';
      table += '<td>'+primary+'</td>';
      table += '<td>'+duration+'</td>';
      table += '<td>'+description+'</td>';
      table += '<td><i class="fas fa-ellipsis-h dropdown" id="dropdownMenuButton" data-toggle="dropdown"></i><div class="dropdown-menu drop2" aria-labelledby="dropdownMenuButton">';
        table += '<div class="crm-contact_activities-list"><span><a href="'+edit+'">edit</a></span><span><a class="small-popup action" href="'+del+'">delete</a></span></div>';
      table += '</div></td>';
    table += '</tr>';
    
    count++;
  }
  return [table, max, count];
}

CRM.$(function($) {
$("body").on("submit", "form.CRM_Contact_Form_Relationship", function(e) {
  $('#relationships').html("");
  setTimeout(function(){
    firstLoadR();
  }, 2000);
  
});
});