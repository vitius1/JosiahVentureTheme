 let prefix = "";

// load first data
CRM.$(function($) {
  firstLoad();
});

function firstLoad() {
  var cid=getCid();
  $.ajax({
    type: "GET",
    dataType: "json",
    url: prefix+"/civicrm/ajax/ActivityList",
    data: "cid="+cid+"&type=1&offset=0&rows=8",
    complete: function(data) {
        var table = '<table id="conversations-table" class="table selector row-highlight">';
        table += '<thead class="sticky table-light"><tr>';
          table += '<th><span class="detail-all" style="margin-right: 20px;"><span class="arrow mr-3"></span></span>With</th>';          
          table += '<th>When</th>';
          table += '<th>Category</th>';
          table += '<th>Created by</th>';
          table += '<th style="text-align: center;">Action</th>';
        table += '</tr></thead><tbody>';
          
        var string = JSON.stringify(data.responseJSON);
        var json = $.parseJSON(string);
        var keys = Object.keys(json);
        
        var count=0;
        var getrows = getRows(table, data, cid, count);
        table=getrows[0];
        var max=getrows[1];
        count=getrows[2];
        
        table += '</tbody></table>';
        table += '<div id="conversation-count" style="display: none;">'+count+'</div>';
        
        $('#conversations').html(table);
    }
});  
}

// get data from json to table
// table html, json data with activities, cid of current contact, count of displayed activities
function getRows(table, data, cid, count) {
  var string = JSON.stringify(data.responseJSON);
  var json = $.parseJSON(string);
  var keys = Object.keys(json);
  var count = 0;
  var a_keys;
  for (var i = 0; i < keys.length; i++) {
    var item = json[keys[i]];
    var max = item["count"];
    var edit = prefix+"/civicrm/activity/add?atype=1&action=update&reset=1&id="+item["activity_id"]+"&cid="+cid;
    var del = prefix+"/civicrm/activity/add?action=delete&reset=1&id="+item["activity_id"]+"&cid="+cid;
    var when = item["activity_date_time"];
    var category = "";
    if(item["category"] != null) {
      var o_keys = Object.keys(item["category"]); 
      for (var l = 0; l < o_keys.length; l++) {
        category += item["category"][o_keys[l]];
        if(l+1 < o_keys.length) {
          category +="/";
        }
      }
    }
    
    var source = '<a href="'+prefix+'/civicrm/contact/view?reset=1&cid='+item["source_contact_id"]+'">'+item["source_contact_name"]+'</a>';
    
    var target = "";
    // target contacts
    var keys_target = Object.keys(item["target_contact_name"]);
    for (var k = 0; k < keys_target.length; k++) {
      target+=' <a href="'+prefix+'/civicrm/contact/view?reset=1&cid='+keys_target[k]+'">'+item["target_contact_name"][keys_target[k]]+'</a>';
    }
    table += '<tr class="odd-row activity drop-hover pointer" id="activity-'+item["activity_id"]+'">';
      table += '<td class="td-long"><span class="arrow" style="margin-right: 33px;"></span>'+target+'</td>';      
      table += '<td class="td-date">'+when+'</td>';
      table += '<td class="td-long" title="'+category+'">'+category+'</td>';
      table += '<td class="td-name">'+source+'</td>';
      table += '<td style="text-align: center;"><i class="fas fa-ellipsis-h dropdown" id="dropdownMenuButton" data-toggle="dropdown"></i><div class="dropdown-menu drop2" aria-labelledby="dropdownMenuButton">';
        table += '<div class="crm-contact_activities-list"><span><a href="'+edit+'">edit</a></span>';
        table += '<span><a href="'+del+'" class="small-popup action">delete</a></span></div>';
      table += '</div></td>';
    table += '</tr>';
    
    table += '<tr class="conversation-detail" id="detail-'+item["activity_id"]+'"><td colspan=5>';
      table += "<div>";
      table += "<div>Notes: </div>";
      if(item["details"]==null) {
        table += "<div><p></p></div>"; 
      } else {
        table += "<div class='black-text'>"+item["details"]+"</div>";
      }
      table += "<span>What can we offer to help meet their needs? </span>";
      table += "<div class='black-text'>";
      if(item["offer"] != null && item["offer"] != "") {
        var o_keys = Object.keys(item["offer"]); 
        for (var l = 0; l < o_keys.length; l++) {
          table += '<span class="orange-text">'+item["offer"][o_keys[l]]+'</span>';
          if(l+2 < o_keys.length) {
            table += ", ";
          } else if (l+1 < o_keys.length) {
            table += " and ";
          }
        }
        table += ". ";
      }
      table += item["offer_more"]+"</div>";
      table += "<div>Who was sent a copy of this conversation?</div><div class='inline'>";
      
      if(item["assignee_contact_name"] != null) {
        a_keys = Object.keys(item["assignee_contact_name"]);      
        for (var m = 0; m < a_keys.length; m++) {
          table += '<a class="conversation-detail-assignee" href="'+prefix+'/civicrm/contact/view?reset=1&cid='+[a_keys[m]]+'">'+item["assignee_contact_name"][a_keys[m]]+'</a>';
          if(m+1 < a_keys.length) {
            table += ", ";
          }
        }
      }  
    table += "</div>";  
    table += '<div class="crm-contact_activities-list float-right"  style="margin-top: -10px;"><a class="edit-button" href="'+edit+'">Edit</a>';
    table += '<a class="delete-button small-popup action" href="'+del+'">Delete</a></div>'; 
    table += "</div></td></tr>";
    count++;
  }
  return [table, max, count];
}

