<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resume Yance Panjaitan</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            padding: 20px;
        }
        .container {
            max-width: 600px;
            margin: auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 10px;
            box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.1);
        }
        .header {
            text-align: center;
        }
        .header img {
            width: 100px;
            border-radius: 50%;
        }
        .section {
            margin-top: 20px;
        }
        .section-title {
            font-weight: bold;
            font-size: 18px;
            margin-bottom: 5px;
        }
        .skill {
            display: inline-block;
            padding: 5px 10px;
            background-color: #f0f0f0;
            border-radius: 5px;
            margin: 3px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <img src="profile.jpg" alt="Foto Yance Panjaitan">
            <p><strong>Yance Panjaitan</strong></p>
            <p>Undergraduate Information System Student at University of Brawijaya</p>
        </div>
        
        <div class="section">
            <p class="section-title">Pendidikan</p>
            <p><span>SMA NEGERI 2 BALIGE</span> (Apr 2018 - Jan 2020)</p>
            <p><span>University of Brawijaya</span> (2024 - 2028)</p>
        </div>
        
        <div class="section">
            <p class="section-title">Pengalaman Organisasi</p>
            <p>Vice Chairman Of School Safety Division - SMA NEGERI 2 BALIGE</p>
            <p>Team Leadership - SMA NEGERI 2 BALIGE</p>
        </div>
        
        <div class="section">
            <p class="section-title">Keahlian</p>
            <span class="skill">PowerPoint</span>
            <span class="skill">Word</span>
            <span class="skill">C++</span>
        </div>
        
        <div class="section">
            <p class="section-title">Bahasa</p>
            <p>Indonesian — Lancar</p>
            <p>English — Dasar</p>
        </div>
    </div>
<!-- Code injected by live-server -->
<script>
	// <![CDATA[  <-- For SVG support
	if ('WebSocket' in window) {
		(function () {
			function refreshCSS() {
				var sheets = [].slice.call(document.getElementsByTagName("link"));
				var head = document.getElementsByTagName("head")[0];
				for (var i = 0; i < sheets.length; ++i) {
					var elem = sheets[i];
					var parent = elem.parentElement || head;
					parent.removeChild(elem);
					var rel = elem.rel;
					if (elem.href && typeof rel != "string" || rel.length == 0 || rel.toLowerCase() == "stylesheet") {
						var url = elem.href.replace(/(&|\?)_cacheOverride=\d+/, '');
						elem.href = url + (url.indexOf('?') >= 0 ? '&' : '?') + '_cacheOverride=' + (new Date().valueOf());
					}
					parent.appendChild(elem);
				}
			}
			var protocol = window.location.protocol === 'http:' ? 'ws://' : 'wss://';
			var address = protocol + window.location.host + window.location.pathname + '/ws';
			var socket = new WebSocket(address);
			socket.onmessage = function (msg) {
				if (msg.data == 'reload') window.location.reload();
				else if (msg.data == 'refreshcss') refreshCSS();
			};
			if (sessionStorage && !sessionStorage.getItem('IsThisFirstTime_Log_From_LiveServer')) {
				console.log('Live reload enabled.');
				sessionStorage.setItem('IsThisFirstTime_Log_From_LiveServer', true);
			}
		})();
	}
	else {
		console.error('Upgrade your browser. This Browser is NOT supported WebSocket for Live-Reloading.');
	}
	// ]]>
</script>
</body>
</html>
