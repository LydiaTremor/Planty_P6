var frontend_block_map;(()=>{"use strict";var e,a={};(e=>{"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})})(a),window.stackableMap=new class{init=()=>{const e=window.stackableMapVars&&window.stackableMapVars.googleApiKey;e?"object"==typeof window.google&&"object"==typeof window.google.maps?this.initMap():this.loadScriptAsync(e).then(this.initMap):[].forEach.call(document.querySelectorAll(".stk--uses-api-key"),(e=>{e.classList.add("stk--missing-api-key"),e.querySelector(".stk-block-map__canvas").innerHTML=window.stackableMapVars.labelMissingMapApiKey}))};loadScriptAsync=e=>new Promise((a=>{const t=document.createElement("script");t.id="stackable-google-map",t.src=`https://maps.googleapis.com/maps/api/js?key=${e}&libraries=places&callback=Function.prototype`,t.type="text/javascript",t.async=!0,t.onload=a,document.body.appendChild(t)}));initMap=()=>{[].forEach.call(document.querySelectorAll(".stk-block-map__canvas"),(e=>{const a=JSON.parse(e.dataset.mapOptions||"{}"),t=JSON.parse(e.dataset.markerOptions||"false"),o=JSON.parse(e.dataset.iconOptions||"{}"),n=new google.maps.Map(e,a);t&&(t.map=n,t.clickable=!1,new google.maps.Marker(t).setIcon(o))}))}},e=window.stackableMap.init,"undefined"!=typeof document&&("complete"!==document.readyState&&"interactive"!==document.readyState?document.addEventListener("DOMContentLoaded",e):e()),frontend_block_map=a})();