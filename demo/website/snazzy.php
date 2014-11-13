<?php require('header.php') ?>
    <div class="row">
      <div class="col-xs-12">
        <div id="simplemap-1" class="google-map">
          <div class="map-marker" data-title="Remi" data-address="Remi 145 W 53rd St, New York, NY, United States"></div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-xs-12 col-md-6">
        <h3 class="code">javascript</h3>
        <pre class="language-javascript">
        <code class="language-javascript">
  jQuery(document).ready(function ($) {
    $('#simplemap-1').simplegmaps({
      MapOptions: {
        styles: [{
      "stylers": [{
          "visibility": "off"
      }]
  }, {
      "featureType": "road",
          "stylers": [{
          "visibility": "on"
      }, {
          "color": "#ffffff"
      }]
  }, {
      "featureType": "road.arterial",
          "stylers": [{
          "visibility": "on"
      }, {
          "color": "#fee379"
      }]
  }, {
      "featureType": "road.highway",
          "stylers": [{
          "visibility": "on"
      }, {
          "color": "#fee379"
      }]
  }, {
      "featureType": "landscape",
          "stylers": [{
          "visibility": "on"
      }, {
          "color": "#f3f4f4"
      }]
  }, {
      "featureType": "water",
          "stylers": [{
          "visibility": "on"
      }, {
          "color": "#7fc8ed"
      }]
  }, {}, {
      "featureType": "road",
          "elementType": "labels.text.fill",
          "stylers": [{
          "color": "#000000",
          "visibility": "off"
      }]
  }, {
      "featureType": "poi.park",
          "elementType": "geometry.fill",
          "stylers": [{
          "visibility": "on"
      }, {
          "color": "#83cead"
      }]
  }, {
      "elementType": "labels.text.fill",
          "stylers": [{
              "color": "#000000",
          "visibility": "on"
      }]
  }, {
      "elementType": "labels.text.stroke",
          "stylers": [{
              "color": "transparent",
          "visibility": "on"
      }]
  }, {
      "featureType": "landscape.man_made",
          "elementType": "geometry",
          "stylers": [{
          "weight": 0.9
      }, {
          "visibility": "off"
      }]
  }]
      }
    });
  });
        </code>
      </pre>
      </div>
      <div class="col-xs-12 col-md-6">
        <h3 class="code">html</h3>
        <pre>
          <code class="language-markup">
  <div id="simplemap" class="google-map">
    <div class="map-marker" data-title="Remi" data-address="Remi 145 W 53rd St, New York, NY, United States"></div>
  </div>
          </code>
        </pre>

      </div>
    </div>
    </div>
<script>
jQuery(document).ready(function ($) {
  $('#simplemap-1').simplegmaps({
    MapOptions: {
      styles: [{
    "stylers": [{
        "visibility": "off"
    }]
}, {
    "featureType": "road",
        "stylers": [{
        "visibility": "on"
    }, {
        "color": "#ffffff"
    }]
}, {
    "featureType": "road.arterial",
        "stylers": [{
        "visibility": "on"
    }, {
        "color": "#fee379"
    }]
}, {
    "featureType": "road.highway",
        "stylers": [{
        "visibility": "on"
    }, {
        "color": "#fee379"
    }]
}, {
    "featureType": "landscape",
        "stylers": [{
        "visibility": "on"
    }, {
        "color": "#f3f4f4"
    }]
}, {
    "featureType": "water",
        "stylers": [{
        "visibility": "on"
    }, {
        "color": "#7fc8ed"
    }]
}, {}, {
    "featureType": "road",
        "elementType": "labels.text.fill",
        "stylers": [{
        "color": "#000000",
        "visibility": "off"
    }]
}, {
    "featureType": "poi.park",
        "elementType": "geometry.fill",
        "stylers": [{
        "visibility": "on"
    }, {
        "color": "#83cead"
    }]
}, {
    "elementType": "labels.text.fill",
        "stylers": [{
            "color": "#000000",
        "visibility": "on"
    }]
}, {
    "elementType": "labels.text.stroke",
        "stylers": [{
            "color": "transparent",
        "visibility": "on"
    }]
}, {
    "featureType": "landscape.man_made",
        "elementType": "geometry",
        "stylers": [{
        "weight": 0.9
    }, {
        "visibility": "off"
    }]
}]
    }
  });
});
</script>
<?php require('footer.php') ?>