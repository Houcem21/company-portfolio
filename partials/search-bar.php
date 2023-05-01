<head>
    <link rel="stylesheet" href="./src/search-bar.css">
    <script src="./js/search-bar.js"></script>
</head>

<div class="search-bar-container">
    <input type="text" id="dynamic-placeholder"  />
    <div class="search-bar-button">
    <button type="submit" class="searchButton">
        <i class="fa fa-search"></i>
     </button>
    </div>
</div>

<script>
      window.onload = function() {
        var sp = new SuperPlaceholder({
          placeholders: ["Website creation", "IT consulting", "Graphic design"],
          preText: "Eg. ",
          stay: 1000,
          speed: 100,
          element: '#dynamic-placeholder'
        });
        sp.init();
      }
    </script>