// load more rows after scroll
CRM.$("#conversations").scroll(function() {
  if($(this).scrollTop() + $(this).innerHeight() >= $(this)[0].scrollHeight) {
          var offset = $("#conversation-count").html();
          if(offset!="max") {
            $("#conversations").css("opacity", "0.3");
            var cid=getCid();
            $.ajax({
              type: "GET",
              dataType: "json",
              url: prefix+"/civicrm/ajax/ActivityList",
              data: "cid="+cid+"&type=1&offset="+offset+"&rows=4",
              complete: function(data) {
                var string = JSON.stringify(data.responseJSON);
                var json = $.parseJSON(string);
                var keys = Object.keys(json);
                
                var count = offset;
                var table="";
                
                var getrows = getRows(table, data, cid, count);
                table=getrows[0];
                var max=getrows[1];
                count=getrows[2];
                if(max>parseInt(offset)+count) {
                  $("#conversation-count").html(parseInt(offset)+count);
                } else {
                  $("#conversation-count").html("max");
                }
                $("#conversations-table tbody").append(table);
                $("#conversations").css("opacity", "1");
              }
            });
          }
      } 
});

// show detail after click
CRM.$("#conversations").on("click", ".activity", function(){
  var id = this.id;
  var aid = this.id.split("activity-")[1];
  if($(this).hasClass("active")) {
    $(this).removeClass("active");
    $("#conversation #detail-"+aid).fadeOut("fast");
  } else {
    $(this).addClass("active");
    $("#conversation #detail-"+aid).fadeIn("fast");
  }
});

// show/hide all details
CRM.$("#conversations").on("click", ".detail-all", function(){
  $(".conversation-detail").attr("style", "");
  if($(this).hasClass("active")) {
    $("#conversations").removeClass("all");
    $(this).removeClass("active");
    $(".activity").removeClass("active");
  } else {
    $(this).addClass("active");
    $("#conversations").addClass("all");
    $(".activity").addClass("active");
  }
});

// need to fix it, create trigger after the data are saved and then call this function
// when lightbox is open, in body is class ui-dialog-open 
CRM.$(function($) {
$("body").on("submit", "form[data-submit-once].CRM_Activity_Form_Activity", function(e) {
  $('#conversations').html("");
  setTimeout(function(){
    firstLoad();
  }, 2000);
  
});
});



