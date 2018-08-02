function cat(data) {                           // Callback when JSON loads
  var newContent = '';                                // Variable to hold HTML
 
    // BUILD UP STRING WITH NEW CONTENT (could also use DOM manipulation)
    //for (var i = 0; i < data.events.length; i++) {    // Loop through object
     newContent += '<div class="event">';
     newContent += '<p>' + data.name + '</p>';
     newContent += '<p>' + data.weather[0].main + '</p>';
     newContent += '<p>' + data.weather[0].description + '</p>';
     newContent += '<p>' + data.main.temp + '</p>';
     newContent += '</div>';
    //}

    // Update the page with the new content
    document.getElementById('info').innerHTML = newContent;
}