
<style>
@font-face {
  font-display: swap;
  font-family: FontAwesome;
  src: url("../assets/fonts/fontawesome-webfont.eot?v=4.7.0");
  src: url("../assets/fonts/fontawesome-webfont.eot?#iefix&v=4.7.0")
      format("embedded-opentype"),
    url("../assets/fonts/fontawesome-webfont.woff2?v=4.7.0") format("woff2"),
    url("../assets/fonts/fontawesome-webfont.woff?v=4.7.0") format("woff"),
    url("../assets/fonts/fontawesome-webfont.ttf?v=4.7.0") format("truetype"),
    url("../assets/fonts/fontawesome-webfont.svg?v=4.7.0#fontawesomeregular")
      format("svg");
  font-weight: 400;
  font-style: normal;
}
.fa {
  display: inline-block;
  font: 14px/1 FontAwesome;
  font-size: inherit;
  text-rendering: auto;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}
.fa-facebook-f:before,
.fa-facebook:before {
  content: "\f09a";
}
.fa-facebook-square:before {
  content: "\f082";
}
.fa-facebook-official:before {
  content: "\f230";
}
.fa-twitter-square:before {
  content: "\f081";
}
.fa-twitter:before {
  content: "\f099";
}
.fa-linkedin-square:before {
  content: "\f08c";
}
.fa-linkedin:before {
  content: "\f0e1";
}
.fa-instagram:before {
  content: "\f16d";
}
.fa-youtube-square:before {
  content: "\f166";
}
.fa-youtube:before {
  content: "\f167";
}
.fa-youtube-play:before {
  content: "\f16a";
}
html {
  font-family: sans-serif;
  -webkit-text-size-adjust: 100%;
  -ms-text-size-adjust: 100%;
}
body {
  margin: 0;
}
article,
aside,
details,
figcaption,
figure,
footer,
header,
hgroup,
main,
menu,
nav,
section,
summary {
  display: block;
}
audio,
canvas,
progress,
video {
  display: inline-block;
  vertical-align: baseline;
}
audio:not([controls]) {
  display: none;
  height: 0;
}
[hidden],
template {
  display: none;
}
a {
  background-color: transparent;
}
a:active,
a:hover {
  outline: 0;
}
b,
strong {
  font-weight: 700;
}
dfn {
  font-style: italic;
}
h1 {
  margin: 0.67em 0;
  font-size: 2em;
}
mark {
  color: #000;
  background: #ff0;
}
small {
  font-size: 80%;
}
sub,
sup {
  position: relative;
  font-size: 75%;
  line-height: 0;
  vertical-align: baseline;
}
sup {
  top: -0.5em;
}
sub {
  bottom: -0.25em;
}
img {
  border: 0;
}
svg:not(:root) {
  overflow: hidden;
}
figure {
  margin: 1em 40px;
}
hr {
  height: 0;
  -webkit-box-sizing: content-box;
  -moz-box-sizing: content-box;
  box-sizing: content-box;
}
pre {
  overflow: auto;
}
code,
kbd,
pre,
samp {
  font-family: monospace, monospace;
  font-size: 1em;
}
button,
input,
optgroup,
select,
textarea {
  margin: 0;
  font: inherit;
  color: inherit;
}
button {
  overflow: visible;
}
button,
select {
  text-transform: none;
}
button,
html input[type="button"],
input[type="reset"],
input[type="submit"] {
  -webkit-appearance: button;
  cursor: pointer;
}
button[disabled],
html input[disabled] {
  cursor: default;
}
button::-moz-focus-inner,
input::-moz-focus-inner {
  padding: 0;
  border: 0;
}
input {
  line-height: normal;
}
input[type="checkbox"],
input[type="radio"] {
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  padding: 0;
}
input[type="number"]::-webkit-inner-spin-button,
input[type="number"]::-webkit-outer-spin-button {
  height: auto;
}
input[type="search"] {
  -webkit-box-sizing: content-box;
  -moz-box-sizing: content-box;
  box-sizing: content-box;
  -webkit-appearance: textfield;
}
input[type="search"]::-webkit-search-cancel-button,
input[type="search"]::-webkit-search-decoration {
  -webkit-appearance: none;
}
fieldset {
  padding: 0.35em 0.625em 0.75em;
  margin: 0 2px;
  border: 1px solid silver;
}
legend {
  padding: 0;
  border: 0;
}
textarea {
  overflow: auto;
}
optgroup {
  font-weight: 700;
}
table {
  border-spacing: 0;
  border-collapse: collapse;
}
td,
th {
  padding: 0;
}
@media print {
  *,
  :after,
  :before {
    color: #000 !important;
    text-shadow: none !important;
    background: 0 0 !important;
    -webkit-box-shadow: none !important;
    box-shadow: none !important;
  }
  a,
  a:visited {
    text-decoration: underline;
  }
  a[href]:after {
    content: " (" attr(href) ")";
  }
  abbr[title]:after {
    content: " (" attr(title) ")";
  }
  a[href^="#"]:after,
  a[href^="javascript:"]:after {
    content: "";
  }
  blockquote,
  pre {
    border: 1px solid #999;
    page-break-inside: avoid;
  }
  thead {
    display: table-header-group;
  }
  img,
  tr {
    page-break-inside: avoid;
  }
  img {
    max-width: 100% !important;
  }
  h2,
  h3,
  p {
    orphans: 3;
    widows: 3;
  }
  h2,
  h3 {
    page-break-after: avoid;
  }
  .navbar {
    display: none;
  }
  .btn > .caret,
  .dropup > .btn > .caret {
    border-top-color: #000 !important;
  }
  .label {
    border: 1px solid #000;
  }
  .table {
    border-collapse: collapse !important;
  }
  .table td,
  .table th {
    background-color: #fff !important;
  }
  .table-bordered td,
  .table-bordered th {
    border: 1px solid #ddd !important;
  }
}
@font-face {
  font-family: "Glyphicons Halflings";
  src: url(../assets/fonts/glyphicons-halflings-regular.eot);
  src: url(../assets/fonts/glyphicons-halflings-regular.eot?#iefix)
      format("embedded-opentype"),
    url(../assets/fonts/glyphicons-halflings-regular.woff2) format("woff2"),
    url(../assets/fonts/glyphicons-halflings-regular.woff) format("woff"),
    url(../assets/fonts/glyphicons-halflings-regular.ttf) format("truetype"),
    url(../assets/fonts/glyphicons-halflings-regular.svg#glyphicons_halflingsregular)
      format("svg");
}
.glyphicon {
  position: relative;
  top: 1px;
  display: inline-block;
  font-family: "Glyphicons Halflings";
  font-style: normal;
  font-weight: 400;
  line-height: 1;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}
.glyphicon-asterisk:before {
  content: "\002a";
}
.glyphicon-plus:before {
  content: "\002b";
}
.glyphicon-eur:before,
.glyphicon-euro:before {
  content: "\20ac";
}
.glyphicon-minus:before {
  content: "\2212";
}
.glyphicon-cloud:before {
  content: "\2601";
}
.glyphicon-envelope:before {
  content: "\2709";
}
.glyphicon-pencil:before {
  content: "\270f";
}
.glyphicon-glass:before {
  content: "\e001";
}
.glyphicon-music:before {
  content: "\e002";
}
.glyphicon-search:before {
  content: "\e003";
}
.glyphicon-heart:before {
  content: "\e005";
}
.glyphicon-star:before {
  content: "\e006";
}
.glyphicon-star-empty:before {
  content: "\e007";
}
.glyphicon-user:before {
  content: "\e008";
}
.glyphicon-film:before {
  content: "\e009";
}
.glyphicon-th-large:before {
  content: "\e010";
}
.glyphicon-th:before {
  content: "\e011";
}
.glyphicon-th-list:before {
  content: "\e012";
}
.glyphicon-ok:before {
  content: "\e013";
}
.glyphicon-remove:before {
  content: "\e014";
}
.glyphicon-zoom-in:before {
  content: "\e015";
}
.glyphicon-zoom-out:before {
  content: "\e016";
}
.glyphicon-off:before {
  content: "\e017";
}
.glyphicon-signal:before {
  content: "\e018";
}
.glyphicon-cog:before {
  content: "\e019";
}
.glyphicon-trash:before {
  content: "\e020";
}
.glyphicon-home:before {
  content: "\e021";
}
.glyphicon-file:before {
  content: "\e022";
}
.glyphicon-time:before {
  content: "\e023";
}
.glyphicon-road:before {
  content: "\e024";
}
.glyphicon-download-alt:before {
  content: "\e025";
}
.glyphicon-download:before {
  content: "\e026";
}
.glyphicon-upload:before {
  content: "\e027";
}
.glyphicon-inbox:before {
  content: "\e028";
}
.glyphicon-play-circle:before {
  content: "\e029";
}
.glyphicon-repeat:before {
  content: "\e030";
}
.glyphicon-refresh:before {
  content: "\e031";
}
.glyphicon-list-alt:before {
  content: "\e032";
}
.glyphicon-lock:before {
  content: "\e033";
}
.glyphicon-flag:before {
  content: "\e034";
}
.glyphicon-headphones:before {
  content: "\e035";
}
.glyphicon-volume-off:before {
  content: "\e036";
}
.glyphicon-volume-down:before {
  content: "\e037";
}
.glyphicon-volume-up:before {
  content: "\e038";
}
.glyphicon-qrcode:before {
  content: "\e039";
}
.glyphicon-barcode:before {
  content: "\e040";
}
.glyphicon-tag:before {
  content: "\e041";
}
.glyphicon-tags:before {
  content: "\e042";
}
.glyphicon-book:before {
  content: "\e043";
}
.glyphicon-bookmark:before {
  content: "\e044";
}
.glyphicon-print:before {
  content: "\e045";
}
.glyphicon-camera:before {
  content: "\e046";
}
.glyphicon-font:before {
  content: "\e047";
}
.glyphicon-bold:before {
  content: "\e048";
}
.glyphicon-italic:before {
  content: "\e049";
}
.glyphicon-text-height:before {
  content: "\e050";
}
.glyphicon-text-width:before {
  content: "\e051";
}
.glyphicon-align-left:before {
  content: "\e052";
}
.glyphicon-align-center:before {
  content: "\e053";
}
.glyphicon-align-right:before {
  content: "\e054";
}
.glyphicon-align-justify:before {
  content: "\e055";
}
.glyphicon-list:before {
  content: "\e056";
}
.glyphicon-indent-left:before {
  content: "\e057";
}
.glyphicon-indent-right:before {
  content: "\e058";
}
.glyphicon-facetime-video:before {
  content: "\e059";
}
.glyphicon-picture:before {
  content: "\e060";
}
.glyphicon-map-marker:before {
  content: "\e062";
}
.glyphicon-adjust:before {
  content: "\e063";
}
.glyphicon-tint:before {
  content: "\e064";
}
.glyphicon-edit:before {
  content: "\e065";
}
.glyphicon-share:before {
  content: "\e066";
}
.glyphicon-check:before {
  content: "\e067";
}
.glyphicon-move:before {
  content: "\e068";
}
.glyphicon-step-backward:before {
  content: "\e069";
}
.glyphicon-fast-backward:before {
  content: "\e070";
}
.glyphicon-backward:before {
  content: "\e071";
}
.glyphicon-play:before {
  content: "\e072";
}
.glyphicon-pause:before {
  content: "\e073";
}
.glyphicon-stop:before {
  content: "\e074";
}
.glyphicon-forward:before {
  content: "\e075";
}
.glyphicon-fast-forward:before {
  content: "\e076";
}
.glyphicon-step-forward:before {
  content: "\e077";
}
.glyphicon-eject:before {
  content: "\e078";
}
.glyphicon-chevron-left:before {
  content: "\e079";
}
.glyphicon-chevron-right:before {
  content: "\e080";
}
.glyphicon-plus-sign:before {
  content: "\e081";
}
.glyphicon-minus-sign:before {
  content: "\e082";
}
.glyphicon-remove-sign:before {
  content: "\e083";
}
.glyphicon-ok-sign:before {
  content: "\e084";
}
.glyphicon-question-sign:before {
  content: "\e085";
}
.glyphicon-info-sign:before {
  content: "\e086";
}
.glyphicon-screenshot:before {
  content: "\e087";
}
.glyphicon-remove-circle:before {
  content: "\e088";
}
.glyphicon-ok-circle:before {
  content: "\e089";
}
.glyphicon-ban-circle:before {
  content: "\e090";
}
.glyphicon-arrow-left:before {
  content: "\e091";
}
.glyphicon-arrow-right:before {
  content: "\e092";
}
.glyphicon-arrow-up:before {
  content: "\e093";
}
.glyphicon-arrow-down:before {
  content: "\e094";
}
.glyphicon-share-alt:before {
  content: "\e095";
}
.glyphicon-resize-full:before {
  content: "\e096";
}
.glyphicon-resize-small:before {
  content: "\e097";
}
.glyphicon-exclamation-sign:before {
  content: "\e101";
}
.glyphicon-gift:before {
  content: "\e102";
}
.glyphicon-leaf:before {
  content: "\e103";
}
.glyphicon-fire:before {
  content: "\e104";
}
.glyphicon-eye-open:before {
  content: "\e105";
}
.glyphicon-eye-close:before {
  content: "\e106";
}
.glyphicon-warning-sign:before {
  content: "\e107";
}
.glyphicon-plane:before {
  content: "\e108";
}
.glyphicon-calendar:before {
  content: "\e109";
}
.glyphicon-random:before {
  content: "\e110";
}
.glyphicon-comment:before {
  content: "\e111";
}
.glyphicon-magnet:before {
  content: "\e112";
}
.glyphicon-chevron-up:before {
  content: "\e113";
}
.glyphicon-chevron-down:before {
  content: "\e114";
}
.glyphicon-retweet:before {
  content: "\e115";
}
.glyphicon-shopping-cart:before {
  content: "\e116";
}
.glyphicon-folder-close:before {
  content: "\e117";
}
.glyphicon-folder-open:before {
  content: "\e118";
}
.glyphicon-resize-vertical:before {
  content: "\e119";
}
.glyphicon-resize-horizontal:before {
  content: "\e120";
}
.glyphicon-hdd:before {
  content: "\e121";
}
.glyphicon-bullhorn:before {
  content: "\e122";
}
.glyphicon-bell:before {
  content: "\e123";
}
.glyphicon-certificate:before {
  content: "\e124";
}
.glyphicon-thumbs-up:before {
  content: "\e125";
}
.glyphicon-thumbs-down:before {
  content: "\e126";
}
.glyphicon-hand-right:before {
  content: "\e127";
}
.glyphicon-hand-left:before {
  content: "\e128";
}
.glyphicon-hand-up:before {
  content: "\e129";
}
.glyphicon-hand-down:before {
  content: "\e130";
}
.glyphicon-circle-arrow-right:before {
  content: "\e131";
}
.glyphicon-circle-arrow-left:before {
  content: "\e132";
}
.glyphicon-circle-arrow-up:before {
  content: "\e133";
}
.glyphicon-circle-arrow-down:before {
  content: "\e134";
}
.glyphicon-globe:before {
  content: "\e135";
}
.glyphicon-wrench:before {
  content: "\e136";
}
.glyphicon-tasks:before {
  content: "\e137";
}
.glyphicon-filter:before {
  content: "\e138";
}
.glyphicon-briefcase:before {
  content: "\e139";
}
.glyphicon-fullscreen:before {
  content: "\e140";
}
.glyphicon-dashboard:before {
  content: "\e141";
}
.glyphicon-paperclip:before {
  content: "\e142";
}
.glyphicon-heart-empty:before {
  content: "\e143";
}
.glyphicon-link:before {
  content: "\e144";
}
.glyphicon-phone:before {
  content: "\e145";
}
.glyphicon-pushpin:before {
  content: "\e146";
}
.glyphicon-usd:before {
  content: "\e148";
}
.glyphicon-gbp:before {
  content: "\e149";
}
.glyphicon-sort:before {
  content: "\e150";
}
.glyphicon-sort-by-alphabet:before {
  content: "\e151";
}
.glyphicon-sort-by-alphabet-alt:before {
  content: "\e152";
}
.glyphicon-sort-by-order:before {
  content: "\e153";
}
.glyphicon-sort-by-order-alt:before {
  content: "\e154";
}
.glyphicon-sort-by-attributes:before {
  content: "\e155";
}
.glyphicon-sort-by-attributes-alt:before {
  content: "\e156";
}
.glyphicon-unchecked:before {
  content: "\e157";
}
.glyphicon-expand:before {
  content: "\e158";
}
.glyphicon-collapse-down:before {
  content: "\e159";
}
.glyphicon-collapse-up:before {
  content: "\e160";
}
.glyphicon-log-in:before {
  content: "\e161";
}
.glyphicon-flash:before {
  content: "\e162";
}
.glyphicon-log-out:before {
  content: "\e163";
}
.glyphicon-new-window:before {
  content: "\e164";
}
.glyphicon-record:before {
  content: "\e165";
}
.glyphicon-save:before {
  content: "\e166";
}
.glyphicon-open:before {
  content: "\e167";
}
.glyphicon-saved:before {
  content: "\e168";
}
.glyphicon-import:before {
  content: "\e169";
}
.glyphicon-export:before {
  content: "\e170";
}
.glyphicon-send:before {
  content: "\e171";
}
.glyphicon-floppy-disk:before {
  content: "\e172";
}
.glyphicon-floppy-saved:before {
  content: "\e173";
}
.glyphicon-floppy-remove:before {
  content: "\e174";
}
.glyphicon-floppy-save:before {
  content: "\e175";
}
.glyphicon-floppy-open:before {
  content: "\e176";
}
.glyphicon-credit-card:before {
  content: "\e177";
}
.glyphicon-transfer:before {
  content: "\e178";
}
.glyphicon-cutlery:before {
  content: "\e179";
}
.glyphicon-header:before {
  content: "\e180";
}
.glyphicon-compressed:before {
  content: "\e181";
}
.glyphicon-earphone:before {
  content: "\e182";
}
.glyphicon-phone-alt:before {
  content: "\e183";
}
.glyphicon-tower:before {
  content: "\e184";
}
.glyphicon-stats:before {
  content: "\e185";
}
.glyphicon-sd-video:before {
  content: "\e186";
}
.glyphicon-hd-video:before {
  content: "\e187";
}
.glyphicon-subtitles:before {
  content: "\e188";
}
.glyphicon-sound-stereo:before {
  content: "\e189";
}
.glyphicon-sound-dolby:before {
  content: "\e190";
}
.glyphicon-sound-5-1:before {
  content: "\e191";
}
.glyphicon-sound-6-1:before {
  content: "\e192";
}
.glyphicon-sound-7-1:before {
  content: "\e193";
}
.glyphicon-copyright-mark:before {
  content: "\e194";
}
.glyphicon-registration-mark:before {
  content: "\e195";
}
.glyphicon-cloud-download:before {
  content: "\e197";
}
.glyphicon-cloud-upload:before {
  content: "\e198";
}
.glyphicon-tree-conifer:before {
  content: "\e199";
}
.glyphicon-tree-deciduous:before {
  content: "\e200";
}
.glyphicon-cd:before {
  content: "\e201";
}
.glyphicon-save-file:before {
  content: "\e202";
}
.glyphicon-open-file:before {
  content: "\e203";
}
.glyphicon-level-up:before {
  content: "\e204";
}
.glyphicon-copy:before {
  content: "\e205";
}
.glyphicon-paste:before {
  content: "\e206";
}
.glyphicon-alert:before {
  content: "\e209";
}
.glyphicon-equalizer:before {
  content: "\e210";
}
.glyphicon-king:before {
  content: "\e211";
}
.glyphicon-queen:before {
  content: "\e212";
}
.glyphicon-pawn:before {
  content: "\e213";
}
.glyphicon-bishop:before {
  content: "\e214";
}
.glyphicon-knight:before {
  content: "\e215";
}
.glyphicon-baby-formula:before {
  content: "\e216";
}
.glyphicon-tent:before {
  content: "\26fa";
}
.glyphicon-blackboard:before {
  content: "\e218";
}
.glyphicon-bed:before {
  content: "\e219";
}
.glyphicon-apple:before {
  content: "\f8ff";
}
.glyphicon-erase:before {
  content: "\e221";
}
.glyphicon-hourglass:before {
  content: "\231b";
}
.glyphicon-lamp:before {
  content: "\e223";
}
.glyphicon-duplicate:before {
  content: "\e224";
}
.glyphicon-piggy-bank:before {
  content: "\e225";
}
.glyphicon-scissors:before {
  content: "\e226";
}
.glyphicon-bitcoin:before {
  content: "\e227";
}
.glyphicon-btc:before {
  content: "\e227";
}
.glyphicon-xbt:before {
  content: "\e227";
}
.glyphicon-yen:before {
  content: "\00a5";
}
.glyphicon-jpy:before {
  content: "\00a5";
}
.glyphicon-ruble:before {
  content: "\20bd";
}
.glyphicon-rub:before {
  content: "\20bd";
}
.glyphicon-scale:before {
  content: "\e230";
}
.glyphicon-ice-lolly:before {
  content: "\e231";
}
.glyphicon-ice-lolly-tasted:before {
  content: "\e232";
}
.glyphicon-education:before {
  content: "\e233";
}
.glyphicon-option-horizontal:before {
  content: "\e234";
}
.glyphicon-option-vertical:before {
  content: "\e235";
}
.glyphicon-menu-hamburger:before {
  content: "\e236";
}
.glyphicon-modal-window:before {
  content: "\e237";
}
.glyphicon-oil:before {
  content: "\e238";
}
.glyphicon-grain:before {
  content: "\e239";
}
.glyphicon-sunglasses:before {
  content: "\e240";
}
.glyphicon-text-size:before {
  content: "\e241";
}
.glyphicon-text-color:before {
  content: "\e242";
}
.glyphicon-text-background:before {
  content: "\e243";
}
.glyphicon-object-align-top:before {
  content: "\e244";
}
.glyphicon-object-align-bottom:before {
  content: "\e245";
}
.glyphicon-object-align-horizontal:before {
  content: "\e246";
}
.glyphicon-object-align-left:before {
  content: "\e247";
}
.glyphicon-object-align-vertical:before {
  content: "\e248";
}
.glyphicon-object-align-right:before {
  content: "\e249";
}
.glyphicon-triangle-right:before {
  content: "\e250";
}
.glyphicon-triangle-left:before {
  content: "\e251";
}
.glyphicon-triangle-bottom:before {
  content: "\e252";
}
.glyphicon-triangle-top:before {
  content: "\e253";
}
.glyphicon-console:before {
  content: "\e254";
}
.glyphicon-superscript:before {
  content: "\e255";
}
.glyphicon-subscript:before {
  content: "\e256";
}
.glyphicon-menu-left:before {
  content: "\e257";
}
.glyphicon-menu-right:before {
  content: "\e258";
}
.glyphicon-menu-down:before {
  content: "\e259";
}
.glyphicon-menu-up:before {
  content: "\e260";
}
* {
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}
:after,
:before {
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}
html {
  font-size: 10px;
  -webkit-tap-highlight-color: transparent;
}
body {
  font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
  font-size: 14px;
  line-height: 1.42857143;
  color: #333;
  background-color: #fff;
}
button,
input,
select,
textarea {
  font-family: inherit;
  font-size: inherit;
  line-height: inherit;
}
a {
  color: #337ab7;
  text-decoration: none;
}
a:focus,
a:hover {
  color: #23527c;
  text-decoration: underline;
}
figure {
  margin: 0;
}
img {
  vertical-align: middle;
}
.carousel-inner > .item > a > img,
.carousel-inner > .item > img,
.img-responsive,
.thumbnail a > img,
.thumbnail > img {
  display: block;
  max-width: 100%;
  height: auto;
}
.img-rounded {
  border-radius: 6px;
}
.img-thumbnail {
  display: inline-block;
  max-width: 100%;
  height: auto;
  padding: 4px;
  line-height: 1.42857143;
  background-color: #fff;
  border: 1px solid #ddd;
  border-radius: 4px;
  -webkit-transition: all 0.2s ease-in-out;
  -o-transition: all 0.2s ease-in-out;
  transition: all 0.2s ease-in-out;
}
.img-circle {
  border-radius: 50%;
}
hr {
  margin-top: 20px;
  margin-bottom: 20px;
  border: 0;
  border-top: 1px solid #eee;
}
.sr-only {
  position: absolute;
  width: 1px;
  height: 1px;
  padding: 0;
  margin: -1px;
  overflow: hidden;
  clip: rect(0, 0, 0, 0);
  border: 0;
}
.sr-only-focusable:active,
.sr-only-focusable:focus {
  position: static;
  width: auto;
  height: auto;
  margin: 0;
  overflow: visible;
  clip: auto;
}
[role="button"] {
  cursor: pointer;
}
.h1,
.h2,
.h3,
.h4,
.h5,
.h6,
h1,
h2,
h3,
h4,
h5,
h6 {
  font-family: inherit;
  font-weight: 500;
  line-height: 1.1;
  color: inherit;
}
.h1 .small,
.h1 small,
.h2 .small,
.h2 small,
.h3 .small,
.h3 small,
.h4 .small,
.h4 small,
.h5 .small,
.h5 small,
.h6 .small,
.h6 small,
h1 .small,
h1 small,
h2 .small,
h2 small,
h3 .small,
h3 small,
h4 .small,
h4 small,
h5 .small,
h5 small,
h6 .small,
h6 small {
  font-weight: 400;
  line-height: 1;
  color: #777;
}
.h1,
.h2,
.h3,
h1,
h2,
h3 {
  margin-top: 20px;
  margin-bottom: 10px;
}
.h1 .small,
.h1 small,
.h2 .small,
.h2 small,
.h3 .small,
.h3 small,
h1 .small,
h1 small,
h2 .small,
h2 small,
h3 .small,
h3 small {
  font-size: 65%;
}
.h4,
.h5,
.h6,
h4,
h5,
h6 {
  margin-top: 10px;
  margin-bottom: 10px;
}
.h4 .small,
.h4 small,
.h5 .small,
.h5 small,
.h6 .small,
.h6 small,
h4 .small,
h4 small,
h5 .small,
h5 small,
h6 .small,
h6 small {
  font-size: 75%;
}
.h1,
h1 {
  font-size: 36px;
}
.h2,
h2 {
  font-size: 30px;
}
.h3,
h3 {
  font-size: 24px;
}
.h4,
h4 {
  font-size: 18px;
}
.h5,
h5 {
  font-size: 14px;
}
.h6,
h6 {
  font-size: 12px;
}
p {
  margin: 0 0 10px;
}
.lead {
  margin-bottom: 20px;
  font-size: 16px;
  font-weight: 300;
  line-height: 1.4;
}
@media (min-width: 768px) {
  .lead {
    font-size: 21px;
  }
}
.small,
small {
  font-size: 85%;
}
.mark,
mark {
  padding: 0.2em;
  background-color: #fcf8e3;
}
.text-left {
  text-align: left;
}
.text-right {
  text-align: right;
}
.text-center {
  text-align: center;
}
.text-justify {
  text-align: justify;
}
.text-nowrap {
  white-space: nowrap;
}
.text-lowercase {
  text-transform: lowercase;
}
.text-uppercase {
  text-transform: uppercase;
}
.text-capitalize {
  text-transform: capitalize;
}
.text-muted {
  color: #777;
}
.text-primary {
  color: #337ab7;
}
a.text-primary:focus,
a.text-primary:hover {
  color: #286090;
}
.text-success {
  color: #3c763d;
}
a.text-success:focus,
a.text-success:hover {
  color: #2b542c;
}
.text-info {
  color: #31708f;
}
a.text-info:focus,
a.text-info:hover {
  color: #245269;
}
.text-warning {
  color: #8a6d3b;
}
a.text-warning:focus,
a.text-warning:hover {
  color: #66512c;
}
.text-danger {
  color: #a94442;
}
a.text-danger:focus,
a.text-danger:hover {
  color: #843534;
}
.bg-primary {
  color: #fff;
  background-color: #337ab7;
}
a.bg-primary:focus,
a.bg-primary:hover {
  background-color: #286090;
}
.bg-success {
  background-color: #dff0d8;
}
a.bg-success:focus,
a.bg-success:hover {
  background-color: #c1e2b3;
}
.bg-info {
  background-color: #d9edf7;
}
a.bg-info:focus,
a.bg-info:hover {
  background-color: #afd9ee;
}
.bg-warning {
  background-color: #fcf8e3;
}
a.bg-warning:focus,
a.bg-warning:hover {
  background-color: #f7ecb5;
}
.bg-danger {
  background-color: #f2dede;
}
a.bg-danger:focus,
a.bg-danger:hover {
  background-color: #e4b9b9;
}
.page-header {
  padding-bottom: 9px;
  margin: 40px 0 20px;
  border-bottom: 1px solid #eee;
}
ol,
ul {
  margin-top: 0;
  margin-bottom: 10px;
}
ol ol,
ol ul,
ul ol,
ul ul {
  margin-bottom: 0;
}
.list-unstyled {
  padding-left: 0;
  list-style: none;
}
.list-inline {
  padding-left: 0;
  margin-left: -5px;
  list-style: none;
}
.list-inline > li {
  display: inline-block;
  padding-right: 5px;
  padding-left: 5px;
}
dl {
  margin-top: 0;
  margin-bottom: 20px;
}
dd,
dt {
  line-height: 1.42857143;
}
dt {
  font-weight: 700;
}
dd {
  margin-left: 0;
}
@media (min-width: 768px) {
  .dl-horizontal dt {
    float: left;
    width: 160px;
    overflow: hidden;
    clear: left;
    text-align: right;
    text-overflow: ellipsis;
    white-space: nowrap;
  }
  .dl-horizontal dd {
    margin-left: 180px;
  }
}
abbr[data-original-title],
abbr[title] {
  cursor: help;
}
.initialism {
  font-size: 90%;
  text-transform: uppercase;
}
blockquote {
  padding: 10px 20px;
  margin: 0 0 20px;
  font-size: 17.5px;
  border-left: 5px solid #eee;
}
blockquote ol:last-child,
blockquote p:last-child,
blockquote ul:last-child {
  margin-bottom: 0;
}
blockquote .small,
blockquote footer,
blockquote small {
  display: block;
  font-size: 80%;
  line-height: 1.42857143;
  color: #777;
}
blockquote .small:before,
blockquote footer:before,
blockquote small:before {
  content: "\2014 \00A0";
}
.blockquote-reverse,
blockquote.pull-right {
  padding-right: 15px;
  padding-left: 0;
  text-align: right;
  border-right: 5px solid #eee;
  border-left: 0;
}
.blockquote-reverse .small:before,
.blockquote-reverse footer:before,
.blockquote-reverse small:before,
blockquote.pull-right .small:before,
blockquote.pull-right footer:before,
blockquote.pull-right small:before {
  content: "";
}
.blockquote-reverse .small:after,
.blockquote-reverse footer:after,
.blockquote-reverse small:after,
blockquote.pull-right .small:after,
blockquote.pull-right footer:after,
blockquote.pull-right small:after {
  content: "\00A0 \2014";
}
address {
  margin-bottom: 20px;
  font-style: normal;
  line-height: 1.42857143;
}
code,
kbd,
pre,
samp {
  font-family: Menlo, Monaco, Consolas, "Courier New", monospace;
}
code {
  padding: 2px 4px;
  font-size: 90%;
  color: #c7254e;
  background-color: #f9f2f4;
  border-radius: 4px;
}
kbd {
  padding: 2px 4px;
  font-size: 90%;
  color: #fff;
  background-color: #333;
  border-radius: 3px;
  -webkit-box-shadow: inset 0 -1px 0 rgba(0, 0, 0, 0.25);
  box-shadow: inset 0 -1px 0 rgba(0, 0, 0, 0.25);
}
kbd kbd {
  padding: 0;
  font-size: 100%;
  font-weight: 700;
  -webkit-box-shadow: none;
  box-shadow: none;
}
pre {
  display: block;
  padding: 9.5px;
  margin: 0 0 10px;
  font-size: 13px;
  line-height: 1.42857143;
  color: #333;
  word-break: break-all;
  word-wrap: break-word;
  background-color: #f5f5f5;
  border: 1px solid #ccc;
  border-radius: 4px;
}
pre code {
  padding: 0;
  font-size: inherit;
  color: inherit;
  white-space: pre-wrap;
  background-color: transparent;
  border-radius: 0;
}
.pre-scrollable {
  max-height: 340px;
  overflow-y: scroll;
}
.container {
  padding-right: 15px;
  padding-left: 15px;
  margin-right: auto;
  margin-left: auto;
}
@media (min-width: 768px) {
  .container {
    width: 750px;
  }
}
@media (min-width: 992px) {
  .container {
    width: 970px;
  }
}
@media (min-width: 1200px) {
  .container {
    width: 1170px;
  }
}
.container-fluid {
  padding-right: 15px;
  padding-left: 15px;
  margin-right: auto;
  margin-left: auto;
}
.row {
  margin-right: -15px;
  margin-left: -15px;
}
.col-lg-1,
.col-lg-10,
.col-lg-11,
.col-lg-12,
.col-lg-2,
.col-lg-3,
.col-lg-4,
.col-lg-5,
.col-lg-6,
.col-lg-7,
.col-lg-8,
.col-lg-9,
.col-md-1,
.col-md-10,
.col-md-11,
.col-md-12,
.col-md-2,
.col-md-3,
.col-md-4,
.col-md-5,
.col-md-6,
.col-md-7,
.col-md-8,
.col-md-9,
.col-sm-1,
.col-sm-10,
.col-sm-11,
.col-sm-12,
.col-sm-2,
.col-sm-3,
.col-sm-4,
.col-sm-5,
.col-sm-6,
.col-sm-7,
.col-sm-8,
.col-sm-9,
.col-xs-1,
.col-xs-10,
.col-xs-11,
.col-xs-12,
.col-xs-2,
.col-xs-3,
.col-xs-4,
.col-xs-5,
.col-xs-6,
.col-xs-7,
.col-xs-8,
.col-xs-9 {
  position: relative;
  min-height: 1px;
  padding-right: 15px;
  padding-left: 15px;
}
.col-xs-1,
.col-xs-10,
.col-xs-11,
.col-xs-12,
.col-xs-2,
.col-xs-3,
.col-xs-4,
.col-xs-5,
.col-xs-6,
.col-xs-7,
.col-xs-8,
.col-xs-9 {
  float: left;
}
.col-xs-12 {
  width: 100%;
}
.col-xs-11 {
  width: 91.66666667%;
}
.col-xs-10 {
  width: 83.33333333%;
}
.col-xs-9 {
  width: 75%;
}
.col-xs-8 {
  width: 66.66666667%;
}
.col-xs-7 {
  width: 58.33333333%;
}
.col-xs-6 {
  width: 50%;
}
.col-xs-5 {
  width: 41.66666667%;
}
.col-xs-4 {
  width: 33.33333333%;
}
.col-xs-3 {
  width: 25%;
}
.col-xs-2 {
  width: 16.66666667%;
}
.col-xs-1 {
  width: 8.33333333%;
}
.col-xs-pull-12 {
  right: 100%;
}
.col-xs-pull-11 {
  right: 91.66666667%;
}
.col-xs-pull-10 {
  right: 83.33333333%;
}
.col-xs-pull-9 {
  right: 75%;
}
.col-xs-pull-8 {
  right: 66.66666667%;
}
.col-xs-pull-7 {
  right: 58.33333333%;
}
.col-xs-pull-6 {
  right: 50%;
}
.col-xs-pull-5 {
  right: 41.66666667%;
}
.col-xs-pull-4 {
  right: 33.33333333%;
}
.col-xs-pull-3 {
  right: 25%;
}
.col-xs-pull-2 {
  right: 16.66666667%;
}
.col-xs-pull-1 {
  right: 8.33333333%;
}
.col-xs-pull-0 {
  right: auto;
}
.col-xs-push-12 {
  left: 100%;
}
.col-xs-push-11 {
  left: 91.66666667%;
}
.col-xs-push-10 {
  left: 83.33333333%;
}
.col-xs-push-9 {
  left: 75%;
}
.col-xs-push-8 {
  left: 66.66666667%;
}
.col-xs-push-7 {
  left: 58.33333333%;
}
.col-xs-push-6 {
  left: 50%;
}
.col-xs-push-5 {
  left: 41.66666667%;
}
.col-xs-push-4 {
  left: 33.33333333%;
}
.col-xs-push-3 {
  left: 25%;
}
.col-xs-push-2 {
  left: 16.66666667%;
}
.col-xs-push-1 {
  left: 8.33333333%;
}
.col-xs-push-0 {
  left: auto;
}
.col-xs-offset-12 {
  margin-left: 100%;
}
.col-xs-offset-11 {
  margin-left: 91.66666667%;
}
.col-xs-offset-10 {
  margin-left: 83.33333333%;
}
.col-xs-offset-9 {
  margin-left: 75%;
}
.col-xs-offset-8 {
  margin-left: 66.66666667%;
}
.col-xs-offset-7 {
  margin-left: 58.33333333%;
}
.col-xs-offset-6 {
  margin-left: 50%;
}
.col-xs-offset-5 {
  margin-left: 41.66666667%;
}
.col-xs-offset-4 {
  margin-left: 33.33333333%;
}
.col-xs-offset-3 {
  margin-left: 25%;
}
.col-xs-offset-2 {
  margin-left: 16.66666667%;
}
.col-xs-offset-1 {
  margin-left: 8.33333333%;
}
.col-xs-offset-0 {
  margin-left: 0;
}
@media (min-width: 768px) {
  .col-sm-1,
  .col-sm-10,
  .col-sm-11,
  .col-sm-12,
  .col-sm-2,
  .col-sm-3,
  .col-sm-4,
  .col-sm-5,
  .col-sm-6,
  .col-sm-7,
  .col-sm-8,
  .col-sm-9 {
    float: left;
  }
  .col-sm-12 {
    width: 100%;
  }
  .col-sm-11 {
    width: 91.66666667%;
  }
  .col-sm-10 {
    width: 83.33333333%;
  }
  .col-sm-9 {
    width: 75%;
  }
  .col-sm-8 {
    width: 66.66666667%;
  }
  .col-sm-7 {
    width: 58.33333333%;
  }
  .col-sm-6 {
    width: 50%;
  }
  .col-sm-5 {
    width: 41.66666667%;
  }
  .col-sm-4 {
    width: 33.33333333%;
  }
  .col-sm-3 {
    width: 25%;
  }
  .col-sm-2 {
    width: 16.66666667%;
  }
  .col-sm-1 {
    width: 8.33333333%;
  }
  .col-sm-pull-12 {
    right: 100%;
  }
  .col-sm-pull-11 {
    right: 91.66666667%;
  }
  .col-sm-pull-10 {
    right: 83.33333333%;
  }
  .col-sm-pull-9 {
    right: 75%;
  }
  .col-sm-pull-8 {
    right: 66.66666667%;
  }
  .col-sm-pull-7 {
    right: 58.33333333%;
  }
  .col-sm-pull-6 {
    right: 50%;
  }
  .col-sm-pull-5 {
    right: 41.66666667%;
  }
  .col-sm-pull-4 {
    right: 33.33333333%;
  }
  .col-sm-pull-3 {
    right: 25%;
  }
  .col-sm-pull-2 {
    right: 16.66666667%;
  }
  .col-sm-pull-1 {
    right: 8.33333333%;
  }
  .col-sm-pull-0 {
    right: auto;
  }
  .col-sm-push-12 {
    left: 100%;
  }
  .col-sm-push-11 {
    left: 91.66666667%;
  }
  .col-sm-push-10 {
    left: 83.33333333%;
  }
  .col-sm-push-9 {
    left: 75%;
  }
  .col-sm-push-8 {
    left: 66.66666667%;
  }
  .col-sm-push-7 {
    left: 58.33333333%;
  }
  .col-sm-push-6 {
    left: 50%;
  }
  .col-sm-push-5 {
    left: 41.66666667%;
  }
  .col-sm-push-4 {
    left: 33.33333333%;
  }
  .col-sm-push-3 {
    left: 25%;
  }
  .col-sm-push-2 {
    left: 16.66666667%;
  }
  .col-sm-push-1 {
    left: 8.33333333%;
  }
  .col-sm-push-0 {
    left: auto;
  }
  .col-sm-offset-12 {
    margin-left: 100%;
  }
  .col-sm-offset-11 {
    margin-left: 91.66666667%;
  }
  .col-sm-offset-10 {
    margin-left: 83.33333333%;
  }
  .col-sm-offset-9 {
    margin-left: 75%;
  }
  .col-sm-offset-8 {
    margin-left: 66.66666667%;
  }
  .col-sm-offset-7 {
    margin-left: 58.33333333%;
  }
  .col-sm-offset-6 {
    margin-left: 50%;
  }
  .col-sm-offset-5 {
    margin-left: 41.66666667%;
  }
  .col-sm-offset-4 {
    margin-left: 33.33333333%;
  }
  .col-sm-offset-3 {
    margin-left: 25%;
  }
  .col-sm-offset-2 {
    margin-left: 16.66666667%;
  }
  .col-sm-offset-1 {
    margin-left: 8.33333333%;
  }
  .col-sm-offset-0 {
    margin-left: 0;
  }
}
@media (min-width: 992px) {
  .col-md-1,
  .col-md-10,
  .col-md-11,
  .col-md-12,
  .col-md-2,
  .col-md-3,
  .col-md-4,
  .col-md-5,
  .col-md-6,
  .col-md-7,
  .col-md-8,
  .col-md-9 {
    float: left;
  }
  .col-md-12 {
    width: 100%;
  }
  .col-md-11 {
    width: 91.66666667%;
  }
  .col-md-10 {
    width: 83.33333333%;
  }
  .col-md-9 {
    width: 75%;
  }
  .col-md-8 {
    width: 66.66666667%;
  }
  .col-md-7 {
    width: 58.33333333%;
  }
  .col-md-6 {
    width: 50%;
  }
  .col-md-5 {
    width: 41.66666667%;
  }
  .col-md-4 {
    width: 33.33333333%;
  }
  .col-md-3 {
    width: 25%;
  }
  .col-md-2 {
    width: 16.66666667%;
  }
  .col-md-1 {
    width: 8.33333333%;
  }
  .col-md-pull-12 {
    right: 100%;
  }
  .col-md-pull-11 {
    right: 91.66666667%;
  }
  .col-md-pull-10 {
    right: 83.33333333%;
  }
  .col-md-pull-9 {
    right: 75%;
  }
  .col-md-pull-8 {
    right: 66.66666667%;
  }
  .col-md-pull-7 {
    right: 58.33333333%;
  }
  .col-md-pull-6 {
    right: 50%;
  }
  .col-md-pull-5 {
    right: 41.66666667%;
  }
  .col-md-pull-4 {
    right: 33.33333333%;
  }
  .col-md-pull-3 {
    right: 25%;
  }
  .col-md-pull-2 {
    right: 16.66666667%;
  }
  .col-md-pull-1 {
    right: 8.33333333%;
  }
  .col-md-pull-0 {
    right: auto;
  }
  .col-md-push-12 {
    left: 100%;
  }
  .col-md-push-11 {
    left: 91.66666667%;
  }
  .col-md-push-10 {
    left: 83.33333333%;
  }
  .col-md-push-9 {
    left: 75%;
  }
  .col-md-push-8 {
    left: 66.66666667%;
  }
  .col-md-push-7 {
    left: 58.33333333%;
  }
  .col-md-push-6 {
    left: 50%;
  }
  .col-md-push-5 {
    left: 41.66666667%;
  }
  .col-md-push-4 {
    left: 33.33333333%;
  }
  .col-md-push-3 {
    left: 25%;
  }
  .col-md-push-2 {
    left: 16.66666667%;
  }
  .col-md-push-1 {
    left: 8.33333333%;
  }
  .col-md-push-0 {
    left: auto;
  }
  .col-md-offset-12 {
    margin-left: 100%;
  }
  .col-md-offset-11 {
    margin-left: 91.66666667%;
  }
  .col-md-offset-10 {
    margin-left: 83.33333333%;
  }
  .col-md-offset-9 {
    margin-left: 75%;
  }
  .col-md-offset-8 {
    margin-left: 66.66666667%;
  }
  .col-md-offset-7 {
    margin-left: 58.33333333%;
  }
  .col-md-offset-6 {
    margin-left: 50%;
  }
  .col-md-offset-5 {
    margin-left: 41.66666667%;
  }
  .col-md-offset-4 {
    margin-left: 33.33333333%;
  }
  .col-md-offset-3 {
    margin-left: 25%;
  }
  .col-md-offset-2 {
    margin-left: 16.66666667%;
  }
  .col-md-offset-1 {
    margin-left: 8.33333333%;
  }
  .col-md-offset-0 {
    margin-left: 0;
  }
}
@media (min-width: 1200px) {
  .col-lg-1,
  .col-lg-10,
  .col-lg-11,
  .col-lg-12,
  .col-lg-2,
  .col-lg-3,
  .col-lg-4,
  .col-lg-5,
  .col-lg-6,
  .col-lg-7,
  .col-lg-8,
  .col-lg-9 {
    float: left;
  }
  .col-lg-12 {
    width: 100%;
  }
  .col-lg-11 {
    width: 91.66666667%;
  }
  .col-lg-10 {
    width: 83.33333333%;
  }
  .col-lg-9 {
    width: 75%;
  }
  .col-lg-8 {
    width: 66.66666667%;
  }
  .col-lg-7 {
    width: 58.33333333%;
  }
  .col-lg-6 {
    width: 50%;
  }
  .col-lg-5 {
    width: 41.66666667%;
  }
  .col-lg-4 {
    width: 33.33333333%;
  }
  .col-lg-3 {
    width: 25%;
  }
  .col-lg-2 {
    width: 16.66666667%;
  }
  .col-lg-1 {
    width: 8.33333333%;
  }
  .col-lg-pull-12 {
    right: 100%;
  }
  .col-lg-pull-11 {
    right: 91.66666667%;
  }
  .col-lg-pull-10 {
    right: 83.33333333%;
  }
  .col-lg-pull-9 {
    right: 75%;
  }
  .col-lg-pull-8 {
    right: 66.66666667%;
  }
  .col-lg-pull-7 {
    right: 58.33333333%;
  }
  .col-lg-pull-6 {
    right: 50%;
  }
  .col-lg-pull-5 {
    right: 41.66666667%;
  }
  .col-lg-pull-4 {
    right: 33.33333333%;
  }
  .col-lg-pull-3 {
    right: 25%;
  }
  .col-lg-pull-2 {
    right: 16.66666667%;
  }
  .col-lg-pull-1 {
    right: 8.33333333%;
  }
  .col-lg-pull-0 {
    right: auto;
  }
  .col-lg-push-12 {
    left: 100%;
  }
  .col-lg-push-11 {
    left: 91.66666667%;
  }
  .col-lg-push-10 {
    left: 83.33333333%;
  }
  .col-lg-push-9 {
    left: 75%;
  }
  .col-lg-push-8 {
    left: 66.66666667%;
  }
  .col-lg-push-7 {
    left: 58.33333333%;
  }
  .col-lg-push-6 {
    left: 50%;
  }
  .col-lg-push-5 {
    left: 41.66666667%;
  }
  .col-lg-push-4 {
    left: 33.33333333%;
  }
  .col-lg-push-3 {
    left: 25%;
  }
  .col-lg-push-2 {
    left: 16.66666667%;
  }
  .col-lg-push-1 {
    left: 8.33333333%;
  }
  .col-lg-push-0 {
    left: auto;
  }
  .col-lg-offset-12 {
    margin-left: 100%;
  }
  .col-lg-offset-11 {
    margin-left: 91.66666667%;
  }
  .col-lg-offset-10 {
    margin-left: 83.33333333%;
  }
  .col-lg-offset-9 {
    margin-left: 75%;
  }
  .col-lg-offset-8 {
    margin-left: 66.66666667%;
  }
  .col-lg-offset-7 {
    margin-left: 58.33333333%;
  }
  .col-lg-offset-6 {
    margin-left: 50%;
  }
  .col-lg-offset-5 {
    margin-left: 41.66666667%;
  }
  .col-lg-offset-4 {
    margin-left: 33.33333333%;
  }
  .col-lg-offset-3 {
    margin-left: 25%;
  }
  .col-lg-offset-2 {
    margin-left: 16.66666667%;
  }
  .col-lg-offset-1 {
    margin-left: 8.33333333%;
  }
  .col-lg-offset-0 {
    margin-left: 0;
  }
}
table {
  background-color: transparent;
}
caption {
  padding-top: 8px;
  padding-bottom: 8px;
  color: #777;
  text-align: left;
}
th {
  text-align: left;
}
.table {
  width: 100%;
  max-width: 100%;
  margin-bottom: 20px;
}
.table > tbody > tr > td,
.table > tbody > tr > th,
.table > tfoot > tr > td,
.table > tfoot > tr > th,
.table > thead > tr > td,
.table > thead > tr > th {
  padding: 8px;
  line-height: 1.42857143;
  vertical-align: top;
  border-top: 1px solid #ddd;
}
.table > thead > tr > th {
  vertical-align: bottom;
  border-bottom: 2px solid #ddd;
}
.table > caption + thead > tr:first-child > td,
.table > caption + thead > tr:first-child > th,
.table > colgroup + thead > tr:first-child > td,
.table > colgroup + thead > tr:first-child > th,
.table > thead:first-child > tr:first-child > td,
.table > thead:first-child > tr:first-child > th {
  border-top: 0;
}
.table > tbody + tbody {
  border-top: 2px solid #ddd;
}
.table .table {
  background-color: #fff;
}
.table-condensed > tbody > tr > td,
.table-condensed > tbody > tr > th,
.table-condensed > tfoot > tr > td,
.table-condensed > tfoot > tr > th,
.table-condensed > thead > tr > td,
.table-condensed > thead > tr > th {
  padding: 5px;
}
.table-bordered {
  border: 1px solid #ddd;
}
.table-bordered > tbody > tr > td,
.table-bordered > tbody > tr > th,
.table-bordered > tfoot > tr > td,
.table-bordered > tfoot > tr > th,
.table-bordered > thead > tr > td,
.table-bordered > thead > tr > th {
  border: 1px solid #ddd;
}
.table-bordered > thead > tr > td,
.table-bordered > thead > tr > th {
  border-bottom-width: 2px;
}
.table-striped > tbody > tr:nth-of-type(odd) {
  background-color: #f9f9f9;
}
.table-hover > tbody > tr:hover {
  background-color: #f5f5f5;
}
table col[class*="col-"] {
  position: static;
  display: table-column;
  float: none;
}
table td[class*="col-"],
table th[class*="col-"] {
  position: static;
  display: table-cell;
  float: none;
}
.table > tbody > tr.active > td,
.table > tbody > tr.active > th,
.table > tbody > tr > td.active,
.table > tbody > tr > th.active,
.table > tfoot > tr.active > td,
.table > tfoot > tr.active > th,
.table > tfoot > tr > td.active,
.table > tfoot > tr > th.active,
.table > thead > tr.active > td,
.table > thead > tr.active > th,
.table > thead > tr > td.active,
.table > thead > tr > th.active {
  background-color: #f5f5f5;
}
.table-hover > tbody > tr.active:hover > td,
.table-hover > tbody > tr.active:hover > th,
.table-hover > tbody > tr:hover > .active,
.table-hover > tbody > tr > td.active:hover,
.table-hover > tbody > tr > th.active:hover {
  background-color: #e8e8e8;
}
.table > tbody > tr.success > td,
.table > tbody > tr.success > th,
.table > tbody > tr > td.success,
.table > tbody > tr > th.success,
.table > tfoot > tr.success > td,
.table > tfoot > tr.success > th,
.table > tfoot > tr > td.success,
.table > tfoot > tr > th.success,
.table > thead > tr.success > td,
.table > thead > tr.success > th,
.table > thead > tr > td.success,
.table > thead > tr > th.success {
  background-color: #dff0d8;
}
.table-hover > tbody > tr.success:hover > td,
.table-hover > tbody > tr.success:hover > th,
.table-hover > tbody > tr:hover > .success,
.table-hover > tbody > tr > td.success:hover,
.table-hover > tbody > tr > th.success:hover {
  background-color: #d0e9c6;
}
.table > tbody > tr.info > td,
.table > tbody > tr.info > th,
.table > tbody > tr > td.info,
.table > tbody > tr > th.info,
.table > tfoot > tr.info > td,
.table > tfoot > tr.info > th,
.table > tfoot > tr > td.info,
.table > tfoot > tr > th.info,
.table > thead > tr.info > td,
.table > thead > tr.info > th,
.table > thead > tr > td.info,
.table > thead > tr > th.info {
  background-color: #d9edf7;
}
.table-hover > tbody > tr.info:hover > td,
.table-hover > tbody > tr.info:hover > th,
.table-hover > tbody > tr:hover > .info,
.table-hover > tbody > tr > td.info:hover,
.table-hover > tbody > tr > th.info:hover {
  background-color: #c4e3f3;
}
.table > tbody > tr.warning > td,
.table > tbody > tr.warning > th,
.table > tbody > tr > td.warning,
.table > tbody > tr > th.warning,
.table > tfoot > tr.warning > td,
.table > tfoot > tr.warning > th,
.table > tfoot > tr > td.warning,
.table > tfoot > tr > th.warning,
.table > thead > tr.warning > td,
.table > thead > tr.warning > th,
.table > thead > tr > td.warning,
.table > thead > tr > th.warning {
  background-color: #fcf8e3;
}
.table-hover > tbody > tr.warning:hover > td,
.table-hover > tbody > tr.warning:hover > th,
.table-hover > tbody > tr:hover > .warning,
.table-hover > tbody > tr > td.warning:hover,
.table-hover > tbody > tr > th.warning:hover {
  background-color: #faf2cc;
}
.table > tbody > tr.danger > td,
.table > tbody > tr.danger > th,
.table > tbody > tr > td.danger,
.table > tbody > tr > th.danger,
.table > tfoot > tr.danger > td,
.table > tfoot > tr.danger > th,
.table > tfoot > tr > td.danger,
.table > tfoot > tr > th.danger,
.table > thead > tr.danger > td,
.table > thead > tr.danger > th,
.table > thead > tr > td.danger,
.table > thead > tr > th.danger {
  background-color: #f2dede;
}
.table-hover > tbody > tr.danger:hover > td,
.table-hover > tbody > tr.danger:hover > th,
.table-hover > tbody > tr:hover > .danger,
.table-hover > tbody > tr > td.danger:hover,
.table-hover > tbody > tr > th.danger:hover {
  background-color: #ebcccc;
}
.table-responsive {
  min-height: 0.01%;
  overflow-x: auto;
}
@media screen and (max-width: 767px) {
  .table-responsive {
    width: 100%;
    margin-bottom: 15px;
    overflow-y: hidden;
    -ms-overflow-style: -ms-autohiding-scrollbar;
    border: 1px solid #ddd;
  }
  .table-responsive > .table {
    margin-bottom: 0;
  }
  .table-responsive > .table > tbody > tr > td,
  .table-responsive > .table > tbody > tr > th,
  .table-responsive > .table > tfoot > tr > td,
  .table-responsive > .table > tfoot > tr > th,
  .table-responsive > .table > thead > tr > td,
  .table-responsive > .table > thead > tr > th {
    white-space: nowrap;
  }
  .table-responsive > .table-bordered {
    border: 0;
  }
  .table-responsive > .table-bordered > tbody > tr > td:first-child,
  .table-responsive > .table-bordered > tbody > tr > th:first-child,
  .table-responsive > .table-bordered > tfoot > tr > td:first-child,
  .table-responsive > .table-bordered > tfoot > tr > th:first-child,
  .table-responsive > .table-bordered > thead > tr > td:first-child,
  .table-responsive > .table-bordered > thead > tr > th:first-child {
    border-left: 0;
  }
  .table-responsive > .table-bordered > tbody > tr > td:last-child,
  .table-responsive > .table-bordered > tbody > tr > th:last-child,
  .table-responsive > .table-bordered > tfoot > tr > td:last-child,
  .table-responsive > .table-bordered > tfoot > tr > th:last-child,
  .table-responsive > .table-bordered > thead > tr > td:last-child,
  .table-responsive > .table-bordered > thead > tr > th:last-child {
    border-right: 0;
  }
  .table-responsive > .table-bordered > tbody > tr:last-child > td,
  .table-responsive > .table-bordered > tbody > tr:last-child > th,
  .table-responsive > .table-bordered > tfoot > tr:last-child > td,
  .table-responsive > .table-bordered > tfoot > tr:last-child > th {
    border-bottom: 0;
  }
}
fieldset {
  min-width: 0;
  padding: 0;
  margin: 0;
  border: 0;
}
legend {
  display: block;
  width: 100%;
  padding: 0;
  margin-bottom: 20px;
  font-size: 21px;
  line-height: inherit;
  color: #333;
  border: 0;
  border-bottom: 1px solid #e5e5e5;
}
label {
  display: inline-block;
  max-width: 100%;
  margin-bottom: 5px;
  font-weight: 700;
}
input[type="search"] {
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}
input[type="checkbox"],
input[type="radio"] {
  margin: 4px 0 0;
  line-height: normal;
}
input[type="file"] {
  display: block;
}
input[type="range"] {
  display: block;
  width: 100%;
}
select[multiple],
select[size] {
  height: auto;
}
output {
  display: block;
  padding-top: 7px;
  font-size: 14px;
  line-height: 1.42857143;
  color: #555;
}
.form-control {
  display: block;
  width: 100%;
  height: 34px;
  padding: 6px 12px;
  font-size: 14px;
  line-height: 1.42857143;
  color: #555;
  background-color: #fff;
  background-image: none;
  border: 1px solid #ccc;
  border-radius: 4px;
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
  box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
  -webkit-transition: border-color ease-in-out 0.15s,
    -webkit-box-shadow ease-in-out 0.15s;
  -o-transition: border-color ease-in-out 0.15s, box-shadow ease-in-out 0.15s;
  transition: border-color ease-in-out 0.15s, box-shadow ease-in-out 0.15s;
}
.form-control:focus {
  border-color: #66afe9;
  outline: 0;
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075),
    0 0 8px rgba(102, 175, 233, 0.6);
  box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075),
    0 0 8px rgba(102, 175, 233, 0.6);
}
.form-control::-moz-placeholder {
  color: #999;
  opacity: 1;
}
.form-control:-ms-input-placeholder {
  color: #999;
}
.form-control::-webkit-input-placeholder {
  color: #999;
}
.form-control::-ms-expand {
  background-color: transparent;
  border: 0;
}
.form-control[disabled],
.form-control[readonly],
fieldset[disabled] .form-control {
  background-color: #eee;
  opacity: 1;
}
.form-control[disabled],
fieldset[disabled] .form-control {
  cursor: not-allowed;
}
textarea.form-control {
  height: auto;
}
input[type="search"] {
  -webkit-appearance: none;
}
@media screen and (-webkit-min-device-pixel-ratio: 0) {
  input[type="date"].form-control,
  input[type="datetime-local"].form-control,
  input[type="month"].form-control,
  input[type="time"].form-control {
    line-height: 34px;
  }
  .input-group-sm input[type="date"],
  .input-group-sm input[type="datetime-local"],
  .input-group-sm input[type="month"],
  .input-group-sm input[type="time"],
  input[type="date"].input-sm,
  input[type="datetime-local"].input-sm,
  input[type="month"].input-sm,
  input[type="time"].input-sm {
    line-height: 30px;
  }
  .input-group-lg input[type="date"],
  .input-group-lg input[type="datetime-local"],
  .input-group-lg input[type="month"],
  .input-group-lg input[type="time"],
  input[type="date"].input-lg,
  input[type="datetime-local"].input-lg,
  input[type="month"].input-lg,
  input[type="time"].input-lg {
    line-height: 46px;
  }
}
.form-group {
  margin-bottom: 15px;
}
.checkbox,
.radio {
  position: relative;
  display: block;
  margin-top: 10px;
  margin-bottom: 10px;
}
.checkbox label,
.radio label {
  min-height: 20px;
  padding-left: 20px;
  margin-bottom: 0;
  font-weight: 400;
  cursor: pointer;
}
.checkbox input[type="checkbox"],
.checkbox-inline input[type="checkbox"],
.radio input[type="radio"],
.radio-inline input[type="radio"] {
  position: absolute;
  margin-left: -20px;
}
.checkbox + .checkbox,
.radio + .radio {
  margin-top: -5px;
}
.checkbox-inline,
.radio-inline {
  position: relative;
  display: inline-block;
  padding-left: 20px;
  margin-bottom: 0;
  font-weight: 400;
  vertical-align: middle;
  cursor: pointer;
}
.checkbox-inline + .checkbox-inline,
.radio-inline + .radio-inline {
  margin-top: 0;
  margin-left: 10px;
}
fieldset[disabled] input[type="checkbox"],
fieldset[disabled] input[type="radio"],
input[type="checkbox"].disabled,
input[type="checkbox"][disabled],
input[type="radio"].disabled,
input[type="radio"][disabled] {
  cursor: not-allowed;
}
.checkbox-inline.disabled,
.radio-inline.disabled,
fieldset[disabled] .checkbox-inline,
fieldset[disabled] .radio-inline {
  cursor: not-allowed;
}
.checkbox.disabled label,
.radio.disabled label,
fieldset[disabled] .checkbox label,
fieldset[disabled] .radio label {
  cursor: not-allowed;
}
.form-control-static {
  min-height: 34px;
  padding-top: 7px;
  padding-bottom: 7px;
  margin-bottom: 0;
}
.form-control-static.input-lg,
.form-control-static.input-sm {
  padding-right: 0;
  padding-left: 0;
}
.input-sm {
  height: 30px;
  padding: 5px 10px;
  font-size: 12px;
  line-height: 1.5;
  border-radius: 3px;
}
select.input-sm {
  height: 30px;
  line-height: 30px;
}
select[multiple].input-sm,
textarea.input-sm {
  height: auto;
}
.form-group-sm .form-control {
  height: 30px;
  padding: 5px 10px;
  font-size: 12px;
  line-height: 1.5;
  border-radius: 3px;
}
.form-group-sm select.form-control {
  height: 30px;
  line-height: 30px;
}
.form-group-sm select[multiple].form-control,
.form-group-sm textarea.form-control {
  height: auto;
}
.form-group-sm .form-control-static {
  height: 30px;
  min-height: 32px;
  padding: 6px 10px;
  font-size: 12px;
  line-height: 1.5;
}
.input-lg {
  height: 46px;
  padding: 10px 16px;
  font-size: 18px;
  line-height: 1.3333333;
  border-radius: 6px;
}
select.input-lg {
  height: 46px;
  line-height: 46px;
}
select[multiple].input-lg,
textarea.input-lg {
  height: auto;
}
.form-group-lg .form-control {
  height: 46px;
  padding: 10px 16px;
  font-size: 18px;
  line-height: 1.3333333;
  border-radius: 6px;
}
.form-group-lg select.form-control {
  height: 46px;
  line-height: 46px;
}
.form-group-lg select[multiple].form-control,
.form-group-lg textarea.form-control {
  height: auto;
}
.form-group-lg .form-control-static {
  height: 46px;
  min-height: 38px;
  padding: 11px 16px;
  font-size: 18px;
  line-height: 1.3333333;
}
.has-feedback {
  position: relative;
}
.has-feedback .form-control {
  padding-right: 42.5px;
}
.form-control-feedback {
  position: absolute;
  top: 0;
  right: 0;
  z-index: 2;
  display: block;
  width: 34px;
  height: 34px;
  line-height: 34px;
  text-align: center;
  pointer-events: none;
}
.form-group-lg .form-control + .form-control-feedback,
.input-group-lg + .form-control-feedback,
.input-lg + .form-control-feedback {
  width: 46px;
  height: 46px;
  line-height: 46px;
}
.form-group-sm .form-control + .form-control-feedback,
.input-group-sm + .form-control-feedback,
.input-sm + .form-control-feedback {
  width: 30px;
  height: 30px;
  line-height: 30px;
}
.has-success .checkbox,
.has-success .checkbox-inline,
.has-success .control-label,
.has-success .help-block,
.has-success .radio,
.has-success .radio-inline,
.has-success.checkbox label,
.has-success.checkbox-inline label,
.has-success.radio label,
.has-success.radio-inline label {
  color: #3c763d;
}
.has-success .form-control {
  border-color: #3c763d;
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
  box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
}
.has-success .form-control:focus {
  border-color: #2b542c;
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 6px #67b168;
  box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 6px #67b168;
}
.has-success .input-group-addon {
  color: #3c763d;
  background-color: #dff0d8;
  border-color: #3c763d;
}
.has-success .form-control-feedback {
  color: #3c763d;
}
.has-warning .checkbox,
.has-warning .checkbox-inline,
.has-warning .control-label,
.has-warning .help-block,
.has-warning .radio,
.has-warning .radio-inline,
.has-warning.checkbox label,
.has-warning.checkbox-inline label,
.has-warning.radio label,
.has-warning.radio-inline label {
  color: #8a6d3b;
}
.has-warning .form-control {
  border-color: #8a6d3b;
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
  box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
}
.has-warning .form-control:focus {
  border-color: #66512c;
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 6px #c0a16b;
  box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 6px #c0a16b;
}
.has-warning .input-group-addon {
  color: #8a6d3b;
  background-color: #fcf8e3;
  border-color: #8a6d3b;
}
.has-warning .form-control-feedback {
  color: #8a6d3b;
}
.has-error .checkbox,
.has-error .checkbox-inline,
.has-error .control-label,
.has-error .help-block,
.has-error .radio,
.has-error .radio-inline,
.has-error.checkbox label,
.has-error.checkbox-inline label,
.has-error.radio label,
.has-error.radio-inline label {
  color: #a94442;
}
.has-error .form-control {
  border-color: #a94442;
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
  box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
}
.has-error .form-control:focus {
  border-color: #843534;
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 6px #ce8483;
  box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 6px #ce8483;
}
.has-error .input-group-addon {
  color: #a94442;
  background-color: #f2dede;
  border-color: #a94442;
}
.has-error .form-control-feedback {
  color: #a94442;
}
.has-feedback label ~ .form-control-feedback {
  top: 25px;
}
.has-feedback label.sr-only ~ .form-control-feedback {
  top: 0;
}
.help-block {
  display: block;
  margin-top: 5px;
  margin-bottom: 10px;
  color: #737373;
}
@media (min-width: 768px) {
  .form-inline .form-group {
    display: inline-block;
    margin-bottom: 0;
    vertical-align: middle;
  }
  .form-inline .form-control {
    display: inline-block;
    width: auto;
    vertical-align: middle;
  }
  .form-inline .form-control-static {
    display: inline-block;
  }
  .form-inline .input-group {
    display: inline-table;
    vertical-align: middle;
  }
  .form-inline .input-group .form-control,
  .form-inline .input-group .input-group-addon,
  .form-inline .input-group .input-group-btn {
    width: auto;
  }
  .form-inline .input-group > .form-control {
    width: 100%;
  }
  .form-inline .control-label {
    margin-bottom: 0;
    vertical-align: middle;
  }
  .form-inline .checkbox,
  .form-inline .radio {
    display: inline-block;
    margin-top: 0;
    margin-bottom: 0;
    vertical-align: middle;
  }
  .form-inline .checkbox label,
  .form-inline .radio label {
    padding-left: 0;
  }
  .form-inline .checkbox input[type="checkbox"],
  .form-inline .radio input[type="radio"] {
    position: relative;
    margin-left: 0;
  }
  .form-inline .has-feedback .form-control-feedback {
    top: 0;
  }
}
.form-horizontal .checkbox,
.form-horizontal .checkbox-inline,
.form-horizontal .radio,
.form-horizontal .radio-inline {
  padding-top: 7px;
  margin-top: 0;
  margin-bottom: 0;
}
.form-horizontal .checkbox,
.form-horizontal .radio {
  min-height: 27px;
}
.form-horizontal .form-group {
  margin-right: -15px;
  margin-left: -15px;
}
@media (min-width: 768px) {
  .form-horizontal .control-label {
    padding-top: 7px;
    margin-bottom: 0;
    text-align: right;
  }
}
.form-horizontal .has-feedback .form-control-feedback {
  right: 15px;
}
@media (min-width: 768px) {
  .form-horizontal .form-group-lg .control-label {
    padding-top: 11px;
    font-size: 18px;
  }
}
@media (min-width: 768px) {
  .form-horizontal .form-group-sm .control-label {
    padding-top: 6px;
    font-size: 12px;
  }
}
.btn {
  display: inline-block;
  padding: 6px 12px;
  margin-bottom: 0;
  font-size: 14px;
  font-weight: 400;
  line-height: 1.42857143;
  text-align: center;
  white-space: nowrap;
  vertical-align: middle;
  -ms-touch-action: manipulation;
  touch-action: manipulation;
  cursor: pointer;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
  background-image: none;
  border: 1px solid transparent;
  border-radius: 4px;
}
.btn.focus,
.btn:focus,
.btn:hover {
  color: #333;
  text-decoration: none;
}
.btn.active,
.btn:active {
  background-image: none;
  outline: 0;
  -webkit-box-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
  box-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
}
.btn.disabled,
.btn[disabled],
fieldset[disabled] .btn {
  cursor: not-allowed;
  -webkit-box-shadow: none;
  box-shadow: none;
  opacity: 0.65;
}
a.btn.disabled,
fieldset[disabled] a.btn {
  pointer-events: none;
}
.btn-default {
  color: #333;
  background-color: #fff;
  border-color: #ccc;
}
.btn-default.focus,
.btn-default:focus {
  color: #333;
  background-color: #e6e6e6;
  border-color: #8c8c8c;
}
.btn-default:hover {
  color: #333;
  background-color: #e6e6e6;
  border-color: #adadad;
}
.btn-default.active,
.btn-default:active,
.open > .dropdown-toggle.btn-default {
  color: #333;
  background-color: #e6e6e6;
  border-color: #adadad;
}
.btn-default.active.focus,
.btn-default.active:focus,
.btn-default.active:hover,
.btn-default:active.focus,
.btn-default:active:focus,
.btn-default:active:hover,
.open > .dropdown-toggle.btn-default.focus,
.open > .dropdown-toggle.btn-default:focus,
.open > .dropdown-toggle.btn-default:hover {
  color: #333;
  background-color: #d4d4d4;
  border-color: #8c8c8c;
}
.btn-default.active,
.btn-default:active,
.open > .dropdown-toggle.btn-default {
  background-image: none;
}
.btn-default.disabled.focus,
.btn-default.disabled:focus,
.btn-default.disabled:hover,
.btn-default[disabled].focus,
.btn-default[disabled]:focus,
.btn-default[disabled]:hover,
fieldset[disabled] .btn-default.focus,
fieldset[disabled] .btn-default:focus,
fieldset[disabled] .btn-default:hover {
  background-color: #fff;
  border-color: #ccc;
}
.btn-default .badge {
  color: #fff;
  background-color: #333;
}
.btn-primary {
  color: #fff;
  background-color: #337ab7;
  border-color: #2e6da4;
}
.btn-primary.focus,
.btn-primary:focus {
  color: #fff;
  background-color: #286090;
  border-color: #122b40;
}
.btn-primary:hover {
  color: #fff;
  background-color: #286090;
  border-color: #204d74;
}
.btn-primary.active,
.btn-primary:active,
.open > .dropdown-toggle.btn-primary {
  color: #fff;
  background-color: #286090;
  border-color: #204d74;
}
.btn-primary.active.focus,
.btn-primary.active:focus,
.btn-primary.active:hover,
.btn-primary:active.focus,
.btn-primary:active:focus,
.btn-primary:active:hover,
.open > .dropdown-toggle.btn-primary.focus,
.open > .dropdown-toggle.btn-primary:focus,
.open > .dropdown-toggle.btn-primary:hover {
  color: #fff;
  background-color: #204d74;
  border-color: #122b40;
}
.btn-primary.active,
.btn-primary:active,
.open > .dropdown-toggle.btn-primary {
  background-image: none;
}
.btn-primary.disabled.focus,
.btn-primary.disabled:focus,
.btn-primary.disabled:hover,
.btn-primary[disabled].focus,
.btn-primary[disabled]:focus,
.btn-primary[disabled]:hover,
fieldset[disabled] .btn-primary.focus,
fieldset[disabled] .btn-primary:focus,
fieldset[disabled] .btn-primary:hover {
  background-color: #337ab7;
  border-color: #2e6da4;
}
.btn-primary .badge {
  color: #337ab7;
  background-color: #fff;
}
.btn-success {
  color: #fff;
  background-color: #5cb85c;
  border-color: #4cae4c;
}
.btn-success.focus,
.btn-success:focus {
  color: #fff;
  background-color: #449d44;
  border-color: #255625;
}
.btn-success:hover {
  color: #fff;
  background-color: #449d44;
  border-color: #398439;
}
.btn-success.active,
.btn-success:active,
.open > .dropdown-toggle.btn-success {
  color: #fff;
  background-color: #449d44;
  border-color: #398439;
}
.btn-success.active.focus,
.btn-success.active:focus,
.btn-success.active:hover,
.btn-success:active.focus,
.btn-success:active:focus,
.btn-success:active:hover,
.open > .dropdown-toggle.btn-success.focus,
.open > .dropdown-toggle.btn-success:focus,
.open > .dropdown-toggle.btn-success:hover {
  color: #fff;
  background-color: #398439;
  border-color: #255625;
}
.btn-success.active,
.btn-success:active,
.open > .dropdown-toggle.btn-success {
  background-image: none;
}
.btn-success.disabled.focus,
.btn-success.disabled:focus,
.btn-success.disabled:hover,
.btn-success[disabled].focus,
.btn-success[disabled]:focus,
.btn-success[disabled]:hover,
fieldset[disabled] .btn-success.focus,
fieldset[disabled] .btn-success:focus,
fieldset[disabled] .btn-success:hover {
  background-color: #5cb85c;
  border-color: #4cae4c;
}
.btn-success .badge {
  color: #5cb85c;
  background-color: #fff;
}
.btn-info {
  color: #fff;
  background-color: #5bc0de;
  border-color: #46b8da;
}
.btn-info.focus,
.btn-info:focus {
  color: #fff;
  background-color: #31b0d5;
  border-color: #1b6d85;
}
.btn-info:hover {
  color: #fff;
  background-color: #31b0d5;
  border-color: #269abc;
}
.btn-info.active,
.btn-info:active,
.open > .dropdown-toggle.btn-info {
  color: #fff;
  background-color: #31b0d5;
  border-color: #269abc;
}
.btn-info.active.focus,
.btn-info.active:focus,
.btn-info.active:hover,
.btn-info:active.focus,
.btn-info:active:focus,
.btn-info:active:hover,
.open > .dropdown-toggle.btn-info.focus,
.open > .dropdown-toggle.btn-info:focus,
.open > .dropdown-toggle.btn-info:hover {
  color: #fff;
  background-color: #269abc;
  border-color: #1b6d85;
}
.btn-info.active,
.btn-info:active,
.open > .dropdown-toggle.btn-info {
  background-image: none;
}
.btn-info.disabled.focus,
.btn-info.disabled:focus,
.btn-info.disabled:hover,
.btn-info[disabled].focus,
.btn-info[disabled]:focus,
.btn-info[disabled]:hover,
fieldset[disabled] .btn-info.focus,
fieldset[disabled] .btn-info:focus,
fieldset[disabled] .btn-info:hover {
  background-color: #5bc0de;
  border-color: #46b8da;
}
.btn-info .badge {
  color: #5bc0de;
  background-color: #fff;
}
.btn-warning {
  color: #fff;
  background-color: #f0ad4e;
  border-color: #eea236;
}
.btn-warning.focus,
.btn-warning:focus {
  color: #fff;
  background-color: #ec971f;
  border-color: #985f0d;
}
.btn-warning:hover {
  color: #fff;
  background-color: #ec971f;
  border-color: #d58512;
}
.btn-warning.active,
.btn-warning:active,
.open > .dropdown-toggle.btn-warning {
  color: #fff;
  background-color: #ec971f;
  border-color: #d58512;
}
.btn-warning.active.focus,
.btn-warning.active:focus,
.btn-warning.active:hover,
.btn-warning:active.focus,
.btn-warning:active:focus,
.btn-warning:active:hover,
.open > .dropdown-toggle.btn-warning.focus,
.open > .dropdown-toggle.btn-warning:focus,
.open > .dropdown-toggle.btn-warning:hover {
  color: #fff;
  background-color: #d58512;
  border-color: #985f0d;
}
.btn-warning.active,
.btn-warning:active,
.open > .dropdown-toggle.btn-warning {
  background-image: none;
}
.btn-warning.disabled.focus,
.btn-warning.disabled:focus,
.btn-warning.disabled:hover,
.btn-warning[disabled].focus,
.btn-warning[disabled]:focus,
.btn-warning[disabled]:hover,
fieldset[disabled] .btn-warning.focus,
fieldset[disabled] .btn-warning:focus,
fieldset[disabled] .btn-warning:hover {
  background-color: #f0ad4e;
  border-color: #eea236;
}
.btn-warning .badge {
  color: #f0ad4e;
  background-color: #fff;
}
.btn-danger {
  color: #fff;
  background-color: #d9534f;
  border-color: #d43f3a;
}
.btn-danger.focus,
.btn-danger:focus {
  color: #fff;
  background-color: #c9302c;
  border-color: #761c19;
}
.btn-danger:hover {
  color: #fff;
  background-color: #c9302c;
  border-color: #ac2925;
}
.btn-danger.active,
.btn-danger:active,
.open > .dropdown-toggle.btn-danger {
  color: #fff;
  background-color: #c9302c;
  border-color: #ac2925;
}
.btn-danger.active.focus,
.btn-danger.active:focus,
.btn-danger.active:hover,
.btn-danger:active.focus,
.btn-danger:active:focus,
.btn-danger:active:hover,
.open > .dropdown-toggle.btn-danger.focus,
.open > .dropdown-toggle.btn-danger:focus,
.open > .dropdown-toggle.btn-danger:hover {
  color: #fff;
  background-color: #ac2925;
  border-color: #761c19;
}
.btn-danger.active,
.btn-danger:active,
.open > .dropdown-toggle.btn-danger {
  background-image: none;
}
.btn-danger.disabled.focus,
.btn-danger.disabled:focus,
.btn-danger.disabled:hover,
.btn-danger[disabled].focus,
.btn-danger[disabled]:focus,
.btn-danger[disabled]:hover,
fieldset[disabled] .btn-danger.focus,
fieldset[disabled] .btn-danger:focus,
fieldset[disabled] .btn-danger:hover {
  background-color: #d9534f;
  border-color: #d43f3a;
}
.btn-danger .badge {
  color: #d9534f;
  background-color: #fff;
}
.btn-link {
  font-weight: 400;
  color: #337ab7;
  border-radius: 0;
}
.btn-link,
.btn-link.active,
.btn-link:active,
.btn-link[disabled],
fieldset[disabled] .btn-link {
  background-color: transparent;
  -webkit-box-shadow: none;
  box-shadow: none;
}
.btn-link,
.btn-link:active,
.btn-link:focus,
.btn-link:hover {
  border-color: transparent;
}
.btn-link:focus,
.btn-link:hover {
  color: #23527c;
  text-decoration: underline;
  background-color: transparent;
}
.btn-link[disabled]:focus,
.btn-link[disabled]:hover,
fieldset[disabled] .btn-link:focus,
fieldset[disabled] .btn-link:hover {
  color: #777;
  text-decoration: none;
}
.btn-group-lg > .btn,
.btn-lg {
  padding: 10px 16px;
  font-size: 18px;
  line-height: 1.3333333;
  border-radius: 6px;
}
.btn-group-sm > .btn,
.btn-sm {
  padding: 5px 10px;
  font-size: 12px;
  line-height: 1.5;
  border-radius: 3px;
}
.btn-group-xs > .btn,
.btn-xs {
  padding: 1px 5px;
  font-size: 12px;
  line-height: 1.5;
  border-radius: 3px;
}
.btn-block {
  display: block;
  width: 100%;
}
.btn-block + .btn-block {
  margin-top: 5px;
}
input[type="button"].btn-block,
input[type="reset"].btn-block,
input[type="submit"].btn-block {
  width: 100%;
}
.fade {
  opacity: 0;
  -webkit-transition: opacity 0.15s linear;
  -o-transition: opacity 0.15s linear;
  transition: opacity 0.15s linear;
}
.fade.in {
  opacity: 1;
}
.collapse {
  display: none;
}
.collapse.in {
  display: block;
}
tr.collapse.in {
  display: table-row;
}
tbody.collapse.in {
  display: table-row-group;
}
.collapsing {
  position: relative;
  height: 0;
  overflow: hidden;
  -webkit-transition-timing-function: ease;
  -o-transition-timing-function: ease;
  transition-timing-function: ease;
  -webkit-transition-duration: 0.35s;
  -o-transition-duration: 0.35s;
  transition-duration: 0.35s;
  -webkit-transition-property: height, visibility;
  -o-transition-property: height, visibility;
  transition-property: height, visibility;
}
.caret {
  display: inline-block;
  width: 0;
  height: 0;
  margin-left: 2px;
  vertical-align: middle;
  border-top: 4px dashed;
  border-right: 4px solid transparent;
  border-left: 4px solid transparent;
}
.dropdown,
.dropup {
  position: relative;
}
.dropdown-toggle:focus {
  outline: 0;
}
.dropdown-menu {
  position: absolute;
  top: 100%;
  left: 0;
  z-index: 1000;
  display: none;
  float: left;
  min-width: 160px;
  padding: 5px 0;
  margin: 2px 0 0;
  font-size: 14px;
  text-align: left;
  list-style: none;
  background-color: #fff;
  -webkit-background-clip: padding-box;
  background-clip: padding-box;
  border: 1px solid #ccc;
  border: 1px solid rgba(0, 0, 0, 0.15);
  border-radius: 4px;
  -webkit-box-shadow: 0 6px 12px rgba(0, 0, 0, 0.175);
  box-shadow: 0 6px 12px rgba(0, 0, 0, 0.175);
}
.dropdown-menu.pull-right {
  right: 0;
  left: auto;
}
.dropdown-menu .divider {
  height: 1px;
  margin: 9px 0;
  overflow: hidden;
  background-color: #e5e5e5;
}
.dropdown-menu > li > a {
  display: block;
  padding: 3px 20px;
  clear: both;
  font-weight: 400;
  line-height: 1.42857143;
  color: #333;
  white-space: nowrap;
}
.dropdown-menu > li > a:focus,
.dropdown-menu > li > a:hover {
  color: #262626;
  text-decoration: none;
  background-color: #f5f5f5;
}
.dropdown-menu > .active > a,
.dropdown-menu > .active > a:focus,
.dropdown-menu > .active > a:hover {
  color: #fff;
  text-decoration: none;
  background-color: #337ab7;
  outline: 0;
}
.dropdown-menu > .disabled > a,
.dropdown-menu > .disabled > a:focus,
.dropdown-menu > .disabled > a:hover {
  color: #777;
}
.dropdown-menu > .disabled > a:focus,
.dropdown-menu > .disabled > a:hover {
  text-decoration: none;
  cursor: not-allowed;
  background-color: transparent;
  background-image: none;
}
.open > .dropdown-menu {
  display: block;
}
.open > a {
  outline: 0;
}
.dropdown-menu-right {
  right: 0;
  left: auto;
}
.dropdown-menu-left {
  right: auto;
  left: 0;
}
.dropdown-header {
  display: block;
  padding: 3px 20px;
  font-size: 12px;
  line-height: 1.42857143;
  color: #777;
  white-space: nowrap;
}
.dropdown-backdrop {
  position: fixed;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  z-index: 990;
}
.pull-right > .dropdown-menu {
  right: 0;
  left: auto;
}
.dropup .caret,
.navbar-fixed-bottom .dropdown .caret {
  content: "";
  border-top: 0;
  border-bottom: 4px dashed;
}
.dropup .dropdown-menu,
.navbar-fixed-bottom .dropdown .dropdown-menu {
  top: auto;
  bottom: 100%;
  margin-bottom: 2px;
}
@media (min-width: 768px) {
  .navbar-right .dropdown-menu {
    right: 0;
    left: auto;
  }
  .navbar-right .dropdown-menu-left {
    right: auto;
    left: 0;
  }
}
.btn-group,
.btn-group-vertical {
  position: relative;
  display: inline-block;
  vertical-align: middle;
}
.btn-group-vertical > .btn,
.btn-group > .btn {
  position: relative;
  float: left;
}
.btn-group-vertical > .btn.active,
.btn-group-vertical > .btn:active,
.btn-group-vertical > .btn:focus,
.btn-group-vertical > .btn:hover,
.btn-group > .btn.active,
.btn-group > .btn:active,
.btn-group > .btn:focus,
.btn-group > .btn:hover {
  z-index: 2;
}
.btn-group .btn + .btn,
.btn-group .btn + .btn-group,
.btn-group .btn-group + .btn,
.btn-group .btn-group + .btn-group {
  margin-left: -1px;
}
.btn-toolbar {
  margin-left: -5px;
}
.btn-toolbar .btn,
.btn-toolbar .btn-group,
.btn-toolbar .input-group {
  float: left;
}
.btn-toolbar > .btn,
.btn-toolbar > .btn-group,
.btn-toolbar > .input-group {
  margin-left: 5px;
}
.btn-group > .btn:not(:first-child):not(:last-child):not(.dropdown-toggle) {
  border-radius: 0;
}
.btn-group > .btn:first-child {
  margin-left: 0;
}
.btn-group > .btn:first-child:not(:last-child):not(.dropdown-toggle) {
  border-top-right-radius: 0;
  border-bottom-right-radius: 0;
}
.btn-group > .btn:last-child:not(:first-child),
.btn-group > .dropdown-toggle:not(:first-child) {
  border-top-left-radius: 0;
  border-bottom-left-radius: 0;
}
.btn-group > .btn-group {
  float: left;
}
.btn-group > .btn-group:not(:first-child):not(:last-child) > .btn {
  border-radius: 0;
}
.btn-group > .btn-group:first-child:not(:last-child) > .btn:last-child,
.btn-group > .btn-group:first-child:not(:last-child) > .dropdown-toggle {
  border-top-right-radius: 0;
  border-bottom-right-radius: 0;
}
.btn-group > .btn-group:last-child:not(:first-child) > .btn:first-child {
  border-top-left-radius: 0;
  border-bottom-left-radius: 0;
}
.btn-group .dropdown-toggle:active,
.btn-group.open .dropdown-toggle {
  outline: 0;
}
.btn-group > .btn + .dropdown-toggle {
  padding-right: 8px;
  padding-left: 8px;
}
.btn-group > .btn-lg + .dropdown-toggle {
  padding-right: 12px;
  padding-left: 12px;
}
.btn-group.open .dropdown-toggle {
  -webkit-box-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
  box-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
}
.btn-group.open .dropdown-toggle.btn-link {
  -webkit-box-shadow: none;
  box-shadow: none;
}
.btn .caret {
  margin-left: 0;
}
.btn-lg .caret {
  border-width: 5px 5px 0;
  border-bottom-width: 0;
}
.dropup .btn-lg .caret {
  border-width: 0 5px 5px;
}
.btn-group-vertical > .btn,
.btn-group-vertical > .btn-group,
.btn-group-vertical > .btn-group > .btn {
  display: block;
  float: none;
  width: 100%;
  max-width: 100%;
}
.btn-group-vertical > .btn-group > .btn {
  float: none;
}
.btn-group-vertical > .btn + .btn,
.btn-group-vertical > .btn + .btn-group,
.btn-group-vertical > .btn-group + .btn,
.btn-group-vertical > .btn-group + .btn-group {
  margin-top: -1px;
  margin-left: 0;
}
.btn-group-vertical > .btn:not(:first-child):not(:last-child) {
  border-radius: 0;
}
.btn-group-vertical > .btn:first-child:not(:last-child) {
  border-top-left-radius: 4px;
  border-top-right-radius: 4px;
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
}
.btn-group-vertical > .btn:last-child:not(:first-child) {
  border-top-left-radius: 0;
  border-top-right-radius: 0;
  border-bottom-right-radius: 4px;
  border-bottom-left-radius: 4px;
}
.btn-group-vertical > .btn-group:not(:first-child):not(:last-child) > .btn {
  border-radius: 0;
}
.btn-group-vertical > .btn-group:first-child:not(:last-child) > .btn:last-child,
.btn-group-vertical
  > .btn-group:first-child:not(:last-child)
  > .dropdown-toggle {
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
}
.btn-group-vertical
  > .btn-group:last-child:not(:first-child)
  > .btn:first-child {
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}
.btn-group-justified {
  display: table;
  width: 100%;
  table-layout: fixed;
  border-collapse: separate;
}
.btn-group-justified > .btn,
.btn-group-justified > .btn-group {
  display: table-cell;
  float: none;
  width: 1%;
}
.btn-group-justified > .btn-group .btn {
  width: 100%;
}
.btn-group-justified > .btn-group .dropdown-menu {
  left: auto;
}
[data-toggle="buttons"] > .btn input[type="checkbox"],
[data-toggle="buttons"] > .btn input[type="radio"],
[data-toggle="buttons"] > .btn-group > .btn input[type="checkbox"],
[data-toggle="buttons"] > .btn-group > .btn input[type="radio"] {
  position: absolute;
  clip: rect(0, 0, 0, 0);
  pointer-events: none;
}
.input-group {
  position: relative;
  display: table;
  border-collapse: separate;
}
.input-group[class*="col-"] {
  float: none;
  padding-right: 0;
  padding-left: 0;
}
.input-group .form-control {
  position: relative;
  z-index: 2;
  float: left;
  width: 100%;
  margin-bottom: 0;
}
.input-group .form-control:focus {
  z-index: 3;
}
.input-group-lg > .form-control,
.input-group-lg > .input-group-addon,
.input-group-lg > .input-group-btn > .btn {
  height: 46px;
  padding: 10px 16px;
  font-size: 18px;
  line-height: 1.3333333;
  border-radius: 6px;
}
select.input-group-lg > .form-control,
select.input-group-lg > .input-group-addon,
select.input-group-lg > .input-group-btn > .btn {
  height: 46px;
  line-height: 46px;
}
select[multiple].input-group-lg > .form-control,
select[multiple].input-group-lg > .input-group-addon,
select[multiple].input-group-lg > .input-group-btn > .btn,
textarea.input-group-lg > .form-control,
textarea.input-group-lg > .input-group-addon,
textarea.input-group-lg > .input-group-btn > .btn {
  height: auto;
}
.input-group-sm > .form-control,
.input-group-sm > .input-group-addon,
.input-group-sm > .input-group-btn > .btn {
  height: 30px;
  padding: 5px 10px;
  font-size: 12px;
  line-height: 1.5;
  border-radius: 3px;
}
select.input-group-sm > .form-control,
select.input-group-sm > .input-group-addon,
select.input-group-sm > .input-group-btn > .btn {
  height: 30px;
  line-height: 30px;
}
select[multiple].input-group-sm > .form-control,
select[multiple].input-group-sm > .input-group-addon,
select[multiple].input-group-sm > .input-group-btn > .btn,
textarea.input-group-sm > .form-control,
textarea.input-group-sm > .input-group-addon,
textarea.input-group-sm > .input-group-btn > .btn {
  height: auto;
}
.input-group .form-control,
.input-group-addon,
.input-group-btn {
  display: table-cell;
}
.input-group .form-control:not(:first-child):not(:last-child),
.input-group-addon:not(:first-child):not(:last-child),
.input-group-btn:not(:first-child):not(:last-child) {
  border-radius: 0;
}
.input-group-addon,
.input-group-btn {
  width: 1%;
  white-space: nowrap;
  vertical-align: middle;
}
.input-group-addon {
  padding: 6px 12px;
  font-size: 14px;
  font-weight: 400;
  line-height: 1;
  color: #555;
  text-align: center;
  background-color: #eee;
  border: 1px solid #ccc;
  border-radius: 4px;
}
.input-group-addon.input-sm {
  padding: 5px 10px;
  font-size: 12px;
  border-radius: 3px;
}
.input-group-addon.input-lg {
  padding: 10px 16px;
  font-size: 18px;
  border-radius: 6px;
}
.input-group-addon input[type="checkbox"],
.input-group-addon input[type="radio"] {
  margin-top: 0;
}
.input-group .form-control:first-child,
.input-group-addon:first-child,
.input-group-btn:first-child > .btn,
.input-group-btn:first-child > .btn-group > .btn,
.input-group-btn:first-child > .dropdown-toggle,
.input-group-btn:last-child > .btn-group:not(:last-child) > .btn,
.input-group-btn:last-child > .btn:not(:last-child):not(.dropdown-toggle) {
  border-top-right-radius: 0;
  border-bottom-right-radius: 0;
}
.input-group-addon:first-child {
  border-right: 0;
}
.input-group .form-control:last-child,
.input-group-addon:last-child,
.input-group-btn:first-child > .btn-group:not(:first-child) > .btn,
.input-group-btn:first-child > .btn:not(:first-child),
.input-group-btn:last-child > .btn,
.input-group-btn:last-child > .btn-group > .btn,
.input-group-btn:last-child > .dropdown-toggle {
  border-top-left-radius: 0;
  border-bottom-left-radius: 0;
}
.input-group-addon:last-child {
  border-left: 0;
}
.input-group-btn {
  position: relative;
  font-size: 0;
  white-space: nowrap;
}
.input-group-btn > .btn {
  position: relative;
}
.input-group-btn > .btn + .btn {
  margin-left: -1px;
}
.input-group-btn > .btn:active,
.input-group-btn > .btn:focus,
.input-group-btn > .btn:hover {
  z-index: 2;
}
.input-group-btn:first-child > .btn,
.input-group-btn:first-child > .btn-group {
  margin-right: -1px;
}
.input-group-btn:last-child > .btn,
.input-group-btn:last-child > .btn-group {
  z-index: 2;
  margin-left: -1px;
}
.nav {
  padding-left: 0;
  margin-bottom: 0;
  list-style: none;
}
.nav > li {
  position: relative;
  display: block;
}
.nav > li > a {
  position: relative;
  display: block;
  padding: 10px 15px;
}
.nav > li > a:focus,
.nav > li > a:hover {
  text-decoration: none;
  background-color: #eee;
}
.nav > li.disabled > a {
  color: #777;
}
.nav > li.disabled > a:focus,
.nav > li.disabled > a:hover {
  color: #777;
  text-decoration: none;
  cursor: not-allowed;
  background-color: transparent;
}
.nav .open > a,
.nav .open > a:focus,
.nav .open > a:hover {
  background-color: #eee;
  border-color: #337ab7;
}
.nav .nav-divider {
  height: 1px;
  margin: 9px 0;
  overflow: hidden;
  background-color: #e5e5e5;
}
.nav > li > a > img {
  max-width: none;
}
.nav-tabs {
  border-bottom: 1px solid #ddd;
}
.nav-tabs > li {
  float: left;
  margin-bottom: -1px;
}
.nav-tabs > li > a {
  margin-right: 2px;
  line-height: 1.42857143;
  border: 1px solid transparent;
  border-radius: 4px 4px 0 0;
}
.nav-tabs > li > a:hover {
  border-color: #eee #eee #ddd;
}
.nav-tabs > li.active > a,
.nav-tabs > li.active > a:focus,
.nav-tabs > li.active > a:hover {
  color: #555;
  cursor: default;
  background-color: #fff;
  border: 1px solid #ddd;
  border-bottom-color: transparent;
}
.nav-tabs.nav-justified {
  width: 100%;
  border-bottom: 0;
}
.nav-tabs.nav-justified > li {
  float: none;
}
.nav-tabs.nav-justified > li > a {
  margin-bottom: 5px;
  text-align: center;
}
.nav-tabs.nav-justified > .dropdown .dropdown-menu {
  top: auto;
  left: auto;
}
@media (min-width: 768px) {
  .nav-tabs.nav-justified > li {
    display: table-cell;
    width: 1%;
  }
  .nav-tabs.nav-justified > li > a {
    margin-bottom: 0;
  }
}
.nav-tabs.nav-justified > li > a {
  margin-right: 0;
  border-radius: 4px;
}
.nav-tabs.nav-justified > .active > a,
.nav-tabs.nav-justified > .active > a:focus,
.nav-tabs.nav-justified > .active > a:hover {
  border: 1px solid #ddd;
}
@media (min-width: 768px) {
  .nav-tabs.nav-justified > li > a {
    border-bottom: 1px solid #ddd;
    border-radius: 4px 4px 0 0;
  }
  .nav-tabs.nav-justified > .active > a,
  .nav-tabs.nav-justified > .active > a:focus,
  .nav-tabs.nav-justified > .active > a:hover {
    border-bottom-color: #fff;
  }
}
.nav-pills > li {
  float: left;
}
.nav-pills > li > a {
  border-radius: 4px;
}
.nav-pills > li + li {
  margin-left: 2px;
}
.nav-pills > li.active > a,
.nav-pills > li.active > a:focus,
.nav-pills > li.active > a:hover {
  color: #fff;
  background-color: #337ab7;
}
.nav-stacked > li {
  float: none;
}
.nav-stacked > li + li {
  margin-top: 2px;
  margin-left: 0;
}
.nav-justified {
  width: 100%;
}
.nav-justified > li {
  float: none;
}
.nav-justified > li > a {
  margin-bottom: 5px;
  text-align: center;
}
.nav-justified > .dropdown .dropdown-menu {
  top: auto;
  left: auto;
}
@media (min-width: 768px) {
  .nav-justified > li {
    display: table-cell;
    width: 1%;
  }
  .nav-justified > li > a {
    margin-bottom: 0;
  }
}
.nav-tabs-justified {
  border-bottom: 0;
}
.nav-tabs-justified > li > a {
  margin-right: 0;
  border-radius: 4px;
}
.nav-tabs-justified > .active > a,
.nav-tabs-justified > .active > a:focus,
.nav-tabs-justified > .active > a:hover {
  border: 1px solid #ddd;
}
@media (min-width: 768px) {
  .nav-tabs-justified > li > a {
    border-bottom: 1px solid #ddd;
    border-radius: 4px 4px 0 0;
  }
  .nav-tabs-justified > .active > a,
  .nav-tabs-justified > .active > a:focus,
  .nav-tabs-justified > .active > a:hover {
    border-bottom-color: #fff;
  }
}
.tab-content > .tab-pane {
  display: none;
}
.tab-content > .active {
  display: block;
}
.nav-tabs .dropdown-menu {
  margin-top: -1px;
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}
.navbar {
  position: relative;
  min-height: 50px;
  margin-bottom: 20px;
  border: 1px solid transparent;
}
@media (min-width: 768px) {
  .navbar {
    border-radius: 4px;
  }
}
@media (min-width: 768px) {
  .navbar-header {
    float: left;
  }
}
.navbar-collapse {
  padding-right: 15px;
  padding-left: 15px;
  overflow-x: visible;
  -webkit-overflow-scrolling: touch;
  border-top: 1px solid transparent;
  -webkit-box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.1);
  box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.1);
}
.navbar-collapse.in {
  overflow-y: auto;
}
@media (min-width: 768px) {
  .navbar-collapse {
    width: auto;
    border-top: 0;
    -webkit-box-shadow: none;
    box-shadow: none;
  }
  .navbar-collapse.collapse {
    display: block !important;
    height: auto !important;
    padding-bottom: 0;
    overflow: visible !important;
  }
  .navbar-collapse.in {
    overflow-y: visible;
  }
  .navbar-fixed-bottom .navbar-collapse,
  .navbar-fixed-top .navbar-collapse,
  .navbar-static-top .navbar-collapse {
    padding-right: 0;
    padding-left: 0;
  }
}
.navbar-fixed-bottom .navbar-collapse,
.navbar-fixed-top .navbar-collapse {
  max-height: 340px;
}
@media (max-device-width: 480px) and (orientation: landscape) {
  .navbar-fixed-bottom .navbar-collapse,
  .navbar-fixed-top .navbar-collapse {
    max-height: 200px;
  }
}
.container-fluid > .navbar-collapse,
.container-fluid > .navbar-header,
.container > .navbar-collapse,
.container > .navbar-header {
  margin-right: -15px;
  margin-left: -15px;
}
@media (min-width: 768px) {
  .container-fluid > .navbar-collapse,
  .container-fluid > .navbar-header,
  .container > .navbar-collapse,
  .container > .navbar-header {
    margin-right: 0;
    margin-left: 0;
  }
}
.navbar-static-top {
  z-index: 1000;
  border-width: 0 0 1px;
}
@media (min-width: 768px) {
  .navbar-static-top {
    border-radius: 0;
  }
}
.navbar-fixed-bottom,
.navbar-fixed-top {
  position: fixed;
  right: 0;
  left: 0;
  z-index: 1030;
}
@media (min-width: 768px) {
  .navbar-fixed-bottom,
  .navbar-fixed-top {
    border-radius: 0;
  }
}
.navbar-fixed-top {
  top: 0;
  border-width: 0 0 1px;
}
.navbar-fixed-bottom {
  bottom: 0;
  margin-bottom: 0;
  border-width: 1px 0 0;
}
.navbar-brand {
  float: left;
  height: 50px;
  padding: 15px 15px;
  font-size: 18px;
  line-height: 20px;
}
.navbar-brand:focus,
.navbar-brand:hover {
  text-decoration: none;
}
.navbar-brand > img {
  display: block;
}
@media (min-width: 768px) {
  .navbar > .container .navbar-brand,
  .navbar > .container-fluid .navbar-brand {
    margin-left: -15px;
  }
}
.navbar-toggle {
  position: relative;
  float: right;
  padding: 9px 10px;
  margin-top: 8px;
  margin-right: 15px;
  margin-bottom: 8px;
  background-color: transparent;
  background-image: none;
  border: 1px solid transparent;
  border-radius: 4px;
}
.navbar-toggle:focus {
  outline: 0;
}
.navbar-toggle .icon-bar {
  display: block;
  width: 22px;
  height: 2px;
  border-radius: 1px;
}
.navbar-toggle .icon-bar + .icon-bar {
  margin-top: 4px;
}
@media (min-width: 768px) {
  .navbar-toggle {
    display: none;
  }
}
.navbar-nav {
  margin: 7.5px -15px;
}
.navbar-nav > li > a {
  padding-top: 10px;
  padding-bottom: 10px;
  line-height: 20px;
}
@media (max-width: 767px) {
  .navbar-nav .open .dropdown-menu {
    position: static;
    float: none;
    width: auto;
    margin-top: 0;
    background-color: transparent;
    border: 0;
    -webkit-box-shadow: none;
    box-shadow: none;
  }
  .navbar-nav .open .dropdown-menu .dropdown-header,
  .navbar-nav .open .dropdown-menu > li > a {
    padding: 5px 15px 5px 25px;
  }
  .navbar-nav .open .dropdown-menu > li > a {
    line-height: 20px;
  }
  .navbar-nav .open .dropdown-menu > li > a:focus,
  .navbar-nav .open .dropdown-menu > li > a:hover {
    background-image: none;
  }
}
@media (min-width: 768px) {
  .navbar-nav {
    float: left;
    margin: 0;
  }
  .navbar-nav > li {
    float: left;
  }
  .navbar-nav > li > a {
    padding-top: 15px;
    padding-bottom: 15px;
  }
}
.navbar-form {
  padding: 10px 15px;
  margin-top: 8px;
  margin-right: -15px;
  margin-bottom: 8px;
  margin-left: -15px;
  border-top: 1px solid transparent;
  border-bottom: 1px solid transparent;
  -webkit-box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.1),
    0 1px 0 rgba(255, 255, 255, 0.1);
  box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.1),
    0 1px 0 rgba(255, 255, 255, 0.1);
}
@media (min-width: 768px) {
  .navbar-form .form-group {
    display: inline-block;
    margin-bottom: 0;
    vertical-align: middle;
  }
  .navbar-form .form-control {
    display: inline-block;
    width: auto;
    vertical-align: middle;
  }
  .navbar-form .form-control-static {
    display: inline-block;
  }
  .navbar-form .input-group {
    display: inline-table;
    vertical-align: middle;
  }
  .navbar-form .input-group .form-control,
  .navbar-form .input-group .input-group-addon,
  .navbar-form .input-group .input-group-btn {
    width: auto;
  }
  .navbar-form .input-group > .form-control {
    width: 100%;
  }
  .navbar-form .control-label {
    margin-bottom: 0;
    vertical-align: middle;
  }
  .navbar-form .checkbox,
  .navbar-form .radio {
    display: inline-block;
    margin-top: 0;
    margin-bottom: 0;
    vertical-align: middle;
  }
  .navbar-form .checkbox label,
  .navbar-form .radio label {
    padding-left: 0;
  }
  .navbar-form .checkbox input[type="checkbox"],
  .navbar-form .radio input[type="radio"] {
    position: relative;
    margin-left: 0;
  }
  .navbar-form .has-feedback .form-control-feedback {
    top: 0;
  }
}
@media (max-width: 767px) {
  .navbar-form .form-group {
    margin-bottom: 5px;
  }
  .navbar-form .form-group:last-child {
    margin-bottom: 0;
  }
}
@media (min-width: 768px) {
  .navbar-form {
    width: auto;
    padding-top: 0;
    padding-bottom: 0;
    margin-right: 0;
    margin-left: 0;
    border: 0;
    -webkit-box-shadow: none;
    box-shadow: none;
  }
}
.navbar-nav > li > .dropdown-menu {
  margin-top: 0;
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}
.navbar-fixed-bottom .navbar-nav > li > .dropdown-menu {
  margin-bottom: 0;
  border-top-left-radius: 4px;
  border-top-right-radius: 4px;
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
}
.navbar-btn {
  margin-top: 8px;
  margin-bottom: 8px;
}
.navbar-btn.btn-sm {
  margin-top: 10px;
  margin-bottom: 10px;
}
.navbar-btn.btn-xs {
  margin-top: 14px;
  margin-bottom: 14px;
}
.navbar-text {
  margin-top: 15px;
  margin-bottom: 15px;
}
@media (min-width: 768px) {
  .navbar-text {
    float: left;
    margin-right: 15px;
    margin-left: 15px;
  }
}
@media (min-width: 768px) {
  .navbar-left {
    float: left !important;
  }
  .navbar-right {
    float: right !important;
    margin-right: -15px;
  }
  .navbar-right ~ .navbar-right {
    margin-right: 0;
  }
}
.navbar-default {
  background-color: #f8f8f8;
  border-color: #e7e7e7;
}
.navbar-default .navbar-brand {
  color: #777;
}
.navbar-default .navbar-brand:focus,
.navbar-default .navbar-brand:hover {
  color: #5e5e5e;
  background-color: transparent;
}
.navbar-default .navbar-text {
  color: #777;
}
.navbar-default .navbar-nav > li > a {
  color: #777;
}
.navbar-default .navbar-nav > li > a:focus,
.navbar-default .navbar-nav > li > a:hover {
  color: #333;
  background-color: transparent;
}
.navbar-default .navbar-nav > .active > a,
.navbar-default .navbar-nav > .active > a:focus,
.navbar-default .navbar-nav > .active > a:hover {
  color: #555;
  background-color: #e7e7e7;
}
.navbar-default .navbar-nav > .disabled > a,
.navbar-default .navbar-nav > .disabled > a:focus,
.navbar-default .navbar-nav > .disabled > a:hover {
  color: #ccc;
  background-color: transparent;
}
.navbar-default .navbar-toggle {
  border-color: #ddd;
}
.navbar-default .navbar-toggle:focus,
.navbar-default .navbar-toggle:hover {
  background-color: #ddd;
}
.navbar-default .navbar-toggle .icon-bar {
  background-color: #888;
}
.navbar-default .navbar-collapse,
.navbar-default .navbar-form {
  border-color: #e7e7e7;
}
.navbar-default .navbar-nav > .open > a,
.navbar-default .navbar-nav > .open > a:focus,
.navbar-default .navbar-nav > .open > a:hover {
  color: #555;
  background-color: #e7e7e7;
}
@media (max-width: 767px) {
  .navbar-default .navbar-nav .open .dropdown-menu > li > a {
    color: #777;
  }
  .navbar-default .navbar-nav .open .dropdown-menu > li > a:focus,
  .navbar-default .navbar-nav .open .dropdown-menu > li > a:hover {
    color: #333;
    background-color: transparent;
  }
  .navbar-default .navbar-nav .open .dropdown-menu > .active > a,
  .navbar-default .navbar-nav .open .dropdown-menu > .active > a:focus,
  .navbar-default .navbar-nav .open .dropdown-menu > .active > a:hover {
    color: #555;
    background-color: #e7e7e7;
  }
  .navbar-default .navbar-nav .open .dropdown-menu > .disabled > a,
  .navbar-default .navbar-nav .open .dropdown-menu > .disabled > a:focus,
  .navbar-default .navbar-nav .open .dropdown-menu > .disabled > a:hover {
    color: #ccc;
    background-color: transparent;
  }
}
.navbar-default .navbar-link {
  color: #777;
}
.navbar-default .navbar-link:hover {
  color: #333;
}
.navbar-default .btn-link {
  color: #777;
}
.navbar-default .btn-link:focus,
.navbar-default .btn-link:hover {
  color: #333;
}
.navbar-default .btn-link[disabled]:focus,
.navbar-default .btn-link[disabled]:hover,
fieldset[disabled] .navbar-default .btn-link:focus,
fieldset[disabled] .navbar-default .btn-link:hover {
  color: #ccc;
}
.navbar-inverse {
  background-color: #222;
  border-color: #080808;
}
.navbar-inverse .navbar-brand {
  color: #9d9d9d;
}
.navbar-inverse .navbar-brand:focus,
.navbar-inverse .navbar-brand:hover {
  color: #fff;
  background-color: transparent;
}
.navbar-inverse .navbar-text {
  color: #9d9d9d;
}
.navbar-inverse .navbar-nav > li > a {
  color: #9d9d9d;
}
.navbar-inverse .navbar-nav > li > a:focus,
.navbar-inverse .navbar-nav > li > a:hover {
  color: #fff;
  background-color: transparent;
}
.navbar-inverse .navbar-nav > .active > a,
.navbar-inverse .navbar-nav > .active > a:focus,
.navbar-inverse .navbar-nav > .active > a:hover {
  color: #fff;
  background-color: #080808;
}
.navbar-inverse .navbar-nav > .disabled > a,
.navbar-inverse .navbar-nav > .disabled > a:focus,
.navbar-inverse .navbar-nav > .disabled > a:hover {
  color: #444;
  background-color: transparent;
}
.navbar-inverse .navbar-toggle {
  border-color: #333;
}
.navbar-inverse .navbar-toggle:focus,
.navbar-inverse .navbar-toggle:hover {
  background-color: #333;
}
.navbar-inverse .navbar-toggle .icon-bar {
  background-color: #fff;
}
.navbar-inverse .navbar-collapse,
.navbar-inverse .navbar-form {
  border-color: #101010;
}
.navbar-inverse .navbar-nav > .open > a,
.navbar-inverse .navbar-nav > .open > a:focus,
.navbar-inverse .navbar-nav > .open > a:hover {
  color: #fff;
  background-color: #080808;
}
@media (max-width: 767px) {
  .navbar-inverse .navbar-nav .open .dropdown-menu > .dropdown-header {
    border-color: #080808;
  }
  .navbar-inverse .navbar-nav .open .dropdown-menu .divider {
    background-color: #080808;
  }
  .navbar-inverse .navbar-nav .open .dropdown-menu > li > a {
    color: #9d9d9d;
  }
  .navbar-inverse .navbar-nav .open .dropdown-menu > li > a:focus,
  .navbar-inverse .navbar-nav .open .dropdown-menu > li > a:hover {
    color: #fff;
    background-color: transparent;
  }
  .navbar-inverse .navbar-nav .open .dropdown-menu > .active > a,
  .navbar-inverse .navbar-nav .open .dropdown-menu > .active > a:focus,
  .navbar-inverse .navbar-nav .open .dropdown-menu > .active > a:hover {
    color: #fff;
    background-color: #080808;
  }
  .navbar-inverse .navbar-nav .open .dropdown-menu > .disabled > a,
  .navbar-inverse .navbar-nav .open .dropdown-menu > .disabled > a:focus,
  .navbar-inverse .navbar-nav .open .dropdown-menu > .disabled > a:hover {
    color: #444;
    background-color: transparent;
  }
}
.navbar-inverse .navbar-link {
  color: #9d9d9d;
}
.navbar-inverse .navbar-link:hover {
  color: #fff;
}
.navbar-inverse .btn-link {
  color: #9d9d9d;
}
.navbar-inverse .btn-link:focus,
.navbar-inverse .btn-link:hover {
  color: #fff;
}
.navbar-inverse .btn-link[disabled]:focus,
.navbar-inverse .btn-link[disabled]:hover,
fieldset[disabled] .navbar-inverse .btn-link:focus,
fieldset[disabled] .navbar-inverse .btn-link:hover {
  color: #444;
}
.breadcrumb {
  padding: 8px 15px;
  margin-bottom: 20px;
  list-style: none;
  background-color: #f5f5f5;
  border-radius: 4px;
}
.breadcrumb > li {
  display: inline-block;
}
.breadcrumb > li + li:before {
  padding: 0 5px;
  color: #ccc;
  content: "/\00a0";
}
.breadcrumb > .active {
  color: #777;
}
.pagination {
  display: inline-block;
  padding-left: 0;
  margin: 20px 0;
  border-radius: 4px;
}
.pagination > li {
  display: inline;
}
.pagination > li > a,
.pagination > li > span {
  position: relative;
  float: left;
  padding: 6px 12px;
  margin-left: -1px;
  line-height: 1.42857143;
  color: #337ab7;
  text-decoration: none;
  background-color: #fff;
  border: 1px solid #ddd;
}
.pagination > li:first-child > a,
.pagination > li:first-child > span {
  margin-left: 0;
  border-top-left-radius: 4px;
  border-bottom-left-radius: 4px;
}
.pagination > li:last-child > a,
.pagination > li:last-child > span {
  border-top-right-radius: 4px;
  border-bottom-right-radius: 4px;
}
.pagination > li > a:focus,
.pagination > li > a:hover,
.pagination > li > span:focus,
.pagination > li > span:hover {
  z-index: 2;
  color: #23527c;
  background-color: #eee;
  border-color: #ddd;
}
.pagination > .active > a,
.pagination > .active > a:focus,
.pagination > .active > a:hover,
.pagination > .active > span,
.pagination > .active > span:focus,
.pagination > .active > span:hover {
  z-index: 3;
  color: #fff;
  cursor: default;
  background-color: #337ab7;
  border-color: #337ab7;
}
.pagination > .disabled > a,
.pagination > .disabled > a:focus,
.pagination > .disabled > a:hover,
.pagination > .disabled > span,
.pagination > .disabled > span:focus,
.pagination > .disabled > span:hover {
  color: #777;
  cursor: not-allowed;
  background-color: #fff;
  border-color: #ddd;
}
.pagination-lg > li > a,
.pagination-lg > li > span {
  padding: 10px 16px;
  font-size: 18px;
  line-height: 1.3333333;
}
.pagination-lg > li:first-child > a,
.pagination-lg > li:first-child > span {
  border-top-left-radius: 6px;
  border-bottom-left-radius: 6px;
}
.pagination-lg > li:last-child > a,
.pagination-lg > li:last-child > span {
  border-top-right-radius: 6px;
  border-bottom-right-radius: 6px;
}
.pagination-sm > li > a,
.pagination-sm > li > span {
  padding: 5px 10px;
  font-size: 12px;
  line-height: 1.5;
}
.pagination-sm > li:first-child > a,
.pagination-sm > li:first-child > span {
  border-top-left-radius: 3px;
  border-bottom-left-radius: 3px;
}
.pagination-sm > li:last-child > a,
.pagination-sm > li:last-child > span {
  border-top-right-radius: 3px;
  border-bottom-right-radius: 3px;
}
.pager {
  padding-left: 0;
  margin: 20px 0;
  text-align: center;
  list-style: none;
}
.pager li {
  display: inline;
}
.pager li > a,
.pager li > span {
  display: inline-block;
  padding: 5px 14px;
  background-color: #fff;
  border: 1px solid #ddd;
  border-radius: 15px;
}
.pager li > a:focus,
.pager li > a:hover {
  text-decoration: none;
  background-color: #eee;
}
.pager .next > a,
.pager .next > span {
  float: right;
}
.pager .previous > a,
.pager .previous > span {
  float: left;
}
.pager .disabled > a,
.pager .disabled > a:focus,
.pager .disabled > a:hover,
.pager .disabled > span {
  color: #777;
  cursor: not-allowed;
  background-color: #fff;
}
.label {
  display: inline;
  padding: 0.2em 0.6em 0.3em;
  font-size: 75%;
  font-weight: 700;
  line-height: 1;
  color: #fff;
  text-align: center;
  white-space: nowrap;
  vertical-align: baseline;
  border-radius: 0.25em;
}
a.label:focus,
a.label:hover {
  color: #fff;
  text-decoration: none;
  cursor: pointer;
}
.label:empty {
  display: none;
}
.btn .label {
  position: relative;
  top: -1px;
}
.label-default {
  background-color: #777;
}
.label-default[href]:focus,
.label-default[href]:hover {
  background-color: #5e5e5e;
}
.label-primary {
  background-color: #337ab7;
}
.label-primary[href]:focus,
.label-primary[href]:hover {
  background-color: #286090;
}
.label-success {
  background-color: #5cb85c;
}
.label-success[href]:focus,
.label-success[href]:hover {
  background-color: #449d44;
}
.label-info {
  background-color: #5bc0de;
}
.label-info[href]:focus,
.label-info[href]:hover {
  background-color: #31b0d5;
}
.label-warning {
  background-color: #f0ad4e;
}
.label-warning[href]:focus,
.label-warning[href]:hover {
  background-color: #ec971f;
}
.label-danger {
  background-color: #d9534f;
}
.label-danger[href]:focus,
.label-danger[href]:hover {
  background-color: #c9302c;
}
.badge {
  display: inline-block;
  min-width: 10px;
  padding: 3px 7px;
  font-size: 12px;
  font-weight: 700;
  line-height: 1;
  color: #fff;
  text-align: center;
  white-space: nowrap;
  vertical-align: middle;
  background-color: #777;
  border-radius: 10px;
}
.badge:empty {
  display: none;
}
.btn .badge {
  position: relative;
  top: -1px;
}
.btn-group-xs > .btn .badge,
.btn-xs .badge {
  top: 0;
  padding: 1px 5px;
}
a.badge:focus,
a.badge:hover {
  color: #fff;
  text-decoration: none;
  cursor: pointer;
}
.list-group-item.active > .badge,
.nav-pills > .active > a > .badge {
  color: #337ab7;
  background-color: #fff;
}
.list-group-item > .badge {
  float: right;
}
.list-group-item > .badge + .badge {
  margin-right: 5px;
}
.nav-pills > li > a > .badge {
  margin-left: 3px;
}
.jumbotron {
  padding-top: 30px;
  padding-bottom: 30px;
  margin-bottom: 30px;
  color: inherit;
  background-color: #eee;
}
.jumbotron .h1,
.jumbotron h1 {
  color: inherit;
}
.jumbotron p {
  margin-bottom: 15px;
  font-size: 21px;
  font-weight: 200;
}
.jumbotron > hr {
  border-top-color: #d5d5d5;
}
.container .jumbotron,
.container-fluid .jumbotron {
  padding-right: 15px;
  padding-left: 15px;
  border-radius: 6px;
}
.jumbotron .container {
  max-width: 100%;
}
@media screen and (min-width: 768px) {
  .jumbotron {
    padding-top: 48px;
    padding-bottom: 48px;
  }
  .container .jumbotron,
  .container-fluid .jumbotron {
    padding-right: 60px;
    padding-left: 60px;
  }
  .jumbotron .h1,
  .jumbotron h1 {
    font-size: 63px;
  }
}
.thumbnail {
  display: block;
  padding: 4px;
  margin-bottom: 20px;
  line-height: 1.42857143;
  background-color: #fff;
  border: 1px solid #ddd;
  border-radius: 4px;
  -webkit-transition: border 0.2s ease-in-out;
  -o-transition: border 0.2s ease-in-out;
  transition: border 0.2s ease-in-out;
}
.thumbnail a > img,
.thumbnail > img {
  margin-right: auto;
  margin-left: auto;
}
a.thumbnail.active,
a.thumbnail:focus,
a.thumbnail:hover {
  border-color: #337ab7;
}
.thumbnail .caption {
  padding: 9px;
  color: #333;
}
.alert {
  padding: 15px;
  margin-bottom: 20px;
  border: 1px solid transparent;
  border-radius: 4px;
}
.alert h4 {
  margin-top: 0;
  color: inherit;
}
.alert .alert-link {
  font-weight: 700;
}
.alert > p,
.alert > ul {
  margin-bottom: 0;
}
.alert > p + p {
  margin-top: 5px;
}
.alert-dismissable,
.alert-dismissible {
  padding-right: 35px;
}
.alert-dismissable .close,
.alert-dismissible .close {
  position: relative;
  top: -2px;
  right: -21px;
  color: inherit;
}
.alert-success {
  color: #3c763d;
  background-color: #dff0d8;
  border-color: #d6e9c6;
}
.alert-success hr {
  border-top-color: #c9e2b3;
}
.alert-success .alert-link {
  color: #2b542c;
}
.alert-info {
  color: #31708f;
  background-color: #d9edf7;
  border-color: #bce8f1;
}
.alert-info hr {
  border-top-color: #a6e1ec;
}
.alert-info .alert-link {
  color: #245269;
}
.alert-warning {
  color: #8a6d3b;
  background-color: #fcf8e3;
  border-color: #faebcc;
}
.alert-warning hr {
  border-top-color: #f7e1b5;
}
.alert-warning .alert-link {
  color: #66512c;
}
.alert-danger {
  color: #a94442;
  background-color: #f2dede;
  border-color: #ebccd1;
}
.alert-danger hr {
  border-top-color: #e4b9c0;
}
.alert-danger .alert-link {
  color: #843534;
}
@-webkit-keyframes progress-bar-stripes {
  from {
    background-position: 40px 0;
  }
  to {
    background-position: 0 0;
  }
}
@-o-keyframes progress-bar-stripes {
  from {
    background-position: 40px 0;
  }
  to {
    background-position: 0 0;
  }
}
@keyframes progress-bar-stripes {
  from {
    background-position: 40px 0;
  }
  to {
    background-position: 0 0;
  }
}
.progress {
  height: 20px;
  margin-bottom: 20px;
  overflow: hidden;
  background-color: #f5f5f5;
  border-radius: 4px;
  -webkit-box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.1);
  box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.1);
}
.progress-bar {
  float: left;
  width: 0;
  height: 100%;
  font-size: 12px;
  line-height: 20px;
  color: #fff;
  text-align: center;
  background-color: #337ab7;
  -webkit-box-shadow: inset 0 -1px 0 rgba(0, 0, 0, 0.15);
  box-shadow: inset 0 -1px 0 rgba(0, 0, 0, 0.15);
  -webkit-transition: width 0.6s ease;
  -o-transition: width 0.6s ease;
  transition: width 0.6s ease;
}
.progress-bar-striped,
.progress-striped .progress-bar {
  background-image: -webkit-linear-gradient(
    45deg,
    rgba(255, 255, 255, 0.15) 25%,
    transparent 25%,
    transparent 50%,
    rgba(255, 255, 255, 0.15) 50%,
    rgba(255, 255, 255, 0.15) 75%,
    transparent 75%,
    transparent
  );
  background-image: -o-linear-gradient(
    45deg,
    rgba(255, 255, 255, 0.15) 25%,
    transparent 25%,
    transparent 50%,
    rgba(255, 255, 255, 0.15) 50%,
    rgba(255, 255, 255, 0.15) 75%,
    transparent 75%,
    transparent
  );
  background-image: linear-gradient(
    45deg,
    rgba(255, 255, 255, 0.15) 25%,
    transparent 25%,
    transparent 50%,
    rgba(255, 255, 255, 0.15) 50%,
    rgba(255, 255, 255, 0.15) 75%,
    transparent 75%,
    transparent
  );
  -webkit-background-size: 40px 40px;
  background-size: 40px 40px;
}
.progress-bar.active,
.progress.active .progress-bar {
  -webkit-animation: progress-bar-stripes 2s linear infinite;
  -o-animation: progress-bar-stripes 2s linear infinite;
  animation: progress-bar-stripes 2s linear infinite;
}
.progress-bar-success {
  background-color: #5cb85c;
}
.progress-striped .progress-bar-success {
  background-image: -webkit-linear-gradient(
    45deg,
    rgba(255, 255, 255, 0.15) 25%,
    transparent 25%,
    transparent 50%,
    rgba(255, 255, 255, 0.15) 50%,
    rgba(255, 255, 255, 0.15) 75%,
    transparent 75%,
    transparent
  );
  background-image: -o-linear-gradient(
    45deg,
    rgba(255, 255, 255, 0.15) 25%,
    transparent 25%,
    transparent 50%,
    rgba(255, 255, 255, 0.15) 50%,
    rgba(255, 255, 255, 0.15) 75%,
    transparent 75%,
    transparent
  );
  background-image: linear-gradient(
    45deg,
    rgba(255, 255, 255, 0.15) 25%,
    transparent 25%,
    transparent 50%,
    rgba(255, 255, 255, 0.15) 50%,
    rgba(255, 255, 255, 0.15) 75%,
    transparent 75%,
    transparent
  );
}
.progress-bar-info {
  background-color: #5bc0de;
}
.progress-striped .progress-bar-info {
  background-image: -webkit-linear-gradient(
    45deg,
    rgba(255, 255, 255, 0.15) 25%,
    transparent 25%,
    transparent 50%,
    rgba(255, 255, 255, 0.15) 50%,
    rgba(255, 255, 255, 0.15) 75%,
    transparent 75%,
    transparent
  );
  background-image: -o-linear-gradient(
    45deg,
    rgba(255, 255, 255, 0.15) 25%,
    transparent 25%,
    transparent 50%,
    rgba(255, 255, 255, 0.15) 50%,
    rgba(255, 255, 255, 0.15) 75%,
    transparent 75%,
    transparent
  );
  background-image: linear-gradient(
    45deg,
    rgba(255, 255, 255, 0.15) 25%,
    transparent 25%,
    transparent 50%,
    rgba(255, 255, 255, 0.15) 50%,
    rgba(255, 255, 255, 0.15) 75%,
    transparent 75%,
    transparent
  );
}
.progress-bar-warning {
  background-color: #f0ad4e;
}
.progress-striped .progress-bar-warning {
  background-image: -webkit-linear-gradient(
    45deg,
    rgba(255, 255, 255, 0.15) 25%,
    transparent 25%,
    transparent 50%,
    rgba(255, 255, 255, 0.15) 50%,
    rgba(255, 255, 255, 0.15) 75%,
    transparent 75%,
    transparent
  );
  background-image: -o-linear-gradient(
    45deg,
    rgba(255, 255, 255, 0.15) 25%,
    transparent 25%,
    transparent 50%,
    rgba(255, 255, 255, 0.15) 50%,
    rgba(255, 255, 255, 0.15) 75%,
    transparent 75%,
    transparent
  );
  background-image: linear-gradient(
    45deg,
    rgba(255, 255, 255, 0.15) 25%,
    transparent 25%,
    transparent 50%,
    rgba(255, 255, 255, 0.15) 50%,
    rgba(255, 255, 255, 0.15) 75%,
    transparent 75%,
    transparent
  );
}
.progress-bar-danger {
  background-color: #d9534f;
}
.progress-striped .progress-bar-danger {
  background-image: -webkit-linear-gradient(
    45deg,
    rgba(255, 255, 255, 0.15) 25%,
    transparent 25%,
    transparent 50%,
    rgba(255, 255, 255, 0.15) 50%,
    rgba(255, 255, 255, 0.15) 75%,
    transparent 75%,
    transparent
  );
  background-image: -o-linear-gradient(
    45deg,
    rgba(255, 255, 255, 0.15) 25%,
    transparent 25%,
    transparent 50%,
    rgba(255, 255, 255, 0.15) 50%,
    rgba(255, 255, 255, 0.15) 75%,
    transparent 75%,
    transparent
  );
  background-image: linear-gradient(
    45deg,
    rgba(255, 255, 255, 0.15) 25%,
    transparent 25%,
    transparent 50%,
    rgba(255, 255, 255, 0.15) 50%,
    rgba(255, 255, 255, 0.15) 75%,
    transparent 75%,
    transparent
  );
}
.media {
  margin-top: 15px;
}
.media:first-child {
  margin-top: 0;
}
.media,
.media-body {
  overflow: hidden;
  zoom: 1;
}
.media-body {
  width: 10000px;
}
.media-object {
  display: block;
}
.media-object.img-thumbnail {
  max-width: none;
}
.media-right,
.media > .pull-right {
  padding-left: 10px;
}
.media-left,
.media > .pull-left {
  padding-right: 10px;
}
.media-body,
.media-left,
.media-right {
  display: table-cell;
  vertical-align: top;
}
.media-middle {
  vertical-align: middle;
}
.media-bottom {
  vertical-align: bottom;
}
.media-heading {
  margin-top: 0;
  margin-bottom: 5px;
}
.media-list {
  padding-left: 0;
  list-style: none;
}
.list-group {
  padding-left: 0;
  margin-bottom: 20px;
}
.list-group-item {
  position: relative;
  display: block;
  padding: 10px 15px;
  margin-bottom: -1px;
  background-color: #fff;
  border: 1px solid #ddd;
}
.list-group-item:first-child {
  border-top-left-radius: 4px;
  border-top-right-radius: 4px;
}
.list-group-item:last-child {
  margin-bottom: 0;
  border-bottom-right-radius: 4px;
  border-bottom-left-radius: 4px;
}
a.list-group-item,
button.list-group-item {
  color: #555;
}
a.list-group-item .list-group-item-heading,
button.list-group-item .list-group-item-heading {
  color: #333;
}
a.list-group-item:focus,
a.list-group-item:hover,
button.list-group-item:focus,
button.list-group-item:hover {
  color: #555;
  text-decoration: none;
  background-color: #f5f5f5;
}
button.list-group-item {
  width: 100%;
  text-align: left;
}
.list-group-item.disabled,
.list-group-item.disabled:focus,
.list-group-item.disabled:hover {
  color: #777;
  cursor: not-allowed;
  background-color: #eee;
}
.list-group-item.disabled .list-group-item-heading,
.list-group-item.disabled:focus .list-group-item-heading,
.list-group-item.disabled:hover .list-group-item-heading {
  color: inherit;
}
.list-group-item.disabled .list-group-item-text,
.list-group-item.disabled:focus .list-group-item-text,
.list-group-item.disabled:hover .list-group-item-text {
  color: #777;
}
.list-group-item.active,
.list-group-item.active:focus,
.list-group-item.active:hover {
  z-index: 2;
  color: #fff;
  background-color: #337ab7;
  border-color: #337ab7;
}
.list-group-item.active .list-group-item-heading,
.list-group-item.active .list-group-item-heading > .small,
.list-group-item.active .list-group-item-heading > small,
.list-group-item.active:focus .list-group-item-heading,
.list-group-item.active:focus .list-group-item-heading > .small,
.list-group-item.active:focus .list-group-item-heading > small,
.list-group-item.active:hover .list-group-item-heading,
.list-group-item.active:hover .list-group-item-heading > .small,
.list-group-item.active:hover .list-group-item-heading > small {
  color: inherit;
}
.list-group-item.active .list-group-item-text,
.list-group-item.active:focus .list-group-item-text,
.list-group-item.active:hover .list-group-item-text {
  color: #c7ddef;
}
.list-group-item-success {
  color: #3c763d;
  background-color: #dff0d8;
}
a.list-group-item-success,
button.list-group-item-success {
  color: #3c763d;
}
a.list-group-item-success .list-group-item-heading,
button.list-group-item-success .list-group-item-heading {
  color: inherit;
}
a.list-group-item-success:focus,
a.list-group-item-success:hover,
button.list-group-item-success:focus,
button.list-group-item-success:hover {
  color: #3c763d;
  background-color: #d0e9c6;
}
a.list-group-item-success.active,
a.list-group-item-success.active:focus,
a.list-group-item-success.active:hover,
button.list-group-item-success.active,
button.list-group-item-success.active:focus,
button.list-group-item-success.active:hover {
  color: #fff;
  background-color: #3c763d;
  border-color: #3c763d;
}
.list-group-item-info {
  color: #31708f;
  background-color: #d9edf7;
}
a.list-group-item-info,
button.list-group-item-info {
  color: #31708f;
}
a.list-group-item-info .list-group-item-heading,
button.list-group-item-info .list-group-item-heading {
  color: inherit;
}
a.list-group-item-info:focus,
a.list-group-item-info:hover,
button.list-group-item-info:focus,
button.list-group-item-info:hover {
  color: #31708f;
  background-color: #c4e3f3;
}
a.list-group-item-info.active,
a.list-group-item-info.active:focus,
a.list-group-item-info.active:hover,
button.list-group-item-info.active,
button.list-group-item-info.active:focus,
button.list-group-item-info.active:hover {
  color: #fff;
  background-color: #31708f;
  border-color: #31708f;
}
.list-group-item-warning {
  color: #8a6d3b;
  background-color: #fcf8e3;
}
a.list-group-item-warning,
button.list-group-item-warning {
  color: #8a6d3b;
}
a.list-group-item-warning .list-group-item-heading,
button.list-group-item-warning .list-group-item-heading {
  color: inherit;
}
a.list-group-item-warning:focus,
a.list-group-item-warning:hover,
button.list-group-item-warning:focus,
button.list-group-item-warning:hover {
  color: #8a6d3b;
  background-color: #faf2cc;
}
a.list-group-item-warning.active,
a.list-group-item-warning.active:focus,
a.list-group-item-warning.active:hover,
button.list-group-item-warning.active,
button.list-group-item-warning.active:focus,
button.list-group-item-warning.active:hover {
  color: #fff;
  background-color: #8a6d3b;
  border-color: #8a6d3b;
}
.list-group-item-danger {
  color: #a94442;
  background-color: #f2dede;
}
a.list-group-item-danger,
button.list-group-item-danger {
  color: #a94442;
}
a.list-group-item-danger .list-group-item-heading,
button.list-group-item-danger .list-group-item-heading {
  color: inherit;
}
a.list-group-item-danger:focus,
a.list-group-item-danger:hover,
button.list-group-item-danger:focus,
button.list-group-item-danger:hover {
  color: #a94442;
  background-color: #ebcccc;
}
a.list-group-item-danger.active,
a.list-group-item-danger.active:focus,
a.list-group-item-danger.active:hover,
button.list-group-item-danger.active,
button.list-group-item-danger.active:focus,
button.list-group-item-danger.active:hover {
  color: #fff;
  background-color: #a94442;
  border-color: #a94442;
}
.list-group-item-heading {
  margin-top: 0;
  margin-bottom: 5px;
}
.list-group-item-text {
  margin-bottom: 0;
  line-height: 1.3;
}
.panel {
  margin-bottom: 20px;
  background-color: #fff;
  border: 1px solid transparent;
  border-radius: 4px;
  -webkit-box-shadow: 0 1px 1px rgba(0, 0, 0, 0.05);
  box-shadow: 0 1px 1px rgba(0, 0, 0, 0.05);
}
.panel-body {
  padding: 15px;
}
.panel-heading {
  padding: 10px 15px;
  border-bottom: 1px solid transparent;
  border-top-left-radius: 3px;
  border-top-right-radius: 3px;
}
.panel-heading > .dropdown .dropdown-toggle {
  color: inherit;
}
.panel-title {
  margin-top: 0;
  margin-bottom: 0;
  font-size: 16px;
  color: inherit;
}
.panel-title > .small,
.panel-title > .small > a,
.panel-title > a,
.panel-title > small,
.panel-title > small > a {
  color: inherit;
}
.panel-footer {
  padding: 10px 15px;
  background-color: #f5f5f5;
  border-top: 1px solid #ddd;
  border-bottom-right-radius: 3px;
  border-bottom-left-radius: 3px;
}
.panel > .list-group,
.panel > .panel-collapse > .list-group {
  margin-bottom: 0;
}
.panel > .list-group .list-group-item,
.panel > .panel-collapse > .list-group .list-group-item {
  border-width: 1px 0;
  border-radius: 0;
}
.panel > .list-group:first-child .list-group-item:first-child,
.panel
  > .panel-collapse
  > .list-group:first-child
  .list-group-item:first-child {
  border-top: 0;
  border-top-left-radius: 3px;
  border-top-right-radius: 3px;
}
.panel > .list-group:last-child .list-group-item:last-child,
.panel > .panel-collapse > .list-group:last-child .list-group-item:last-child {
  border-bottom: 0;
  border-bottom-right-radius: 3px;
  border-bottom-left-radius: 3px;
}
.panel
  > .panel-heading
  + .panel-collapse
  > .list-group
  .list-group-item:first-child {
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}
.panel-heading + .list-group .list-group-item:first-child {
  border-top-width: 0;
}
.list-group + .panel-footer {
  border-top-width: 0;
}
.panel > .panel-collapse > .table,
.panel > .table,
.panel > .table-responsive > .table {
  margin-bottom: 0;
}
.panel > .panel-collapse > .table caption,
.panel > .table caption,
.panel > .table-responsive > .table caption {
  padding-right: 15px;
  padding-left: 15px;
}
.panel > .table-responsive:first-child > .table:first-child,
.panel > .table:first-child {
  border-top-left-radius: 3px;
  border-top-right-radius: 3px;
}
.panel
  > .table-responsive:first-child
  > .table:first-child
  > tbody:first-child
  > tr:first-child,
.panel
  > .table-responsive:first-child
  > .table:first-child
  > thead:first-child
  > tr:first-child,
.panel > .table:first-child > tbody:first-child > tr:first-child,
.panel > .table:first-child > thead:first-child > tr:first-child {
  border-top-left-radius: 3px;
  border-top-right-radius: 3px;
}
.panel
  > .table-responsive:first-child
  > .table:first-child
  > tbody:first-child
  > tr:first-child
  td:first-child,
.panel
  > .table-responsive:first-child
  > .table:first-child
  > tbody:first-child
  > tr:first-child
  th:first-child,
.panel
  > .table-responsive:first-child
  > .table:first-child
  > thead:first-child
  > tr:first-child
  td:first-child,
.panel
  > .table-responsive:first-child
  > .table:first-child
  > thead:first-child
  > tr:first-child
  th:first-child,
.panel > .table:first-child > tbody:first-child > tr:first-child td:first-child,
.panel > .table:first-child > tbody:first-child > tr:first-child th:first-child,
.panel > .table:first-child > thead:first-child > tr:first-child td:first-child,
.panel
  > .table:first-child
  > thead:first-child
  > tr:first-child
  th:first-child {
  border-top-left-radius: 3px;
}
.panel
  > .table-responsive:first-child
  > .table:first-child
  > tbody:first-child
  > tr:first-child
  td:last-child,
.panel
  > .table-responsive:first-child
  > .table:first-child
  > tbody:first-child
  > tr:first-child
  th:last-child,
.panel
  > .table-responsive:first-child
  > .table:first-child
  > thead:first-child
  > tr:first-child
  td:last-child,
.panel
  > .table-responsive:first-child
  > .table:first-child
  > thead:first-child
  > tr:first-child
  th:last-child,
.panel > .table:first-child > tbody:first-child > tr:first-child td:last-child,
.panel > .table:first-child > tbody:first-child > tr:first-child th:last-child,
.panel > .table:first-child > thead:first-child > tr:first-child td:last-child,
.panel > .table:first-child > thead:first-child > tr:first-child th:last-child {
  border-top-right-radius: 3px;
}
.panel > .table-responsive:last-child > .table:last-child,
.panel > .table:last-child {
  border-bottom-right-radius: 3px;
  border-bottom-left-radius: 3px;
}
.panel
  > .table-responsive:last-child
  > .table:last-child
  > tbody:last-child
  > tr:last-child,
.panel
  > .table-responsive:last-child
  > .table:last-child
  > tfoot:last-child
  > tr:last-child,
.panel > .table:last-child > tbody:last-child > tr:last-child,
.panel > .table:last-child > tfoot:last-child > tr:last-child {
  border-bottom-right-radius: 3px;
  border-bottom-left-radius: 3px;
}
.panel
  > .table-responsive:last-child
  > .table:last-child
  > tbody:last-child
  > tr:last-child
  td:first-child,
.panel
  > .table-responsive:last-child
  > .table:last-child
  > tbody:last-child
  > tr:last-child
  th:first-child,
.panel
  > .table-responsive:last-child
  > .table:last-child
  > tfoot:last-child
  > tr:last-child
  td:first-child,
.panel
  > .table-responsive:last-child
  > .table:last-child
  > tfoot:last-child
  > tr:last-child
  th:first-child,
.panel > .table:last-child > tbody:last-child > tr:last-child td:first-child,
.panel > .table:last-child > tbody:last-child > tr:last-child th:first-child,
.panel > .table:last-child > tfoot:last-child > tr:last-child td:first-child,
.panel > .table:last-child > tfoot:last-child > tr:last-child th:first-child {
  border-bottom-left-radius: 3px;
}
.panel
  > .table-responsive:last-child
  > .table:last-child
  > tbody:last-child
  > tr:last-child
  td:last-child,
.panel
  > .table-responsive:last-child
  > .table:last-child
  > tbody:last-child
  > tr:last-child
  th:last-child,
.panel
  > .table-responsive:last-child
  > .table:last-child
  > tfoot:last-child
  > tr:last-child
  td:last-child,
.panel
  > .table-responsive:last-child
  > .table:last-child
  > tfoot:last-child
  > tr:last-child
  th:last-child,
.panel > .table:last-child > tbody:last-child > tr:last-child td:last-child,
.panel > .table:last-child > tbody:last-child > tr:last-child th:last-child,
.panel > .table:last-child > tfoot:last-child > tr:last-child td:last-child,
.panel > .table:last-child > tfoot:last-child > tr:last-child th:last-child {
  border-bottom-right-radius: 3px;
}
.panel > .panel-body + .table,
.panel > .panel-body + .table-responsive,
.panel > .table + .panel-body,
.panel > .table-responsive + .panel-body {
  border-top: 1px solid #ddd;
}
.panel > .table > tbody:first-child > tr:first-child td,
.panel > .table > tbody:first-child > tr:first-child th {
  border-top: 0;
}
.panel > .table-bordered,
.panel > .table-responsive > .table-bordered {
  border: 0;
}
.panel > .table-bordered > tbody > tr > td:first-child,
.panel > .table-bordered > tbody > tr > th:first-child,
.panel > .table-bordered > tfoot > tr > td:first-child,
.panel > .table-bordered > tfoot > tr > th:first-child,
.panel > .table-bordered > thead > tr > td:first-child,
.panel > .table-bordered > thead > tr > th:first-child,
.panel > .table-responsive > .table-bordered > tbody > tr > td:first-child,
.panel > .table-responsive > .table-bordered > tbody > tr > th:first-child,
.panel > .table-responsive > .table-bordered > tfoot > tr > td:first-child,
.panel > .table-responsive > .table-bordered > tfoot > tr > th:first-child,
.panel > .table-responsive > .table-bordered > thead > tr > td:first-child,
.panel > .table-responsive > .table-bordered > thead > tr > th:first-child {
  border-left: 0;
}
.panel > .table-bordered > tbody > tr > td:last-child,
.panel > .table-bordered > tbody > tr > th:last-child,
.panel > .table-bordered > tfoot > tr > td:last-child,
.panel > .table-bordered > tfoot > tr > th:last-child,
.panel > .table-bordered > thead > tr > td:last-child,
.panel > .table-bordered > thead > tr > th:last-child,
.panel > .table-responsive > .table-bordered > tbody > tr > td:last-child,
.panel > .table-responsive > .table-bordered > tbody > tr > th:last-child,
.panel > .table-responsive > .table-bordered > tfoot > tr > td:last-child,
.panel > .table-responsive > .table-bordered > tfoot > tr > th:last-child,
.panel > .table-responsive > .table-bordered > thead > tr > td:last-child,
.panel > .table-responsive > .table-bordered > thead > tr > th:last-child {
  border-right: 0;
}
.panel > .table-bordered > tbody > tr:first-child > td,
.panel > .table-bordered > tbody > tr:first-child > th,
.panel > .table-bordered > thead > tr:first-child > td,
.panel > .table-bordered > thead > tr:first-child > th,
.panel > .table-responsive > .table-bordered > tbody > tr:first-child > td,
.panel > .table-responsive > .table-bordered > tbody > tr:first-child > th,
.panel > .table-responsive > .table-bordered > thead > tr:first-child > td,
.panel > .table-responsive > .table-bordered > thead > tr:first-child > th {
  border-bottom: 0;
}
.panel > .table-bordered > tbody > tr:last-child > td,
.panel > .table-bordered > tbody > tr:last-child > th,
.panel > .table-bordered > tfoot > tr:last-child > td,
.panel > .table-bordered > tfoot > tr:last-child > th,
.panel > .table-responsive > .table-bordered > tbody > tr:last-child > td,
.panel > .table-responsive > .table-bordered > tbody > tr:last-child > th,
.panel > .table-responsive > .table-bordered > tfoot > tr:last-child > td,
.panel > .table-responsive > .table-bordered > tfoot > tr:last-child > th {
  border-bottom: 0;
}
.panel > .table-responsive {
  margin-bottom: 0;
  border: 0;
}
.panel-group {
  margin-bottom: 20px;
}
.panel-group .panel {
  margin-bottom: 0;
  border-radius: 4px;
}
.panel-group .panel + .panel {
  margin-top: 5px;
}
.panel-group .panel-heading {
  border-bottom: 0;
}
.panel-group .panel-heading + .panel-collapse > .list-group,
.panel-group .panel-heading + .panel-collapse > .panel-body {
  border-top: 1px solid #ddd;
}
.panel-group .panel-footer {
  border-top: 0;
}
.panel-group .panel-footer + .panel-collapse .panel-body {
  border-bottom: 1px solid #ddd;
}
.panel-default {
  border-color: #ddd;
}
.panel-default > .panel-heading {
  color: #333;
  background-color: #f5f5f5;
  border-color: #ddd;
}
.panel-default > .panel-heading + .panel-collapse > .panel-body {
  border-top-color: #ddd;
}
.panel-default > .panel-heading .badge {
  color: #f5f5f5;
  background-color: #333;
}
.panel-default > .panel-footer + .panel-collapse > .panel-body {
  border-bottom-color: #ddd;
}
.panel-primary {
  border-color: #337ab7;
}
.panel-primary > .panel-heading {
  color: #fff;
  background-color: #337ab7;
  border-color: #337ab7;
}
.panel-primary > .panel-heading + .panel-collapse > .panel-body {
  border-top-color: #337ab7;
}
.panel-primary > .panel-heading .badge {
  color: #337ab7;
  background-color: #fff;
}
.panel-primary > .panel-footer + .panel-collapse > .panel-body {
  border-bottom-color: #337ab7;
}
.panel-success {
  border-color: #d6e9c6;
}
.panel-success > .panel-heading {
  color: #3c763d;
  background-color: #dff0d8;
  border-color: #d6e9c6;
}
.panel-success > .panel-heading + .panel-collapse > .panel-body {
  border-top-color: #d6e9c6;
}
.panel-success > .panel-heading .badge {
  color: #dff0d8;
  background-color: #3c763d;
}
.panel-success > .panel-footer + .panel-collapse > .panel-body {
  border-bottom-color: #d6e9c6;
}
.panel-info {
  border-color: #bce8f1;
}
.panel-info > .panel-heading {
  color: #31708f;
  background-color: #d9edf7;
  border-color: #bce8f1;
}
.panel-info > .panel-heading + .panel-collapse > .panel-body {
  border-top-color: #bce8f1;
}
.panel-info > .panel-heading .badge {
  color: #d9edf7;
  background-color: #31708f;
}
.panel-info > .panel-footer + .panel-collapse > .panel-body {
  border-bottom-color: #bce8f1;
}
.panel-warning {
  border-color: #faebcc;
}
.panel-warning > .panel-heading {
  color: #8a6d3b;
  background-color: #fcf8e3;
  border-color: #faebcc;
}
.panel-warning > .panel-heading + .panel-collapse > .panel-body {
  border-top-color: #faebcc;
}
.panel-warning > .panel-heading .badge {
  color: #fcf8e3;
  background-color: #8a6d3b;
}
.panel-warning > .panel-footer + .panel-collapse > .panel-body {
  border-bottom-color: #faebcc;
}
.panel-danger {
  border-color: #ebccd1;
}
.panel-danger > .panel-heading {
  color: #a94442;
  background-color: #f2dede;
  border-color: #ebccd1;
}
.panel-danger > .panel-heading + .panel-collapse > .panel-body {
  border-top-color: #ebccd1;
}
.panel-danger > .panel-heading .badge {
  color: #f2dede;
  background-color: #a94442;
}
.panel-danger > .panel-footer + .panel-collapse > .panel-body {
  border-bottom-color: #ebccd1;
}
.embed-responsive {
  position: relative;
  display: block;
  height: 0;
  padding: 0;
  overflow: hidden;
}
.embed-responsive .embed-responsive-item,
.embed-responsive embed,
.embed-responsive iframe,
.embed-responsive object,
.embed-responsive video {
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  width: 100%;
  height: 100%;
  border: 0;
}
.embed-responsive-16by9 {
  padding-bottom: 56.25%;
}
.embed-responsive-4by3 {
  padding-bottom: 75%;
}
.well {
  min-height: 20px;
  padding: 19px;
  margin-bottom: 20px;
  background-color: #f5f5f5;
  border: 1px solid #e3e3e3;
  border-radius: 4px;
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.05);
  box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.05);
}
.well blockquote {
  border-color: #ddd;
  border-color: rgba(0, 0, 0, 0.15);
}
.well-lg {
  padding: 24px;
  border-radius: 6px;
}
.well-sm {
  padding: 9px;
  border-radius: 3px;
}
.close {
  float: right;
  font-size: 21px;
  font-weight: 700;
  line-height: 1;
  color: #000;
  text-shadow: 0 1px 0 #fff;
  opacity: 0.2;
}
.close:focus,
.close:hover {
  color: #000;
  text-decoration: none;
  cursor: pointer;
  opacity: 0.5;
}
button.close {
  -webkit-appearance: none;
  padding: 0;
  cursor: pointer;
  background: 0 0;
  border: 0;
}
.modal-open {
  overflow: hidden;
}
.modal {
  position: fixed;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  z-index: 1050;
  display: none;
  overflow: hidden;
  -webkit-overflow-scrolling: touch;
  outline: 0;
}
.modal.fade .modal-dialog {
  -webkit-transition: -webkit-transform 0.3s ease-out;
  -o-transition: -o-transform 0.3s ease-out;
  transition: transform 0.3s ease-out;
  -webkit-transform: translate(0, -25%);
  -ms-transform: translate(0, -25%);
  -o-transform: translate(0, -25%);
  transform: translate(0, -25%);
}
.modal.in .modal-dialog {
  -webkit-transform: translate(0, 0);
  -ms-transform: translate(0, 0);
  -o-transform: translate(0, 0);
  transform: translate(0, 0);
}
.modal-open .modal {
  overflow-x: hidden;
  overflow-y: auto;
}
.modal-dialog {
  position: relative;
  width: auto;
  margin: 10px;
}
.modal-content {
  position: relative;
  background-color: #fff;
  -webkit-background-clip: padding-box;
  background-clip: padding-box;
  border: 1px solid #999;
  border: 1px solid rgba(0, 0, 0, 0.2);
  border-radius: 6px;
  outline: 0;
  -webkit-box-shadow: 0 3px 9px rgba(0, 0, 0, 0.5);
  box-shadow: 0 3px 9px rgba(0, 0, 0, 0.5);
}
.modal-backdrop {
  position: fixed;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  z-index: 1040;
  background-color: #000;
}
.modal-backdrop.fade {
  opacity: 0;
}
.modal-backdrop.in {
  opacity: 0.5;
}
.modal-header {
  padding: 15px;
  border-bottom: 1px solid #e5e5e5;
}
.modal-header .close {
  margin-top: -2px;
}
.modal-title {
  margin: 0;
  line-height: 1.42857143;
}
.modal-body {
  position: relative;
  padding: 15px;
}
.modal-footer {
  padding: 15px;
  text-align: right;
  border-top: 1px solid #e5e5e5;
}
.modal-footer .btn + .btn {
  margin-bottom: 0;
  margin-left: 5px;
}
.modal-footer .btn-group .btn + .btn {
  margin-left: -1px;
}
.modal-footer .btn-block + .btn-block {
  margin-left: 0;
}
.modal-scrollbar-measure {
  position: absolute;
  top: -9999px;
  width: 50px;
  height: 50px;
  overflow: scroll;
}
@media (min-width: 768px) {
  .modal-dialog {
    width: 600px;
    margin: 30px auto;
  }
  .modal-content {
    -webkit-box-shadow: 0 5px 15px rgba(0, 0, 0, 0.5);
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.5);
  }
  .modal-sm {
    width: 300px;
  }
}
@media (min-width: 992px) {
  .modal-lg {
    width: 900px;
  }
}
.tooltip {
  position: absolute;
  z-index: 1070;
  display: block;
  font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
  font-size: 12px;
  font-style: normal;
  font-weight: 400;
  line-height: 1.42857143;
  text-align: left;
  text-align: start;
  text-decoration: none;
  text-shadow: none;
  text-transform: none;
  letter-spacing: normal;
  word-break: normal;
  word-spacing: normal;
  word-wrap: normal;
  white-space: normal;
  opacity: 0;
  line-break: auto;
}
.tooltip.in {
  opacity: 0.9;
}
.tooltip.top {
  padding: 5px 0;
  margin-top: -3px;
}
.tooltip.right {
  padding: 0 5px;
  margin-left: 3px;
}
.tooltip.bottom {
  padding: 5px 0;
  margin-top: 3px;
}
.tooltip.left {
  padding: 0 5px;
  margin-left: -3px;
}
.tooltip-inner {
  max-width: 200px;
  padding: 3px 8px;
  color: #fff;
  text-align: center;
  background-color: #000;
  border-radius: 4px;
}
.tooltip-arrow {
  position: absolute;
  width: 0;
  height: 0;
  border-color: transparent;
  border-style: solid;
}
.tooltip.top .tooltip-arrow {
  bottom: 0;
  left: 50%;
  margin-left: -5px;
  border-width: 5px 5px 0;
  border-top-color: #000;
}
.tooltip.top-left .tooltip-arrow {
  right: 5px;
  bottom: 0;
  margin-bottom: -5px;
  border-width: 5px 5px 0;
  border-top-color: #000;
}
.tooltip.top-right .tooltip-arrow {
  bottom: 0;
  left: 5px;
  margin-bottom: -5px;
  border-width: 5px 5px 0;
  border-top-color: #000;
}
.tooltip.right .tooltip-arrow {
  top: 50%;
  left: 0;
  margin-top: -5px;
  border-width: 5px 5px 5px 0;
  border-right-color: #000;
}
.tooltip.left .tooltip-arrow {
  top: 50%;
  right: 0;
  margin-top: -5px;
  border-width: 5px 0 5px 5px;
  border-left-color: #000;
}
.tooltip.bottom .tooltip-arrow {
  top: 0;
  left: 50%;
  margin-left: -5px;
  border-width: 0 5px 5px;
  border-bottom-color: #000;
}
.tooltip.bottom-left .tooltip-arrow {
  top: 0;
  right: 5px;
  margin-top: -5px;
  border-width: 0 5px 5px;
  border-bottom-color: #000;
}
.tooltip.bottom-right .tooltip-arrow {
  top: 0;
  left: 5px;
  margin-top: -5px;
  border-width: 0 5px 5px;
  border-bottom-color: #000;
}
.popover {
  position: absolute;
  top: 0;
  left: 0;
  z-index: 1060;
  display: none;
  max-width: 276px;
  padding: 1px;
  font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
  font-size: 14px;
  font-style: normal;
  font-weight: 400;
  line-height: 1.42857143;
  text-align: left;
  text-align: start;
  text-decoration: none;
  text-shadow: none;
  text-transform: none;
  letter-spacing: normal;
  word-break: normal;
  word-spacing: normal;
  word-wrap: normal;
  white-space: normal;
  background-color: #fff;
  -webkit-background-clip: padding-box;
  background-clip: padding-box;
  border: 1px solid #ccc;
  border: 1px solid rgba(0, 0, 0, 0.2);
  border-radius: 6px;
  -webkit-box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
  box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
  line-break: auto;
}
.popover.top {
  margin-top: -10px;
}
.popover.right {
  margin-left: 10px;
}
.popover.bottom {
  margin-top: 10px;
}
.popover.left {
  margin-left: -10px;
}
.popover-title {
  padding: 8px 14px;
  margin: 0;
  font-size: 14px;
  background-color: #f7f7f7;
  border-bottom: 1px solid #ebebeb;
  border-radius: 5px 5px 0 0;
}
.popover-content {
  padding: 9px 14px;
}
.popover > .arrow,
.popover > .arrow:after {
  position: absolute;
  display: block;
  width: 0;
  height: 0;
  border-color: transparent;
  border-style: solid;
}
.popover > .arrow {
  border-width: 11px;
}
.popover > .arrow:after {
  content: "";
  border-width: 10px;
}
.popover.top > .arrow {
  bottom: -11px;
  left: 50%;
  margin-left: -11px;
  border-top-color: #999;
  border-top-color: rgba(0, 0, 0, 0.25);
  border-bottom-width: 0;
}
.popover.top > .arrow:after {
  bottom: 1px;
  margin-left: -10px;
  content: " ";
  border-top-color: #fff;
  border-bottom-width: 0;
}
.popover.right > .arrow {
  top: 50%;
  left: -11px;
  margin-top: -11px;
  border-right-color: #999;
  border-right-color: rgba(0, 0, 0, 0.25);
  border-left-width: 0;
}
.popover.right > .arrow:after {
  bottom: -10px;
  left: 1px;
  content: " ";
  border-right-color: #fff;
  border-left-width: 0;
}
.popover.bottom > .arrow {
  top: -11px;
  left: 50%;
  margin-left: -11px;
  border-top-width: 0;
  border-bottom-color: #999;
  border-bottom-color: rgba(0, 0, 0, 0.25);
}
.popover.bottom > .arrow:after {
  top: 1px;
  margin-left: -10px;
  content: " ";
  border-top-width: 0;
  border-bottom-color: #fff;
}
.popover.left > .arrow {
  top: 50%;
  right: -11px;
  margin-top: -11px;
  border-right-width: 0;
  border-left-color: #999;
  border-left-color: rgba(0, 0, 0, 0.25);
}
.popover.left > .arrow:after {
  right: 1px;
  bottom: -10px;
  content: " ";
  border-right-width: 0;
  border-left-color: #fff;
}
.carousel {
  position: relative;
}
.carousel-inner {
  position: relative;
  width: 100%;
  overflow: hidden;
}
.carousel-inner > .item {
  position: relative;
  display: none;
  -webkit-transition: 0.6s ease-in-out left;
  -o-transition: 0.6s ease-in-out left;
  transition: 0.6s ease-in-out left;
}
.carousel-inner > .item > a > img,
.carousel-inner > .item > img {
  line-height: 1;
}
@media all and (transform-3d), (-webkit-transform-3d) {
  .carousel-inner > .item {
    -webkit-transition: -webkit-transform 0.6s ease-in-out;
    -o-transition: -o-transform 0.6s ease-in-out;
    transition: transform 0.6s ease-in-out;
    -webkit-backface-visibility: hidden;
    backface-visibility: hidden;
    -webkit-perspective: 1000px;
    perspective: 1000px;
  }
  .carousel-inner > .item.active.right,
  .carousel-inner > .item.next {
    left: 0;
    -webkit-transform: translate3d(100%, 0, 0);
    transform: translate3d(100%, 0, 0);
  }
  .carousel-inner > .item.active.left,
  .carousel-inner > .item.prev {
    left: 0;
    -webkit-transform: translate3d(-100%, 0, 0);
    transform: translate3d(-100%, 0, 0);
  }
  .carousel-inner > .item.active,
  .carousel-inner > .item.next.left,
  .carousel-inner > .item.prev.right {
    left: 0;
    -webkit-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0);
  }
}
.carousel-inner > .active,
.carousel-inner > .next,
.carousel-inner > .prev {
  display: block;
}
.carousel-inner > .active {
  left: 0;
}
.carousel-inner > .next,
.carousel-inner > .prev {
  position: absolute;
  top: 0;
  width: 100%;
}
.carousel-inner > .next {
  left: 100%;
}
.carousel-inner > .prev {
  left: -100%;
}
.carousel-inner > .next.left,
.carousel-inner > .prev.right {
  left: 0;
}
.carousel-inner > .active.left {
  left: -100%;
}
.carousel-inner > .active.right {
  left: 100%;
}
.carousel-control {
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  width: 15%;
  font-size: 20px;
  color: #fff;
  text-align: center;
  text-shadow: 0 1px 2px rgba(0, 0, 0, 0.6);
  background-color: rgba(0, 0, 0, 0);
  opacity: 0.5;
}
.carousel-control.left {
  background-image: -webkit-linear-gradient(
    left,
    rgba(0, 0, 0, 0.5) 0,
    rgba(0, 0, 0, 0.0001) 100%
  );
  background-image: -o-linear-gradient(
    left,
    rgba(0, 0, 0, 0.5) 0,
    rgba(0, 0, 0, 0.0001) 100%
  );
  background-image: -webkit-gradient(
    linear,
    left top,
    right top,
    from(rgba(0, 0, 0, 0.5)),
    to(rgba(0, 0, 0, 0.0001))
  );
  background-image: linear-gradient(
    to right,
    rgba(0, 0, 0, 0.5) 0,
    rgba(0, 0, 0, 0.0001) 100%
  );
  background-repeat: repeat-x;
}
.carousel-control.right {
  right: 0;
  left: auto;
  background-image: -webkit-linear-gradient(
    left,
    rgba(0, 0, 0, 0.0001) 0,
    rgba(0, 0, 0, 0.5) 100%
  );
  background-image: -o-linear-gradient(
    left,
    rgba(0, 0, 0, 0.0001) 0,
    rgba(0, 0, 0, 0.5) 100%
  );
  background-image: -webkit-gradient(
    linear,
    left top,
    right top,
    from(rgba(0, 0, 0, 0.0001)),
    to(rgba(0, 0, 0, 0.5))
  );
  background-image: linear-gradient(
    to right,
    rgba(0, 0, 0, 0.0001) 0,
    rgba(0, 0, 0, 0.5) 100%
  );
  background-repeat: repeat-x;
}
.carousel-control:focus,
.carousel-control:hover {
  color: #fff;
  text-decoration: none;
  outline: 0;
  opacity: 0.9;
}
.carousel-control .glyphicon-chevron-left,
.carousel-control .glyphicon-chevron-right,
.carousel-control .icon-next,
.carousel-control .icon-prev {
  position: absolute;
  top: 50%;
  z-index: 5;
  display: inline-block;
  margin-top: -10px;
}
.carousel-control .glyphicon-chevron-left,
.carousel-control .icon-prev {
  left: 50%;
  margin-left: -10px;
}
.carousel-control .glyphicon-chevron-right,
.carousel-control .icon-next {
  right: 50%;
  margin-right: -10px;
}
.carousel-control .icon-next,
.carousel-control .icon-prev {
  width: 20px;
  height: 20px;
  font-family: serif;
  line-height: 1;
}
.carousel-control .icon-prev:before {
  content: "\2039";
}
.carousel-control .icon-next:before {
  content: "\203a";
}
.carousel-indicators {
  position: absolute;
  bottom: 10px;
  left: 50%;
  z-index: 15;
  width: 60%;
  padding-left: 0;
  margin-left: -30%;
  text-align: center;
  list-style: none;
}
.carousel-indicators li {
  display: inline-block;
  width: 10px;
  height: 10px;
  margin: 1px;
  text-indent: -999px;
  cursor: pointer;
  background-color: rgba(0, 0, 0, 0);
  border: 1px solid #fff;
  border-radius: 10px;
}
.carousel-indicators .active {
  width: 12px;
  height: 12px;
  margin: 0;
  background-color: #fff;
}
.carousel-caption {
  position: absolute;
  right: 15%;
  bottom: 20px;
  left: 15%;
  z-index: 10;
  padding-top: 20px;
  padding-bottom: 20px;
  color: #fff;
  text-align: center;
  text-shadow: 0 1px 2px rgba(0, 0, 0, 0.6);
}
.carousel-caption .btn {
  text-shadow: none;
}
@media screen and (min-width: 768px) {
  .carousel-control .glyphicon-chevron-left,
  .carousel-control .glyphicon-chevron-right,
  .carousel-control .icon-next,
  .carousel-control .icon-prev {
    width: 30px;
    height: 30px;
    margin-top: -10px;
    font-size: 30px;
  }
  .carousel-control .glyphicon-chevron-left,
  .carousel-control .icon-prev {
    margin-left: -10px;
  }
  .carousel-control .glyphicon-chevron-right,
  .carousel-control .icon-next {
    margin-right: -10px;
  }
  .carousel-caption {
    right: 20%;
    left: 20%;
    padding-bottom: 30px;
  }
  .carousel-indicators {
    bottom: 20px;
  }
}
.btn-group-vertical > .btn-group:after,
.btn-group-vertical > .btn-group:before,
.btn-toolbar:after,
.btn-toolbar:before,
.clearfix:after,
.clearfix:before,
.container-fluid:after,
.container-fluid:before,
.container:after,
.container:before,
.dl-horizontal dd:after,
.dl-horizontal dd:before,
.form-horizontal .form-group:after,
.form-horizontal .form-group:before,
.modal-footer:after,
.modal-footer:before,
.modal-header:after,
.modal-header:before,
.nav:after,
.nav:before,
.navbar-collapse:after,
.navbar-collapse:before,
.navbar-header:after,
.navbar-header:before,
.navbar:after,
.navbar:before,
.pager:after,
.pager:before,
.panel-body:after,
.panel-body:before,
.row:after,
.row:before {
  display: table;
  content: " ";
}
.btn-group-vertical > .btn-group:after,
.btn-toolbar:after,
.clearfix:after,
.container-fluid:after,
.container:after,
.dl-horizontal dd:after,
.form-horizontal .form-group:after,
.modal-footer:after,
.modal-header:after,
.nav:after,
.navbar-collapse:after,
.navbar-header:after,
.navbar:after,
.pager:after,
.panel-body:after,
.row:after {
  clear: both;
}
.center-block {
  display: block;
  margin-right: auto;
  margin-left: auto;
}
.pull-right {
  float: right !important;
}
.pull-left {
  float: left !important;
}
.hide {
  display: none !important;
}
.show {
  display: block !important;
}
.invisible {
  visibility: hidden;
}
.text-hide {
  font: 0/0 a;
  color: transparent;
  text-shadow: none;
  background-color: transparent;
  border: 0;
}
.hidden {
  display: none !important;
}
.affix {
  position: fixed;
}
@-ms-viewport {
  width: device-width;
}
.visible-lg,
.visible-md,
.visible-sm,
.visible-xs {
  display: none !important;
}
.visible-lg-block,
.visible-lg-inline,
.visible-lg-inline-block,
.visible-md-block,
.visible-md-inline,
.visible-md-inline-block,
.visible-sm-block,
.visible-sm-inline,
.visible-sm-inline-block,
.visible-xs-block,
.visible-xs-inline,
.visible-xs-inline-block {
  display: none !important;
}
@media (max-width: 767px) {
  .visible-xs {
    display: block !important;
  }
  table.visible-xs {
    display: table !important;
  }
  tr.visible-xs {
    display: table-row !important;
  }
  td.visible-xs,
  th.visible-xs {
    display: table-cell !important;
  }
}
@media (max-width: 767px) {
  .visible-xs-block {
    display: block !important;
  }
}
@media (max-width: 767px) {
  .visible-xs-inline {
    display: inline !important;
  }
}
@media (max-width: 767px) {
  .visible-xs-inline-block {
    display: inline-block !important;
  }
}
@media (min-width: 768px) and (max-width: 991px) {
  .visible-sm {
    display: block !important;
  }
  table.visible-sm {
    display: table !important;
  }
  tr.visible-sm {
    display: table-row !important;
  }
  td.visible-sm,
  th.visible-sm {
    display: table-cell !important;
  }
}
@media (min-width: 768px) and (max-width: 991px) {
  .visible-sm-block {
    display: block !important;
  }
}
@media (min-width: 768px) and (max-width: 991px) {
  .visible-sm-inline {
    display: inline !important;
  }
}
@media (min-width: 768px) and (max-width: 991px) {
  .visible-sm-inline-block {
    display: inline-block !important;
  }
}
@media (min-width: 992px) and (max-width: 1199px) {
  .visible-md {
    display: block !important;
  }
  table.visible-md {
    display: table !important;
  }
  tr.visible-md {
    display: table-row !important;
  }
  td.visible-md,
  th.visible-md {
    display: table-cell !important;
  }
}
@media (min-width: 992px) and (max-width: 1199px) {
  .visible-md-block {
    display: block !important;
  }
}
@media (min-width: 992px) and (max-width: 1199px) {
  .visible-md-inline {
    display: inline !important;
  }
}
@media (min-width: 992px) and (max-width: 1199px) {
  .visible-md-inline-block {
    display: inline-block !important;
  }
}
@media (min-width: 1200px) {
  .visible-lg {
    display: block !important;
  }
  table.visible-lg {
    display: table !important;
  }
  tr.visible-lg {
    display: table-row !important;
  }
  td.visible-lg,
  th.visible-lg {
    display: table-cell !important;
  }
}
@media (min-width: 1200px) {
  .visible-lg-block {
    display: block !important;
  }
}
@media (min-width: 1200px) {
  .visible-lg-inline {
    display: inline !important;
  }
}
@media (min-width: 1200px) {
  .visible-lg-inline-block {
    display: inline-block !important;
  }
}
@media (max-width: 767px) {
  .hidden-xs {
    display: none !important;
  }
}
@media (min-width: 768px) and (max-width: 991px) {
  .hidden-sm {
    display: none !important;
  }
}
@media (min-width: 992px) and (max-width: 1199px) {
  .hidden-md {
    display: none !important;
  }
}
@media (min-width: 1200px) {
  .hidden-lg {
    display: none !important;
  }
}
.visible-print {
  display: none !important;
}
@media print {
  .visible-print {
    display: block !important;
  }
  table.visible-print {
    display: table !important;
  }
  tr.visible-print {
    display: table-row !important;
  }
  td.visible-print,
  th.visible-print {
    display: table-cell !important;
  }
}
.visible-print-block {
  display: none !important;
}
@media print {
  .visible-print-block {
    display: block !important;
  }
}
.visible-print-inline {
  display: none !important;
}
@media print {
  .visible-print-inline {
    display: inline !important;
  }
}
.visible-print-inline-block {
  display: none !important;
}
@media print {
  .visible-print-inline-block {
    display: inline-block !important;
  }
}
@media print {
  .hidden-print {
    display: none !important;
  }
}
.owl-carousel .animated {
  -webkit-animation-duration: 1s;
  animation-duration: 1s;
  -webkit-animation-fill-mode: both;
  animation-fill-mode: both;
}
.owl-carousel .owl-animated-in {
  z-index: 0;
}
.owl-carousel .owl-animated-out {
  z-index: 1;
}
.owl-carousel .fadeOut {
  -webkit-animation-name: fadeOut;
  animation-name: fadeOut;
}
@-webkit-keyframes fadeOut {
  0% {
    opacity: 1;
  }
  100% {
    opacity: 0;
  }
}
@keyframes fadeOut {
  0% {
    opacity: 1;
  }
  100% {
    opacity: 0;
  }
}
.owl-height {
  -webkit-transition: height 0.5s ease-in-out;
  -moz-transition: height 0.5s ease-in-out;
  -ms-transition: height 0.5s ease-in-out;
  -o-transition: height 0.5s ease-in-out;
  transition: height 0.5s ease-in-out;
}
.owl-carousel {
  display: none;
  width: 100%;
  -webkit-tap-highlight-color: transparent;
  position: relative;
  z-index: 1;
}
.owl-carousel .owl-stage {
  position: relative;
  -ms-touch-action: pan-Y;
}
.owl-carousel .owl-stage:after {
  content: ".";
  display: block;
  clear: both;
  visibility: hidden;
  line-height: 0;
  height: 0;
}
.owl-carousel .owl-stage-outer {
  position: relative;
  overflow: hidden;
  -webkit-transform: translate3d(0, 0, 0);
}
.owl-carousel .owl-controls .owl-dot,
.owl-carousel .owl-controls .owl-nav .owl-next,
.owl-carousel .owl-controls .owl-nav .owl-prev {
  cursor: pointer;
  cursor: hand;
  -webkit-user-select: none;
  -khtml-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}
.owl-carousel.owl-loaded {
  display: block;
}
.owl-carousel.owl-loading {
  opacity: 0;
  display: block;
}
.owl-carousel.owl-hidden {
  opacity: 0;
}
.owl-carousel .owl-refresh .owl-item {
  display: none;
}
.owl-carousel .owl-item {
  position: relative;
  min-height: 1px;
  float: left;
  -webkit-backface-visibility: hidden;
  -webkit-tap-highlight-color: transparent;
  -webkit-touch-callout: none;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}
.owl-carousel .owl-item img {
  display: block;
  width: 100%;
  -webkit-transform-style: preserve-3d;
}
.owl-carousel.owl-text-select-on .owl-item {
  -webkit-user-select: auto;
  -moz-user-select: auto;
  -ms-user-select: auto;
  user-select: auto;
}
.owl-carousel .owl-grab {
  cursor: move;
  cursor: -webkit-grab;
  cursor: -o-grab;
  cursor: -ms-grab;
  cursor: grab;
}
.owl-carousel.owl-rtl {
  direction: rtl;
}
.owl-carousel.owl-rtl .owl-item {
  float: right;
}
.no-js .owl-carousel {
  display: block;
}
.owl-carousel .owl-item .owl-lazy {
  opacity: 0;
  -webkit-transition: opacity 0.4s ease;
  -moz-transition: opacity 0.4s ease;
  -ms-transition: opacity 0.4s ease;
  -o-transition: opacity 0.4s ease;
  transition: opacity 0.4s ease;
}
.owl-carousel .owl-item img {
  transform-style: preserve-3d;
}
.owl-carousel .owl-video-wrapper {
  position: relative;
  height: 100%;
  background: #000;
}
.owl-carousel .owl-video-play-icon {
  position: absolute;
  height: 80px;
  width: 80px;
  left: 50%;
  top: 50%;
  margin-left: -40px;
  margin-top: -40px;
  background: url(owl.video.play.png) no-repeat;
  cursor: pointer;
  z-index: 1;
  -webkit-backface-visibility: hidden;
  -webkit-transition: scale 0.1s ease;
  -moz-transition: scale 0.1s ease;
  -ms-transition: scale 0.1s ease;
  -o-transition: scale 0.1s ease;
  transition: scale 0.1s ease;
}
.owl-carousel .owl-video-play-icon:hover {
  -webkit-transition: scale(1.3, 1.3);
  -moz-transition: scale(1.3, 1.3);
  -ms-transition: scale(1.3, 1.3);
  -o-transition: scale(1.3, 1.3);
  transition: scale(1.3, 1.3);
}
.owl-carousel .owl-video-playing .owl-video-play-icon,
.owl-carousel .owl-video-playing .owl-video-tn {
  display: none;
}
.owl-carousel .owl-video-tn {
  opacity: 0;
  height: 100%;
  background-position: center center;
  background-repeat: no-repeat;
  -webkit-background-size: contain;
  -moz-background-size: contain;
  -o-background-size: contain;
  background-size: contain;
  -webkit-transition: opacity 0.4s ease;
  -moz-transition: opacity 0.4s ease;
  -ms-transition: opacity 0.4s ease;
  -o-transition: opacity 0.4s ease;
  transition: opacity 0.4s ease;
}
.owl-carousel .owl-video-frame {
  position: relative;
  z-index: 1;
}
#slider-1-slide-1-layer-24:hover {
  box-shadow: inset 0 -5px 0 #db455a;
}
.rs-p-wp-fix {
  display: none !important;
  margin: 0 !important;
  height: 0 !important;
}
.wp-block-themepunch-revslider {
  position: relative;
}
#debungcontrolls {
  z-index: 100000;
  position: fixed;
  bottom: 0;
  width: 100%;
  height: auto;
  background: rgba(0, 0, 0, 0.6);
  padding: 10px;
  box-sizing: border-box;
}
rs-debug {
  z-index: 100000;
  position: fixed;
  top: 0;
  width: 300px;
  height: 300px;
  background: rgba(0, 0, 0, 0.6);
  padding: 10px;
  box-sizing: border-box;
  color: #fff;
  font-size: 10px;
  line-height: 13px;
  overflow: scroll;
}
rs-modal {
  position: fixed !important;
  z-index: 9999999 !important;
  pointer-events: none !important;
}
rs-modal.rs-modal-auto {
  top: auto;
  bottom: auto;
  left: auto;
  right: auto;
}
rs-modal.rs-modal-fullscreen,
rs-modal.rs-modal-fullwidth {
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
}
rs-modal rs-fullwidth-wrap {
  position: absolute;
  top: 0;
  left: 0;
  height: 100%;
}
rs-module-wrap.rs-modal {
  display: none;
  max-height: 100% !important;
  overflow: auto !important;
  pointer-events: auto !important;
}
rs-module-wrap.hideallscrollbars.rs-modal {
  overflow: hidden !important;
  max-width: 100% !important;
}
rs-modal-cover {
  width: 100%;
  height: 100%;
  z-index: 0;
  background: 0 0;
  position: absolute;
  top: 0;
  left: 0;
  cursor: pointer;
  pointer-events: auto;
}
body > rs-modal-cover {
  position: fixed;
  z-index: 9999995 !important;
}
rs-sbg-px {
  pointer-events: none;
}
.rs-forcehidden * {
  visibility: hidden !important;
}
.rs_splitted_lines {
  display: block;
  white-space: nowrap !important;
}
.debugtimeline {
  width: 100%;
  height: 10px;
  position: relative;
  display: block;
  margin-bottom: 3px;
  display: none;
  white-space: nowrap;
  box-sizing: border-box;
}
.debugtimeline:hover {
  height: 15px;
}
.the_timeline_tester {
  background: #e74c3c;
  position: absolute;
  top: 0;
  left: 0;
  height: 100%;
  width: 0;
}
.rs-go-fullscreen {
  position: fixed !important;
  width: 100% !important;
  height: 100% !important;
  top: 0 !important;
  left: 0 !important;
  z-index: 9999999 !important;
  background: #fff;
}
.debugtimeline.tl_slide .the_timeline_tester {
  background: #f39c12;
}
.debugtimeline.tl_frame .the_timeline_tester {
  background: #3498db;
}
.debugtimline_txt {
  color: #fff;
  font-weight: 400;
  font-size: 7px;
  position: absolute;
  left: 10px;
  top: 0;
  white-space: nowrap;
  line-height: 10px;
}
.rtl {
  direction: rtl;
}
@font-face {
  font-family: revicons;
  src: url(../assets/fonts/revicons/revicons.eot?5510888);
  src: url(../assets/fonts/revicons/revicons.eot?5510888#iefix)
      format("embedded-opentype"),
    url(../assets/fonts/revicons/revicons.woff?5510888) format("woff"),
    url(../assets/fonts/revicons/revicons.ttf?5510888) format("truetype"),
    url(../assets/fonts/revicons/revicons.svg?5510888#revicons) format("svg");
  font-weight: 400;
  font-style: normal;
}
[class*=" revicon-"]:before,
[class^="revicon-"]:before {
  font-family: revicons;
  font-style: normal;
  font-weight: 400;
  speak: none;
  display: inline-block;
  text-decoration: inherit;
  width: 1em;
  margin-right: 0.2em;
  text-align: center;
  font-variant: normal;
  text-transform: none;
  line-height: 1em;
  margin-left: 0.2em;
}
#builderView i[class*=" fa-"],
#builderView i[class^="fa-"],
#objectlibrary i[class*=" fa-"],
#objectlibrary i[class^="fa-"],
#rs_overview i[class*=" fa-"],
#rs_overview i[class^="fa-"],
#rs_overview_menu i[class*=" fa-"],
#rs_overview_menu i[class^="fa-"],
#waitaminute i[class*=" fa-"],
#waitaminute i[class^="fa-"],
.rb-modal-wrapper i[class*=" fa-"],
.rb-modal-wrapper i[class^="fa-"],
rs-module i[class*=" fa-"],
rs-module i[class^="fa-"] {
  display: inline-block;
  font: normal normal normal 14px/1 FontAwesome;
  font-size: inherit;
  text-rendering: auto;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}
#builderView [class*=" fa-"]:before,
#builderView [class^="fa-"]:before,
#objectlibrary [class*=" fa-"]:before,
#objectlibrary [class^="fa-"]:before,
#rs_overview [class*=" fa-"]:before,
#rs_overview [class^="fa-"]:before,
#rs_overview_menu [class*=" fa-"]:before,
#rs_overview_menu [class^="fa-"]:before,
#waitaminute [class*=" fa-"]:before,
#waitaminute [class^="fa-"]:before,
.rb-modal-wrapper [class*=" fa-"]:before,
.rb-modal-wrapper [class^="fa-"]:before,
rs-module [class*=" fa-"]:before,
rs-module [class^="fa-"]:before {
  font-family: FontAwesome;
  font-style: normal;
  font-weight: 400;
  speak: none;
  display: inline-block;
  text-decoration: inherit;
  width: auto;
  margin-right: 0;
  text-align: center;
  font-variant: normal;
  text-transform: none;
  line-height: inherit;
  margin-left: 0;
}
#builderView .sr-only,
#objectlibrary .sr-only,
#rs_overview .sr-only,
#rs_overview_menu .sr-only,
#waitaminute .sr-only,
.rb-modal-wrapper .sr-only,
rs-module .sr-only {
  position: absolute;
  width: 1px;
  height: 1px;
  padding: 0;
  margin: -1px;
  overflow: hidden;
  clip: rect(0, 0, 0, 0);
  border: 0;
}
#builderView .sr-only-focusable:active,
#builderView .sr-only-focusable:focus,
#objectlibrary .sr-only-focusable:active,
#objectlibrary .sr-only-focusable:focus,
#rs_overview .sr-only-focusable:active,
#rs_overview .sr-only-focusable:focus,
#rs_overview_menu .sr-only-focusable:active,
#rs_overview_menu .sr-only-focusable:focus,
#waitaminute .sr-only-focusable:active,
#waitaminute .sr-only-focusable:focus,
.rb-modal-wrapper .sr-only-focusable:active,
.rb-modal-wrapper .sr-only-focusable:focus,
rs-module .sr-only-focusable:active,
rs-module .sr-only-focusable:focus {
  position: static;
  width: auto;
  height: auto;
  margin: 0;
  overflow: visible;
  clip: auto;
}
.revicon-search-1:before {
  content: "\e802";
}
.revicon-pencil-1:before {
  content: "\e831";
}
.revicon-picture-1:before {
  content: "\e803";
}
.revicon-cancel:before {
  content: "\e80a";
}
.revicon-info-circled:before {
  content: "\e80f";
}
.revicon-trash:before {
  content: "\e801";
}
.revicon-left-dir:before {
  content: "\e817";
}
.revicon-right-dir:before {
  content: "\e818";
}
.revicon-down-open:before {
  content: "\e83b";
}
.revicon-left-open:before {
  content: "\e819";
}
.revicon-right-open:before {
  content: "\e81a";
}
.revicon-angle-left:before {
  content: "\e820";
}
.revicon-angle-right:before {
  content: "\e81d";
}
.revicon-left-big:before {
  content: "\e81f";
}
.revicon-right-big:before {
  content: "\e81e";
}
.revicon-magic:before {
  content: "\e807";
}
.revicon-picture:before {
  content: "\e800";
}
.revicon-export:before {
  content: "\e80b";
}
.revicon-cog:before {
  content: "\e832";
}
.revicon-login:before {
  content: "\e833";
}
.revicon-logout:before {
  content: "\e834";
}
.revicon-video:before {
  content: "\e805";
}
.revicon-arrow-combo:before {
  content: "\e827";
}
.revicon-left-open-1:before {
  content: "\e82a";
}
.revicon-right-open-1:before {
  content: "\e82b";
}
.revicon-left-open-mini:before {
  content: "\e822";
}
.revicon-right-open-mini:before {
  content: "\e823";
}
.revicon-left-open-big:before {
  content: "\e824";
}
.revicon-right-open-big:before {
  content: "\e825";
}
.revicon-left:before {
  content: "\e836";
}
.revicon-right:before {
  content: "\e826";
}
.revicon-ccw:before {
  content: "\e808";
}
.revicon-arrows-ccw:before {
  content: "\e806";
}
.revicon-palette:before {
  content: "\e829";
}
.revicon-list-add:before {
  content: "\e80c";
}
.revicon-doc:before {
  content: "\e809";
}
.revicon-left-open-outline:before {
  content: "\e82e";
}
.revicon-left-open-2:before {
  content: "\e82c";
}
.revicon-right-open-outline:before {
  content: "\e82f";
}
.revicon-right-open-2:before {
  content: "\e82d";
}
.revicon-equalizer:before {
  content: "\e83a";
}
.revicon-layers-alt:before {
  content: "\e804";
}
.revicon-popup:before {
  content: "\e828";
}
.tp-fullwidth-forcer {
  z-index: 0;
  pointer-events: none;
}
rs-module-wrap {
  visibility: hidden;
}
rs-module-wrap,
rs-module-wrap * {
  box-sizing: border-box;
  -webkit-tap-highlight-color: transparent;
}
rs-module-wrap {
  position: relative;
  z-index: 1;
  width: 100%;
  display: block;
}
.rs-fixedscrollon rs-module-wrap {
  position: fixed !important;
  top: 0 !important;
  z-index: 1000;
  left: 0 !important;
}
.rs-stickyscrollon rs-module-wrap {
  position: sticky !important;
  top: 0;
  z-index: 1000;
}
.rs-stickyscrollon {
  overflow: visible !important;
}
rs-fw-forcer {
  display: block;
  width: 100%;
  pointer-events: none;
}
rs-module {
  position: relative;
  overflow: hidden;
  display: block;
}
rs-module.disableVerticalScroll {
  -ms-touch-action: pan-x;
  touch-action: pan-x;
}
rs-pzimg-wrap,
rs-sbg,
rs-sbg-effectwrap {
  display: block;
  pointer-events: none;
}
rs-sbg-effectwrap {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
}
rs-sbg-px,
rs-sbg-wrap {
  position: absolute;
  top: 0;
  left: 0;
  z-index: 0;
  width: 100%;
  height: 100%;
  display: block;
}
a.rs-layer,
a.rs-layer:-webkit-any-link {
  text-decoration: none;
}
a[x-apple-data-detectors] {
  color: inherit !important;
  text-decoration: none !important;
  font-size: inherit !important;
  font-family: inherit !important;
  font-weight: inherit !important;
  line-height: inherit !important;
}
.entry-content rs-module a,
rs-module a {
  box-shadow: none;
}
.rs-ov-hidden {
  overflow: hidden !important;
}
.rs-forceoverflow,
.rs-forceoverflow rs-module,
.rs-forceoverflow rs-module-wrap,
.rs-forceoverflow rs-slide,
.rs-forceoverflow rs-slides {
  overflow: visible !important;
}
.tp-simpleresponsive img,
rs-module img {
  max-width: none !important;
  transition: none;
  margin: 0;
  padding: 0;
  border: none;
}
rs-module .no-slides-text {
  font-weight: 700;
  text-align: center;
  padding-top: 80px;
}
rs-slide,
rs-slide:before,
rs-slides {
  position: absolute;
  text-indent: 0;
  top: 0;
  left: 0;
}
rs-slide,
rs-slide:before {
  display: block;
  visibility: hidden;
}
.rs-layer .rs-untoggled-content {
  display: block;
}
.rs-layer .rs-toggled-content {
  display: none;
}
.rs-tc-active.rs-layer .rs-toggled-content {
  display: block;
}
.rs-tc-active.rs-layer .rs-untoggled-content {
  display: none;
}
.rs-layer-video {
  overflow: hidden;
}
rs-module .rs-layer,
rs-module rs-layer {
  opacity: 0;
  position: relative;
  visibility: hidden;
  white-space: nowrap;
  display: block;
  -webkit-font-smoothing: antialiased !important;
  -webkit-tap-highlight-color: transparent;
  -moz-osx-font-smoothing: grayscale;
  z-index: 1;
}
rs-layer-wrap,
rs-mask,
rs-module .rs-layer,
rs-module img,
rs-module-wrap {
  -moz-user-select: none;
  -khtml-user-select: none;
  -webkit-user-select: none;
  -o-user-select: none;
}
.wpb_text_column rs-module rs-mask-wrap .rs-layer,
.wpb_text_column rs-module rs-mask-wrap :last-child,
rs-module rs-mask-wrap .rs-layer,
rs-module rs-mask-wrap :last-child {
  margin-bottom: 0;
}
.rs-svg svg {
  width: 100%;
  height: 100%;
  position: relative;
  vertical-align: top;
}
.rs-layer :not(.rs-wtbindex),
.rs-layer:not(.rs-wtbindex),
rs-alyer :not(.rs-wtbindex),
rs-layer:not(.rs-wtbindex) {
  outline: 0 !important;
}
rs-carousel-wrap {
  cursor: url(openhand.cur), move;
}
rs-carousel-wrap.dragged {
  cursor: url(closedhand.cur), move;
}
rs-carousel-wrap.noswipe {
  cursor: default;
}
rs-carousel-wrap {
  position: absolute;
  overflow: hidden;
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
}
rs-carousel-space {
  clear: both;
  display: block;
  width: 100%;
  height: 0;
  position: relative;
}
.tp_inner_padding {
  box-sizing: border-box;
  max-height: none !important;
}
.rs-layer.rs-selectable {
  -moz-user-select: all;
  -khtml-user-select: all;
  -webkit-user-select: all;
  -o-user-select: all;
}
rs-px-mask {
  overflow: hidden;
  display: block;
  width: 100%;
  height: 100%;
  position: relative;
}
rs-module audio,
rs-module embed,
rs-module iframe,
rs-module object,
rs-module video {
  max-width: none !important;
  border: none;
}
rs-bg-elem {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  z-index: 0;
  display: block;
  pointer-events: none;
}
.tp-blockmask,
.tp-blockmask_in,
.tp-blockmask_out {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: #fff;
  z-index: 1000;
  transform: scaleX(0) scaleY(0);
}
rs-zone {
  position: absolute;
  width: 100%;
  left: 0;
  box-sizing: border-box;
  min-height: 50px;
  font-size: 0;
  pointer-events: none;
}
rs-cbg-mask-wrap,
rs-column,
rs-row-wrap {
  display: block;
  visibility: hidden;
}
rs-layer-wrap,
rs-loop-wrap,
rs-mask-wrap,
rs-parallax-wrap {
  display: block;
}
rs-column-wrap > rs-loop-wrap {
  z-index: 1;
}
rs-cbg-mask-wrap,
rs-layer-wrap,
rs-mask-wrap {
  transform-style: flat;
}
.safarifix rs-layer-wrap {
  perspective: 1000000;
}
@-moz-document url-prefix() {
  rs-cbg-mask-wrap,
  rs-layer-wrap,
  rs-mask-wrap {
    perspective: none;
  }
}
rs-mask-wrap {
  overflow: hidden;
}
rs-fullwidth-wrap {
  position: relative;
  width: 100%;
  height: auto;
  display: block;
  overflow: visible;
  max-width: none !important;
}
.rev_row_zone_top {
  top: 0;
}
.rev_row_zone_bottom {
  bottom: 0;
}
rs-column-wrap .rs-parallax-wrap {
  vertical-align: top;
}
.rs-layer img,
rs-layer img {
  vertical-align: top;
}
rs-row,
rs-row.rs-layer {
  display: table;
  position: relative;
  width: 100% !important;
  table-layout: fixed;
  box-sizing: border-box;
  vertical-align: top;
  height: auto;
  font-size: 0;
}
rs-column-wrap {
  display: table-cell;
  position: relative;
  vertical-align: top;
  height: auto;
  box-sizing: border-box;
  font-size: 0;
}
rs-column {
  box-sizing: border-box;
  display: block;
  position: relative;
  width: 100% !important;
  height: auto !important;
  white-space: normal !important;
}
rs-cbg-mask-wrap {
  position: absolute;
  z-index: 0;
  box-sizing: border-box;
}
rs-column-wrap rs-cbg-mask-wrap {
  top: 0;
  left: 0;
  bottom: 0;
  right: 0;
}
rs-column-bg {
  position: absolute;
  z-index: 0;
  box-sizing: border-box;
  width: 100%;
  height: 100%;
}
.rs-pelock * {
  pointer-events: none !important;
}
rs-column .rs-parallax-wrap,
rs-column rs-loop-wrap,
rs-column rs-mask-wrap {
  text-align: inherit;
}
rs-column rs-mask-wrap {
  display: inline-block;
}
rs-column .rs-parallax-wrap,
rs-column .rs-parallax-wrap rs-loop-wrap,
rs-column .rs-parallax-wrap rs-mask-wrap {
  position: relative !important;
  left: auto !important;
  top: auto !important;
  line-height: 0;
}
rs-column .rev_layer_in_column,
rs-column .rs-parallax-wrap,
rs-column .rs-parallax-wrap rs-loop-wrap,
rs-column .rs-parallax-wrap rs-mask-wrap {
  vertical-align: top;
}
.rev_break_columns {
  display: block !important;
}
.rev_break_columns rs-column-wrap.rs-parallax-wrap {
  display: block !important;
  width: 100% !important;
}
.rev_break_columns rs-column-wrap.rs-parallax-wrap.rs-layer-hidden,
.rs-layer-audio.rs-layer-hidden,
.rs-layer.rs-layer-hidden,
.rs-parallax-wrap.rs-layer-hidden,
.tp-forcenotvisible,
.tp-hide-revslider,
rs-column-wrap.rs-layer-hidden,
rs-row-wrap.rs-layer-hidden {
  visibility: hidden !important;
  display: none !important;
}
.rs-layer.rs-nointeraction,
rs-layer.rs-nointeraction {
  pointer-events: none !important;
}
rs-static-layers {
  position: absolute;
  z-index: 101;
  top: 0;
  left: 0;
  display: block;
  width: 100%;
  height: 100%;
  pointer-events: none;
}
rs-static-layers.rs-stl-back {
  z-index: 0;
}
.rs-layer rs-fcr {
  width: 0;
  height: 0;
  border-left: 40px solid transparent;
  border-right: 0 solid transparent;
  border-top: 40px solid #00a8ff;
  position: absolute;
  right: 100%;
  top: 0;
}
.rs-layer rs-fcrt {
  width: 0;
  height: 0;
  border-left: 40px solid transparent;
  border-right: 0 solid transparent;
  border-bottom: 40px solid #00a8ff;
  position: absolute;
  right: 100%;
  top: 0;
}
.rs-layer rs-bcr {
  width: 0;
  height: 0;
  border-left: 0 solid transparent;
  border-right: 40px solid transparent;
  border-bottom: 40px solid #00a8ff;
  position: absolute;
  left: 100%;
  top: 0;
}
.rs-layer rs-bcrt {
  width: 0;
  height: 0;
  border-left: 0 solid transparent;
  border-right: 40px solid transparent;
  border-top: 40px solid #00a8ff;
  position: absolute;
  left: 100%;
  top: 0;
}
.tp-layer-inner-rotation {
  position: relative !important;
}
img.tp-slider-alternative-image {
  width: 100%;
  height: auto;
}
.noFilterClass {
  filter: none !important;
}
rs-bgvideo {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  z-index: 0;
  display: block;
}
.rs-layer.coverscreenvideo {
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
  position: absolute;
}
.rs-layer.rs-fsv {
  left: 0;
  top: 0;
  position: absolute;
  width: 100%;
  height: 100%;
}
.rs-layer.rs-fsv audio,
.rs-layer.rs-fsv iframe,
.rs-layer.rs-fsv iframe audio,
.rs-layer.rs-fsv iframe video,
.rs-layer.rs-fsv video {
  width: 100%;
  height: 100%;
  display: none;
}
.fullcoveredvideo audio,
.rs-fsv audio .fullcoveredvideo video,
.rs-fsv video {
  background: #000;
}
.fullcoveredvideo rs-poster {
  background-position: center center;
  background-size: cover;
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
}
.videoisplaying .html5vid rs-poster {
  display: none;
}
.tp-video-play-button {
  background: #000;
  background: rgba(0, 0, 0, 0.3);
  border-radius: 5px;
  position: absolute;
  top: 50%;
  left: 50%;
  color: #fff;
  z-index: 3;
  margin-top: -25px;
  margin-left: -25px;
  line-height: 50px !important;
  text-align: center;
  cursor: pointer;
  width: 50px;
  height: 50px;
  box-sizing: border-box;
  display: inline-block;
  vertical-align: top;
  z-index: 4;
  opacity: 0;
  transition: opacity 0.3s ease-out !important;
}
.rs-audio .tp-video-play-button {
  display: none !important;
}
.rs-layer .html5vid {
  width: 100% !important;
  height: 100% !important;
}
.tp-video-play-button i {
  width: 50px;
  height: 50px;
  display: inline-block;
  text-align: center !important;
  vertical-align: top;
  line-height: 50px !important;
  font-size: 30px !important;
}
.rs-layer:hover .tp-video-play-button {
  opacity: 1;
  display: block;
}
.rs-layer .tp-revstop {
  display: none;
  width: 15px;
  border-right: 5px solid #fff !important;
  border-left: 5px solid #fff !important;
  transform: translateX(50%) translateY(50%);
  height: 20px;
  margin-left: 11px !important;
  margin-top: 5px !important;
}
.videoisplaying .revicon-right-dir {
  display: none;
}
.videoisplaying .tp-revstop {
  display: block;
}
.videoisplaying .tp-video-play-button {
  display: none;
}
.fullcoveredvideo .tp-video-play-button {
  display: none !important;
}
.rs-fsv .rs-fsv audio {
  object-fit: contain !important;
}
.rs-fsv .rs-fsv video {
  object-fit: contain !important;
}
.rs-layer-video
  .html5vid.hidefullscreen
  video::-webkit-media-controls-fullscreen-button {
  display: none;
}
@supports not (-ms-high-contrast: none) {
  .rs-fsv .fullcoveredvideo audio {
    object-fit: cover !important;
  }
  .rs-fsv .fullcoveredvideo video {
    object-fit: cover !important;
  }
}
.rs-fullvideo-cover {
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
  position: absolute;
  background: 0 0;
  z-index: 5;
}
.rs-nolc .tp-video-play-button,
rs-bgvideo audio::-webkit-media-controls,
rs-bgvideo video::-webkit-media-controls,
rs-bgvideo video::-webkit-media-controls-start-playback-button {
  display: none !important;
}
.rs-audio .tp-video-controls {
  opacity: 1 !important;
  visibility: visible !important;
}
rs-module div.rs-layer,
rs-module h1.rs-layer,
rs-module h2.rs-layer,
rs-module h3.rs-layer,
rs-module h4.rs-layer,
rs-module h5.rs-layer,
rs-module h6.rs-layer,
rs-module p.rs-layer,
rs-module span.rs-layer {
  margin: 0;
  padding: 0;
  margin-block-start: 0;
  margin-block-end: 0;
  margin-inline-start: 0;
  margin-inline-end: 0;
}
rs-module h1.rs-layer:before,
rs-module h2.rs-layer:before,
rs-module h3.rs-layer:before,
rs-module h4.rs-layer:before,
rs-module h5.rs-layer:before,
rs-module h6.rs-layer:before {
  content: none;
}
rs-dotted {
  background-repeat: repeat;
  width: 100%;
  height: 100%;
  position: absolute;
  top: 0;
  left: 0;
  z-index: 3;
  display: block;
  pointer-events: none;
}
rs-sbg-wrap rs-dotted {
  z-index: 31;
}
rs-dotted.twoxtwo {
  background: url(../assets/gridtile.png);
}
rs-dotted.twoxtwowhite {
  background: url(../assets/gridtile_white.png);
}
rs-dotted.threexthree {
  background: url(../assets/gridtile_3x3.png);
}
rs-dotted.threexthreewhite {
  background: url(../assets/gridtile_3x3_white.png);
}
.tp-shadowcover {
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
  background: #fff;
  position: absolute;
  z-index: -1;
}
.tp-shadow1 {
  box-shadow: 0 10px 6px -6px rgba(0, 0, 0, 0.8);
}
.tp-shadow2:after,
.tp-shadow2:before,
.tp-shadow3:before,
.tp-shadow4:after {
  z-index: -2;
  position: absolute;
  content: "";
  bottom: 10px;
  left: 10px;
  width: 50%;
  top: 85%;
  max-width: 300px;
  background: 0 0;
  box-shadow: 0 15px 10px rgba(0, 0, 0, 0.8);
  transform: rotate(-3deg);
}
.tp-shadow2:after,
.tp-shadow4:after {
  transform: rotate(3deg);
  right: 10px;
  left: auto;
}
.tp-shadow5 {
  position: relative;
  box-shadow: 0 1px 4px rgba(0, 0, 0, 0.3), 0 0 40px rgba(0, 0, 0, 0.1) inset;
}
.tp-shadow5:after,
.tp-shadow5:before {
  content: "";
  position: absolute;
  z-index: -2;
  box-shadow: 0 0 25px 0 rgba(0, 0, 0, 0.6);
  top: 30%;
  bottom: 0;
  left: 20px;
  right: 20px;
  border-radius: 100px/20px;
}
.rev-btn,
.rev-btn:visited {
  outline: 0 !important;
  box-shadow: none;
  text-decoration: none !important;
  box-sizing: border-box;
  cursor: pointer;
}
.rev-btn.rev-uppercase,
.rev-btn.rev-uppercase:visited {
  text-transform: uppercase;
}
.rev-btn i {
  font-size: inherit;
  font-weight: 400;
  position: relative;
  top: 0;
  transition: opacity 0.2s ease-out, margin 0.2s ease-out;
  margin-left: 0;
  line-height: inherit;
}
.rev-btn.rev-hiddenicon i {
  font-size: inherit;
  font-weight: 400;
  position: relative;
  top: 0;
  transition: opacity 0.2s ease-out, margin 0.2s ease-out;
  opacity: 0;
  margin-left: 0 !important;
  width: 0 !important;
}
.rev-btn.rev-hiddenicon:hover i {
  opacity: 1 !important;
  margin-left: 10px !important;
  width: auto !important;
}
.rev-burger {
  position: relative;
  box-sizing: border-box;
  padding: 22px 14px 22px 14px;
  border-radius: 50%;
  border: 1px solid rgba(51, 51, 51, 0.25);
  -webkit-tap-highlight-color: transparent;
  -webkit-tap-highlight-color: transparent;
  cursor: pointer;
}
.rev-burger span {
  display: block;
  width: 30px;
  height: 3px;
  background: #333;
  transition: 0.7s;
  pointer-events: none;
  transform-style: flat !important;
}
.rev-burger span:nth-child(2) {
  margin: 3px 0;
}
#dialog_addbutton .rev-burger:hover :first-child,
.open .rev-burger :first-child,
.open.rev-burger :first-child,
.quick_style_example_wrap .rev-burger:hover :first-child {
  transform: translateY(6px) rotate(-45deg);
}
#dialog_addbutton .rev-burger:hover :nth-child(2),
.open .rev-burger :nth-child(2),
.open.rev-burger :nth-child(2),
.quick_style_example_wrap .rev-burger:hover :nth-child(2) {
  transform: rotate(-45deg);
  opacity: 0;
}
#dialog_addbutton .rev-burger:hover :last-child,
.open .rev-burger :last-child,
.open.rev-burger :last-child,
.quick_style_example_wrap .rev-burger:hover :last-child {
  transform: translateY(-6px) rotate(-135deg);
}
.rev-burger.revb-white {
  border: 2px solid rgba(255, 255, 255, 0.2);
}
.rev-b-span-light span,
.rev-burger.revb-white span {
  background: #fff;
}
.rev-burger.revb-whitenoborder {
  border: 0;
}
.rev-burger.revb-whitenoborder span {
  background: #fff;
}
.rev-burger.revb-darknoborder {
  border: 0;
}
.rev-b-span-dark span,
.rev-burger.revb-darknoborder span {
  background: #333;
}
.rev-burger.revb-whitefull {
  background: #fff;
  border: none;
}
.rev-burger.revb-whitefull span {
  background: #333;
}
.rev-burger.revb-darkfull {
  background: #333;
  border: none;
}
.rev-burger.revb-darkfull span {
  background: #fff;
}
@keyframes rev-ani-mouse {
  0% {
    opacity: 1;
    top: 29%;
  }
  15% {
    opacity: 1;
    top: 70%;
  }
  50% {
    opacity: 0;
    top: 70%;
  }
  100% {
    opacity: 0;
    top: 29%;
  }
}
.rev-scroll-btn {
  display: inline-block;
  position: relative;
  left: 0;
  right: 0;
  text-align: center;
  cursor: pointer;
  width: 35px;
  height: 55px;
  box-sizing: border-box;
  border: 3px solid #fff;
  border-radius: 23px;
}
.rev-scroll-btn > * {
  display: inline-block;
  line-height: 18px;
  font-size: 13px;
  font-weight: 400;
  color: #7f8c8d;
  color: #fff;
  font-family: proxima-nova, "Helvetica Neue", Helvetica, Arial, sans-serif;
  letter-spacing: 2px;
}
.rev-scroll-btn > .active,
.rev-scroll-btn > :focus,
.rev-scroll-btn > :hover {
  color: #fff;
}
.rev-scroll-btn > .active,
.rev-scroll-btn > :active,
.rev-scroll-btn > :focus,
.rev-scroll-btn > :hover {
  opacity: 0.8;
}
.rev-scroll-btn.revs-fullwhite {
  background: #fff;
}
.rev-scroll-btn.revs-fullwhite span {
  background: #333;
}
.rev-scroll-btn.revs-fulldark {
  background: #333;
  border: none;
}
.rev-scroll-btn.revs-fulldark span {
  background: #fff;
}
.rev-scroll-btn span {
  position: absolute;
  display: block;
  top: 29%;
  left: 50%;
  width: 8px;
  height: 8px;
  margin: -4px 0 0 -4px;
  border-radius: 50%;
  animation: rev-ani-mouse 2.5s linear infinite;
  background: #fff;
}
.rev-scroll-btn.rev-b-span-dark {
  border-color: #333;
}
.rev-scroll-btn.rev-b-span-dark span,
.rev-scroll-btn.revs-dark span {
  background: #333;
}
.rev-control-btn {
  position: relative;
  display: inline-block;
  z-index: 5;
  color: #fff;
  font-size: 20px;
  line-height: 60px;
  font-weight: 400;
  font-style: normal;
  font-family: Raleway;
  text-decoration: none;
  text-align: center;
  background-color: #000;
  border-radius: 50px;
  text-shadow: none;
  background-color: rgba(0, 0, 0, 0.5);
  width: 60px;
  height: 60px;
  box-sizing: border-box;
  cursor: pointer;
}
.rev-cbutton-dark-sr {
  border-radius: 3px;
}
.rev-cbutton-light {
  color: #333;
  background-color: rgba(255, 255, 255, 0.75);
}
.rev-cbutton-light-sr {
  color: #333;
  border-radius: 3px;
  background-color: rgba(255, 255, 255, 0.75);
}
.rev-sbutton {
  line-height: 37px;
  width: 37px;
  height: 37px;
}
.rev-sbutton-blue {
  background-color: #3b5998;
}
.rev-sbutton-lightblue {
  background-color: #00a0d1;
}
.rev-sbutton-red {
  background-color: #dd4b39;
}
rs-progress {
  visibility: hidden;
  position: absolute;
  z-index: 200;
  width: 100%;
  height: 100%;
}
.rs-progress-bar,
rs-progress-bar {
  display: block;
  z-index: 20;
  box-sizing: border-box;
  background-clip: content-box;
  position: absolute;
  vertical-align: top;
  line-height: 0;
  width: 100%;
  height: 100%;
}
rs-progress-bgs {
  display: block;
  z-index: 15;
  box-sizing: border-box;
  width: 100%;
  position: absolute;
  height: 100%;
  top: 0;
  left: 0;
}
rs-progress-bg {
  display: block;
  background-clip: content-box;
  position: absolute;
  width: 100%;
  height: 100%;
}
rs-progress-gap {
  display: block;
  background-clip: content-box;
  position: absolute;
  width: 100%;
  height: 100%;
}
rs-progress-vis {
  display: block;
  width: 100%;
  height: 100%;
  position: absolute;
  top: 0;
  left: 0;
}
.rs-layer img {
  background: 0 0;
  zoom: 1;
}
.rs-layer.slidelink {
  cursor: pointer;
  width: 100%;
  height: 100%;
}
.rs-layer.slidelink a {
  width: 100%;
  height: 100%;
  display: block;
}
.rs-layer.slidelink a div {
  width: 3000px;
  height: 1500px;
  background: url(../assets/coloredbg.png) repeat;
}
.rs-layer.slidelink a span {
  background: url(../assets/coloredbg.png) repeat;
  width: 100%;
  height: 100%;
  display: block;
}
.rs-layer .rs-starring {
  display: inline-block;
}
.rs-layer .rs-starring .star-rating {
  float: none;
  display: inline-block;
  vertical-align: top;
  color: #ffc321 !important;
}
.rs-layer .rs-starring .star-rating,
.rs-layer .rs-starring-page .star-rating {
  position: relative;
  height: 1em;
  width: 5.4em;
  font-family: star;
  font-size: 1em !important;
}
.rs-layer .rs-starring .star-rating:before,
.rs-layer .rs-starring-page .star-rating:before {
  content: "\73\73\73\73\73";
  color: #e0dadf;
  float: left;
  top: 0;
  left: 0;
  position: absolute;
}
.rs-layer .rs-starring .star-rating span {
  overflow: hidden;
  float: left;
  top: 0;
  left: 0;
  position: absolute;
  padding-top: 1.5em;
  font-size: 1em !important;
}
.rs-layer .rs-starring .star-rating span:before {
  content: "\53\53\53\53\53";
  top: 0;
  position: absolute;
  left: 0;
}
rs-loader {
  top: 50%;
  left: 50%;
  z-index: 10000;
  position: absolute;
}
rs-loader.off {
  display: none !important;
}
rs-loader.spinner0 {
  width: 40px;
  height: 40px;
  background-color: #fff;
  background-image: url(../assets/loader.gif);
  background-repeat: no-repeat;
  background-position: center center;
  box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.15);
  margin-top: -20px;
  margin-left: -20px;
  animation: tp-rotateplane 1.2s infinite ease-in-out;
  border-radius: 3px;
}
rs-loader.spinner1 {
  width: 40px;
  height: 40px;
  background-color: #fff;
  box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.15);
  margin-top: -20px;
  margin-left: -20px;
  animation: tp-rotateplane 1.2s infinite ease-in-out;
  border-radius: 3px;
}
rs-loader.spinner5 {
  background-image: url(../assets/loader.gif);
  background-repeat: no-repeat;
  background-position: 10px 10px;
  background-color: #fff;
  margin: -22px -22px;
  width: 44px;
  height: 44px;
  border-radius: 3px;
}
@keyframes tp-rotateplane {
  0% {
    transform: perspective(120px) rotateX(0) rotateY(0);
  }
  50% {
    transform: perspective(120px) rotateX(-180.1deg) rotateY(0);
  }
  100% {
    transform: perspective(120px) rotateX(-180deg) rotateY(-179.9deg);
  }
}
rs-loader.spinner2 {
  width: 40px;
  height: 40px;
  margin-top: -20px;
  margin-left: -20px;
  background-color: red;
  box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.15);
  border-radius: 100%;
  animation: tp-scaleout 1s infinite ease-in-out;
}
@keyframes tp-scaleout {
  0% {
    transform: scale(0);
  }
  100% {
    transform: scale(1);
    opacity: 0;
  }
}
rs-loader.spinner3 {
  margin: -9px 0 0 -35px;
  width: 70px;
  text-align: center;
}
rs-loader.spinner3 .bounce1,
rs-loader.spinner3 .bounce2,
rs-loader.spinner3 .bounce3 {
  width: 18px;
  height: 18px;
  background-color: #fff;
  box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.15);
  border-radius: 100%;
  display: inline-block;
  animation: tp-bouncedelay 1.4s infinite ease-in-out;
  animation-fill-mode: both;
}
rs-loader.spinner3 .bounce1 {
  animation-delay: -0.32s;
}
rs-loader.spinner3 .bounce2 {
  animation-delay: -0.16s;
}
@keyframes tp-bouncedelay {
  0%,
  100%,
  80% {
    transform: scale(0);
  }
  40% {
    transform: scale(1);
  }
}
rs-loader.spinner4 {
  margin: -20px 0 0 -20px;
  width: 40px;
  height: 40px;
  text-align: center;
  animation: tp-rotate 2s infinite linear;
}
rs-loader.spinner4 .dot1,
rs-loader.spinner4 .dot2 {
  width: 60%;
  height: 60%;
  display: inline-block;
  position: absolute;
  top: 0;
  background-color: #fff;
  border-radius: 100%;
  animation: tp-bounce 2s infinite ease-in-out;
  box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.15);
}
rs-loader.spinner4 .dot2 {
  top: auto;
  bottom: 0;
  animation-delay: -1s;
}
@keyframes tp-rotate {
  100% {
    transform: rotate(360deg);
  }
}
@keyframes tp-bounce {
  0%,
  100% {
    transform: scale(0);
  }
  50% {
    transform: scale(1);
  }
}
rs-layer iframe {
  visibility: hidden;
}
rs-layer.rs-ii-o iframe {
  visibility: visible;
}
rs-layer input[type="date"],
rs-layer input[type="datetime-local"],
rs-layer input[type="datetime"],
rs-layer input[type="email"],
rs-layer input[type="month"],
rs-layer input[type="number"],
rs-layer input[type="password"],
rs-layer input[type="range"],
rs-layer input[type="search"],
rs-layer input[type="tel"],
rs-layer input[type="text"],
rs-layer input[type="time"],
rs-layer input[type="url"],
rs-layer input[type="week"] {
  display: inline-block;
}
rs-layer input::placeholder {
  vertical-align: middle;
  line-height: inherit !important;
}
a.rs-layer {
  transition: none;
}
rs-arrow,
rs-bullet,
rs-bullets,
rs-navmask,
rs-tab,
rs-tabs,
rs-tabs-wrap,
rs-thumb,
rs-thumbs,
rs-thumbs-wrap {
  display: block;
}
.tp-bullets.navbar,
.tp-tabs.navbar,
.tp-thumbs.navbar {
  border: none;
  min-height: 0;
  margin: 0;
  border-radius: 0;
}
.tp-bullets,
.tp-tabs,
.tp-thumbs {
  position: absolute;
  display: block;
  z-index: 1000;
  top: 0;
  left: 0;
}
.tp-tab,
.tp-thumb {
  cursor: pointer;
  position: absolute;
  opacity: 0.5;
  box-sizing: border-box;
}
.tp-arr-imgholder,
.tp-tab-image,
.tp-thumb-image,
rs-poster {
  background-position: center center;
  background-size: cover;
  width: 100%;
  height: 100%;
  display: block;
  position: absolute;
  top: 0;
  left: 0;
}
rs-poster {
  cursor: pointer;
  z-index: 3;
}
.tp-tab.selected,
.tp-tab:hover,
.tp-thumb.selected,
.tp-thumb:hover {
  opacity: 1;
}
.tp-tab-mask,
.tp-thumb-mask {
  box-sizing: border-box !important;
}
.tp-tabs,
.tp-thumbs {
  box-sizing: content-box !important;
}
.tp-bullet {
  width: 15px;
  height: 15px;
  position: absolute;
  background: #fff;
  background: rgba(255, 255, 255, 0.3);
  cursor: pointer;
}
.tp-bullet.selected,
.tp-bullet:hover {
  background: #fff;
}
.tparrows {
  cursor: pointer;
  background: #000;
  background: rgba(0, 0, 0, 0.5);
  width: 40px;
  height: 40px;
  position: absolute;
  display: block;
  z-index: 1000;
}
.tparrows:hover {
  background: #000;
}
.tparrows:before {
  font-family: revicons;
  font-size: 15px;
  color: #fff;
  display: block;
  line-height: 40px;
  text-align: center;
}
.tparrows.tp-leftarrow:before {
  content: "\e824";
}
.tparrows.tp-rightarrow:before {
  content: "\e825";
}
.rs-layer [class*=" pe-7s-"]:before,
.rs-layer [class^="pe-7s-"]:before {
  width: auto;
  margin: 0;
  line-height: inherit;
  box-sizing: inherit;
}
rs-pzimg-wrap {
  display: block;
}
body.rtl .rs-pzimg {
  left: 0 !important;
}
.dddwrappershadow {
  box-shadow: 0 45px 100px rgba(0, 0, 0, 0.4);
}
.dddwrapper {
  transform-style: flat;
  perspective: 10000px;
}
.rs_error_message_box {
  background: #111;
  width: 800px;
  margin: 40px auto;
  padding: 40px 20px;
  text-align: center;
  font-family: "Open Sans", sans-serif;
}
.rs_error_message_oops {
  margin: 0 0 20px;
  line-height: 60px;
  font-size: 34px;
  color: #fff;
}
.rs_error_message_content {
  margin: 0 0 20px;
  line-height: 25px;
  font-size: 17px;
  color: #fff;
}
.rs_error_message_button {
  color: #fff !important;
  background: #333;
  display: inline-block;
  padding: 10px 15px;
  text-align: right;
  border-radius: 5px;
  cursor: pointer;
  text-decoration: none !important;
}
.rs_error_message_button:hover {
  background: #5e35b1;
}
.hglayerinfo {
  position: fixed;
  bottom: 0;
  left: 0;
  color: #fff;
  font-size: 12px;
  line-height: 20px;
  font-weight: 600;
  background: rgba(0, 0, 0, 0.75);
  padding: 5px 10px;
  z-index: 2000;
  white-space: normal;
}
.hginfo {
  position: absolute;
  top: -2px;
  left: -2px;
  color: #e74c3c;
  font-size: 12px;
  font-weight: 600;
  background: #000;
  padding: 2px 5px;
}
.indebugmode .rs-layer:hover {
  border: 1px dashed #c0392b !important;
}
.helpgrid {
  border: 2px dashed #c0392b;
  position: absolute;
  top: 0;
  left: 0;
  z-index: 0;
}
#revsliderlogloglog {
  padding: 15px;
  color: #fff;
  position: fixed;
  top: 0;
  left: 0;
  width: 200px;
  height: 150px;
  background: rgba(0, 0, 0, 0.7);
  z-index: 100000;
  font-size: 10px;
  overflow: scroll;
}
.aden {
  filter: hue-rotate(-20deg) contrast(0.9) saturate(0.85) brightness(1.2);
}
.aden::after {
  background: linear-gradient(to right, rgba(66, 10, 14, 0.2), transparent);
  mix-blend-mode: darken;
}
.perpetua::after,
.reyes::after {
  mix-blend-mode: soft-light;
  opacity: 0.5;
}
.inkwell {
  filter: sepia(0.3) contrast(1.1) brightness(1.1) grayscale(1);
}
.perpetua::after {
  background: linear-gradient(to bottom, #005b9a, #e6c13d);
}
.reyes {
  filter: sepia(0.22) brightness(1.1) contrast(0.85) saturate(0.75);
}
.reyes::after {
  background: #efcdad;
}
.gingham {
  filter: brightness(1.05) hue-rotate(-10deg);
}
.gingham::after {
  background: linear-gradient(to right, rgba(66, 10, 14, 0.2), transparent);
  mix-blend-mode: darken;
}
.toaster {
  filter: contrast(1.5) brightness(0.9);
}
.toaster::after {
  background: radial-gradient(circle, #804e0f, #3b003b);
  mix-blend-mode: screen;
}
.walden {
  filter: brightness(1.1) hue-rotate(-10deg) sepia(0.3) saturate(1.6);
}
.walden::after {
  background: #04c;
  mix-blend-mode: screen;
  opacity: 0.3;
}
.hudson {
  filter: brightness(1.2) contrast(0.9) saturate(1.1);
}
.hudson::after {
  background: radial-gradient(circle, #a6b1ff 50%, #342134);
  mix-blend-mode: multiply;
  opacity: 0.5;
}
.earlybird {
  filter: contrast(0.9) sepia(0.2);
}
.earlybird::after {
  background: radial-gradient(circle, #d0ba8e 20%, #360309 85%, #1d0210 100%);
  mix-blend-mode: overlay;
}
.mayfair {
  filter: contrast(1.1) saturate(1.1);
}
.mayfair::after {
  background: radial-gradient(
    circle at 40% 40%,
    rgba(255, 255, 255, 0.8),
    rgba(255, 200, 200, 0.6),
    #111 60%
  );
  mix-blend-mode: overlay;
  opacity: 0.4;
}
.lofi {
  filter: saturate(1.1) contrast(1.5);
}
.lofi::after {
  background: radial-gradient(circle, transparent 70%, #222 150%);
  mix-blend-mode: multiply;
}
._1977 {
  filter: contrast(1.1) brightness(1.1) saturate(1.3);
}
._1977:after {
  background: rgba(243, 106, 188, 0.3);
  mix-blend-mode: screen;
}
.brooklyn {
  filter: contrast(0.9) brightness(1.1);
}
.brooklyn::after {
  background: radial-gradient(circle, rgba(168, 223, 193, 0.4) 70%, #c4b7c8);
  mix-blend-mode: overlay;
}
.xpro2 {
  filter: sepia(0.3);
}
.xpro2::after {
  background: radial-gradient(circle, #e6e7e0 40%, rgba(43, 42, 161, 0.6) 110%);
  mix-blend-mode: color-burn;
}
.nashville {
  filter: sepia(0.2) contrast(1.2) brightness(1.05) saturate(1.2);
}
.nashville::after {
  background: rgba(0, 70, 150, 0.4);
  mix-blend-mode: lighten;
}
.nashville::before {
  background: rgba(247, 176, 153, 0.56);
  mix-blend-mode: darken;
}
.lark {
  filter: contrast(0.9);
}
.lark::after {
  background: rgba(242, 242, 242, 0.8);
  mix-blend-mode: darken;
}
.lark::before {
  background: #22253f;
  mix-blend-mode: color-dodge;
}
.moon {
  filter: grayscale(1) contrast(1.1) brightness(1.1);
}
.moon::before {
  background: #a0a0a0;
  mix-blend-mode: soft-light;
}
.moon::after {
  background: #383838;
  mix-blend-mode: lighten;
}
.clarendon {
  filter: contrast(1.2) saturate(1.35);
}
.clarendon:before {
  background: rgba(127, 187, 227, 0.2);
  mix-blend-mode: overlay;
}
.willow {
  filter: grayscale(0.5) contrast(0.95) brightness(0.9);
}
.willow::before {
  background-color: radial-gradient(40%, circle, #d4a9af 55%, #000 150%);
  mix-blend-mode: overlay;
}
.willow::after {
  background-color: #d8cdcb;
  mix-blend-mode: color;
}
.rise {
  filter: brightness(1.05) sepia(0.2) contrast(0.9) saturate(0.9);
}
.rise::after {
  background: radial-gradient(
    circle,
    rgba(232, 197, 152, 0.8),
    transparent 90%
  );
  mix-blend-mode: overlay;
  opacity: 0.6;
}
.rise::before {
  background: radial-gradient(
    circle,
    rgba(236, 205, 169, 0.15) 55%,
    rgba(50, 30, 7, 0.4)
  );
  mix-blend-mode: multiply;
}
._1977:after,
._1977:before,
.aden:before,
.brooklyn:after,
.brooklyn:before,
.clarendon:after,
.clarendon:before,
.earlybird:after,
.earlybird:before,
.gingham:after,
.gingham:before,
.hudson:after,
.hudson:before,
.inkwell:after,
.inkwell:before,
.lark:after,
.lark:before,
.lofi:after,
.lofi:before,
.mayfair:after,
.mayfair:before,
.moon:after,
.moon:before,
.nashville:after,
.nashville:before,
.perpetua:after,
.perpetua:before,
.reyes:after,
.reyes:before,
.rise:after,
.rise:before,
.slumber:after,
.slumber:before,
.toaster:after,
.toaster:before,
.walden:after,
.walden:before,
.willow:after,
.willow:before,
.xpro2:after,
.xpro2:before,
rs-pzimg-wrap.aden:after {
  content: "";
  display: block;
  height: 100%;
  width: 100%;
  top: 0;
  left: 0;
  position: absolute;
  pointer-events: none;
}
._1977,
.aden,
.brooklyn,
.clarendon,
.earlybird,
.gingham,
.hudson,
.inkwell,
.lark,
.lofi,
.mayfair,
.moon,
.nashville,
.perpetua,
.reyes,
.rise,
.slumber,
.toaster,
.walden,
.willow,
.xpro2 {
  position: relative;
}
._1977 img,
.aden img,
.brooklyn img,
.clarendon img,
.earlybird img,
.gingham img,
.hudson img,
.inkwell img,
.lark img,
.lofi img,
.mayfair img,
.moon img,
.nashville img,
.perpetua img,
.reyes img,
.rise img,
.slumber img,
.toaster img,
.walden img,
.willow img,
.xpro2 img {
  width: 100%;
  z-index: 1;
}
._1977:before,
.aden:before,
.brooklyn:before,
.clarendon:before,
.earlybird:before,
.gingham:before,
.hudson:before,
.inkwell:before,
.lark:before,
.lofi:before,
.mayfair:before,
.moon:before,
.nashville:before,
.perpetua:before,
.reyes:before,
.rise:before,
.slumber:before,
.toaster:before,
.walden:before,
.willow:before,
.xpro2:before {
  z-index: 2;
}
._1977:after,
.aden:after,
.brooklyn:after,
.clarendon:after,
.earlybird:after,
.gingham:after,
.hudson:after,
.inkwell:after,
.lark:after,
.lofi:after,
.mayfair:after,
.moon:after,
.nashville:after,
.perpetua:after,
.reyes:after,
.rise:after,
.slumber:after,
.toaster:after,
.walden:after,
.willow:after,
.xpro2:after {
  z-index: 3;
}
.slumber {
  filter: saturate(0.66) brightness(1.05);
}
.slumber::after {
  background: rgba(125, 105, 24, 0.5);
  mix-blend-mode: soft-light;
}
.slumber::before {
  background: rgba(69, 41, 12, 0.4);
  mix-blend-mode: lighten;
}
rs-pzimg-wrap._1977:after,
rs-pzimg-wrap._1977:before,
rs-pzimg-wrap.aden:after,
rs-pzimg-wrap.aden:before,
rs-pzimg-wrap.brooklyn:after,
rs-pzimg-wrap.brooklyn:before,
rs-pzimg-wrap.clarendon:after,
rs-pzimg-wrap.clarendon:before,
rs-pzimg-wrap.earlybird:after,
rs-pzimg-wrap.earlybird:before,
rs-pzimg-wrap.gingham:after,
rs-pzimg-wrap.gingham:before,
rs-pzimg-wrap.hudson:after,
rs-pzimg-wrap.hudson:before,
rs-pzimg-wrap.inkwell:after,
rs-pzimg-wrap.inkwell:before,
rs-pzimg-wrap.lark:after,
rs-pzimg-wrap.lark:before,
rs-pzimg-wrap.lofi:after,
rs-pzimg-wrap.lofi:before,
rs-pzimg-wrap.mayfair:after,
rs-pzimg-wrap.mayfair:before,
rs-pzimg-wrap.moon:after,
rs-pzimg-wrap.moon:before,
rs-pzimg-wrap.nashville:after,
rs-pzimg-wrap.nashville:before,
rs-pzimg-wrap.perpetua:after,
rs-pzimg-wrap.perpetua:before,
rs-pzimg-wrap.reyes:after,
rs-pzimg-wrap.reyes:before,
rs-pzimg-wrap.rise:after,
rs-pzimg-wrap.rise:before,
rs-pzimg-wrap.slumber:after,
rs-pzimg-wrap.slumber:before,
rs-pzimg-wrap.toaster:after,
rs-pzimg-wrap.toaster:before,
rs-pzimg-wrap.walden:after,
rs-pzimg-wrap.walden:before,
rs-pzimg-wrap.willow:after,
rs-pzimg-wrap.willow:before,
rs-pzimg-wrap.xpro2:after,
rs-pzimg-wrap.xpro2:before,
rs-pzimg-wrap:after,
rs-pzimg-wrap:before {
  height: 500%;
  width: 500%;
}
rs-loader.spinner6 {
  width: 40px;
  height: 40px;
  -webkit-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
}
rs-loader.spinner6 .rs-spinner-inner {
  width: 100%;
  height: 100%;
  display: inline-block;
  -webkit-animation: rs-revealer-6 1.4s linear infinite;
  animation: rs-revealer-6 1.4s linear infinite;
}
rs-loader.spinner6 .rs-spinner-inner span {
  position: absolute;
  vertical-align: top;
  border-radius: 100%;
  display: inline-block;
  width: 8px;
  height: 8px;
  margin-left: 16px;
  transform-origin: center 20px;
  -webkit-transform-origin: center 20px;
}
rs-loader.spinner6 .rs-spinner-inner span:nth-child(2) {
  transform: rotate(36deg);
  -webkit-transform: rotate(36deg);
  opacity: 0.1;
}
rs-loader.spinner6 .rs-spinner-inner span:nth-child(3) {
  transform: rotate(72deg);
  -webkit-transform: rotate(72deg);
  opacity: 0.2;
}
rs-loader.spinner6 .rs-spinner-inner span:nth-child(4) {
  transform: rotate(108deg);
  -webkit-transform: rotate(108deg);
  opacity: 0.3;
}
rs-loader.spinner6 .rs-spinner-inner span:nth-child(5) {
  transform: rotate(144deg);
  -webkit-transform: rotate(144deg);
  opacity: 0.4;
}
rs-loader.spinner6 .rs-spinner-inner span:nth-child(6) {
  transform: rotate(180deg);
  -webkit-transform: rotate(180deg);
  opacity: 0.5;
}
rs-loader.spinner6 .rs-spinner-inner span:nth-child(7) {
  transform: rotate(216deg);
  -webkit-transform: rotate(216deg);
  opacity: 0.6;
}
rs-loader.spinner6 .rs-spinner-inner span:nth-child(8) {
  transform: rotate(252deg);
  -webkit-transform: rotate(252deg);
  opacity: 0.7;
}
rs-loader.spinner6 .rs-spinner-inner span:nth-child(9) {
  transform: rotate(288deg);
  -webkit-transform: rotate(288deg);
  opacity: 0.8;
}
rs-loader.spinner6 .rs-spinner-inner span:nth-child(10) {
  transform: rotate(324deg);
  -webkit-transform: rotate(324deg);
  opacity: 0.9;
}
@keyframes rs-revealer-6 {
  from {
    transform: rotate(0);
  }
  to {
    transform: rotate(360deg);
  }
}
@-webkit-keyframes rs-revealer-6 {
  from {
    -webkit-transform: rotate(0);
  }
  to {
    -webkit-transform: rotate(360deg);
  }
}
rs-loader.spinner7 {
  width: 35px;
  height: 35px;
  -webkit-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
}
rs-loader.spinner7 .rs-spinner-inner {
  width: 100%;
  height: 100%;
  display: inline-block;
  padding: 0;
  border-radius: 100%;
  border: 2px solid;
  -webkit-animation: rs-revealer-7 0.8s linear infinite;
  animation: rs-revealer-7 0.8s linear infinite;
}
@keyframes rs-revealer-7 {
  from {
    transform: rotate(0);
  }
  to {
    transform: rotate(360deg);
  }
}
@-webkit-keyframes rs-revealer-7 {
  from {
    -webkit-transform: rotate(0);
  }
  to {
    -webkit-transform: rotate(360deg);
  }
}
rs-loader.spinner8 {
  width: 50px;
  height: 50px;
  -webkit-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
}
rs-loader.spinner8 .rs-spinner-inner {
  width: 100%;
  height: 100%;
  display: inline-block;
  padding: 0;
  text-align: left;
}
rs-loader.spinner8 .rs-spinner-inner span {
  position: absolute;
  display: inline-block;
  width: 100%;
  height: 100%;
  border-radius: 100%;
  -webkit-animation: rs-revealer-8 1.6s linear infinite;
  animation: rs-revealer-8 1.6s linear infinite;
}
rs-loader.spinner8 .rs-spinner-inner span:last-child {
  animation-delay: -0.8s;
  -webkit-animation-delay: -0.8s;
}
@keyframes rs-revealer-8 {
  0% {
    transform: scale(0, 0);
    opacity: 0.5;
  }
  100% {
    transform: scale(1, 1);
    opacity: 0;
  }
}
@-webkit-keyframes rs-revealer-8 {
  0% {
    -webkit-transform: scale(0, 0);
    opacity: 0.5;
  }
  100% {
    -webkit-transform: scale(1, 1);
    opacity: 0;
  }
}
rs-loader.spinner9 {
  width: 40px;
  height: 40px;
  -webkit-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
}
rs-loader.spinner9 .rs-spinner-inner span {
  display: block;
  width: 100%;
  height: 100%;
  border-radius: 50%;
  opacity: 0.6;
  position: absolute;
  top: 0;
  left: 0;
  -webkit-animation: rs-revealer-9 2s infinite ease-in-out;
  animation: rs-revealer-9 2s infinite ease-in-out;
}
rs-loader.spinner9 .rs-spinner-inner span:last-child {
  -webkit-animation-delay: -1s;
  animation-delay: -1s;
}
@-webkit-keyframes rs-revealer-9 {
  0%,
  100% {
    -webkit-transform: scale(0);
  }
  50% {
    -webkit-transform: scale(1);
  }
}
@keyframes rs-revealer-9 {
  0%,
  100% {
    transform: scale(0);
    -webkit-transform: scale(0);
  }
  50% {
    transform: scale(1);
    -webkit-transform: scale(1);
  }
}
rs-loader.spinner10 {
  width: 54px;
  height: 40px;
  -webkit-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
}
rs-loader.spinner10 .rs-spinner-inner {
  width: 100%;
  height: 100%;
  text-align: center;
  font-size: 10px;
}
rs-loader.spinner10 .rs-spinner-inner span {
  display: block;
  height: 100%;
  width: 6px;
  display: inline-block;
  -webkit-animation: rs-revealer-10 1.2s infinite ease-in-out;
  animation: rs-revealer-10 1.2s infinite ease-in-out;
}
rs-loader.spinner10 .rs-spinner-inner span:nth-child(2) {
  -webkit-animation-delay: -1.1s;
  animation-delay: -1.1s;
}
rs-loader.spinner10 .rs-spinner-inner span:nth-child(3) {
  -webkit-animation-delay: -1s;
  animation-delay: -1s;
}
rs-loader.spinner10 .rs-spinner-inner span:nth-child(4) {
  -webkit-animation-delay: -0.9s;
  animation-delay: -0.9s;
}
rs-loader.spinner10 .rs-spinner-inner span:nth-child(5) {
  -webkit-animation-delay: -0.8s;
  animation-delay: -0.8s;
}
@-webkit-keyframes rs-revealer-10 {
  0%,
  100%,
  40% {
    -webkit-transform: scaleY(0.4);
  }
  20% {
    -webkit-transform: scaleY(1);
  }
}
@keyframes rs-revealer-10 {
  0%,
  100%,
  40% {
    transform: scaleY(0.4);
    -webkit-transform: scaleY(0.4);
  }
  20% {
    transform: scaleY(1);
    -webkit-transform: scaleY(1);
  }
}
rs-loader.spinner11 {
  width: 40px;
  height: 40px;
  -webkit-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
}
rs-loader.spinner11 .rs-spinner-inner {
  width: 100%;
  height: 100%;
}
rs-loader.spinner11 .rs-spinner-inner span {
  display: block;
  width: 33%;
  height: 33%;
  background-color: #333;
  float: left;
  -webkit-animation: rs-revealer-11 1.3s infinite ease-in-out;
  animation: rs-revealer-11 1.3s infinite ease-in-out;
}
rs-loader.spinner11 .rs-spinner-inner span:nth-child(1) {
  -webkit-animation-delay: 0.2s;
  animation-delay: 0.2s;
}
rs-loader.spinner11 .rs-spinner-inner span:nth-child(2) {
  -webkit-animation-delay: 0.3s;
  animation-delay: 0.3s;
}
rs-loader.spinner11 .rs-spinner-inner span:nth-child(3) {
  -webkit-animation-delay: 0.4s;
  animation-delay: 0.4s;
}
rs-loader.spinner11 .rs-spinner-inner span:nth-child(4) {
  -webkit-animation-delay: 0.1s;
  animation-delay: 0.1s;
}
rs-loader.spinner11 .rs-spinner-inner span:nth-child(5) {
  -webkit-animation-delay: 0.2s;
  animation-delay: 0.2s;
}
rs-loader.spinner11 .rs-spinner-inner span:nth-child(6) {
  -webkit-animation-delay: 0.3s;
  animation-delay: 0.3s;
}
rs-loader.spinner11 .rs-spinner-inner span:nth-child(7) {
  -webkit-animation-delay: 0s;
  animation-delay: 0s;
}
rs-loader.spinner11 .rs-spinner-inner span:nth-child(8) {
  -webkit-animation-delay: 0.1s;
  animation-delay: 0.1s;
}
rs-loader.spinner11 .rs-spinner-inner span:nth-child(9) {
  -webkit-animation-delay: 0.2s;
  animation-delay: 0.2s;
}
@-webkit-keyframes rs-revealer-11 {
  0%,
  100%,
  70% {
    -webkit-transform: scale3D(1, 1, 1);
    transform: scale3D(1, 1, 1);
  }
  35% {
    -webkit-transform: scale3D(0, 0, 1);
    transform: scale3D(0, 0, 1);
  }
}
@keyframes rs-revealer-11 {
  0%,
  100%,
  70% {
    -webkit-transform: scale3D(1, 1, 1);
    transform: scale3D(1, 1, 1);
  }
  35% {
    -webkit-transform: scale3D(0, 0, 1);
    transform: scale3D(0, 0, 1);
  }
}
rs-loader.spinner12 {
  width: 35px;
  height: 35px;
  -webkit-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
}
rs-loader.spinner12 .rs-spinner-inner {
  width: 100%;
  height: 100%;
  -webkit-animation: rs-revealer-12 1s infinite linear;
  animation: rs-revealer-12 1s infinite linear;
}
@-webkit-keyframes rs-revealer-12 {
  0% {
    -webkit-transform: rotate(0);
  }
  100% {
    -webkit-transform: rotate(360deg);
  }
}
@keyframes rs-revealer-12 {
  0% {
    transform: rotate(0);
  }
  100% {
    transform: rotate(360deg);
  }
}
rs-loader.spinner13 {
  width: 40px;
  height: 40px;
  -webkit-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
}
rs-loader.spinner13 .rs-spinner-inner {
  width: 100%;
  height: 100%;
}
rs-loader.spinner13 .rs-spinner-inner span {
  display: block;
  width: 40%;
  height: 40%;
  position: absolute;
  border-radius: 50%;
  -webkit-animation: rs-revealer-13 2s ease infinite;
  animation: rs-revealer-13 2s ease infinite;
}
rs-loader.spinner13 .rs-spinner-inner span:nth-child(1) {
  animation-delay: -1.5s;
  -webkit-animation-delay: -1.5s;
}
rs-loader.spinner13 .rs-spinner-inner span:nth-child(2) {
  animation-delay: -1s;
  -webkit-animation-delay: -1s;
}
rs-loader.spinner13 .rs-spinner-inner span:nth-child(3) {
  animation-delay: -0.5s;
  -webkit-animation-delay: -0.5s;
}
@keyframes rs-revealer-13 {
  0%,
  100% {
    transform: translate(0);
  }
  25% {
    transform: translate(160%);
  }
  50% {
    transform: translate(160%, 160%);
  }
  75% {
    transform: translate(0, 160%);
  }
}
@-webkit-keyframes rs-revealer-13 {
  0%,
  100% {
    -webkit-transform: translate(0);
  }
  25% {
    -webkit-transform: translate(160%);
  }
  50% {
    -webkit-transform: translate(160%, 160%);
  }
  75% {
    -webkit-transform: translate(0, 160%);
  }
}
rs-loader.spinner14 {
  width: 40px;
  height: 40px;
  -webkit-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
}
rs-loader.spinner14 .rs-spinner-inner {
  width: 100%;
  height: 100%;
  animation: rs-revealer-14 1s infinite linear;
}
rs-loader.spinner14 .rs-spinner-inner span {
  display: block;
  position: absolute;
  top: 50%;
  left: 50%;
  width: 16px;
  height: 16px;
  border-radius: 50%;
  margin: -8px;
}
rs-loader.spinner14 .rs-spinner-inner span:nth-child(1) {
  -webkit-animation: rs-revealer-14-1 2s infinite;
  animation: rs-revealer-14-1 2s infinite;
}
rs-loader.spinner14 .rs-spinner-inner span:nth-child(2) {
  -webkit-animation: rs-revealer-14-2 2s infinite;
  animation: rs-revealer-14-2 2s infinite;
}
rs-loader.spinner14 .rs-spinner-inner span:nth-child(3) {
  -webkit-animation: rs-revealer-14-3 2s infinite;
  animation: rs-revealer-14-3 2s infinite;
}
rs-loader.spinner14 .rs-spinner-inner span:nth-child(4) {
  -webkit-animation: rs-revealer-14-4 2s infinite;
  animation: rs-revealer-14-4 2s infinite;
}
@-webkit-keyframes rs-revealer-14-1 {
  0% {
    -webkit-transform: rotate3d(0, 0, 1, 0deg) translate3d(0, 0, 0);
  }
  20% {
    -webkit-transform: rotate3d(0, 0, 1, 0deg) translate3d(80%, 80%, 0);
  }
  80% {
    -webkit-transform: rotate3d(0, 0, 1, 360deg) translate3d(80%, 80%, 0);
  }
  100% {
    -webkit-transform: rotate3d(0, 0, 1, 360deg) translate3d(0, 0, 0);
  }
}
@-webkit-keyframes rs-revealer-14-2 {
  0% {
    -webkit-transform: rotate3d(0, 0, 1, 0deg) translate3d(0, 0, 0);
  }
  20% {
    -webkit-transform: rotate3d(0, 0, 1, 0deg) translate3d(80%, -80%, 0);
  }
  80% {
    -webkit-transform: rotate3d(0, 0, 1, 360deg) translate3d(80%, -80%, 0);
  }
  100% {
    -webkit-transform: rotate3d(0, 0, 1, 360deg) translate3d(0, 0, 0);
  }
}
@-webkit-keyframes rs-revealer-14-3 {
  0% {
    -webkit-transform: rotate3d(0, 0, 1, 0deg) translate3d(0, 0, 0);
  }
  20% {
    -webkit-transform: rotate3d(0, 0, 1, 0deg) translate3d(-80%, -80%, 0);
  }
  80% {
    -webkit-transform: rotate3d(0, 0, 1, 360deg) translate3d(-80%, -80%, 0);
  }
  100% {
    -webkit-transform: rotate3d(0, 0, 1, 360deg) translate3d(0, 0, 0);
  }
}
@-webkit-keyframes rs-revealer-14-4 {
  0% {
    -webkit-transform: rotate3d(0, 0, 1, 0deg) translate3d(0, 0, 0);
  }
  20% {
    -webkit-transform: rotate3d(0, 0, 1, 0deg) translate3d(-80%, 80%, 0);
  }
  80% {
    -webkit-transform: rotate3d(0, 0, 1, 360deg) translate3d(-80%, 80%, 0);
  }
  100% {
    -webkit-transform: rotate3d(0, 0, 1, 360deg) translate3d(0, 0, 0);
  }
}
@keyframes rs-revealer-14-1 {
  0% {
    transform: rotate3d(0, 0, 1, 0deg) translate3d(0, 0, 0);
  }
  20% {
    transform: rotate3d(0, 0, 1, 0deg) translate3d(80%, 80%, 0);
  }
  80% {
    transform: rotate3d(0, 0, 1, 360deg) translate3d(80%, 80%, 0);
  }
  100% {
    transform: rotate3d(0, 0, 1, 360deg) translate3d(0, 0, 0);
  }
}
@keyframes rs-revealer-14-2 {
  0% {
    transform: rotate3d(0, 0, 1, 0deg) translate3d(0, 0, 0);
  }
  20% {
    transform: rotate3d(0, 0, 1, 0deg) translate3d(80%, -80%, 0);
  }
  80% {
    transform: rotate3d(0, 0, 1, 360deg) translate3d(80%, -80%, 0);
  }
  100% {
    transform: rotate3d(0, 0, 1, 360deg) translate3d(0, 0, 0);
  }
}
@keyframes rs-revealer-14-3 {
  0% {
    transform: rotate3d(0, 0, 1, 0deg) translate3d(0, 0, 0);
  }
  20% {
    transform: rotate3d(0, 0, 1, 0deg) translate3d(-80%, -80%, 0);
  }
  80% {
    transform: rotate3d(0, 0, 1, 360deg) translate3d(-80%, -80%, 0);
  }
  100% {
    transform: rotate3d(0, 0, 1, 360deg) translate3d(0, 0, 0);
  }
}
@keyframes rs-revealer-14-4 {
  0% {
    transform: rotate3d(0, 0, 1, 0deg) translate3d(0, 0, 0);
  }
  20% {
    transform: rotate3d(0, 0, 1, 0deg) translate3d(-80%, 80%, 0);
  }
  80% {
    transform: rotate3d(0, 0, 1, 360deg) translate3d(-80%, 80%, 0);
  }
  100% {
    transform: rotate3d(0, 0, 1, 360deg) translate3d(0, 0, 0);
  }
}
rs-loader.spinner15 {
  width: 40px;
  height: 40px;
  margin-top: -4px;
  -webkit-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
}
rs-loader.spinner15 .rs-spinner-inner {
  width: 100%;
  height: 100%;
}
rs-loader.spinner15 .rs-spinner-inner span {
  display: block;
  width: 20px;
  height: 20px;
  position: absolute;
  top: 0;
  left: 0;
  -webkit-animation: rs-revealer-15 1.8s infinite ease-in-out;
  animation: rs-revealer-15 1.8s infinite ease-in-out;
}
rs-loader.spinner15 .rs-spinner-inner:last-child {
  -webkit-animation-delay: -0.9s;
  animation-delay: -0.9s;
}
@-webkit-keyframes rs-revealer-15 {
  25% {
    -webkit-transform: translateX(30px) rotate(-90deg) scale(0.5);
  }
  50% {
    -webkit-transform: translateX(30px) translateY(30px) rotate(-180deg);
  }
  75% {
    -webkit-transform: translateX(0) translateY(30px) rotate(-270deg) scale(0.5);
  }
  100% {
    -webkit-transform: rotate(-360deg);
  }
}
@keyframes rs-revealer-15 {
  25% {
    transform: translateX(30px) rotate(-90deg) scale(0.5);
    -webkit-transform: translateX(30px) rotate(-90deg) scale(0.5);
  }
  50% {
    transform: translateX(30px) translateY(30px) rotate(-179deg);
    -webkit-transform: translateX(30px) translateY(30px) rotate(-179deg);
  }
  50.1% {
    transform: translateX(30px) translateY(30px) rotate(-180deg);
    -webkit-transform: translateX(30px) translateY(30px) rotate(-180deg);
  }
  75% {
    transform: translateX(0) translateY(30px) rotate(-270deg) scale(0.5);
    -webkit-transform: translateX(0) translateY(30px) rotate(-270deg) scale(0.5);
  }
  100% {
    transform: rotate(-360deg);
    -webkit-transform: rotate(-360deg);
  }
}
.bgcanvas {
  display: none;
  position: absolute;
  overflow: hidden;
}
.odc__btn {
  display: inline-flex;
  justify-content: center;
  align-items: center;
  padding: 0 15px;
  margin-bottom: 0;
  border: 1px solid transparent;
  border-radius: 0;
  font-size: 13px;
  height: 30px;
  min-width: 150px;
  text-decoration: none;
  text-align: center;
  touch-action: manipulation;
  cursor: pointer;
  white-space: nowrap;
  -webkit-user-select: none;
  -o-user-select: none;
  -ms-user-select: none;
  user-select: none;
}
.odc__btn.active,
.odc__btn.focus,
.odc__btn:active,
.odc__btn:focus,
.odc__btn:hover {
  box-shadow: none;
  outline: 0;
  text-decoration: none;
}
.odc__btn.disabled,
.odc__btn[disabled] {
  pointer-events: none;
  cursor: not-allowed;
  opacity: 0.5;
}
.odc__btn--rounded-0 {
  border-radius: 0;
}
.odc__btn--rounded-3 {
  border-radius: 3px;
}
.odc__btn--rounded-5 {
  border-radius: 5px;
}
.odc__btn--rounded-50 {
  border-radius: 50px;
}
.odc__btn--primary {
  color: #fff !important;
  background: #ff495c;
  border-color: #ff495c;
}
.odc__btn--primary.active,
.odc__btn--primary.focus,
.odc__btn--primary:active,
.odc__btn--primary:focus,
.odc__btn--primary:hover {
  color: #fff;
  background: #ff495c;
  border-color: #ff495c;
  box-shadow: inset 0 -2px 0 #db455a;
}
.odc__btn--primary.odc__btn--sm.active,
.odc__btn--primary.odc__btn--sm.focus,
.odc__btn--primary.odc__btn--sm:active,
.odc__btn--primary.odc__btn--sm:focus,
.odc__btn--primary.odc__btn--sm:hover {
  box-shadow: inset 0 -3px 0 #db455a;
}
.odc__btn--primary.odc__btn--md.active,
.odc__btn--primary.odc__btn--md.focus,
.odc__btn--primary.odc__btn--md:active,
.odc__btn--primary.odc__btn--md:focus,
.odc__btn--primary.odc__btn--md:hover {
  box-shadow: inset 0 -4px 0 #db455a;
}
.odc__btn--primary.odc__btn--lg.active,
.odc__btn--primary.odc__btn--lg.focus,
.odc__btn--primary.odc__btn--lg:active,
.odc__btn--primary.odc__btn--lg:focus,
.odc__btn--primary.odc__btn--lg:hover,
.odc__btn--primary.odc__btn--xl.active,
.odc__btn--primary.odc__btn--xl.focus,
.odc__btn--primary.odc__btn--xl:active,
.odc__btn--primary.odc__btn--xl:focus,
.odc__btn--primary.odc__btn--xl:hover {
  box-shadow: inset 0 -5px 0 #db455a;
}
.odc__btn--more {
  position: relative;
  padding: 0 45px 0 0 !important;
  height: auto !important;
  color: #555b6d !important;
  background: 0 0;
  border-color: transparent;
}
.odc__btn--more:after,
.odc__btn--more:before {
  content: "";
  position: absolute;
  right: 0;
  top: 50%;
  background-color: #f9485c;
  transition: transform 0.3s;
}
.odc__btn--more:before {
  width: 30px;
  height: 4px;
  margin-top: -2px;
}
.odc__btn--more:after {
  right: -2px;
  width: 10px;
  height: 10px;
  margin-top: -5px;
  border-radius: 100%;
}
.odc__btn--more:hover:after,
.odc__btn--more:hover:before {
  transform: translate3d(5px, 0, 0);
}
.odc__btn--more.active,
.odc__btn--more.focus,
.odc__btn--more:active,
.odc__btn--more:focus,
.odc__btn--more:hover {
  color: #555b6d;
  background: 0 0;
  border-color: transparent;
}
.odc__btn--sm {
  height: 35px;
}
.odc__btn--md {
  height: 45px;
  padding: 0 20px;
  font-size: 14px;
}
.odc__btn--lg {
  height: 45px;
  padding: 0 30px;
  font-size: 14px;
}
.odc__btn--xl {
  height: 50px;
  padding: 0 40px;
  font-size: 16px;
}
.mega-dropdown-menu > li > ul,
.mobile_view_menu ul,
.navbar-default #navbar ul {
  margin: 0;
  padding: 0;
}
.banner-l-cntnr,
.container.pos,
.erp_card_wrap,
.headerchildnav a,
.latestboxCon .getmainconbx,
.menuwrap ul li a,
.resource-dtl .footer,
.tab_data_wapper,
section.different .different_inner {
  position: relative;
}
#navbar,
.navbar-default .navbar-left {
  margin-left: 30px;
}
#navbar,
.fin_ass_logo,
.footermenu_strip_inner .stripfbox,
.socailicons_newsletter {
  float: left;
}
.awardswr_bottomrow .awardswr_img,
.googletagmanager {
  visibility: hidden;
}
.wh-image,
.wh-image-ratio {
  aspect-ratio: auto !important;
}
@font-face {
  font-family: MaisonNeue-Bold;
  src: url("../assets/fonts/MaisonNeue-Bold.eot?#iefix") format("embedded-opentype"),
    url("../assets/fonts/MaisonNeue-Bold.otf") format("opentype"),
    url("../assets/fonts/MaisonNeue-Bold.woff") format("woff"),
    url("../assets/fonts/MaisonNeue-Bold.ttf") format("truetype"),
    url("../assets/fonts/MaisonNeue-Bold.svg#MaisonNeue-Bold") format("svg");
  font-weight: 400;
  font-style: normal;
  font-display: swap;
}
@font-face {
  font-family: MaisonNeue-Book;
  src: url("../assets/fonts/MaisonNeue-Book.eot?#iefix") format("embedded-opentype"),
    url("../assets/fonts/MaisonNeue-Book.otf") format("opentype"),
    url("../assets/fonts/MaisonNeue-Book.woff") format("woff"),
    url("../assets/fonts/MaisonNeue-Book.ttf") format("truetype"),
    url("../assets/fonts/MaisonNeue-Book.svg#MaisonNeue-Book") format("svg");
  font-weight: 400;
  font-style: normal;
  font-display: swap;
}
body {
  font-family: MaisonNeue-Book;
  line-height: 1.5;
  -webkit-font-smoothing: antialiased;
}
html {
  overflow-x: hidden;
}
h1,
h2,
h3,
h4 {
  font-family: MaisonNeue-Bold;
  color: #2a2d36;
  margin: 0 0 10px;
}
.cloudserverCon .nextrw span,
.finserbx .headingbox span,
h1 span,
h2 span,
h3 span,
h4 span {
  display: block;
}
:root {
  font-size: 16px;
}
h1 {
  font-size: 3rem;
}
h2 {
  font-size: 2.625rem;
}
h3 {
  font-size: 1.5rem;
}
h4 {
  font-size: 1.25rem;
}
.tp_page ul li,
p {
  font-size: 1.1875rem;
  color: #555b6d;
}
.white-title,
.wtcol {
  color: #fff;
}
.error {
  font-size: 0.75rem;
  color: #ff495c;
  padding-top: 3px;
}
.container {
  padding: 0;
  width: 90%;
  max-width: 1920px;
}
.container.pos:after {
  display: block;
  position: absolute;
  content: "";
  top: 0;
  right: -8%;
  width: 10%;
  height: 100%;
  background-color: #f3f3f5;
}
input:focus {
  outline: 0;
}
.cloudserverCon .nextrw a,
.discover_banner
  .discover_contant_wrap
  .discover_contant
  .discover_icons
  ul
  li
  a,
.fin_ass_valrw a,
.plateformspeedbox .build_tabs .items a:active,
.plateformspeedbox .build_tabs .items a:focus,
.plateformspeedbox .build_tabs .items a:hover,
a:hover {
  text-decoration: none;
}
.btnmar,
section.awards .email_div {
  margin-top: 30px;
}
.navbar-default #navbar ul li {
  list-style: none;
  float: left;
  position: relative;
}
.navbar-default .navbar-nav > li > a {
  font-size: 1rem;
  color: #545b6d;
  line-height: 64px;
  padding: 0 10px;
  margin: 0 20px;
  display: block;
  text-decoration: none;
  transition: color 0.3s;
}
.navbar-default .navbar-nav > .active > a,
.navbar-default .navbar-nav > .active > a:focus,
.navbar-default .navbar-nav > .active > a:hover,
.navbar-default .navbar-nav > .open > a,
.navbar-default .navbar-nav > .open > a:focus,
.navbar-default .navbar-nav > .open > a:hover {
  color: #00acc8 !important;
  background-color: transparent !important;
}
.choose_vacancy .bootstrap-select.btn-group .dropdown-menu li:hover a,
.mobile_view_menu ul li a.active,
.navbar-default .navbar-nav > li:active > a,
.navbar-default .navbar-nav > li:hover > a,
.navbar-default .navbar-nav > li > a:focus,
.videoactionwr1 a {
  color: #00acc8;
}
.asswd20,
.menuwd20 {
  width: 20%;
}
.dropdown-menu {
  font-size: 1.1875rem;
}
.mega-dropdown {
  position: static !important;
}
.mega-dropdown-menu {
  width: 100%;
  top: 64px;
  padding: 0 !important;
  border: 0;
  border-radius: 0;
  box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
  -webkit-box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
  overflow: hidden;
  height: auto;
}
.mega-dropdown-menu:before {
  content: "";
  display: block;
  height: 4px;
  background: -moz-linear-gradient(
    0 50% 0deg,
    #0f6fc6 0,
    #00acc8 51.45%,
    #0075a2 100%
  );
  background: -webkit-linear-gradient(
    0deg,
    #0f6fc6 0,
    #00acc8 51.45%,
    #0075a2 100%
  );
  background: -webkit-gradient(
    linear,
    0 50%,
    100% 50%,
    color-stop(0, #0f6fc6),
    color-stop(0.5145, #00acc8),
    color-stop(1, #0075a2)
  );
  background: -o-linear-gradient(0deg, #0f6fc6 0, #00acc8 51.45%, #0075a2 100%);
  background: -ms-linear-gradient(
    0deg,
    #0f6fc6 0,
    #00acc8 51.45%,
    #0075a2 100%
  );
  background: linear-gradient(90deg, #0f6fc6 0, #00acc8 51.45%, #0075a2 100%);
}
.mega-dropdown-menu > li > ul > li,
.mobile_view_menu ul li {
  list-style: none;
}
.menuimgbox {
  padding: 30px 50px;
  text-align: center;
}
.menuimgbox img {
  max-width: 100%;
  display: inline-block;
  box-shadow: 0 2px 10px 0 rgba(0, 0, 0, 0.1);
}
.menuwrap {
  padding: 0 15px;
}
.menuwrap ul {
  margin: 15px 15px 20px !important;
}
.menuwrap ul li {
  float: none !important;
  list-style: none;
  line-height: 16px;
  padding: 4px 0;
  margin-bottom: 3px;
}
.menuwrap ul li a {
  font-size: 14px;
  color: #a2aaad;
  text-decoration: none;
  display: inline-block;
  -webkit-transition: 0.4s ease-in-out;
  transition: 0.4s ease-in-out;
}
.menuwrap ul li.pdl a {
  padding-left: 0px;
}
.menuwrap ul li:first-child {
  font-size: 13px;
  color: #000;
}
.menuwrap ul li.category-dot:before {
  content: "";
  width: 9px;
  height: 9px;
  margin-top: -0.2px;
  display: block;
  background: #edf2f4;
  position: absolute;
  left: -11px;
  border-radius: 1px;
  top: 50%;
  transform: translate(-50%, -60%);
}
.menuwrap ul li.category-cx:before {
  background: #f9485c;
}
.menuwrap ul li.category-bx:before {
  background: #0075a2;
}
.menuwrap ul li.category-bxd:before {
  background: #0f6fc6;
}
.menuwrap ul li.category-skb:before {
  background: #00acc8;
}
.menuwrap ul li a i {
  font-style: normal;
  display: inline-block;
}
.headerchildnav a:hover,
.imgdownlink a:hover,
.menuwrap ul li:hover a {
  color: #000;
}
.overlaybg {
  position: fixed;
  left: 0;
  top: 64px;
  width: 100%;
  height: 100%;
  background-color: rgba(0, 0, 0, 0.2);
  display: none;
}
.headerchildnav {
  padding: 50px 15px 50px 20px;
}
.headerchildnav.lzer {
  padding-left: 0;
}
.headerchildnav a {
  display: block;
  font-size: 14px;
  color: #555b6d;
  margin-bottom: 20px;
}
.headerchildnav a:after {
  position: absolute;
  content: "";
  left: 0;
  bottom: -3px;
  width: 30px;
  height: 3px;
  -webkit-transition: 0.4s linear;
  transition: 0.4s linear;
  background-color: #ff495c;
}
.imgdownlink {
  font-size: 14px;
  padding-top: 15px;
  text-align: left;
}
.imgdownlink a {
  font-size: 14px;
  color: #555b6d;
  text-decoration: none;
}
.colmenubg {
  background-color: #f3f3f5;
}
.navbar-default {
  border: 0;
  box-shadow: 0 0 10px 0 rgba(0, 0, 0, 0.03);
  background-color: #fff;
  min-height: 64px;
  max-width: 1920px;
  margin: auto;
}
.navbar > .container .navbar-brand,
.navbar > .container-fluid .navbar-brand,
.trusted_brands_logo .brlogo:first-child {
  margin-left: 0;
}
.navbar-default .container-fluid {
  padding: 0 40px;
  max-width: 1920px;
  margin: auto;
}
.navbar-default .navbar-brand {
  width: 101px;
  height: 32px;
  padding: 0;
  background: url(../images/logo.svg) 0 0/100% 100% no-repeat;
  display: block;
  text-indent: -9999px;
  margin-top: 16px;
  outline: 0;
}
.buildinnovationConbx,
.buildpgwrap,
.clientsimgbx,
.customerbox .cusconinfo,
.fin_ass_valrw,
.leadershipmembermodal h3,
.letstalkSecondrywrap,
.navbar-default .navbar_wrapper,
.navbar-default ul.alwaysvisiblemenu,
.plateformCon {
  margin: 0;
}
.navbar-default ul.alwaysvisiblemenu li a {
  margin-left: 10px;
  margin-right: 0;
}
#wrapper {
  max-width: 1920px;
  margin: 0 auto auto;
}
section.banner .banner_inner {
  position: relative;
  height: calc(100vh - 64px);
  max-height: 1000px;
}
section.banner .banner_img {
  position: relative;
  height: 100%;
  text-align: center;
  background: #71d4d6;
}
section.banner .banner_img.secondsl {
  background: #f48c9b;
}
section.banner .banner_img.thirdsl {
  background: #2c9bc6;
}
section.banner .banner_img img {
  max-width: 100%;
  max-height: 100%;
  display: inline-block;
}
.banner_textdiv {
  position: absolute;
  top: 36%;
  left: 250px;
  width: 600px;
  text-align: left;
  transform: translateY(-50%);
  z-index: 9;
}
.banner_textdiv span {
  position: relative;
  font-family: MaisonNeue-Bold;
  color: #2a2d36;
  font-size: 21px;
  display: block;
  top: 160px;
}
section.banner .banner_textdiv p {
  max-width: 64%;
  margin-bottom: 40px;
  padding-top: 180px;
}
.inlineform,
.inlineform form {
  display: flex;
  flex-flow: wrap;
  max-width: 330px;
  box-shadow: 0 10px 30px 6px rgba(0, 0, 0, 0.1);
}
.inlineform form {
  display: flex;
  flex-flow: wrap;
  width: 100%;
}
.inlineform .input {
  width: calc(100% - 120px);
}
.inlineform input[type="email"],
.inlineform input[type="text"] {
  width: 100%;
  border: 2px solid #ff495c;
  border-radius: 0;
  font-size: 14px;
  font-style: italic;
  padding: 10px;
  outline: 0 !important;
  box-shadow: none;
}
.inlineform .inputbtn {
  width: 120px;
}
.home-hero-bgimg,
.inlineform input {
  width: 100%;
  height: 100%;
}
.inlineform input[type="submit"] {
  min-width: initial;
}
.banneranimation {
  position: absolute;
  width: 100%;
  height: 100%;
  left: 0;
  top: 0;
  right: 0;
  bottom: 0;
}
#bantextanim,
.home-hero-cinner,
.owl-carousel.bananim .item,
.owl-carousel.bananim .owl-item,
.owl-carousel.bananim .owl-stage,
.owl-carousel.bananim .owl-stage-outer {
  height: 100%;
}
.platformsectionwrap {
  padding-bottom: 80px;
}
.platformsectionwrap .dotsdesign {
  text-align: right;
}
.assetsfinancebox h3,
.buildscaleimgbx,
.design_icon,
.fincetext,
.finserbx .headingbox,
.finserbx .logosrw,
.gotperksbx .gotperksiconrw,
.legal-phtitle,
.lernmorerw,
.modal,
.platform_nor_text,
.section_width .center-change,
.trusted_brands_logo {
  text-align: center;
}
.platformsectionwrap .dotsdesign img {
  width: 170px;
  display: inline-block;
}
.platform_nor_text {
  max-width: 68%;
  margin: auto auto 40px;
  font-size: 21px;
  line-height: 32px;
  color: #555b6d;
}
.assetsfinancebox {
  padding: 20px;
  max-width: 564px;
  margin: 50px auto 70px;
  background-color: #0076a3;
  box-shadow: 0 10px 30px 6px rgba(0, 0, 0, 0.1);
}
.assetsfinancebox h3 {
  font-size: 1.125rem;
  color: #fff;
}
.finance_assets_row {
  margin-top: 25px;
  margin-bottom: 10px;
}
.fin_ass_logo {
  width: 32px;
  height: 32px;
  background: url(../images/finance_assets.png) 0 0/32px 96px no-repeat;
}
.customericon.community,
.fin_ass_logo.servicing {
  background-position: 0 -32px;
}
.customericon.programs,
.fin_ass_logo.ass_man {
  background-position: 0 -64px;
}
.finassname {
  margin-left: 40px;
  font-size: 0.8125rem;
  color: #fff;
  line-height: 36px;
}
.assets_fin_service {
  margin-bottom: 80px;
}
.assets_fin_service .finserbx {
  padding: 15px;
  margin: 0 15px;
  background-color: #fff;
  box-shadow: 0 0 20px 8px rgba(0, 0, 0, 0.1);
}
.finserbx .logosrw {
  margin-top: 15px;
  margin-bottom: 20px;
}
.finserbx .headingbox {
  font-size: 1.125rem;
  height: 50px;
  color: #00abc8;
}
.finserbx .logosrw .finass_ser_logo {
  width: 40px;
  height: 40px;
  background: url(../images/finance_tool_icon.png) 0 0/40px 200px no-repeat;
  display: inline-block;
}
.finserbx .logosrw .finass_ser_logo.om,
section.news .heading_div span.news_icon {
  background-position: 0 -40px;
}
.finserbx .logosrw .finass_ser_logo.di,
section.awards .heading_div span.award_icon {
  background-position: 0 -80px;
}
.finserbx .logosrw .finass_ser_logo.dt {
  background-position: 0 -120px;
}
.finserbx .logosrw .finass_ser_logo.api {
  background-position: 0 -160px;
}
.fincetext {
  font-size: 0.9375rem;
  color: #555b6d;
  margin-top: 10px;
  margin-bottom: 10px;
}
.eqWrap {
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
}
.equalHMWrap {
  justify-content: space-between;
}
.cloudserversection {
  padding: 0 40px;
}
.cloudserversection .cloudserverCon {
  padding-top: 100px;
  padding-bottom: 140px;
  position: relative;
  background: url(../images/cloud_server.webp) right bottom no-repeat;
  background-size: 472px;
}
.cloudserverCon .normaltxt {
  max-width: 70%;
  margin: 30px auto auto;
}
.cloudserverCon .nextrw {
  margin-top: 25px;
  display: block;
}
.redbullets {
  position: relative;
  margin-left: 30px;
  width: 45px;
  height: 4px;
  background-color: #f9485c;
  display: inline-block;
  vertical-align: middle;
}
.redbullets:after {
  position: absolute;
  content: "";
  width: 10px;
  height: 10px;
  right: -2px;
  top: -3px;
  border-radius: 100%;
  background-color: #f9485c;
}
.cloudsview1 {
  position: absolute;
  left: 100px;
  top: 0;
  width: 220px;
}
.cloudsview2 {
  position: absolute;
  left: 30px;
  top: 150px;
  width: 134px;
}
.clientsimgbx img,
.cloudsview1 img,
.cloudsview2 img,
.devOpsCon .devopsimgbx img,
.letstalkSecondryform
  .secnformCon
  .bootstrap-select:not([class*="span"]):not([class*="col-"]):not(
    [class*="form-control"]
  ):not(.input-group-btn),
.letstalkban img,
.letstalkformCon
  .bootstrap-select:not([class*="span"]):not([class*="col-"]):not(
    [class*="form-control"]
  ):not(.input-group-btn),
.officeviewentrybx img,
div.content .content_img .content_img_inner img,
section.different .different_Img img,
section.newsroom .newsroomimg img,
section.pr_anouncement .pr_announcementimg img {
  width: 100%;
}
.integratewithtools {
  padding: 40px 0;
  background-color: #0075a2;
}
.integratewithtools .integratecon {
  position: relative;
  background: url(../images/integrate_tool_logo.png) 0 0/100% no-repeat;
  height: 660px;
}
.integrateconmidCon {
  position: absolute;
  left: 50%;
  top: 50%;
  width: 100%;
  transform: translate(-50%, -50%);
}
.integratewithtools .inlineform {
  margin: 26px auto auto;
}
.clientsmess .appcllogorw .testicon,
.cloudserverCon .nextrw span.breakpoint,
section.newsroom .owl-carousel .owl-item.center .cmsbtns_style {
  display: inline-block;
}
.testimonialswrap,
section.resources .resourcesinner,
section.tiles {
  padding: 80px 0;
}
#clients_view {
  max-width: 1040px;
  margin: auto;
}
.clientsmess {
  position: absolute;
  top: 50%;
  left: 30px;
  transform: translateY(-50%);
}
.clientsmess .appcllogorw,
.letsAddress .addrow,
.notfound_page p,
.pr-list-head,
.tp_page h3,
section.annoucement .heading_div,
section.awards .heading_div,
section.lifeatodessa p,
section.news .heading_div {
  margin-bottom: 30px;
}
.clientsmess .appcllogorw .testicon img {
  width: 45px;
}
.clientsmess .appcllogorw .applogo.medone {
  display: inline-block;
  margin-left: 30px;
}
.clientsmess .appcllogorw .applogo.medone img {
  width: 260px;
}
.clientsmess p {
  max-width: 400px;
}
.carbanimg img,
.discover_banner
  .discover_contant_wrap
  .discover_contant
  .discover_icons
  ul
  li
  a
  img,
.howweworkCon .howwewimgbx img,
.team_member_position .team_member_box img {
  max-width: 100%;
}
.owl-carousel.clientsask .owl-controls {
  position: absolute;
  right: 60px;
  bottom: 30px;
}
.owl-carousel .owl-controls .owl-dot {
  width: 10px;
  height: 10px;
  border-radius: 100%;
  display: inline-block;
  margin: 0 6px;
  background-color: #e0e0e0;
}
.owl-carousel .owl-controls .owl-dot.active {
  background-color: #00abc7;
}
.headquartersAddbox,
.overtrustedwrap {
  padding-top: 120px;
}
.overtrustedwrap .normaltxt {
  max-width: 50%;
  margin: 20px auto 40px;
}
.overtrustedwrap .inlineform {
  position: relative;
  left: 20px;
  margin: 30px auto auto;
}
.trusted_brands_logo {
  padding-top: 50px;
  vertical-align: middle;
}
.trusted_brands_logo .brlogo {
  margin: 0 40px;
  display: inline-block;
}
.cm-menu .navbar-nav,
.pglead_ld-icmsitem:last-child,
.trusted_brands_logo .brlogo:last-child {
  margin-right: 0;
}
.trusted_brands_logo .brlogo img,
div.leader_person .leader_img img {
  max-width: 100%;
  display: inline-block;
}
.owl-carousel.clientsask .owl-item img {
  display: inline-block !important;
}
footer {
  background: #f3f3f5;
  padding: 80px 0 20px;
}
footer .footer_menuwr ul {
  margin: 50px 0 0;
  padding: 0;
}
.footermenu_strip {
  background: url(../images/footer_strip.png) left top/100% no-repeat #f3f3f5;
}
.footermenu_strip_inner {
  padding: 50px 0 40px;
}
.footerbottommenu {
  float: right;
  padding-top: 30px;
  margin-left: 20px;
}
.footermenu_strip_inner .social_icon {
  display: inline-block;
  margin-top: 20px;
}
.footermenu_strip_inner .social_icon a {
  width: 36px;
  height: 36px;
  border-radius: 50%;
  position: relative;
  display: table;
  text-align: center;
  -webkit-transition: 0.4s linear;
  transition: 0.4s linear;
  background: #00acc8;
  color: #fff;
  float: left;
  margin-right: 10px;
}
.footermenu_strip_inner .social_icon a i {
  display: table-cell;
  vertical-align: middle;
  font-size: 18px;
}
footer .footer_menuwr .footer_li_wrap a,
footer .footer_menuwr .footer_li_wrap p {
  font-size: 0.875rem;
  color: #697188;
  display: inline-block;
  position: relative;
}
.footerbottommenu ul {
  margin: 0;
  padding: 0;
  display: inline-block;
}
.footerbottommenu ul li a {
  position: relative;
  color: #697188;
  padding: 0;
  margin: 0;
}
.footerbottommenu ul li {
  font-size: 13px;
  color: #697188;
  border-right: 1px solid #697188;
  padding: 0 10px;
  margin: 0;
}
.footerbottommenu ul li:last-of-type {
  border-right: 0;
  padding-right: 0;
}
footer .footer_li_wrap {
  float: left;
  width: 20%;
}
.home-hero-ctitle br,
.mobileviewmenu,
footer .mobile_view_footer {
  display: none;
}
footer h6 {
  font-size: 0.9375rem;
  margin-bottom: 20px;
}
footer .footer_menuwr .footer_li_wrap ul {
  margin: 16px 0 0;
  padding: 0;
}
footer .footer_menuwr .footer_li_wrap ul li {
  list-style: none;
  margin-bottom: 15px;
}
footer .footer_menuwr .footer_li_wrap p {
  margin: 10px 0;
}
footer .footer_menuwr .footer_li_wrap a:after {
  background: 0 0;
  bottom: -2px;
  content: "";
  display: block;
  height: 1px;
  left: 50%;
  position: absolute;
  transition: width 0.3s, left 0.3s;
  width: 0;
}
.footerbottommenu ul li a:hover,
.notfound_page p a:hover,
footer .footer_menuwr .footer_li_wrap a.active,
footer .footer_menuwr .footer_li_wrap a:hover,
section.awards .email_div h4 a:hover {
  color: #00abc8;
}
.clearmenurwmb {
  clear: both;
  display: none;
}
h4.footer_li_heading {
  font-size: 1.125rem;
  margin-top: 5px;
}
.notfound_page {
  padding: 130px 0;
}
.notfound_page h1 {
  font-size: 6rem;
}
.latestboxCon .getcontext a,
.leadershipmembermodal p,
.notfound_page p a,
.pr-header-wtext,
.pr-header-wtext a,
.pr-header-wtext a:focus,
.pr-header-wtext a:hover,
.vacancyrow .vacancyname a {
  color: #555b6d;
}
.notfound_page .search_input {
  max-width: 350px;
  margin: 0 auto;
  position: relative;
}
.notfound_page .search_input input {
  width: 100%;
  padding: 15px 40px 15px 15px;
  background-color: #ff495c;
  border: 0;
  color: #fff;
}
.notfound_page .search_input i {
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
  right: 16px;
  color: #fff;
  font-size: 19px;
}
.tp_page span.policyicon,
.tp_page span.termsicon {
  height: 70px;
  position: relative;
  margin: 0 auto 20px;
  width: 70px;
  display: block;
}
.careerpgban,
.getthelatestwrap,
.jobopening,
.tp_page {
  padding: 100px 0;
}
.tp_page ul {
  padding-left: 40px;
  margin-bottom: 40px;
}
.tp_page span.termsicon {
  background: url(../images/pticons.png) 0 0/70px 140px;
}
.tp_page span.policyicon {
  background: url(../images/pticons.png) 0 -70px/70px 140px;
}
.modal {
  padding: 0 !important;
}
.modal:before {
  content: "";
  display: inline-block;
  height: 100%;
  vertical-align: middle;
  margin-right: -4px;
}
.modal-dialog {
  display: inline-block;
  text-align: left;
  vertical-align: middle;
}
.modal-content {
  border-radius: 0;
}
.videoactionwr1 {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  font-size: 18px;
  color: #00acc8;
  padding: 10px 20px;
  border-radius: 8px;
  background-color: #fff;
  z-index: 1;
  display: none;
}
.videoactionwr1 i {
  margin-right: 8px;
}
#companyvideoplay .close {
  position: absolute;
  top: -30px;
  right: -25px;
  color: #fff;
  font-size: 32px;
  opacity: 1;
  outline: 0;
  text-shadow: none;
}
.careerpgvideo {
  width: 580px;
  height: 640px;
}
.close.closebox {
  position: absolute;
  font-size: 36px;
  top: 5px;
  right: 15px;
  z-index: 1;
  opacity: 1;
}
.seeposbtnrw {
  position: relative;
  margin-top: 60px;
  text-align: center;
  z-index: 1;
}
.carbanimg {
  margin-top: -52px;
}
.carbanimg img {
  display: inline-block;
  text-align: center;
}
.seeposbtnrw a.btns_style {
  position: relative;
  padding: 16px 50px;
  z-index: 1;
}
.buildinnovation,
.howweworksection {
  padding: 60px 0;
}
h2.lefttext {
  position: relative;
  left: -70px;
}
.howweworkCon {
  padding-top: 30px;
}
.buildpgscalefector,
.howweworkCon .howwewimgbx {
  padding-top: 90px;
}
.howweworkCon .howworkdetails {
  padding-left: 50px;
  padding-right: 210px;
}
.pdl30 {
  padding-left: 30px;
}
.howweworkCon .howworkdetails .howworkrw,
.thankyoupage .letstalkform h3,
div.content {
  margin-bottom: 60px;
}
#companyvideoplay .modal-body,
.menuviewwrap .headerchildnav,
.npadrw,
.plateformspeedbox,
.section_width .col-md-12,
.team_member_position .colpd0,
section.annoucement .upperdiv .nopad,
section.news .upperdiv .nopad {
  padding: 0;
}
.team_member_position .team_member_box {
  position: relative;
  overflow: hidden;
  cursor: pointer;
}
.team_member_position .team_member_box .teammemberscaleview img {
  -webkit-transform: scale(1);
  transform: scale(1);
  -webkit-transition: 0.3s linear;
  transition: 0.3s linear;
}
.team_member_position .team_member_box:hover .teammemberscaleview img {
  -webkit-transform: scale(1.1);
  transform: scale(1.1);
}
.team_member_position .team_member_box .postextbx {
  position: absolute;
  font-family: MaisonNeue-Bold;
  left: 50%;
  top: 50%;
  width: 90%;
  color: #fff;
  text-align: center;
  transform: translate(-50%, -50%);
  z-index: 1;
}
.team_member_position .team_member_box .postextbx .postext {
  position: relative;
  display: inline-block;
}
.gotperkssection {
  padding: 100px 0;
  background-color: #f3f3f5;
}
.gotperksCon {
  margin-top: 35px;
}
.gotperksbx {
  margin: 24px 0;
}
.gotperksbx .gotperksiconbx {
  width: 70px;
  height: 42px;
  display: inline-block;
  background: url(../images/got_perks_icon.png) 0 0/70px 252px no-repeat;
}
.gotperksbx .gotperksiconbx.health {
  background-position: 0 -42px;
}
.gotperksbx .gotperksiconbx.teammeal {
  background-position: 0 -84px;
}
.gotperksbx .gotperksiconbx.flexible_vacation {
  background-position: 0 -126px;
}
.gotperksbx .gotperksiconbx.retirement_plan {
  background-position: 0 -168px;
}
.gotperksbx .gotperksiconbx.paid_parental {
  background-position: 0 -210px;
}
.gotperksbx .gotperkstext {
  font-size: 19px;
  color: #555b6d;
  text-align: center;
  margin-top: 15px;
}
.wd29 {
  width: 29.33%;
}
.wd12 {
  width: 12%;
}
.open_position_box {
  padding: 160px 60px;
  background: url(../images/open_position_bg.png) left bottom/100% no-repeat
    #0f6fc6;
}
.open_position_box a.btns_style {
  padding: 16px 80px;
}
.open_position_box .seeposbtnrw {
  margin-top: 80px;
  margin-bottom: 30px;
}
.open_position_box a.btns_style:hover {
  color: #fff;
  border: 2px solid #fff;
}
.vacancyCon {
  padding-top: 80px;
}
.vacancyCon .vacancyrow {
  margin-bottom: 70px;
}
.vacancyrow .vacancytitle {
  padding: 10px 0;
  font-size: 19px;
  color: #555b6d;
  border-bottom: 2px solid #a2aaad;
  margin-bottom: 25px;
}
.vacancyrow .vacancyname {
  font-size: 19px;
  color: #555b6d;
}
.legal-pcontent,
.vacancyrow .form-group {
  margin-bottom: 40px;
}
.letstalkSecondryform .secnformCon .form-group,
.letstalkform .form-group,
.letstalkinfobox ul li {
  margin-bottom: 20px;
  position: relative;
}
.choose_vacancy {
  padding-top: 60px;
  max-width: 800px;
  margin: auto;
}
.choose_vacancy
  .bootstrap-select:not([class*="span"]):not([class*="col-"]):not(
    [class*="form-control"]
  ):not(.input-group-btn) {
  width: 86%;
}
.choose_vacancy .bootstrap-select > .btn {
  padding: 10px;
  color: #fff !important;
  font-size: 20px;
  border: 0;
  border-radius: 0;
  background-color: #f9485c !important;
  box-shadow: 0 10px 30px 6px rgba(0, 0, 0, 0.1);
}
.choose_vacancy .dropdown-menu {
  padding: 20px;
  font-size: 18px;
  border: 0;
  border-radius: 0;
}
.choose_vacancy .bootstrap-select.btn-group .dropdown-menu li a {
  font-size: 18px !important;
  border: 0 !important;
  outline: 0 !important;
  background-color: transparent;
}
.choose_vacancy .dropdown-menu > li > a {
  color: #555b6d;
  padding: 10px;
}
.choose_vacancy .bootstrap-select.btn-group .btn .caret {
  width: 18px;
  height: 12px;
  border: 0;
  margin-top: -6px;
  background: url(../images/select_arrow.png) 0 0/18px 12px no-repeat;
  -webkit-transition: 0.4s linear;
  transition: 0.4s linear;
  transform: rotate(-180deg);
}
.choose_vacancy .bootstrap-select.btn-group.open .btn .caret {
  transform: none;
}
.letstalkformSection {
  padding: 110px 0 80px;
}
.letstalkformCon {
  padding-right: 110px;
  background: url(../images/lets_talk_form_bg.png) right bottom/750px no-repeat;
}
.letstalkform {
  padding: 40px;
  border-radius: 4px;
  background: #fff;
  box-shadow: 2px 0 20px 15px rgba(0, 0, 0, 0.1);
}
.customerbox,
.latestboxCon {
  box-shadow: 0 10px 30px 6px rgba(0, 0, 0, 0.1);
}
.letstalkform .form-control {
  font-family: MaisonNeue-Book;
  padding: 14px;
  height: auto;
  font-size: 14px;
  border-radius: 8px;
  border: 2px solid #e8e8e8;
  box-shadow: none;
}
.letstalkSecondryform .secnformCon .form-control.error,
.letstalkform .form-control.error {
  border-color: #ff495c;
}
#annoucementslider .owl-dots,
.letstalkSecondryform .secnformCon .form-group label.error,
.letstalkform .form-group label.error {
  display: none !important;
}
.letstalkform textarea {
  resize: none;
}
.letstalkinfobox {
  margin-top: 40px;
  padding: 0 60px;
}
.letstalkinfobox ul {
  margin: 0;
  padding: 30px 60px 0 30px;
}
.countryAddinfo .headingrows h3.mntop.pd,
.countryAddinfo p {
  padding-left: 60px;
}
.letstalkinfobox ul li {
  font-size: 1.1875rem;
  padding-left: 42px;
  color: #555b6d;
  list-style: none;
}
.letstalkinfobox ul li span {
  position: absolute;
  top: 5px;
  left: 0;
  width: 22px;
  height: 20px;
  background: url(../images/list_icon.png) 0 0/100% 100% no-repeat;
  display: block;
}
.latestboxwrap,
.latestboxwrap .lernmorerw,
.letsAddress {
  padding-top: 70px;
}
.letsAddress .counnm {
  font-size: 21px;
  color: #555b6d;
  padding-bottom: 10px;
}
.letsAddress .counnum {
  font-size: 24px;
  color: #00abc8;
}
.letstalkban {
  min-height: 460px;
  background: url(../images/lets_talk_com_ban.jpg) top right/cover no-repeat;
}
.alreadyCustomerwrap {
  padding: 80px 0;
  background-color: #b7e3eb;
}
.customerboxrow {
  padding: 70px 50px;
}
.customerbox {
  padding: 30px 40px;
  border-radius: 4px;
  border-left: 10px solid #0075a2;
  margin: 0 30px;
  background-color: #fff;
}
#nav-icon1,
.secbtntop,
section.annoucement a.readmorebtn {
  margin-top: 20px;
}
.countryAddinfo .headingrows,
.customericonrw,
.discover_banner .discover_icons,
.legal-page--privacy .legal-pcontent p,
.legal-page--terms .legal-pcontent p,
section.annoucement .upperdiv,
section.different .differnt_info p,
section.news .upperdiv {
  margin-bottom: 20px;
}
.customericon {
  width: 32px;
  height: 32px;
  background: url(../images/customer_icon.png) 0 0/32px 128px no-repeat;
}
.customericon.headq {
  background-position: 0 -96px;
}
.customerbox .boxnormaltxt {
  font-size: 16px;
  line-height: 28px;
  color: #555b6d;
  margin-bottom: 30px;
}
.customerbox .lernmorerw {
  text-align: left;
  padding-bottom: 15px;
}
.countryAddressSection {
  position: relative;
  padding: 40px 80px;
}
.countryAddinfo {
  padding-right: 50px;
}
.countryAddinfo .headingrows h3 {
  display: inline;
}
.countryAddinfo .headingrows h3.mntop {
  display: inline-block;
  padding-top: 6px;
}
.headingrows .customericon {
  float: left;
  margin-right: 30px;
}
.countryAddinfo p {
  margin-bottom: 0;
}
.countryAddinfo p span {
  margin-top: 20px;
  display: block;
}
.countryAddinfo .letsbutton {
  padding-left: 60px;
  margin-top: 30px;
}
.headquartersAddbox .headqAdd {
  padding-bottom: 50px;
}
.headquartersAddbox .headqAdd:nth-child(2) {
  padding-bottom: 0;
}
.devOpsCon .devopsconbox .opstextrw.topp,
.headquartersAddbox .headqAdd .headqinfo {
  padding-top: 10px;
}
.officeviewentrybx {
  position: relative;
  padding-top: 220px;
  right: -64px;
}
.bluedotsview {
  position: absolute;
  top: 180px;
  right: -80px;
  width: 344px;
  height: 182px;
  background: url(../images/blue_dots.png) 0 0/100% 100% no-repeat;
}
.letstalkSecondryform {
  padding: 90px 0;
  background-color: #233746;
}
.letstalkSecondryform .secnformCon {
  max-width: 64%;
  margin: auto;
}
.letstalkSecondryform .secnformCon .form-control {
  padding: 0 10px;
  height: 50px;
  border: 2px solid #fff;
  font-size: 15px;
  color: #8e8e8e;
  border-radius: 8px;
  box-shadow: none;
  -webkit-transition: 0.4s linear;
  transition: 0.4s linear;
}
.letstalkSecondryform .secnformCon .bootstrap-select > .btn,
.letstalkformCon .bootstrap-select > .btn {
  padding: 0 10px;
  height: 50px;
  font-size: 15px;
  color: #8e8e8e;
  border-radius: 8px;
  border: 1px solid #fff;
  background-color: #fff !important;
  box-shadow: none;
}
.letstalkformCon .bootstrap-select > .btn {
  border: 2px solid #e8e8e8 !important;
}
.letstalkSecondryform .secnformCon .dropdown-menu,
.letstalkformCon .dropdown-menu {
  max-height: 240px !important;
}
.letstalkSecondryform .secnformCon .dropdown-menu > li > a,
.letstalkformCon .dropdown-menu > li > a {
  font-size: 15px;
  color: #8e8e8e;
}
.letstalkSecondryform .secnformCon textarea.form-control {
  resize: none;
  padding: 10px;
  height: 121px;
}
.letstalkSecondryform .container {
  margin: auto;
}
.letstalkSecondryform .pdtb {
  padding: 20px 0 40px;
}
.latestboxCon {
  max-width: 64%;
  margin: auto;
  background-color: #fff;
}
.latestboxCon .getconbx {
  position: relative;
  height: 240px;
  background-size: cover !important;
  background-position: center center !important;
  overflow: hidden;
}
.latestboxCon span.dots {
  position: absolute;
  right: 15px;
  width: 30px;
  height: 30px;
  padding: 4px;
  bottom: -17px;
  border-radius: 50%;
  border: 5px solid #fff;
  background-color: #cacdd5;
}
.latestboxCon .getcontext {
  padding: 25px;
  color: #555b6d;
  font-size: 14px;
  line-height: 24px;
}
.buildpgscalefector p.tpbtm {
  padding: 20px 0 35px;
}
.buildscaleimgbx img {
  width: 780px;
  display: inline-block;
}
.buildtabsbackgbox {
  padding-bottom: 360px;
  margin-top: -210px;
  background-color: #233746;
}
.btmlinegrey,
section.different,
section.morelikethis,
section.news {
  background-color: #f3f3f5;
}
.plateformspeedbox .build_tabs {
  max-width: 720px;
  margin: -80px auto 0;
}
.plateformspeedbox .build_tabs .items {
  text-align: center;
  padding: 2px 0;
}
.plateformspeedbox .build_tabs .items a {
  font-family: MaisonNeue-Bold;
  padding: 5px 0;
  margin: 0 10px;
  width: 100%;
  color: #fff;
  border-bottom: 2px solid #233746;
  font-size: 1.25rem;
  outline: 0 !important;
  display: block;
}
.plateformspeedbox .build_tabs .items.build_tabactive a {
  color: #89d3e1;
  border-color: #89d3e1;
}
.plateformspeedbox .tab-content {
  padding: 110px 0 70px;
}
.plateformCon .normaltxt {
  font-size: 0.875rem;
  color: #555b6d;
}
.plateformCon .normaltxt.pdright {
  padding-top: 5px;
}
.plateformCon .listpoints {
  margin-top: 30px;
  padding-left: 70px;
}
.plateformCon .listpoints .normaltxt {
  margin-bottom: 30px;
  padding-left: 10px;
}
.plateformCon .listpoints span.blbullets {
  position: absolute;
  top: 6px;
  left: 0;
  width: 10px;
  height: 10px;
  border-radius: 100%;
  display: inline-block;
  background-color: #0075a2;
}
.btmlinegrey {
  height: 4px;
  width: 540px;
  margin: auto;
}
.buildinnovationboxConrw {
  padding-top: 60px;
}
.buildinnovationConbx .inoiconrw {
  text-align: center;
  margin-bottom: 16px;
}
.buildinnovationConbx .inoiconrw .innoicon {
  width: 50px;
  height: 50px;
  background: url(../images/innovation_icon.png) 0 0/50px 150px no-repeat;
  display: inline-block;
}
.buildinnovationConbx .inoiconrw .innoicon.legacy {
  background-position: 0 0;
  margin-right: 100px;
}
.buildinnovationConbx .inoiconrw .innoicon.improve_developer {
  background-position: 0 -50px;
  margin-right: 10px;
}
.buildinnovationConbx .inoiconrw .innoicon.recoding {
  background-position: 0 -100px;
  margin-right: 40px;
}
.buildinnovationConbx .buildino_nor_text {
  font-size: 1.0625rem;
  color: #555b6d;
}
.devOpsSection {
  padding: 60px 0 30px;
}
.devOpsCon {
  max-width: 820px;
  margin: auto;
  padding-left: 50px;
}
.devOpsCon .devopsimgbx {
  float: left;
  width: 320px;
}
.devOpsCon .devopsconbox {
  position: relative;
  left: -100px;
  margin-left: 340px;
  margin-top: 30px;
  padding: 45px 40px;
  background-color: #0074a3;
  z-index: 1;
}
.devOpsCon .devopsconbox .opstextrw {
  font-size: 0.875rem;
  color: #fff;
}
.header_banner {
  position: relative;
  height: calc(100vh);
  background: url(../images/cloud_ban.jpg) no-repeat #0075a2;
  max-height: 1000px;
  background-size: 100%;
  background-position: center center;
  overflow: hidden;
}
.header_banner .cloud_1 {
  position: absolute;
  top: 100px;
  left: 30px;
  width: 130px;
  display: none;
}
.header_banner .cloud_5 {
  position: absolute;
  bottom: 15%;
  right: 50px;
  width: 150px;
  display: none;
}
.discover_banner .discover_contant_wrap,
.header_banner .header_contant_wrap,
.page_banner .header_contant_wrap {
  position: relative;
  display: flex;
  height: 100%;
  text-align: center;
  align-items: center;
  justify-content: center;
  z-index: 1;
}
.header_banner .inlineform {
  margin: 40px auto auto;
}
.need_busyness_wrap {
  padding: 90px 0 40px;
  margin: 0 auto;
}
.business_card_warp {
  padding: 50px 0;
  position: relative;
}
.business_card_warp .business_image {
  position: absolute;
  bottom: 50px;
  right: 0;
}
.business_card_warp .business_image img {
  width: 300px;
}
.business_card {
  padding: 10px 50px 10px 10px;
}
.business_card .business_icon {
  height: 50px;
}
.business_card .business_icon img {
  width: 40px;
}
.business_card p {
  font-size: 16px;
  color: #555b6d;
  min-height: 140px;
}
.cloud_up_wrap {
  background: #0a71ba;
  padding: 50px 10px;
}
.cloud_up_wrap .readblogrw {
  color: #fff;
  font-size: 24px;
  text-align: center;
  font-family: MaisonNeue-Bold;
}
#cookie-msg,
.certify_wrap p {
  font-family: MaisonNeue-Book;
}
.cloud_up_wrap .readblogrw a {
  color: #fff;
  text-decoration: none;
}
.enterprise_wrap {
  padding: 100px 0 80px;
}
.enterprise_contant_wrap {
  position: relative;
  padding-right: 100px;
}
.certify_wrapper {
  padding: 15px 0;
  margin-left: 100px;
  margin-top: 30px;
}
.certify_wrap {
  float: left;
  margin-right: 20px;
  padding: 25px 20px;
  width: 140px;
  text-align: center;
  border-radius: 4px;
  box-shadow: 0 1px 6px 0 rgba(32, 33, 36, 0.28);
}
.certify_wrap .certify_coin img {
  width: 100px;
  display: inline-block;
}
.certify_wrap .certify_coin {
  height: 120px;
}
.certify_wrap p {
  text-transform: uppercase;
  font-size: 20px;
  font-weight: 700;
  text-align: center;
}
.normaltxts {
  max-width: 860px;
  margin: 0 auto 80px;
  font-size: 16px;
  line-height: 25px;
  color: #555b6d;
  display: table;
}
.advertisement_wrap,
div.leader_person {
  padding: 0 0 80px;
}
.advertisement_wrap .trusted_brands_logo {
  padding-top: 0;
}
.page_banner {
  position: relative;
  background: url(../images/header_banner_principles.png) top center/cover
    no-repeat;
  height: calc(100vh - 50px);
  max-height: 632px;
  z-index: 2;
}
.page_banner .tab_arrow_wrap {
  position: absolute;
  bottom: -120px;
  left: 40%;
}
.page_banner .tab_arrow_wrap img {
  height: 200px;
}
.open_design_wrap {
  position: relative;
  margin-top: 150px;
  z-index: 1;
}
.design_icon img {
  width: 300px;
  display: inline-block;
}
.nav-tabs > li.active > a:focus,
.nav-tabs > li.active > a:hover,
.tab_data_wapper .nav-tabs > li.active > a {
  color: #000;
  cursor: default;
  background-color: #000;
  border: 0 !important;
  font-family: MaisonNeue-Bold;
}
.tab_data_wapper .nav-tabs {
  border: none;
  margin: 0;
  background-color: #fff;
}
.tab_data_wapper .nav-tabs > li {
  padding: 0;
  width: 33.33%;
}
.tabbable-line > .nav-tabs > li > a > i {
  color: #a6a6a6;
}
.tab_data_wapper .nav-tabs > li.active > a,
.tab_data_wapper .nav-tabs > li.active > a:focus,
.tab_data_wapper .nav-tabs > li.active > a:hover {
  color: #2a2d36;
  background-color: transparent;
}
.nav-tabs > li:hover > a > i,
.tab_data_wapper .nav-tabs > li.open > a > i,
div.leader_person .leader_info div.leaderexp span.leadericon a.linkedin {
  color: #0f6fc6;
}
.owl-carousel.designtabs .owl-stage-outer {
  padding: 20px;
}
.tab_data_wapper .designtabs .items {
  margin-right: 36px;
}
.tab_data_wapper .designtabs .items a {
  font-family: MaisonNeue-Bold;
  font-size: 1.1rem;
  padding: 8px 0;
  color: #2a2d36;
  text-align: center;
  display: block;
  text-decoration: none;
  border: 3px solid #fff;
  background-color: #fff;
  -webkit-transition: 0.4s linear;
  transition: 0.4s linear;
}
.erp_card p,
.tab_data_wapper .tab-content .tab_contant_data p {
  font-size: 1.0625rem;
}
#cookie-msg span a,
.covid-alert .covid-alert__para a:hover,
.legal-pcontent .sub-heading-italic {
  text-decoration: underline;
}
#cookie-msg a.btn-aceptar,
.annoucementsliderwr .owl-next,
.annoucementsliderwr .owl-prev,
.tab_data_wapper .nav-tabs > li:focus {
  background-color: transparent;
}
.tab_data_wapper .designtabs .items.design_tabactive a {
  border-bottom: 3px solid #00abc7;
  box-shadow: 0 -2px 15px 4px rgba(32, 33, 36, 0.1);
}
.tab_data_wapper .nav-tabs > li.active > a > i {
  color: #404040;
}
.tab_data_wapper .tab-content {
  margin-top: 15px;
  background-color: #fff;
  border: 0;
  border-top: 0 solid #eee;
  padding: 15px 5px 0;
}
.tab_data_wapper .tab-content .tab_contant_data {
  padding-left: 50px;
  padding-right: 80px;
}
.nav > li > a:focus,
.tab_data_wapper .nav > li > a:hover {
  text-decoration: none;
  background-color: transparent;
}
.tab_data_wapper .nav > li > a {
  position: relative;
  display: block;
  padding: 8px 0;
  margin: 0 10px;
  font-size: 1.125rem;
  text-decoration: none;
  color: #000;
  text-align: center;
  border: 0 solid transparent;
  font-family: MaisonNeue-Bold;
}
.erp_section_wrap,
.have_question_wrap {
  margin: 90px 0;
}
.erp_section_wrap .container {
  width: 970px;
}
.top_arrow {
  margin: 50px auto;
  display: table;
}
.erp_card_wrap .erp_card {
  position: relative;
  padding: 70px 25px 20px;
  background-color: #fff;
  box-shadow: 0 0 20px 8px rgba(0, 0, 0, 0.1);
  z-index: 5;
}
.erp_card_wrap .card_img_rte {
  position: absolute;
  right: -120px;
  bottom: 64px;
  z-index: 1;
}
.erp_card_wrap .card_img_lft {
  position: absolute;
  top: 60px;
  left: -100px;
  z-index: 1;
}
.erp_card_wrap .card_img_lft img,
.erp_card_wrap .card_img_rte img {
  width: 80%;
}
.erp_card p {
  margin-top: 30px;
  min-height: 130px;
}
.discover_banner {
  position: relative;
  background: url(../images/bottom_banner.png) top right/cover no-repeat;
  padding: 60px 0;
  box-sizing: border-box;
  z-index: 2;
}
.discover_banner .discover_contant_wrap .discover_contant .discover_icons ul {
  list-style-type: none;
  margin: 10px auto;
  display: table;
  padding: 0;
}
.discover_banner
  .discover_contant_wrap
  .discover_contant
  .discover_icons
  ul
  li {
  display: inline-block;
  padding: 0 4px;
}
.discover_banner .discover_contant .normaltxt {
  color: #fff;
  max-width: 1340px;
  margin: auto;
}
.learn_more_btn {
  margin: 50px auto 30px;
  text-align: center;
}
.discover_banner .learn_more_btn a {
  margin: 0 30px;
  width: 140px;
}
.have_question_wrap .normaltxt {
  max-width: 860px;
  margin: auto;
}
.have_question_wrap .inlineform {
  margin: 30px auto auto;
}
.owl-next span,
.owl-prev span {
  color: #fff;
  font-size: 15px;
}
.owl-prev {
  left: 0;
}
.owl-next,
.owl-prev {
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
  width: 30px;
  border-radius: 50%;
  height: 30px;
  background: #0000008f;
  border: 0;
  display: flex;
  align-items: center;
  justify-content: center;
}
.owl-next {
  right: 0;
}
.menuviewwrap .menuwrap {
  margin: 0 5px;
  padding: 15px 0 0;
}
.menuviewwrap .menubtmline {
  background: #0f71c6;
  background: -moz-linear-gradient(left, #0f71c6 0, #01a8c8 53%, #0075a2 100%);
  background: -webkit-linear-gradient(
    left,
    #0f71c6 0,
    #01a8c8 53%,
    #0075a2 100%
  );
  background: linear-gradient(to right, #0f71c6 0, #01a8c8 53%, #0075a2 100%);
  height: 5px;
  margin-bottom: 10px;
}
.menuviewwrap .menuwrap ul {
  padding: 0;
  margin: 0 0 20px !important;
}
.menuviewwrap .menuwrap ul li:first-child {
  font-size: 13px;
}
.menuviewwrap .menuwrap ul li a {
  font-size: 15px;
}
.mobile_view_menu {
  padding: 5px 0 15px;
}
.mobile_view_menu ul li a {
  font-size: 16px;
  color: #555b6d;
  padding: 5px 0;
  display: block;
}
.menuviewwrap {
  position: fixed;
  top: 64px;
  width: 0;
  bottom: 0;
  z-index: 99997;
  right: -100%;
  -webkit-transition: 0.4s linear;
  -moz-transition: 0.4s linear;
  -o-transition: 0.4s linear;
  -ms-transition: 0.4s linear;
  transition: 0.4s linear;
  background-color: #fff;
  display: none;
  max-width: 100%;
  overflow: hidden;
  overflow-y: auto;
}
html.sidePanel .menuviewwrap {
  width: 100%;
  right: 0;
}
#nav-icon1 {
  float: right;
  width: 32px;
  height: 24px;
  position: relative;
  -webkit-transform: rotate(0);
  -moz-transform: rotate(0);
  -o-transform: rotate(0);
  transform: rotate(0);
  -webkit-transition: 0.5s ease-in-out;
  -moz-transition: 0.5s ease-in-out;
  -o-transition: 0.5s ease-in-out;
  transition: 0.5s ease-in-out;
  cursor: pointer;
  display: none;
}
#nav-icon1 span {
  display: block;
  position: absolute;
  height: 3px;
  width: 100%;
  background: #545b6d;
  border-radius: 9px;
  opacity: 1;
  left: 0;
  -webkit-transform: rotate(0);
  -moz-transform: rotate(0);
  -o-transform: rotate(0);
  transform: rotate(0);
  -webkit-transition: 0.25s ease-in-out;
  -moz-transition: 0.25s ease-in-out;
  -o-transition: 0.25s ease-in-out;
  transition: 0.25s ease-in-out;
}
#nav-icon1 span:first-child {
  top: 0;
}
#nav-icon1 span:nth-child(2) {
  top: 10px;
}
#nav-icon1 span:nth-child(3) {
  top: 20px;
}
#nav-icon1.open span:first-child {
  top: 10px;
  -webkit-transform: rotate(135deg);
  -moz-transform: rotate(135deg);
  -o-transform: rotate(135deg);
  transform: rotate(135deg);
}
#nav-icon1.open span:nth-child(2) {
  opacity: 0;
  left: -60px;
}
#nav-icon1.open span:nth-child(3) {
  top: 10px;
  -webkit-transform: rotate(-135deg);
  -moz-transform: rotate(-135deg);
  -o-transform: rotate(-135deg);
  transform: rotate(-135deg);
}
.innerwidth_section,
.section_width {
  padding: 0 80px;
  display: inline-block;
  width: 100%;
}
section.newsroom .newsroomcarousel {
  display: inline-block;
  width: 100%;
  margin-top: 50px;
}
div.lettalk,
section.newsroom .item {
  margin: 60px 0;
}
section.newsroom .newsroominfo {
  text-align: center;
  padding: 20px 0;
}
section.newsroom .owl-carousel .owl-item.center .item {
  box-shadow: 0 0 20px 8px rgba(0, 0, 0, 0.1);
  -webkit-transform: scale(1, 1);
  transform: scale(1.1, 1.1);
  position: relative;
  z-index: 1;
}
.fit-mid,
section.video_section .videoplaybtn,
section.video_section video {
  transform: translate(-50%, -50%);
  left: 50%;
}
.newsroomimg {
  height: 240px;
  background-position: center center !important;
  background-size: cover !important;
}
section.newsroom .newsroomcontent {
  font-size: 1rem;
  color: #555b6d;
  max-width: 70%;
  margin: auto auto 20px;
}
section.newsroom .cmsbtns_style {
  min-width: 174px;
  text-align: center;
  margin-top: 20px;
  display: none;
}
section.newsroom .newsroominfo span.datenewsroom {
  display: block;
  width: 100%;
  font-size: 1rem;
  color: #555b6d;
  margin-bottom: 13px;
}
section.newsroom .newsroominfo a {
  opacity: 0;
  -webkit-transition: 0.4s linear;
  transition: 0.4s linear;
}
.covid-alert .alert-dismissible .close:hover,
.is-expanded .pglead_ld-expander,
section.newsroom .owl-carousel .owl-item.center .item .newsroominfo a {
  opacity: 1;
}
section.annoucement #annoucementslider .owl-dots,
section.newsroom #newroomslider .owl-dots {
  text-align: center;
  margin-top: 0;
  position: relative;
}
section.annoucement #annoucementslider .owl-dot,
section.newsroom #newroomslider .owl-dot {
  display: inline-flex;
}
section.annoucement #annoucementslider .owl-dot span,
section.newsroom #newroomslider .owl-dot span {
  display: inline-block;
  background-color: #e0e0e0;
  opacity: 0.502;
  border-radius: 50%;
}
section.annoucement #annoucementslider .owl-dot.active span,
section.newsroom #newroomslider .owl-dot.active span {
  opacity: 1;
  background-color: #00abc7;
}
section.annoucement,
section.awards {
  margin: 100px 0;
  display: inline-block;
  width: 100%;
}
section.newsroom {
  margin-top: 100px;
  display: inline-block;
  width: 100%;
}
section.news {
  padding: 80px 0;
  display: inline-block;
  width: 100%;
}
section.annoucement .heading_div span.annoucement_icon,
section.awards .heading_div span.award_icon,
section.news .heading_div span.news_icon {
  width: 40px;
  height: 40px;
  position: relative;
  background: url(../images/icons/sprite.png) 0 0/40px 160px;
  display: block;
  margin: 0 auto 20px;
}
section.annoucement .heading_div span.annoucement_icon {
  background-position: 0 0;
}
section.news .heading_div h3 {
  margin-bottom: 50px;
}
section.annoucement .upperdiv .annoucement_rt,
section.news .upperdiv .news_rt {
  padding: 40px 50px;
}
.banner-l-cntnr__img,
.cstm-row__flex,
section.annoucement .upperdiv .annoucement_div,
section.news .upperdiv .news_div,
section.resources .flexdiv {
  display: flex;
  align-items: center;
}
.morelikethis .annoucement_div,
section.annoucement .bottomdiv .annoucement_div,
section.news .bottomdiv .news_div {
  padding: 45px 30px;
  text-align: center;
  flex-direction: column;
  align-items: center;
}
.morelikethis .annoucement_div h3,
section.annoucement .bottomdiv .annoucement_div h3,
section.news .bottomdiv .news_div h3 {
  margin: 30px 0 20px;
}
section.annoucement .bottomdiv .annoucement_div h3,
section.news .bottomdiv .news_div h3 {
  width: 100%;
  min-height: 100px;
}
section.annoucement .bottomdiv .pd10,
section.news .bottomdiv .pd10 {
  padding: 0 10px;
}
section.annoucement .bottomdiv,
section.news .bottomdiv {
  margin: 0 -10px;
  display: flex;
}
.annoucement_div .annoucement_lt {
  background: #f3f3f5;
  padding: 20px;
  display: flex;
  align-items: center;
  justify-content: center;
  min-height: 260px;
}
.news_div .news_lt {
  background: #0f6fc6;
  padding: 20px;
  display: flex;
  align-items: center;
  justify-content: center;
  min-height: 260px;
}
.news_div .news_lt img {
  width: 200px;
  height: auto;
}
.annoucement_div .annoucement_lt img {
  width: 134px;
  height: auto;
}
.annoucement_div,
.news_div {
  display: flex;
  width: 100%;
  border-radius: 3px;
  box-shadow: 0 0 6px 0 rgba(0, 0, 0, 0.1);
  background-color: #fff;
}
.annoucement_div {
  box-shadow: 0 0 8px 0 rgba(0, 0, 0, 0.25);
}
.annoucement_div span.date,
.news_div span.date {
  display: block;
  width: 100%;
}
.annoucement_div h3,
.news_div h3 {
  color: #2a2d36;
  font-size: 1.2rem;
  margin: 20px 0;
}
section.news .upperdiv.news_div h3 {
  margin: 30px 0 60px;
}
.annoucement_div p,
section.different p.membername {
  font-size: 1rem;
}
.annoucementsliderwr {
  display: inline-block;
  width: 100%;
}
@media (min-width: 786px) {
  .annoucementsliderwr {
    margin-bottom: 50px;
  }
}
.annouce_sliderwrinner {
  padding: 20px 10px;
  display: inline-block;
  width: 100%;
}
section.awards img {
  width: 130px;
}
section.awards .awardswr {
  padding: 50px 0;
  max-width: 760px;
  margin: auto;
}
section.awards .awardswr_bottomrow {
  display: flex;
  justify-content: space-around;
  align-items: center;
  margin-top: 40px;
}
section.awards .awardswr_upperrow {
  display: flex;
  justify-content: space-between;
  align-items: center;
}
section.awards .email_div h4 {
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 18px;
  color: #2a2d36;
}
section.awards .email_div h4 a {
  color: #2a2d36;
}
section.awards .email_div span.email {
  width: 40px;
  height: 40px;
  position: relative;
  background: url(../images/icons/sprite.png) 0 -122px/40px 160px;
  display: inline-block;
  margin-right: 10px;
}
#annoucementslider.owl-theme .owl-next,
#annoucementslider.owl-theme .owl-prev {
  cursor: pointer;
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
}
#annoucementslider.owl-theme .owl-next {
  right: -50px;
}
#annoucementslider.owl-theme .owl-prev {
  left: -50px;
}
#annoucementslider.owl-theme .owl-next i,
#annoucementslider.owl-theme .owl-prev i {
  font-size: 42px;
  color: #555b6d;
}
section.pr_anouncement {
  margin: 60px 0;
  display: inline-block;
  width: 100%;
}
section.pr_anouncement .pr_announcementinfo > span {
  font: 15px MaisonNeue-Book;
  color: #0075a2;
}
section.pr_anouncement .pr_announcementinfo h1 {
  color: #2a2d36;
  font: 47px/55px MaisonNeue-Bold;
  margin: 20px 0;
}
section.pr_anouncement .pr_announcementinfo p {
  font: 17px/24px MaisonNeue-Book;
  color: #555b6d;
  margin-bottom: 30px;
}
section.pr_anouncement .pr_announcementinfo {
  max-width: 450px;
}
section.pr_anouncement .pr_announcementinfo span.date {
  display: block;
  width: 100%;
  font: 16px MaisonNeue-Book;
  color: #555b6d;
}
div.content .displayflex {
  display: flex;
  align-items: center;
  margin: 0;
}
div.content .content_img {
  max-width: 300px;
}
div.content .content_img .content_img_inner {
  display: inline-block;
  width: 100%;
  min-height: 250px;
}
div.content .content_img span,
div.content .content_text p {
  margin-bottom: 30px;
  color: #555b6d;
}
div.content .content_text p b {
  font-family: MaisonNeue-Bold;
}
div.content .content_socialicons {
  display: table;
  margin: 20px auto;
}
div.content .content_socialicons a {
  width: 40px;
  height: 40px;
  border-radius: 50%;
  position: relative;
  display: table;
  text-align: center;
  -webkit-transition: 0.4s linear;
  transition: 0.4s linear;
  background: #00acc8;
  color: #fff;
  float: left;
  margin-right: 10px;
}
.pglead_ld-item,
.pglead_ldcard {
  transition: 0.2s ease-in-out;
  width: 100%;
}
div.content .content_socialicons a i {
  display: table-cell;
  vertical-align: middle;
  font-size: 21px;
}
div.content .content_socialicons a:hover {
  transform: rotate(360deg);
}
#morelikethis_slider .owl-stage {
  padding-left: 0 !important;
}
section.morelikethis {
  padding: 60px 0;
}
section.morelikethis h3.headingh {
  color: #2a2d36;
  font: 27px MaisonNeue-Bold;
  margin: 0;
}
section.morelikethis .annoucement_div {
  margin: 40px 0;
}
section.morelikethis .owl-carousel .owl-stage-outer {
  height: calc(100% + 30px);
  margin: -15px;
  padding: 0 15px;
  width: calc(100% + 30px);
}
div.lettalk .letstalkinner {
  max-width: 500px;
  margin: 0 auto;
  text-align: center;
  padding: 50px 0;
}
div.lettalk .letstalkinner .cmsbtns_style {
  min-width: 150px;
}
div.lettalk .letstalkinner p {
  font: 18px/29px MaisonNeue-Book;
  margin-bottom: 30px;
}
.header_stip {
  background: #0075a2;
  color: #fff;
  font-size: 15px;
  padding: 15px 30px;
  text-align: center;
  position: relative;
}
.header_stip .closeStip {
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
  right: 15px;
  font-size: 23px;
  color: #fff;
}
.getmainconbx .getconbx {
  background: url("https://odessainc.com/blog/wp-content/uploads/2020/07/Odessa-DevOps-resource.svg")
    no-repeat;
}
.getmainconbx .bluebg {
  background: url("https://odessainc.com/blog/wp-content/uploads/2020/06/Odessa-APAC-resource.svg")
    no-repeat;
}
section.video_section .videoplaybtn {
  position: absolute;
  top: 50%;
  text-align: center;
  cursor: pointer;
  overflow: hidden;
}
section.video_section .videoplaybtn .wistia_embed {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  opacity: 0;
}
section.video_section .videoplaybtn span {
  color: #fff;
  font-size: 15px;
  display: block;
}
section.video_section .videoplaybtn img {
  width: 70px;
  min-width: 70px;
  height: 70px;
  min-height: 70px;
  margin-bottom: 10px;
}
section.video_section {
  height: calc(100vh - 120px);
  overflow: hidden;
  position: relative;
}
section.video_section video {
  position: absolute;
  min-width: 100%;
  min-height: 100%;
  width: auto;
  height: auto;
  top: 50%;
}
section.video_section .videosectiondiv {
  background-color: rgba(17, 170, 197, 0.6509803921568628);
  position: absolute;
  width: 100%;
  height: 100%;
  z-index: 1;
}
section.different {
  padding: 80px 0 100px;
}
section.different .different_Img {
  width: 56%;
  position: absolute;
  bottom: -120px;
  right: 0;
}
section.different h2 {
  font-family: MaisonNeue-Bold;
  color: #2a2d36;
  margin: 0 0 30px;
}
section.different .membername {
  display: inline-block;
  color: #555b6d;
}
section.different .membername span {
  font-size: 0.8rem;
  display: block;
}
section.different p.membername.jay {
  text-align: right;
  position: absolute;
  bottom: 61px;
  left: -132px;
}
section.different p.membername.madhu {
  text-align: left;
  position: absolute;
  bottom: 270px;
  right: -30px;
}
section.focused {
  position: relative;
  padding: 60px 0;
}
section.focused:after {
  content: "";
  position: absolute;
  width: 50%;
  height: 100%;
  right: 0;
  top: 0;
  background: #00abc7;
  z-index: -1;
}
section.focused .count_number p {
  line-height: 1.3;
  margin: 0;
}
section.focused .count_number {
  display: flex;
  align-items: center;
  justify-content: flex-start;
  margin-bottom: 15px;
}
section.focused .count_number .count_numdiv {
  min-width: 117px;
  text-align: right;
  padding-right: 20px;
}
section.focused .count_number .count_numdiv.extra-padding {
  padding-left: 34px;
}
section.focused .count_number .count_numdiv img {
  height: 60px;
  min-height: 60px;
}
section.focused .focused_txt {
  display: flex;
  height: 100%;
  align-items: center;
  padding-left: 30px;
}
section.focused .focusedinner {
  display: flex;
  position: relative;
}
section.tiles .tilescontent {
  box-shadow: 0 5px 15px rgba(0, 0, 0, 0.22);
  height: 100%;
  padding: 40px;
}
.tp_page p,
section.tiles .tilescontent p {
  margin-bottom: 25px;
}
div.leader_person .memberwrapperdiv .memberblock .leaderdivwr,
section.tiles .flexdiv .thirtypad {
  padding: 0 30px;
}
section.tiles .flexdiv {
  display: flex;
}
section.lifeatodessa .container {
  position: relative;
  z-index: 1;
}
section.lifeatodessa {
  background: url(../images/companyimage/pattern.svg) 0 0 / cover no-repeat
    #0075a2;
  padding: 80px 40px;
  position: relative;
  overflow: hidden;
}
section.lifeatodessa h2 {
  margin: 0 0 30px;
}
section.resources {
  background: url(../images/companyimage/Odessa-Sharon-McGarvey-Employee.svg)
    right bottom no-repeat #f5f6f8;
}
section.resources .quotes_img {
  margin-bottom: 45px;
  max-width: 54px;
}
section.resources .memberinfo {
  text-align: right;
  margin-top: 45px;
}
section.resources .memberinfo span {
  display: block;
  font-size: 14px;
}
.barnds_logowr {
  margin: 0 0 80px;
}
.barnds_logowr .brands_logo {
  display: flex;
  align-items: center;
  justify-content: space-between;
  width: 80%;
  margin: 0 auto;
}
.barnds_logowr .brlogo {
  margin: 0;
  flex: 1;
  text-align: center;
}
.barnds_logowr .brlogo img {
  max-width: 90px;
}
.barnds_logowr .brlogo:first-child img,
.barnds_logowr .brlogo:nth-child(5) img {
  max-width: 120px;
}
.barnds_logowr .brlogo:nth-child(3) img,
.barnds_logowr .brlogo:nth-child(6) img {
  max-width: 70px;
}
section.leadership_header {
  padding: 80px 0;
  text-align: center;
}
section.leadership_header p {
  margin: 20px auto;
}
.leadershipmembermodal {
  position: relative;
  display: none;
  margin: 20px 70px 130px;
  float: left;
  padding: 60px 40px;
  border: 1px solid rgba(0, 0, 0, 0.2);
  box-shadow: 0 5px 15px rgba(0, 0, 0, 0.5);
}
.leadershipmembermodal .close {
  position: absolute;
  top: 10px;
  right: 16px;
  font-size: 42px;
  opacity: 1;
  cursor: pointer;
  z-index: 1;
}
.leadershipmembermodal span {
  font-family: MaisonNeue-Bold;
  font-size: 20px;
  color: #2a2d36;
  margin-bottom: 15px;
  display: inline-block;
  width: 100%;
}
div.leader_person .leaderdivwr {
  cursor: pointer;
  margin-bottom: 40px;
  text-align: center;
}
div.leader_person .displayflex {
  display: flex;
  flex-flow: wrap;
  margin: 0 -40px;
}
div.leader_person .leader_img {
  margin-bottom: 15px;
  text-align: center;
}
div.leader_person .leader_info div.leadername {
  color: #555b6d;
  font-weight: 700;
}
div.leader_person .leader_info div.leaderdeg,
div.leader_person .leader_info div.leadername {
  font-size: 18px;
}
div.leader_person .leader_info div.leaderexp {
  color: #0075a2;
  font-size: 15px;
  margin-top: 10px;
}
div.leader_person .leader_info div.leaderexp span.leadericon a i {
  font-size: 19px;
  margin-left: 10px;
}
div.leader_person .leader_info div.leaderexp span.leadericon a.twitter {
  color: #00abc7;
}
section.innovate_section {
  padding: 80px 0;
  background: url(../images/innovatebg.jpg) top right/cover no-repeat;
}
section.innovate_section h2 {
  margin: 0 0 30px;
  text-align: left;
}
section.innovate_section p {
  text-align: left;
  margin-bottom: 35px;
}
section.innovate_section .btns_style:hover {
  border-color: #fff;
  color: #fff;
}
.legal-ppnavlist a,
.legal-ppnavtitle {
  border-left: 5px solid #f3f3f5;
  font: 0.9rem MaisonNeue-Book;
  color: #555b6d;
}
.team_member_position .team_member_box .teammemberscaleview span {
  height: 100%;
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  opacity: 0;
  z-index: 2;
}
#companyvideoplay .modal-dialog,
.legal-pcontent table.big-table th:nth-child(5) {
  width: 50%;
}
.companypg {
  position: relative;
  height: 100%;
}
#companyvideoplay .modal-content {
  background: 0 0;
  box-shadow: none;
  border: 0;
}
.thankyoupage .letstalkformCon {
  background: 0 0;
}
.thankyoupage .letstalkform {
  padding: 90px 50px;
}
.covid-alert .alert,
.thankyoupage .letstalkform h3:last-of-type {
  margin-bottom: 0;
}
.legal-pcontent .sub-heading,
.legal-pcontent .sub-heading-italic {
  margin: 0 10px 0 15px;
  font-weight: 700;
  color: #2a2d36;
}
.secnformCon_wr {
  background: #3f4f61;
  padding: 40px 0;
  margin-top: 40px;
  margin-bottom: 25px;
}
.secnformCon_inner,
.v-center {
  display: flex;
  justify-content: center;
  align-items: center;
}
.secnformCon_inner p {
  padding: 0 !important;
  margin: 0 40px 0 0;
}
.custom_containerwidth,
.tp_page {
  width: 90%;
  margin: 0 auto;
}
.navbar-default.sticky-header {
  background: #fff;
  box-shadow: 0 0 10px 0 rgba(0, 0, 0, 0.15);
}
.navbar-default.sticky-header .navbar-brand {
  background: url(../images/logo.png) 0 0/100% no-repeat;
}
.navbar-default.sticky-header .navbar-nav > .open > a,
.navbar-default.sticky-header .navbar-nav > .open > a:focus,
.navbar-default.sticky-header .navbar-nav > .open > a:hover,
.navbar-default.sticky-header .navbar-nav > li:active > a,
.navbar-default.sticky-header .navbar-nav > li:hover > a,
.navbar-default.sticky-header .navbar-nav > li > a,
.navbar-default.sticky-header .navbar-nav > li > a:focus {
  color: #545b6d;
}
.navbar-default.sticky-header #nav-icon1 span {
  background-color: #545b6d;
}
.chained-delay:first-child {
  transition-delay: 0.25s;
}
.chained-delay:nth-child(2) {
  transition-delay: 0.5s;
}
.chained-delay:nth-child(3) {
  transition-delay: 0.75s;
}
.chained-delay:nth-child(4) {
  transition-delay: 1s;
}
.chained-delay:nth-child(5) {
  transition-delay: 1.25s;
}
.chained-delay:nth-child(6) {
  transition-delay: 1.5s;
}
.chained-delay:nth-child(7) {
  transition-delay: 1.75s;
}
.chained-delay:nth-child(8) {
  transition-delay: 2s;
}
.chained-delay:nth-child(9) {
  transition-delay: 2.25s;
}
.chained-delay:nth-child(10) {
  transition-delay: 2.5s;
}
.legal-page {
  margin: 0 auto;
  padding-bottom: 80px;
}
.legal-pheader {
  padding: 80px 0 50px;
}
.legal-phicon {
  width: 70px;
  height: 70px;
  position: relative;
  background: url(../images/pticons.png) 0 -70px/70px 140px;
  display: block;
  margin: 0 auto;
}
.legal-ppost {
  display: table;
}
.legal-ppnav {
  display: none;
  width: 28%;
  top: 90px;
}
.legal-ppnav__inner.sticky {
  position: fixed;
  top: 100px;
  width: 25%;
}
.legal-ppnavtitle {
  padding: 0 10px 10px;
}
.legal-ppnavlist,
.pr-header .container {
  max-width: 80%;
}
.legal-ppnavlist a {
  padding: 10px;
  display: block;
}
.legal-ppnavlist a.active,
.legal-ppnavlist a:hover {
  border-left: 5px solid #00abc7;
  background: #b7e3eb;
}
.legal-ppnavlist a.active,
.legal-ppnavlist a:focus,
.legal-ppnavlist a:hover {
  outline: 0;
  text-decoration: none;
}
.legal-ppcontent {
  display: table-cell;
}
.legal-pcontent .highlight {
  color: #2a2d36;
  font-weight: 700;
}
.legal-pcontent p {
  font-size: 17px;
}
.legal-pcontent .inner {
  margin-left: 25px;
}
.legal-pcontent .inner p i {
  color: #2a2d36;
  margin-right: 5px;
  font-style: normal;
}
.legal-page--privacy,
.legal-page--terms {
  width: 90%;
}
.legal-page--terms .legal-phicon {
  background-position: 70px 140px;
}
.legal-page--privacy .legal-pcontent h3,
.legal-page--terms .legal-pcontent h3 {
  margin: 40px 0 15px;
}
.legal-pcontent h4 {
  margin: 30px 0 15px;
}
.legal-pcontent ul {
  list-style: none;
  margin-bottom: 20px;
}
.legal-pcontent li {
  color: #555b6d;
  margin-bottom: 5px;
  font-size: 17px;
}
.legal-pcontent .table-holder {
  overflow-y: scroll;
}
.legal-pcontent .big-table {
  min-width: 600px;
}
.legal-pcontent table {
  width: 100%;
  border-collapse: collapse;
  margin: 20px 0;
  font-size: 0.9em;
}
.legal-pcontent table td,
.legal-pcontent table th {
  padding: 10px 15px;
  border: 1px solid #ccc;
  text-align: left;
  font-size: 13px;
  font-weight: 300;
  vertical-align: top;
}
.legal-pcontent table th {
  background: #333;
  color: #fff;
  font-weight: 700;
}
.legal-pcontent table.big-table th:first-child,
.legal-pcontent table.big-table th:nth-child(3),
.legal-pcontent table.big-table th:nth-child(4) {
  width: 10%;
}
.legal-pcontent table.big-table th:nth-child(2) {
  width: 15%;
}
.scroll-hide {
  overflow: hidden;
  height: 100%;
  min-height: 100%;
}
.cm-menu {
  display: flex;
  align-items: center;
  justify-content: space-between;
  max-width: none;
}
.cm-menu .navbar-brand {
  margin-top: 7px;
}
.cm-menu .navbar-nav > li > a {
  line-height: normal;
  height: 45px;
  padding: 0 20px;
  font-size: 14px;
  margin-left: 40px;
  margin-right: 0;
  display: flex;
}
.cm-menu .navbar-nav > li > a:active,
.cm-menu .navbar-nav > li > a:focus,
.cm-menu .navbar-nav > li > a:hover {
  color: #fff;
  background: #00acc8;
  border-color: #00acc8;
}
.cm-menu .cm-menu__r .cm-menu__r-imgsize {
  height: 45px;
  width: 45px;
}
.bg-blue {
  background-color: #3f7ab8;
}
.bg-alert {
  background-color: #0076a4;
}
.bg-grad {
  background-image: linear-gradient(to right, #3f7ab8, #81bee7, #81bee7);
}
.full-h {
  height: 100vh;
}
.fit-mid {
  width: 100%;
  margin-top: 4px;
  overflow: hidden;
  position: absolute;
  top: 50%;
  max-width: none;
}
#cookie-msg,
.footer {
  position: fixed;
  width: 100%;
}
.banner-l-cntnr .home-hero-ctitlewrap {
  position: relative;
  width: 100%;
  top: 50%;
  left: 50%;
  transform: translate(-50%, 70%);
}
.banner-l-cntnr__img .img--size-1,
.banner-l-cntnr__img .img--size-2 {
  height: 45px;
  width: auto;
}
.cross {
  font-size: 45px;
  color: #fff;
  padding: 0 20px;
  font-weight: 400;
  margin-bottom: 0;
}
.banner-r-cntnr__img img {
  height: 614px;
}
.footer {
  background: 0 0;
  padding: 10px 0 0;
  left: 0;
  bottom: 0;
  display: flex;
  justify-content: space-between;
  flex-wrap: wrap;
}
.footer p {
  color: #2d2d2d;
  font-size: 0.7rem;
}
.resource-dtl__ptxt {
  font-size: 14px;
}
.resource-dtl__link {
  margin-bottom: 0;
  font-size: 14px;
}
.resource-dtl__link a {
  color: inherit;
  display: block;
  word-break: break-all;
}
.resource-dtl__link a:active,
.resource-dtl__link a:hover {
  color: #00acc8;
}
.resource-bg {
  background: url(../images/covid-help/odessa-heart-india.svg) right
    bottom/402px 634px no-repeat;
  display: block;
  margin: 0 auto;
}
.covid-alert .alert-dismissible .close {
  top: -5px;
  text-shadow: none;
  color: #fff;
  opacity: 1;
  font-size: 35px;
  right: 81rem;
  font-weight: 400;
  font-family: MaisonNeue-light;
}
.covid-alert .covid-alert__para {
  font-size: 16px;
  color: #fff;
  font-family: MaisonNeue-Book;
}
.covid-alert .covid-alert__para a {
  letter-spacing: 1px;
  color: #fff;
}
@media only screen and (min-width: 340px) and (max-width: 767px) {
  #wrapper {
    margin: 60px auto auto;
  }
  .banner-l-cntnr__img .img--size-1,
  .banner-l-cntnr__img .img--size-2 {
    height: 35px;
    width: auto;
  }
  .fit-mid,
  .footer {
    position: relative;
  }
  .navbar_wrapper {
    padding-bottom: 16px;
  }
  .scroll-hide {
    overflow: auto;
  }
  .cm-menu .navbar-nav {
    float: right;
  }
  .banner-r-cntnr__img img {
    height: 483px;
  }
  .footer {
    background: #fff;
    padding: 40px 0 20px;
  }
  .footer p {
    padding-top: 5rem;
  }
  .banner-l-cntnr .home-hero-ctitle {
    font-size: 3.2rem;
  }
  .banner-l-cntnr .home-hero-ctitlewrap {
    top: 40px;
    left: auto;
    transform: none;
    margin-bottom: 48px;
  }
  .cross {
    font-size: 25px;
  }
  .fit-mid {
    background-color: #3f7ab8;
    background-image: linear-gradient(to right, #3f7ab8, #81bee7, #81bee7);
    top: 0;
    margin-top: 64px;
    transform: none;
    left: auto;
  }
  .resource-bg {
    background: 0 0;
  }
  .cm-menu .navbar-brand {
    margin-top: 16px;
  }
  .covid-alert .alert-dismissible .close {
    right: 81rem;
  }
  .covid-alert .covid-alert__para {
    font-size: 14px;
  }
}
@media only screen and (min-width: 768px) and (max-width: 1023px) {
  .scroll-hide {
    overflow: auto;
  }
  .banner-l-cntnr .home-hero-ctitle {
    font-size: 3rem;
  }
  .banner-l-cntnr__img .img--size-1 {
    height: 35px;
  }
  .banner-l-cntnr__img .img--size-2 {
    height: 50px;
  }
  .fit-mid {
    background-color: #3f7ab8;
    background-image: linear-gradient(to right, #3f7ab8, #81bee7, #81bee7);
  }
  .footer {
    padding: 40px 0 20px;
  }
  .footer p {
    padding-top: 2rem;
  }
  .resource-bg {
    background: 0 0;
  }
  .cm-menu .navbar-brand {
    margin-top: 7px;
  }
  .covid-alert .alert-dismissible .close {
    right: 81rem;
  }
}
.pr-header,
.pr-list .container {
  margin-top: 40px;
}
@media only screen and (min-width: 1024px) and (max-width: 1199px) {
  .banner-l-cntnr .home-hero-ctitle {
    font-size: 3.6rem;
  }
  .banner-l-cntnr__img .img--size-1 {
    height: 35px;
  }
  .banner-l-cntnr__img .img--size-2 {
    height: 50px;
  }
  .banner-l-cntnr .home-hero-ctitlewrap {
    transform: translate(-50%, 55%);
  }
  .covid-alert .alert-dismissible .close {
    right: 81rem;
  }
}
@media only screen and (min-width: 1700px) and (max-width: 2300px) {
  .banner-r-cntnr__img img {
    height: 695px;
  }
}
@media only screen and (min-width: 2304px) and (max-width: 3200px) {
  .banner-r-cntnr__img img {
    height: 985px;
  }
  .covid-alert .alert-dismissible .close {
    right: 81rem;
  }
}
@media (min-width: 75em) {
  .banner-l-cntnr .home-hero-ctitle {
    line-height: 1;
    font-size: 4rem;
  }
}
.banner-l-cntnr .home-hero-ctitle {
  letter-spacing: 1px;
  line-height: 1.2;
  -webkit-font-smoothing: antialiased;
}
.l-text--container {
  position: relative;
  top: 7%;
  left: 38px;
}
#slider-1-slide-10-layer-18,
#slider-1-slide-112-layer-18,
#slider-1-slide-113-layer-18 {
  font-size: 1.2rem !important;
  line-height: 1.1 !important;
}
#slider-1-slide-10-layer-19,
#slider-1-slide-112-layer-19,
#slider-1-slide-113-layer-19 {
  font-size: 20px !important;
  line-height: 1.5 !important;
  color: #555b6d !important;
}
#rev_slider_1_1_wrapper #slider-1-slide-10-layer-21,
#rev_slider_1_1_wrapper #slider-1-slide-10-layer-29,
#rev_slider_1_1_wrapper #slider-1-slide-112-layer-21,
#rev_slider_1_1_wrapper #slider-1-slide-112-layer-29,
#rev_slider_1_1_wrapper #slider-1-slide-113-layer-21,
#rev_slider_1_1_wrapper #slider-1-slide-113-layer-29 {
  line-height: 1 !important;
  font-size: 4rem !important;
  letter-spacing: 0 !important;
}
@media only screen and (min-width: 768px) and (max-width: 1366px) {
  .l-text--container {
    position: relative;
    top: 106px;
    left: 15px;
  }
  #slider-1-slide-10-layer-18,
  #slider-1-slide-112-layer-18,
  #slider-1-slide-113-layer-18 {
    font-size: 1rem !important;
    line-height: 1.1 !important;
  }
  #slider-1-slide-10-layer-19,
  #slider-1-slide-112-layer-19,
  #slider-1-slide-113-layer-19 {
    font-size: 15px !important;
    line-height: 1.5 !important;
    top: -5px;
  }
  #slider-1-slide-10-layer-29,
  #slider-1-slide-112-layer-29,
  #slider-1-slide-113-layer-29 {
    top: -4px;
  }
  #rev_slider_1_1_wrapper #slider-1-slide-10-layer-21,
  #rev_slider_1_1_wrapper #slider-1-slide-10-layer-29,
  #rev_slider_1_1_wrapper #slider-1-slide-112-layer-21,
  #rev_slider_1_1_wrapper #slider-1-slide-112-layer-29,
  #rev_slider_1_1_wrapper #slider-1-slide-113-layer-21,
  #rev_slider_1_1_wrapper #slider-1-slide-113-layer-29 {
    letter-spacing: 1px !important;
    line-height: 1.2 !important;
    font-size: 2.6rem !important;
  }
  #slider-1-slide-1-layer-24 {
    top: 0;
  }
}
@media only screen and (min-width: 340px) and (max-width: 767px) {
  .l-text--container {
    position: inherit;
    top: 0;
    left: 0;
  }
  #slider-1-slide-10-layer-18,
  #slider-1-slide-112-layer-18,
  #slider-1-slide-113-layer-18 {
    font-size: 1rem !important;
    line-height: 1.1 !important;
  }
  #slider-1-slide-10-layer-29,
  #slider-1-slide-112-layer-29,
  #slider-1-slide-113-layer-29 {
    top: -4px;
  }
  #rev_slider_1_1_wrapper #slider-1-slide-10-layer-21,
  #rev_slider_1_1_wrapper #slider-1-slide-10-layer-29,
  #rev_slider_1_1_wrapper #slider-1-slide-112-layer-21,
  #rev_slider_1_1_wrapper #slider-1-slide-112-layer-29,
  #rev_slider_1_1_wrapper #slider-1-slide-113-layer-21,
  #rev_slider_1_1_wrapper #slider-1-slide-113-layer-29 {
    letter-spacing: 1px !important;
    line-height: 1.2 !important;
    font-size: 1.8rem !important;
  }
}
@media only screen and (min-width: 496px) and (max-width: 767px) {
  #slider-1-slide-10-layer-19,
  #slider-1-slide-112-layer-19,
  #slider-1-slide-113-layer-19 {
    font-size: 15px !important;
    line-height: 1.5 !important;
    top: -5px;
  }
  #slider-1-slide-1-layer-24 {
    top: 0;
  }
}
@media only screen and (min-width: 340px) and (max-width: 495px) {
  #slider-1-slide-10-layer-19 {
    font-size: 15px !important;
    line-height: 1.5 !important;
    top: -15px;
  }
  #slider-1-slide-112-layer-19,
  #slider-1-slide-113-layer-19 {
    font-size: 15px !important;
    line-height: 1.5 !important;
    top: -5px;
  }
  #slider-1-slide-1-layer-24 {
    top: -10px;
  }
}
.googletagmanager {
  display: none;
}
#cookie-msg {
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  bottom: -100%;
  text-align: center;
  padding: 20px;
  background-color: #89d4e1;
  transition: 0.3s ease-out;
  color: #2a2d36;
  font-size: 15px;
  z-index: 99999;
}
#cookie-msg span a {
  color: #2a2d36;
}
#cookie-msg a.btn-aceptar {
  color: #2a2d36;
  text-decoration: none;
  padding: 8px 0;
  margin: 15px 0 0;
  border: 2px solid #0075a2;
  border-radius: 0;
  font-size: 15px;
  min-width: 120px;
  display: inline-block;
}
@media only screen and (min-width: 767px) {
  .cloudserverCon .nextrw span {
    display: inline-block;
    font-size: 16px;
  }
  #cookie-msg {
    flex-direction: row;
    font-size: 16px;
  }
  #cookie-msg a.btn-aceptar {
    margin: 0 0 0 20px;
    min-width: 150px;
  }
}
.pr-header {
  background: #00abc8;
  padding: 50px 0;
}
.pr-header-widget {
  display: flex;
  align-items: center;
  background: #fff;
  padding: 40px;
  margin: 10px 0;
  border-radius: 2px;
  -webkit-border-radius: 2px;
  -moz-border-radius: 2px;
}
.pr-header-wicon {
  margin-right: 20px;
  width: 40px;
  height: 40px;
}
.pr-header-wtitle {
  color: #2a2d36;
  font-weight: 500;
  font-family: MaisonNeue-Bold;
  font-size: 17px;
  margin-bottom: 5px;
}
.pr-list-htop {
  display: none;
  margin-bottom: 5px;
}
.pr-list-hbot {
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
}
.pr-list-hbfilter span {
  color: #555b6d;
  font-size: 13px;
  margin-right: 15px;
  padding-right: 15px;
  border-right: 1px solid #555b6d;
}
.pr-list-hbfselect,
.pr-list-hbfselect:focus,
.pr-list-hbfselect:hover {
  -webkit-appearance: none;
  -moz-appearance: none;
  appearance: none;
  outline: 0;
  border: none;
  color: #555b6d;
  min-width: 55px;
  background: url("../images/filter_arrow.png") center right/12px no-repeat;
  font-family: MaisonNeue-Book, Helvetica, Arial, sans-serif;
}
.pr-list-cgtitle {
  color: #555b6d;
  margin-bottom: 20px;
  font-size: 20px;
}
.pr-list-cglitem {
  display: block;
  margin-bottom: 40px;
}
.pr-list-cglidate {
  color: #555b6d;
  font-size: 13px;
}
.pr-list-cglititle {
  color: #2a2d36;
  font-weight: 500;
  font-family: MaisonNeue-Bold;
  font-size: 18px;
  margin-bottom: 10px;
}
.pr-list-cglitext {
  color: #555b6d;
  font-size: 16px;
}
.home-hero {
  width: 100%;
  height: 100vh;
  overflow: hidden;
  position: relative;
}
.home-hero-bggrad,
.home-hero-content {
  position: absolute;
  width: 100%;
  height: 100%;
}
.home-hero-bg {
  z-index: 10;
  height: 100%;
}
.home-hero-bgimg img {
  width: 100%;
  height: 90%;
  object-fit: cover;
  object-position: center center;
}
.home-hero-bggrad {
  background: linear-gradient(0deg, #77cdd1 28%, rgba(119, 205, 209, 0.3) 65%);
}
.home-hero-content {
  top: 0;
  bottom: 0;
  left: 0;
  z-index: 20;
}
.home-hero-cwrap {
  position: relative;
  display: flex;
  flex-direction: column;
  justify-content: flex-end;
  align-items: flex-start;
  width: 85%;
  height: 100%;
  margin: 0 auto;
  padding-bottom: 40px;
}
.home-hero-cstitle {
  margin-bottom: 5px;
  font-size: 1rem;
}
.home-hero-ctitlewrap {
  position: relative;
  width: 100%;
}
.home-hero-ctitle {
  letter-spacing: 1px;
  line-height: 1.2;
  font-size: 1.8rem;
}
.home-hero-cdesc {
  margin-bottom: 20px;
  font-size: 15px;
  width: 100%;
}
@media (min-width: 30em) {
  .home-hero-cstitle {
    font-size: 1.1rem;
  }
  .home-hero-ctitle {
    font-size: 2.3rem;
  }
  .home-hero-cdesc {
    font-size: 18px;
  }
}
.pglead_leaders {
  padding-bottom: 30px;
}
.pglead_ldcards {
  display: flex;
  flex-flow: row wrap;
}
.pglead_ldcard {
  margin: 0 15px 50px;
}
.pglead_ld-item {
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  text-align: center;
  position: relative;
  cursor: pointer;
}
.pglead_ld-item:after {
  transition: 0.3s ease-in-out;
}
.pglead_ld-ithumb {
  max-width: 200px;
  height: 100%;
  margin-bottom: 15px;
}
.pglead_ld-icont {
  display: flex;
  justify-content: center;
  align-items: center;
  flex-direction: column;
  text-align: center;
  max-width: 180px;
}
.pglead_ld-icname {
  color: #555b6d;
  font-size: 16px;
  font-weight: 700;
}
.pglead_ld-ictitle {
  font-size: 14px;
  width: 100%;
}
.pglead_ld-icmisc {
  display: flex;
  align-items: flex-start;
  margin-top: 10px;
}
.pglead_ld-icmexp {
  color: #0075a2;
  font-size: 12px;
  text-transform: uppercase;
}
.pglead_ld-icmsoc {
  display: flex;
  align-items: flex-start;
  margin-left: 10px;
}
.pglead_ld-icmsitem {
  display: block;
  width: 16px;
  height: 16px;
}
.pglead_ld-icmsitem:first-child {
  margin-right: 7px;
}
.pglead_ld-icmsitem--linkedin {
  fill: #0f6fc6;
}
.pglead_ld-icmsitem--twitter {
  fill: #00abc7;
}
.pglead_ld-expander {
  display: none;
  margin-top: 40px;
  margin-bottom: 20px;
  width: 100%;
}
.is-collapsed .pglead_ld-expander {
  opacity: 0;
}
.pglead_ld-expanderinner {
  position: relative;
  padding: 40px;
  background-color: #fff;
  box-shadow: 0 2px 7px rgba(0, 0, 0, 0.2);
}
.pglead_ld-exname {
  font-size: 1.2rem;
  margin-bottom: 3px;
}
.pglead_ld-extitle {
  font-size: 0.9rem;
}
.pglead_ld-excontent {
  margin-top: 20px;
  margin-bottom: 0;
  font-size: 1rem;
}
.pglead_ld-exclose {
  position: absolute;
  width: 20px;
  height: 20px;
  top: 20px;
  right: 20px;
  cursor: pointer;
}
.pglead_ld-exclose:after,
.pglead_ld-exclose:before {
  content: "";
  position: absolute;
  width: 100%;
  top: 50%;
  height: 2px;
  background: #555b6d;
  transform: rotate(45deg);
}
.pglead_ld-exclose:after {
  transform: rotate(-45deg);
}
.pglead_ld-exclose:hover:after,
.pglead_ld-exclose:hover:before {
  background: #333;
}
@media (min-width: 48em) {
  .legal-ppnav {
    display: table-cell;
  }
  .home-hero-ctitle br,
  .pr-list-htop {
    display: block;
  }
  .pr-list-hbot {
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    align-items: center;
  }
  .pr-list .container {
    max-width: 60%;
  }
  .home-hero-cstitle {
    margin-bottom: 0;
    font-size: 1.2rem;
  }
  .home-hero-ctitle {
    font-size: 3rem;
    white-space: nowrap;
  }
  .pglead_ldcard {
    width: calc((100% / 2) - 30px);
  }
  .pglead_ldcard:nth-of-type(2n + 2) .pglead_ld-expander {
    margin-left: calc(-100% - 30px);
  }
  .pglead_ld-expander {
    width: calc(200%+30px);
  }
  .pglead_ld-expanderinner {
    margin: 0 5%;
  }
}
@media (min-width: 62em) {
  .home-hero-bggrad {
    display: none;
  }
  .home-hero-bgimg {
    width: 50%;
    transform: translateX(100%) translateZ(0);
  }
  .home-hero-bgimg img {
    height: 100%;
  }
  .home-hero-cinner {
    width: 50%;
  }
  .home-hero-cwrap {
    width: 75%;
    padding-left: 3.5%;
    justify-content: center;
    padding-top: 64px;
    padding-bottom: 0;
  }
  .home-hero-cstitle {
    font-size: 1.2rem;
  }
  .home-hero-ctitle {
    font-size: 3.6rem;
  }
  .home-hero-cdesc {
    font-size: 18px;
  }
  .pglead_ldcard {
    width: calc((100% / 3) - 30px);
  }
  .pglead_ld-ithumb {
    max-width: 170px;
  }
  .pglead_ldcard:nth-of-type(4n + 2) .pglead_ld-expander {
    margin-left: calc(-100% - 30px);
  }
  .pglead_ldcard:nth-of-type(4n + 3) .pglead_ld-expander {
    margin-left: calc(-200% - 60px);
  }
  .pglead_ld-expander {
    width: calc(300% + 60px);
  }
}
@media (min-width: 75em) {
  .home-hero-cstitle {
    font-size: 1.2rem;
  }
  .home-hero-ctitle {
    line-height: 1;
    font-size: 4rem;
  }
  .home-hero-cdesc {
    font-size: 20px;
  }
  .pglead_ldcard {
    width: calc((100% / 4) - 35px);
  }
  .pglead_ld-ithumb {
    max-width: 150px;
  }
  .pglead_ldcard:nth-of-type(4n + 2) .pglead_ld-expander {
    margin-left: calc(-100% - 30px);
  }
  .pglead_ldcard:nth-of-type(4n + 3) .pglead_ld-expander {
    margin-left: calc(-200% - 60px);
  }
  .pglead_ldcard:nth-of-type(4n + 4) .pglead_ld-expander {
    margin-left: calc(-300% - 90px);
  }
  .pglead_ld-expander {
    width: calc(400% + 90px);
  }
}
.clearfix .bottomdiv {
  margin-bottom: 20px !important;
}
.awardswr .awardswr_middle {
  margin-top: 40px !important;
}
.wh-image-ratio {
  width: 100% !important;
  height: auto !important;
}
.footer_li_wrap .platform_size {
  font-size: 1.25rem !important;
}
h2.footer_li_heading {
  font-size: 1.125rem;
  margin-top: 5px;
}
@media only screen and (max-width: 1023px) {
  .footer_li_wrap .platform_size {
    font-size: 16px !important;
  }
}
.navbar-nav .hideview {
  cursor: pointer;
}
@media only screen and (max-width: 1800px) {
  .gotperkssection,
  .jobopening {
    padding: 80px 0;
  }
  .open_position_box {
    padding: 130px 60px;
  }
  .letsAddress {
    padding-top: 50px;
  }
  .countryAddinfo .normaltxt span {
    margin-top: 30px;
  }
  .headquartersAddbox .headqAdd {
    padding-bottom: 40px;
  }
  .headquartersAddbox {
    padding-top: 100px;
  }
  .xm-nav .sub-group {
    width: 300px;
    max-width: 300px;
  }
  .enterprise_wrap {
    padding: 80px 0 60px;
  }
  .page_banner .normaltxt {
    max-width: 900px;
  }
  .erp_card h2 {
    font-size: 26px;
  }
  .discover_banner .discover_contant .normaltxt {
    max-width: 1120px;
  }
  .erp_card_wrap .card_img_rte img {
    width: 280px;
  }
  .integratewithtools .integratecon {
    height: 540px;
  }
}
@media only screen and (max-width: 1600px) {
  section.banner .banner_textdiv p {
    padding-top: 160px;
  }
  .seeposbtnrw a.btns_style {
    padding: 14px 40px;
  }
  .open_position_box a.btns_style {
    padding: 14px 60px;
  }
  h1.innerheading {
    font-size: 64px;
  }
  .platformsectionwrap .dotsdesign img {
    width: 200px;
  }
  .clientsmess .appcllogorw .testicon img {
    width: 45px;
  }
  .howweworkCon .howworkdetails .howworkrw {
    margin-bottom: 50px;
  }
  .open_position_box {
    padding: 100px 40px;
  }
  .open_position_box .seeposbtnrw {
    margin-top: 60px;
  }
  .vacancyCon {
    padding-top: 60px;
  }
  .countryAddressSection {
    padding: 40px 70px;
  }
  .headquartersAddbox {
    padding-top: 80px;
  }
  .xm-nav .sub-group {
    width: 260px;
    max-width: 260px;
  }
  .careerpgvideo {
    width: 540px;
    height: 600px;
  }
  .page_banner .normaltxt {
    max-width: 800px;
  }
  .have_question_wrap .normaltxt {
    max-width: 680px;
  }
  .discover_banner .discover_contant .normaltxt {
    max-width: 1040px;
  }
  .integratewithtools .integratecon {
    height: 480px;
  }
  .bluedotsview {
    right: -20px;
  }
}
@media only screen and (max-width: 1500px) {
  .headquartersAddbox .headqAdd {
    padding-bottom: 20px;
  }
  .letsAddress .counnm {
    font-size: 20px;
  }
  .customerboxrow {
    padding: 50px 40px;
  }
  .countryAddressSection {
    padding: 40px;
  }
  .seeposbtnrw a.btns_style {
    padding: 10px 32px;
  }
  .open_position_box a.btns_style {
    padding: 10px 50px;
  }
  h1.innerheading {
    font-size: 56px;
  }
  .overtrustedwrap {
    padding-top: 100px;
  }
  .vacancyCon .vacancyrow {
    margin-bottom: 50px;
  }
  .open_position_box {
    padding: 80px 40px;
  }
  .open_position_box .seeposbtnrw {
    margin-top: 50px;
  }
  .xm-nav .sub-group {
    width: 250px;
    max-width: 250px;
  }
  .xm-nav .sub-group .bold-nav,
  .xm-nav .sub-group li:not(.heading-item) a {
    font-size: 15px;
  }
  .careerpgvideo {
    width: 540px;
    height: 560px;
  }
  .have_question_wrap .normaltxt {
    max-width: 640px;
  }
  .discover_banner .discover_contant .normaltxt {
    max-width: 960px;
  }
}
@media only screen and (max-width: 1400px) {
  .business_card {
    padding: 10px;
  }
  .advertisement_wrap ul li a img {
    width: 140px;
  }
  .integratewithtools .integratecon {
    height: 420px;
  }
}
@media only screen and (max-width: 1350px) {
  .erp_section_wrap .container {
    max-width: 100%;
  }
  .advertisement_wrap ul li a img {
    width: 110px;
  }
  .erp_card_wrap .card_img_rte {
    right: -80px;
  }
  .erp_card_wrap .card_img_lft {
    left: -80px;
  }
}
@media only screen and (max-width: 1320px) {
  .banner_textdiv {
    left: 58px;
    width: 600px;
  }
  .banner_textdiv span {
    font-size: 22px;
  }
  .heading h1 {
    font-size: 60px;
  }
  .letstalkformSection {
    padding: 90px 0 60px;
  }
  .letstalkinfobox {
    padding: 0 70px;
    margin-top: 30px;
  }
  section.banner .banner_textdiv p {
    max-width: 70%;
  }
  .platformsectionwrap .dotsdesign img {
    width: 140px;
  }
  h1.headingsection,
  h1.innerheading,
  h2.headingsection {
    font-size: 48px;
  }
  .devOpsCon .devopsconbox h2.headingsection,
  h2.subheadingsection {
    font-size: 36px;
  }
  .assets_fin_service {
    margin-bottom: 60px;
  }
  .integratewithtools .normaltxt {
    max-width: 620px;
  }
  .overtrustedwrap {
    padding-top: 80px;
  }
  .clientsmess .normaltxt {
    max-width: 440px;
    font-size: 21px;
    line-height: 32px;
  }
  .overtrustedwrap .normaltxt {
    max-width: 500px;
  }
  .gotperkssection {
    padding: 50px 0;
  }
  .choose_vacancy .bootstrap-select > .btn,
  .choose_vacancy .dropdown-menu,
  .gotperksbx .gotperkstext,
  .vacancyrow .vacancyname,
  .vacancyrow .vacancytitle {
    font-size: 18px;
  }
  .jobopening .normaltxt {
    max-width: 660px;
  }
  .open_position_box {
    padding: 60px 40px 80px;
  }
  .open_position_box .seeposbtnrw,
  .seeposbtnrw {
    margin-top: 35px;
  }
  .open_position_box a.btns_style {
    padding: 13px 50px;
  }
  .careerpgvideo {
    width: 560px;
    height: 480px;
  }
  .latestboxwrap {
    padding-top: 60px;
  }
  .devOpsCon .devopsconbox .opstextrw.topp {
    padding-top: 20px;
  }
  .page_banner .normaltxt {
    max-width: 700px;
  }
  .discover_banner .discover_contant .normaltxt {
    max-width: 840px;
  }
  .have_question_wrap .normaltxt {
    max-width: 540px;
  }
  .team_member_position .team_member_box .postextbx {
    font-size: 26px;
  }
  .bluedotsview,
  .officeviewentrybx {
    right: 0;
  }
}
@media only screen and (max-width: 1220px) {
  .navbar-default .container-fluid {
    padding: 0 20px;
  }
  .banner_textdiv span {
    font-size: 20px;
  }
  .heading h1 {
    font-size: 54px;
  }
  section.banner .banner_img {
    align-items: flex-end;
    display: flex;
  }
  .banner_textdiv {
    left: 80px;
  }
  .seeposbtnrw a.btns_style,
  a.btns_style {
    padding: 8px 28px;
  }
  .open_position_box a.btns_style {
    padding: 8px 40px;
  }
  .platformsectionwrap .dotsdesign img {
    width: 110px;
  }
  h1,
  h1.headingsection,
  h1.innerheading,
  h2.headingsection {
    font-size: 42px;
  }
  .assets_fin_service .finserbx {
    padding: 10px;
    margin: 0 10px;
  }
  .cloudsview1 {
    left: 150px;
    width: 200px;
  }
  .cloudsview2 {
    top: 110px;
    width: 130px;
  }
  .integratewithtools .normaltxt {
    max-width: 600px;
    margin-top: 20px;
  }
  .careerpgban,
  .howweworksection,
  .jobopening,
  .testimonialswrap {
    padding: 50px 0;
  }
  .clientsmess .appcllogorw .testicon img {
    width: 40px;
  }
  .clientsmess .appcllogorw .applogo.medone img {
    width: 220px;
  }
  .overtrustedwrap .normaltxt,
  .page_banner .normaltxt {
    max-width: 600px;
  }
  footer .footer_menuwr .footer_li_wrap ul,
  footer .footer_menuwr ul {
    margin: 30px 0 0;
  }
  .business_card_warp,
  footer {
    padding: 40px 0;
  }
  .jobopening .normaltxt {
    max-width: 720px;
  }
  .howweworkCon .howworkdetails {
    padding-left: 40px;
    padding-right: 120px;
  }
  .team_member_position .team_member_box .postextbx {
    font-size: 24px;
  }
  .carbanimg {
    margin-top: -45px;
  }
  .xm-nav .sub-group {
    width: 240px;
    max-width: 240px;
  }
  .xm-nav .container {
    padding: 0 15px;
  }
  .careerpgvideo {
    width: 560px;
    height: 400px;
  }
  .getthelatestwrap,
  .letstalkSecondryform {
    padding: 80px 0;
  }
  .annouce_sliderwrinner,
  .latestboxCon .getcontext {
    padding: 20px;
  }
  .latestboxwrap .lernmorerw {
    padding-top: 50px;
  }
  .latestboxwrap {
    padding-top: 40px;
  }
  .plateformspeedbox .tab-content {
    padding: 90px 0 60px;
  }
  .buildinnovation,
  section.focused,
  section.leadership_header {
    padding: 40px 10px;
  }
  .buildinnovationboxConrw {
    padding-top: 60px;
  }
  .advertisement_wrap ul li a img {
    width: 95px;
  }
  .top_arrow img {
    height: 50px;
  }
  .page_banner {
    height: 450px;
  }
  .enterprise_wrap,
  .tp_page {
    padding: 60px 0;
  }
  .erp_card h2 {
    font-size: 22px;
  }
  .erp_section_wrap {
    max-width: 840px;
    margin: 70px auto;
  }
  .discover_banner {
    padding: 50px 40px;
  }
  .have_question_wrap {
    margin: 60px 0;
  }
  .design_icon img {
    width: 240px;
  }
  .plateformspeedbox {
    padding: 0 10px;
  }
  .howweworkCon .howworkdetails .howworkrw h3,
  .platform_nor_text,
  .tp_page ul li,
  p,
  section.banner .banner_textdiv p {
    font-size: 18px;
  }
  h2 {
    font-size: 36px;
  }
  .letstalkinfobox ul li {
    font-size: 1.125rem;
  }
  .buildinnovationConbx .buildino_nor_text br,
  .thankyoupage .letstalkform h3 br,
  section.tiles .tilescontent p br {
    display: none;
  }
  .menuwrap ul {
    margin: 20px !important;
  }
  .menuwrap ul li:first-child,
  section.different p.membername {
    font-size: 12px;
  }
  .menuwrap ul li a {
    font-size: 13px;
  }
  .headerchildnav a,
  .imgdownlink a {
    font-size: 14px;
  }
  .menuimgbox {
    padding: 40px;
  }
  .headerchildnav {
    padding: 50px 20px;
  }
  .assetsfinancebox {
    width: auto;
    max-width: 570px;
  }
  .buildpgscalefector {
    padding-top: 70px;
  }
  .integratewithtools .integratecon {
    height: 400px;
  }
  section.newsroom {
    margin-top: 80px;
  }
  section.annoucement,
  section.awards {
    margin: 80px 0;
  }
  .newsroomimg {
    height: 200px;
  }
  .section_width {
    padding: 0;
  }
  .innerwidth_section {
    padding: 0 40px;
  }
  .latestboxCon {
    max-width: 80%;
  }
  section.resources .memberinfo span {
    font-size: 11px;
  }
  section.innovate_section,
  section.lifeatodessa,
  section.tiles {
    padding: 80px 10px;
  }
  section.different .membername span {
    font-size: 0.8rem;
  }
  div.leader_person {
    padding: 0 10px 40px;
  }
  section.different p.membername.madhu {
    bottom: 196px;
    right: -58px;
  }
  div.leader_person .memberwrapperdiv .memberblock .leaderdivwr {
    padding: 0 5px;
  }
  div.leader_person .displayflex {
    margin: 0 -15px;
  }
  section.different p.membername.jay {
    bottom: 51px;
    left: -118px;
  }
}
@media only screen and (max-width: 1169px) {
  .clientsmess .normaltxt,
  .customerbox .boxnormaltxt {
    font-size: 16px;
    line-height: 28px;
  }
  .banner_textdiv {
    left: 68px;
    width: 500px;
  }
  section.banner .banner_textdiv p {
    max-width: 72%;
  }
  .cloudsview1 {
    left: 110px;
    top: -20px;
    width: 180px;
  }
  .cloudsview2 {
    top: 100px;
    left: 10px;
    width: 110px;
  }
  #annoucementslider.owl-theme .owl-next i,
  #annoucementslider.owl-theme .owl-prev i,
  .heading h1 {
    font-size: 50px;
  }
  .letstalkformSection {
    padding: 80px 0 60px;
  }
  .letstalkinfobox {
    padding: 0 60px;
    margin-top: 20px;
  }
  .letstalkform {
    padding: 25px;
  }
  .letsAddress {
    padding-top: 30px;
  }
  .letsAddress .addrow,
  .letstalkform .form-group {
    margin-bottom: 20px;
  }
  .letstalkformCon {
    padding-right: 60px;
    background-size: 700px;
  }
  .letstalkinfobox ul li span {
    width: 28px;
    height: 26px;
  }
  .customerbox {
    padding: 20px 35px;
    margin: 0 20px;
  }
  .countryAddinfo .headingrows h4,
  .customerbox h3 {
    font-size: 26px;
  }
  h1.innerheading,
  h2.headingsection {
    font-size: 36px;
  }
  .platform_nor_text {
    max-width: 680px;
  }
  .cloudserverCon .normaltxt,
  .discover_banner .discover_contant .normaltxt {
    max-width: 700px;
  }
  .integratewithtools .normaltxt,
  .overtrustedwrap .normaltxt {
    max-width: 500px;
  }
  .clientsmess .normaltxt {
    max-width: 380px;
  }
  .certify_wrapper {
    margin-left: 80px;
  }
  .erp_card_wrap .erp_card {
    padding: 30px 15px 10px;
    margin: 0;
  }
  .erp_card_wrap .erp_card h4 {
    font-size: 1rem;
  }
  .learn_more_btn button {
    height: 54px;
  }
  .page_banner .tab_arrow_wrap img {
    height: 160px;
  }
  .open_design_wrap {
    margin-top: 100px;
  }
  .page_banner .tab_arrow_wrap {
    bottom: -80px;
  }
  .enterprise_contant_wrap {
    padding-right: 40px;
  }
  .cloud_up_wrap {
    padding: 30px 10px;
  }
  .letstalkban {
    min-height: 360px;
  }
  .integratewithtools .integratecon {
    height: 360px;
  }
  #annoucementslider.owl-theme .owl-prev {
    left: -40px;
  }
  #annoucementslider.owl-theme .owl-next {
    right: -40px;
  }
}
@media only screen and (max-width: 1060px) {
  .container {
    width: 95%;
  }
  footer h4 {
    font-size: 18px;
  }
  .buildinnovationConbx .inoiconrw .innoicon.legacy {
    margin-right: 70px;
  }
  .buildinnovationConbx .inoiconrw .innoicon.improve_developer {
    margin-right: -10px;
  }
  .buildinnovationConbx .inoiconrw .innoicon.recoding {
    margin-right: 20px;
  }
  .annoucement_div h3,
  .news_div h3 {
    font-size: 1rem;
  }
  #annoucementslider.owl-theme .owl-next {
    right: -20px;
  }
  #annoucementslider.owl-theme .owl-prev {
    left: -20px;
  }
}
@media only screen and (max-width: 1023px) {
  .cd-hero__slider,
  section.banner .banner_inner {
    max-height: 540px;
  }
  .banner_textdiv {
    left: 40px;
    width: 440px;
  }
  .zindex1 {
    width: 50% !important;
  }
  .heading h1 {
    font-size: 44px;
  }
  .platformsectionwrap .dotsdesign img {
    width: 90px;
  }
  .assets_fin_service .eqWrap,
  .navbar-default #navbar ul li:first-child .menuwrap .eqWrap,
  footer .footer_menuwr .footer_li_wrap a span {
    display: block;
  }
  .asswd20 {
    width: 33.33%;
  }
  .owl-carousel.brandslogo .owl-item img,
  .wdf50 {
    width: 50%;
  }
  .assets_fin_service .finserbx {
    padding: 0;
    margin: 0;
    background-color: transparent;
    box-shadow: none;
  }
  .assfinconbx {
    padding: 15px;
    margin: 0 10px 20px;
    background-color: #fff;
    box-shadow: 0 0 30px 15px rgba(0, 0, 0, 0.1);
  }
  .fincetext {
    min-height: 80px;
  }
  .cloudsview1 {
    left: 60px;
    width: 160px;
  }
  .cloudsview2 {
    left: 0;
    width: 90px;
  }
  .assets_fin_service {
    margin-bottom: 30px;
  }
  .assets_fin_service > .row {
    margin: 0;
  }
  .cloudserversection .cloudserverCon {
    padding-bottom: 200px;
    background-size: 500px 219px;
  }
  .devOpsSection,
  .testimonialswrap {
    padding: 40px 20px;
  }
  .integratewithtools {
    padding: 60px 20px;
  }
  .integratewithtools .normaltxt {
    max-width: 420px;
    font-size: 16px;
    line-height: 24px;
  }
  .integratewithtools .inlineform,
  .letstalkbtn {
    margin-top: 25px;
  }
  .integratewithtools .integratecon {
    height: auto;
    background-image: none;
  }
  .integrateconmidCon {
    position: static;
    left: auto;
    top: auto;
    transform: none;
  }
  .navbar-default ul.alwaysvisiblemenu,
  .owl-carousel.clientsask .owl-controls {
    right: 20px;
  }
  footer .footer_menuwr .footer_li_wrap ul li {
    margin-bottom: 10px;
  }
  .buildinnovationConbx .buildino_nor_text,
  footer .footer_menuwr a,
  footer h4 {
    font-size: 16px;
  }
  .footermenu_strip_inner .social_icon {
    margin: 8px 15px 0;
  }
  .inlineform {
    margin: auto;
  }
  .footerbottommenu {
    padding-top: 15px;
  }
  .trusted_brands_logo {
    padding-top: 50px;
  }
  .headquartersAddbox,
  .howweworkCon .howwewimgbx {
    padding-top: 60px;
  }
  .howweworkCon .howworkdetails {
    padding-left: 20px;
    padding-right: 20px;
  }
  .howweworkCon,
  .plateformCon .normaltxt.pdright {
    padding-top: 0;
  }
  .howweworkCon .howworkdetails .howworkrw {
    margin-bottom: 40px;
  }
  .team_member_position .team_member_box .postextbx {
    font-size: 21px;
  }
  .gotperksbx .gotperkstext {
    font-size: 18px;
    margin-top: 10px;
  }
  .jobopening .normaltxt {
    max-width: 600px;
  }
  .letstalkformSection {
    padding: 60px 20px 40px;
  }
  .letstalkformCon {
    padding-right: 50px;
    background-size: 500px;
  }
  .letstalkinfobox {
    padding: 0 20px 0 10px;
  }
  .letstalkform {
    padding: 20px 15px;
  }
  .letstalkform .form-control {
    padding: 12px;
    font-size: 15px;
  }
  .alreadyCustomerwrap {
    padding: 40px 0;
  }
  .customerboxrow {
    padding: 30px 20px;
  }
  .customerbox {
    padding: 20px 25px;
    margin: 0 15px;
  }
  .countryAddinfo .headingrows h4,
  .customerbox h3 {
    font-size: 24px;
  }
  .countryAddinfo,
  .headerchildnav.lzer {
    padding-right: 0;
  }
  .countryAddressSection {
    padding: 30px 0;
  }
  .bluedotsview {
    right: -10px;
    width: 280px;
    height: 144px;
  }
  .officeviewentrybx {
    padding-top: 210px;
    padding-left: 0;
    right: 30px;
  }
  .headingrows .customericon {
    margin-right: 15px;
  }
  .notfound_page {
    padding: 80px 0;
  }
  .plateformspeedbox .nav-tabs > li > a {
    margin: 0 30px;
    font-size: 18px;
    padding: 13px 20px;
  }
  .btmlinegrey {
    width: 600px;
  }
  .plateformCon .listpoints,
  section.newsroom .newsroomcarousel {
    margin-top: 30px;
  }
  .plateformspeedbox .tab-content {
    padding-bottom: 30px;
  }
  .devOpsCon .devopsconbox {
    padding: 24px;
    margin-top: 30px;
    min-width: 410px;
  }
  .headerchildnav a,
  .imgdownlink a,
  footer .footer_menuwr .footer_li_wrap a {
    font-size: 13px;
  }
  footer .footer_menuwr .footer_li_wrap p {
    font-size: 14px;
    line-height: 24px;
  }
  .business_card_warp .business_image {
    position: static;
    right: auto;
    bottom: auto;
    text-align: right;
  }
  .business_card_warp .business_image img {
    width: 160px;
    display: inline-block;
  }
  .letstalkban {
    min-height: 320px;
  }
  .countryAddinfo .headingrows h3.mntop.pd,
  .countryAddinfo .letsbutton,
  .countryAddinfo p {
    padding-left: 50px;
  }
  #navbar {
    margin-left: 20px;
  }
  .navbar-default .navbar-nav > li > a {
    padding: 0 5px;
    margin: 0 10px;
  }
  .menuwd20 {
    width: 25%;
  }
  .menuwd20:last-child {
    width: 100%;
    margin-bottom: 20px;
  }
  .headerchildnav {
    padding: 20px;
  }
  .menuimgbox {
    padding: 20px 10px;
  }
  footer {
    padding-bottom: 20px;
  }
  .trusted_brands_logo .brlogo {
    margin: 0 20px;
  }
  .trusted_brands_logo.clouds .brlogo {
    margin: 0 5px;
  }
  .trusted_brands_logo .brlogo img {
    max-width: 90%;
  }
  .buildscaleimgbx img {
    width: 680px;
  }
  .buildtabsbackgbox {
    margin-top: -184px;
    padding-bottom: 310px;
  }
  .buildinnovationConbx .inoiconrw .innoicon.improve_developer,
  .buildinnovationConbx .inoiconrw .innoicon.legacy,
  .buildinnovationConbx .inoiconrw .innoicon.recoding {
    margin-right: 0;
  }
  .latestboxCon {
    max-width: 84%;
  }
  .letstalkSecondryform .secnformCon {
    max-width: 80%;
  }
  .latestboxCon .getconbx,
  .newsroomimg {
    height: 180px;
  }
  .careerpgban .normaltxt br,
  .discover_contant p br,
  .navbar-default #navbar ul li:first-child .container.pos:after {
    display: none;
  }
  .page_banner {
    height: 400px;
  }
  .letstalkinfobox ul {
    padding-right: 10px;
  }
  section.newsroom {
    margin-top: 50px;
  }
  .header_banner {
    background-position: top center;
  }
  section.different p.membername.jay {
    bottom: 47px;
    left: -116px;
  }
  section.different h2,
  section.lifeatodessa h2,
  section.odessacloud h2 {
    margin: 0 0 20px;
  }
  section.lifeatodessa p,
  section.odessacloud p {
    margin-bottom: 20px;
  }
  section.tiles .flexdiv .thirtypad {
    padding-left: 25px;
    padding-right: 25px;
  }
  .barnds_logowr .brands_logo {
    width: auto;
  }
}
@media only screen and (max-width: 991px) {
  .xm-nav .sub-group {
    width: auto;
    max-width: initial;
  }
  .letstalkSecondryform .normaltxt {
    padding: 20px 0 30px;
  }
  .advertisement_wrap ul li a img,
  .certify_wrap .certify_coin img {
    width: 80px;
  }
  .design_icon {
    margin: 0 auto 30px;
    display: table;
  }
  .design_icon img {
    width: 180px;
  }
  .erp_card_wrap .card_img_lft,
  .erp_card_wrap .card_img_rte,
  .page_banner .tab_arrow_wrap img,
  section.different h2 br,
  section.focused .count_number p br,
  section.focused .focused_txt h2 br {
    display: none;
  }
  .open_design_wrap {
    position: relative;
    margin-top: 50px;
    z-index: 1;
    padding: 0 20px;
  }
  .erp_card h2,
  .tab_data_wapper .nav > li > a {
    font-size: 18px;
  }
  .business_card h2 {
    margin-top: 0;
  }
  .business_card {
    margin-bottom: 0;
  }
  .business_card_warp {
    padding: 40px 20px;
  }
  .tab_data_wapper,
  section.resources .resourcesinner {
    padding: 0;
  }
  .tab_data_wapper .tab-content .tab_contant_data {
    padding-left: 0;
  }
  .top_arrow img {
    height: 40px;
  }
  .erp_section_wrap {
    margin: 60px 40px;
  }
  .enterprise_contant_wrap {
    padding-right: 0;
  }
  .certify_wrap {
    width: 135px;
    padding: 10px;
    margin-right: 10px;
  }
  .certify_wrap .certify_coin {
    height: 90px;
  }
  .certify_wrapper {
    margin-left: 0;
  }
  .devOpsCon {
    padding-left: 30px;
  }
  section.different .different_Img {
    width: 47%;
    float: none;
    margin: 0 auto;
    bottom: -80px;
  }
  section.different p.membername.madhu {
    bottom: 146px;
    right: -50px;
  }
  section.different p.membername.jay {
    bottom: 0;
    left: -131px;
    top: auto;
  }
  section.different h2 {
    white-space: initial;
  }
  section.different .differnt_info p {
    width: 100%;
    font-size: 16px;
  }
  section.different {
    padding: 40px 0 60px;
  }
  section.different .differnt_info {
    margin-top: 40px;
  }
  section.focused .count_number {
    padding-left: 15px;
  }
  section.focused .count_number .count_numdiv img {
    height: 40px;
    min-height: 40px;
  }
  section.focused .count_number .count_numdiv {
    min-width: 133px;
  }
  div.leader_person .leader_img img {
    max-width: 80%;
  }
  .leadershipmembermodal {
    margin: 20px 0 40px;
  }
  section.innovate_section {
    padding: 40px 10px;
  }
  section.resources {
    background-size: cover;
    padding: 30px 0;
  }
}
@media only screen and (max-width: 767px) {
  .header_banner,
  .letstalkformCon {
    background-image: none;
  }
  .colmenubg,
  .latestboxCon,
  .navbar-default .navbar-toggle:focus,
  .navbar-default .navbar-toggle:hover {
    background-color: transparent;
  }
  .erp_card p,
  .fincetext,
  section.annoucement .bottomdiv .annoucement_div h3,
  section.news .bottomdiv .news_div h3 {
    min-height: initial;
  }
  h1 {
    font-size: 36px;
  }
  .page_banner .header_contant h2,
  h2 {
    font-size: 30px;
  }
  h3 {
    font-size: 26px;
  }
  .choose_vacancy .bootstrap-select > .btn,
  .choose_vacancy .dropdown-menu,
  .gotperksbx .gotperkstext,
  .lernmorerw a,
  .letstalkinfobox ul li,
  .tab_data_wapper .designtabs .items a,
  .tp_page ul li,
  .vacancyrow .vacancyname,
  .vacancyrow .vacancytitle,
  p {
    font-size: 16px;
  }
  h1 span,
  h2 span {
    display: inline;
  }
  section.banner .banner_inner {
    max-height: initial;
  }
  section.banner .banner_img {
    width: auto;
    float: none;
    align-items: initial;
    display: block;
    background: 0 0;
  }
  .annoucementsliderwr .owl-nav,
  .bluedotsview,
  .buildpgscalefector p.tpbtm br,
  .cloudsview2,
  .clrw,
  .devOpsCon .devopsconbox .opstextrw br,
  .erp_card_wrap .card_img_lft,
  .erp_card_wrap .card_img_rte,
  .gotperksbx .gotperkstext br,
  .header_banner .cloud_2,
  .header_banner .cloud_3,
  .header_banner .cloud_4,
  .header_banner .cloud_6,
  .header_banner .cloud_7,
  .navbar-default ul.alwaysvisiblemenu,
  .navbar-default ul.alwaysvisiblemenu li:first-child,
  .navbar-default ul.alwaysvisiblemenu li:nth-child(2),
  .notfound_page p br,
  .top_arrow,
  .wd12,
  footer .desktop_view_footer,
  p br,
  section.banner .banner_img img,
  section.different p.membername,
  section.focused::after {
    display: none;
  }
  .banner_textdiv {
    left: 20px;
    right: 20px;
    width: auto;
    transform: translateY(-50%);
  }
  .asswd20 {
    width: auto;
  }
  .heading h1,
  h1.headingsection {
    font-size: 28px;
  }
  .devOpsCon .devopsconbox h2.headingsection {
    font-size: 24px;
    margin-top: 0;
  }
  .carbanimg,
  h1.innerheading {
    margin-top: 10px;
  }
  .howweworkCon .howworkdetails .howworkrw h3,
  .normaltxt,
  .platform_nor_text,
  section.banner .banner_textdiv p {
    font-size: 16px;
    line-height: 24px;
  }
  section.banner .banner_textdiv p,
  section.newsroom .newsroomcontent {
    max-width: initial;
  }
  .buildinnovationConbx .inoiconrw,
  .fin_ass_valrw,
  .trusted_brands_logo .brlogo {
    margin-bottom: 15px;
  }
  .fin_ass_valrw.lastrw {
    margin-bottom: 0;
  }
  .cloudserversection,
  .devOpsSection,
  .mobpadnone,
  .navbar-default .container-fluid,
  .open_design_wrap,
  .section_width .col-md-12,
  .tab_data_wapper,
  section.news,
  section.news .bottomdiv .pd10,
  section.newsroom .section_width,
  section.resources .resourcesinner,
  section.tiles {
    padding: 0;
  }
  .integratewithtools .integratecon {
    padding: 0;
    background: 0 0;
  }
  .countryAddinfo .normaltxt span,
  .integratewithtools .inlineform,
  section.newsroom #newroomslider .owl-dots,
  section.newsroom .newsroomcarousel {
    margin-top: 20px;
  }
  .cloudsview1 {
    left: 0;
    top: -5px;
    width: 120px;
  }
  .clientsmess,
  .mega-dropdown-menu {
    position: static;
    top: auto;
    left: auto;
  }
  .finserbx .headingbox {
    height: auto;
  }
  .fincetext {
    text-align: center;
  }
  .getthelatestwrap,
  .integratewithtools,
  .letstalkSecondryform,
  .letstalkformSection,
  .testimonialswrap {
    padding: 50px 0;
  }
  .platformsectionwrap {
    padding-bottom: 40px;
  }
  .cloudserversection .cloudserverCon {
    padding-top: 70px;
    padding-bottom: 120px;
    background-size: 300px 131px;
  }
  #nav-icon1,
  .annoucement_div,
  .clearmenurwmb,
  .cloudserverCon .nextrw span.breakpoint,
  .customerboxrow .eqWrap,
  .header_banner .cloud_1,
  .header_banner .cloud_5,
  .menuviewwrap,
  .menuwrap .eqWrap,
  .news_div,
  .tab_data_wapper .nav > li > a > span,
  .testimonialswrap .eqWrap,
  .tp_page p br {
    display: block;
  }
  .clientsmess {
    transform: none;
  }
  .clientsmess .appcllogorw .testicon img {
    width: 30px;
  }
  .clientsmess .appcllogorw .applogo.medone,
  .navbar > .container-fluid .navbar-brand,
  .redbullets {
    margin-left: 20px;
  }
  .clientsmess .appcllogorw .applogo.medone img {
    width: 180px;
  }
  .clientsimgbx {
    margin: 20px 20px 10px;
  }
  .assetsfinancebox,
  .buildinnovationConbx,
  .howweworkCon .howworkdetails .howworkrw {
    margin-bottom: 30px;
  }
  .choose_vacancy,
  .latestboxwrap .lernmorerw,
  .overtrustedwrap {
    padding-top: 30px;
  }
  .footerbottommenu ul li {
    border-right: 0;
    margin-bottom: 5px;
  }
  .buildinnovationboxConrw,
  .footer_menuwr .col-xs-6:nth-child(3) span.footer_li_heading,
  .footer_menuwr .col-xs-6:nth-child(4) span.footer_li_heading,
  .howweworkCon .howwewimgbx,
  .vacancyCon {
    padding-top: 20px;
  }
  .assetsfinancebox {
    padding: 20px;
  }
  .footermenu_strip_inner {
    padding: 30px 0 20px;
  }
  .footermenu_strip_inner .stripfbox,
  .navbar-default #navbar ul li {
    float: none;
  }
  .buildpgwrap h1.headingsection,
  .innerwidth_section,
  .platform_nor_text,
  .team_member_position {
    padding: 0 20px;
  }
  .navbar-default ul.alwaysvisiblemenu li {
    display: inline-block;
  }
  .navbar-default ul.alwaysvisiblemenu li a {
    padding: 0 7px;
  }
  .owl-carousel .owl-controls .owl-dot {
    width: 12px;
    height: 12px;
  }
  .howweworkCon .howworkdetails {
    padding-left: 0;
    padding-right: 0;
    padding-top: 20px;
  }
  .choose_vacancy .sortby,
  .team_member_position .team_member_box,
  .thankyoupage .letstalkform h3,
  .vacancyrow .form-group {
    margin-bottom: 20px;
  }
  .wd29 {
    width: 33.33%;
  }
  .gotperksbx .gotperksiconbx {
    width: 60px;
    height: 36px;
    background-size: 60px 216px;
  }
  .gotperksbx .gotperksiconbx.health {
    background-position: 0 -36px;
  }
  .gotperksbx .gotperksiconbx.teammeal {
    background-position: 0 -72px;
  }
  .gotperksbx .gotperksiconbx.flexible_vacation {
    background-position: 0 -108px;
  }
  .gotperksbx .gotperksiconbx.retirement_plan {
    background-position: 0 -144px;
  }
  .gotperksbx .gotperksiconbx.paid_parental {
    background-position: 0 -180px;
  }
  .row.mn8 {
    margin-left: -8px;
    margin-right: -8px;
  }
  .mnp8 {
    padding: 0 8px;
  }
  .gotperksbx,
  section.newsroom .item {
    margin: 20px 0;
  }
  .gotperksCon {
    margin-top: 15px;
  }
  .choose_vacancy
    .bootstrap-select:not([class*="span"]):not([class*="col-"]):not(
      [class*="form-control"]
    ):not(.input-group-btn),
  .company_page .container {
    width: 100%;
  }
  .open_position_box {
    padding: 20px 15px;
  }
  .letstalkinfobox {
    margin-top: 0;
    padding: 0;
  }
  .letstalkinfobox ul {
    padding: 20px 0 0 15px;
  }
  .letsAddress {
    padding-top: 15px;
  }
  .letstalkformCon {
    padding-right: 0;
  }
  .letstalkform {
    margin-top: 40px;
    margin-bottom: 20px;
    box-shadow: 2px 0 10px 5px rgba(0, 0, 0, 0.1);
  }
  .customerboxrow,
  .discover_banner,
  .plateformspeedbox,
  .plateformspeedbox .tab-content {
    padding: 20px 0;
  }
  .customerbox {
    padding: 20px;
    margin-bottom: 25px;
  }
  .officeviewentrybx {
    padding-top: 20px;
    right: auto;
  }
  .cloud_up_wrap h2,
  .countryAddinfo .headingrows h4,
  .customerbox h3 {
    font-size: 20px;
  }
  .careerpgvideo {
    width: 360px;
    height: 320px;
  }
  .enterprise_contant_wrap,
  .letstalkSecondryform .secnformCon {
    max-width: 100%;
  }
  .letstalkSecondryform .container {
    padding: 0 0 20px;
  }
  .buildpgscalefector {
    padding-top: 50px;
  }
  .buildpgscalefector .normaltxt,
  section.annoucement .upperdiv .annoucement_rt,
  section.news .upperdiv .news_rt {
    padding: 20px;
  }
  .buildtabsbackgbox {
    padding-bottom: 150px;
    margin-top: -70px;
  }
  .buildscaleimgbx img {
    width: auto;
    height: 160px;
  }
  .plateformspeedbox .nav-tabs > li > a {
    margin: 0 5px;
    font-size: 16px;
    padding: 12px;
  }
  .plateformspeedbox .nav-tabs {
    margin-top: -80px;
  }
  .plateformCon .normaltxt.pdright {
    padding-top: 0;
  }
  .buildinnovation,
  .section_width,
  section.focused,
  section.leadership_header,
  section.lifeatodessa {
    padding: 40px 0;
  }
  .devOpsCon .devopsimgbx {
    width: 100%;
    height: auto;
    float: none;
  }
  .devOpsCon,
  .pdl30,
  section.focused .count_number {
    padding-left: 0;
  }
  .devOpsCon .devopsconbox {
    padding: 44px 20px;
    left: auto;
    margin-left: 0;
    min-width: auto;
    margin-top: -60px;
  }
  .plateformCon .listpoints {
    padding-left: 20px;
  }
  .plateformCon .listpoints .normaltxt {
    line-height: 24px;
    margin-bottom: 20px;
  }
  .business_card_warp,
  footer {
    padding: 40px 0 0;
  }
  .row.footer_menuwr {
    margin: 0;
  }
  footer .footer_menuwr .footer_li_wrap p {
    margin: 0 0 5px;
  }
  footer .footer_li_wrap {
    width: 50%;
    margin-bottom: 20px;
  }
  footer .mobile_view_footer {
    display: block;
    width: 100%;
    float: none;
    margin-bottom: 30px;
  }
  footer .footer_menuwr .footer_li_wrap .moblie_view_mrgn {
    padding-left: 30px;
  }
  footer .footer_menuwr .footer_li_wrap ul,
  section.annoucement {
    margin-top: 0;
  }
  .certify_wrapper {
    padding: 15px 0;
    margin: 20px auto 0;
    display: table;
  }
  .advertisement_wrap ul li a img {
    width: 65px;
  }
  .business_card {
    padding: 0 0 30px;
  }
  .npadrw {
    width: 100% !important;
  }
  #annoucementslider .owl-dots,
  .latestboxCon .eqWrap {
    display: block !important;
  }
  .cloud_up_wrap {
    padding: 20px 10px;
  }
  .enterprise_wrap,
  .need_busyness_wrap {
    padding: 50px 0 20px;
  }
  .header_banner .header_contant_wrap p {
    max-width: inherit;
  }
  .latest_box_Con .getcontext {
    font-size: 18px;
  }
  .advertisement_wrap {
    padding: 0 0 50px;
  }
  .erp_card_wrap .erp_card {
    margin: 20px auto 30px;
    padding: 20px;
  }
  .erp_card p {
    margin-top: 20px;
  }
  .erp_section_wrap {
    margin: 40px 20px;
  }
  .erp_section_wrap > h2 {
    font-size: 25px;
    margin-bottom: 20px;
  }
  .page_banner .header_contant {
    padding: 15px;
  }
  .discover_banner .discover_contant_wrap,
  .thankyoupage .letstalkform {
    padding: 30px 20px;
  }
  .discover_banner .learn_more_btn a {
    margin: 0 20px;
    width: 120px;
  }
  .learn_more_btn {
    margin: 25px auto 15px;
  }
  .learn_more_btn button {
    width: 160px;
    height: 50px;
    margin: 0 10px;
  }
  .tab_data_wapper .tab-content {
    padding: 15px 0;
  }
  .have_question_wrap {
    margin: 50px 20px;
  }
  .tab_data_wapper .nav > li > a {
    font-size: 14px;
  }
  #companyvideoplay .modal-dialog,
  .container {
    width: 90%;
  }
  #companyvideoplay .close {
    right: 0;
  }
  .videoactionwr {
    font-size: 16px;
    color: #00acc8;
    padding: 8px 12px;
  }
  .buildinnovationConbx .buildino_nor_text {
    font-size: 16px;
    line-height: 28px;
  }
  .btmlinegrey {
    width: 300px;
  }
  .letsAddress .counnum {
    font-size: 22px;
  }
  .howweworksection h2.headingsection,
  h2.lefttext {
    left: auto;
    text-align: center;
  }
  .letstalkban {
    min-height: 200px;
  }
  .buildpgscalefector p.tpbtm {
    padding: 10px 0 15px;
    font-size: 17px;
  }
  .plateformCon {
    padding-top: 40px;
  }
  .plateformCon .listpoints span.blbullets {
    top: 7px;
  }
  .plateformspeedbox .build_tabs {
    padding: 0 32px;
  }
  .plateformspeedbox .build_tabs .items a {
    margin: 0;
    font-size: 16px;
  }
  #navbar {
    margin-left: 0;
  }
  .navbar-default .navbar-toggle {
    border-color: transparent;
  }
  .navbar-toggle {
    margin-top: 13px;
    margin-right: 0;
  }
  .navbar-default .navbar-nav > li > a {
    padding: 15px 20px;
    margin: 0;
    font-size: 18px;
    line-height: normal;
    border-bottom: 1px solid #e3e3e4;
    background-color: #f3f3f5;
  }
  .navbar-default .navbar-nav > li.open > a {
    border-bottom: 0;
  }
  .mega-dropdown-menu {
    float: none;
    min-width: initial;
  }
  .menuwd20 {
    width: 50%;
  }
  .mnmargintop {
    margin-top: -60px;
  }
  .overtrustedwrap .inlineform {
    left: auto;
  }
  .footerbottommenu {
    margin-left: 0;
    padding-top: 10px;
  }
  .latestboxCon {
    max-width: initial;
    box-shadow: none;
  }
  .latestboxCon .npadrw {
    box-shadow: 0 10px 15px 6px rgba(0, 0, 0, 0.1);
    margin-bottom: 30px;
  }
  .assfinconbx {
    margin: 0 0 30px;
  }
  .platformsectionwrap .dotsdesign img {
    margin-bottom: 10px;
  }
  .tab_data_wapper .tab-content .tab_contant_data {
    padding-right: 0;
  }
  .countryAddinfo .headingrows h3 {
    font-size: 24px;
  }
  section.annoucement .section_width {
    padding-bottom: 0;
  }
  section.annoucement,
  section.awards {
    margin: 40px 0;
  }
  section.annoucement .bottomdiv,
  section.news .bottomdiv {
    display: block;
    margin: 0;
  }
  .news_div .news_lt img {
    margin: 45px 0;
  }
  .morelikethis .annoucement_div,
  section.annoucement .bottomdiv .annoucement_div,
  section.news .bottomdiv .news_div {
    padding: 20px;
    margin-bottom: 20px;
    text-align: left;
    flex-direction: initial;
    align-items: initial;
  }
  section.annoucement .bottomdiv .pd10 {
    padding: 0 2px;
  }
  section.awards img {
    width: 80px;
  }
  section.newsroom .owl-carousel .owl-item.center .item {
    transform: none;
    box-shadow: none;
  }
  section.annoucement .annoucement_div.upperdiv,
  section.news .news_div.upperdiv {
    display: inline-block;
    width: 100%;
  }
  section.newsroom {
    margin-top: 40px;
  }
  section.news .upperdiv.news_div h3 {
    margin: 30px 0 40px;
  }
  .footerbottommenu,
  .socailicons_newsletter {
    float: none;
    text-align: center;
  }
  .annouce_sliderwrinner {
    padding: 20px 3px;
  }
  .business_card_warp .business_image img {
    width: 140px;
  }
  .designtabs.owl-carousel {
    padding: 0 35px;
  }
  .owl-carousel.designtabs .owl-stage-outer {
    padding: 15px 10px;
  }
  .tab_data_wapper .designtabs .items {
    margin-right: 20px;
  }
  .odc__btn {
    min-width: initial;
  }
  html.sidePanel {
    overflow: hidden;
  }
  section.video_section {
    height: 100vh;
  }
  section.lifeatodessa {
    background-size: cover;
    background-position: 0;
  }
  section.tiles .flexdiv .thirtypad {
    padding-left: 15px;
    padding-right: 15px;
  }
  section.resources {
    background: #f5f6f8;
    padding: 40px 0;
  }
  .barnds_logowr .brands_logo {
    width: 100%;
    flex-flow: wrap;
    justify-content: center;
  }
  .barnds_logowr .brlogo {
    width: 50%;
    flex: auto;
    margin-bottom: 20px;
  }
  section.odessacloud {
    padding: 30px;
  }
  div.leader_person {
    padding: 0 5px 40px;
  }
  section.different .different_Img {
    width: 100%;
    position: relative;
    bottom: 0;
    right: 0;
  }
  .secnformCon_inner,
  section.focused .focusedinner,
  section.resources .flexdiv {
    flex-direction: column;
  }
  section.focused .focused_txt {
    background: #00abc7;
    min-height: 200px;
    padding: 10px;
    text-align: center;
    margin-top: 30px;
  }
  section.tiles .flexdiv {
    display: flex;
    flex-direction: column;
  }
  section.tiles .tilescontent {
    padding: 20px 10px;
    margin-bottom: 40px;
    min-height: 232px;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: flex-start;
  }
  section.resources .resources_content {
    margin: 36px 0;
    max-width: 100%;
  }
  section.resources .owl-carousel .owl-controls {
    left: 0;
  }
  section.innovate_section .innovatedivinner,
  section.innovate_section h2,
  section.innovate_section p {
    text-align: center;
  }
  section.innovate_section {
    padding: 40px 5px;
    background: #0c70be;
  }
  .barnds_logowr {
    margin: 0 0 40px;
  }
  .custom_containerwidth,
  .tp_page {
    width: 100%;
    margin: 0 auto;
  }
  .secnformCon_inner p {
    padding: 18px 0 30px !important;
  }
  .tp_page {
    padding: 80px 0;
  }
  section.awards .awardswr {
    padding-left: 20px;
    padding-right: 20px;
  }
  section.awards .email_div h4 {
    display: block;
    padding: 0 20px;
  }
  section.awards .email_div span.email {
    float: left;
    top: -9px;
  }
  .trusted_brands_logo.clouds .brlogo {
    margin: 0 15px 15px;
  }
}
@media only screen and (max-width: 480px) {
  .certify_wrap {
    margin: 0 10px;
    width: 120px;
  }
  .advertisement_wrap ul li a img {
    width: 55px;
  }
  .erp_card_wrap .erp_card {
    width: 100%;
  }
  .business_card p {
    min-height: initial;
  }
  .open_design_wrap {
    margin-top: 40px;
  }
  section.awards .email_div span.email {
    top: -5px;
  }
}
@media only screen and (max-width: 410px) {
  .heading h1 {
    font-size: 34px;
  }
  .row.mn8 {
    margin-left: -5px;
    margin-right: -5px;
  }
  .mnp8 {
    padding: 0 5px;
  }
  .gotperksbx .gotperkstext {
    font-size: 14px;
  }
  .careerpgvideo {
    width: 300px;
    height: 280px;
  }
  .plateformspeedbox .nav-tabs > li > a {
    margin: 0 3px;
    font-size: 16px;
    padding: 12px 8px;
  }
  .learn_more_btn button {
    width: 130px;
    margin: 0 5px;
    font-size: 15px;
  }
  .trusted_brands_logo .brlogo {
    margin-left: 10px;
    margin-right: 10px;
  }
  .discover_banner .learn_more_btn a {
    margin: 10px;
    width: 110px;
  }
  .tab_data_wapper .designtabs .items a {
    font-size: 0.8rem;
  }
}
@media only screen and (max-width: 359px) {
  .cloudserverCon .nextrw {
    margin-top: 15px;
  }
  .cloudserversection .cloudserverCon {
    padding-bottom: 130px;
    background-size: 280px 123px;
  }
  .gotperksbx .gotperkstext {
    font-size: 12px;
  }
  .letstalkform .form-control {
    padding: 10px;
    font-size: 13px;
  }
  .careerpgvideo {
    width: 260px;
    height: 300px;
  }
  .letstalkSecondryform .secnformCon .form-control {
    font-size: 14px;
  }
  .trusted_brands_logo .brlogo {
    margin-left: 5px;
    margin-right: 5px;
  }
  .countryAddinfo .headingrows h3 {
    font-size: 21px;
  }
  .tab_data_wapper .designtabs .items a {
    font-size: 11px;
  }
  .trusted_brands_logo.clouds .brlogo {
    margin: 0 5px 15px;
  }
  section.awards .email_div h4 {
    font-size: 16px;
  }
}
@media screen and (max-device-width: 767px) and (orientation: landscape) {
  .banner_textdiv {
    position: static;
    left: auto;
    right: auto;
    transform: none;
    padding: 20px;
  }
  .platformsectionwrap {
    padding-top: 60px;
    padding-bottom: 50px;
  }
  .heading h1 {
    font-size: 32px;
  }
  section.banner .banner_textdiv p {
    margin-bottom: 15px;
  }
  .landswd50 {
    width: 50%;
    float: left;
  }
}
@media (max-height: 480px) and (max-width: 840px) {
  section.banner .banner_inner {
    height: auto;
    max-height: initial;
  }
  section.banner .banner_img {
    width: auto;
    float: none;
    align-items: initial;
    display: block;
    background: 0 0;
  }
  .header_banner .cloud_1,
  .header_banner .cloud_5,
  .platformsectionwrap .dotsdesign,
  section.banner .banner_img img {
    display: none;
  }
  .banner_textdiv {
    position: static;
    width: auto;
    left: auto;
    right: auto;
    transform: none;
    text-align: center;
    padding: 20px;
  }
  section.banner .banner_textdiv p {
    margin: auto auto 15px;
    text-align: center;
  }
  .platformsectionwrap {
    padding-top: 30px;
    padding-bottom: 40px;
  }
  .heading h1 {
    font-size: 32px;
  }
  .integratewithtools .integratecon {
    background: 0 0;
    padding: 0;
  }
  .integratewithtools .inlineform {
    margin-top: 20px;
  }
  section.awards .awardswr {
    max-width: 500px;
  }
}
@media only screen and (min-width: 1500px) {
  section.different .different_Img {
    width: 51%;
    bottom: -180px;
  }
  section.different {
    padding: 80px 0 160px;
  }
  section.different p.membername.madhu {
    right: -18px;
  }
  section.different p.membername.jay {
    bottom: 74px;
    left: -132px;
  }
}
@media only screen and (min-width: 1800px) {
  section.different p.membername.madhu {
    right: -18px;
    bottom: 318px;
  }
  section.different p.membername.jay {
    bottom: 90px;
    left: -113px;
  }
}
@media only screen and (min-width: 2000px) {
  section.different p.membername.madhu {
    right: -78px;
    bottom: 318px;
  }
  section.different p.membername.jay {
    bottom: 90px;
    left: -189px;
  }
}
.turns22,
.turns22 .block-number {
  background: #fff;
  display: -ms-flexbox;
}
.turns22 .section-hero .hero-content .hero-copy .hero-paragraph a,
.turns22 .section-lesson-3 a,
.turns22 .section-lesson-7-8 a {
  color: #b8e3ec;
  font-family: MaisonNeue-Demi;
}
@font-face {
  font-family: MaisonNeue-Demi;
  src: url("../assets/fonts/MaisonNeue-Demi.woff") format("woff");
  font-weight: 400;
  font-style: normal;
}
.turns22 {
  display: flex;
  -ms-flex-direction: column;
  flex-direction: column;
}
.turns22 a {
  color: #00abc8;
}
.turns22 .wrap-inner {
  margin: 0 auto;
  overflow: visible;
  position: relative;
  width: 85%;
}
.turns22 .section {
  min-height: 100vh;
  width: 100%;
}
.turns22 .text-link:hover {
  text-decoration: none;
}
.turns22 .section-grid {
  display: -ms-flexbox;
  display: flex;
}
.turns22 .section-grid .grid-column {
  display: -ms-flexbox;
  display: flex;
  width: 50%;
}
.turns22 .section-grid .grid-column .column-inner-wrap {
  display: -ms-flexbox;
  display: flex;
  -ms-flex-direction: column;
  flex-direction: column;
  -ms-flex-pack: start;
  justify-content: flex-start;
  text-align: center;
  width: calc(1083px / 2);
}
@media only screen and (max-width: 1083px) {
  .turns22 .section-grid .grid-column .column-inner-wrap {
    width: calc(975px / 2);
  }
}
.turns22 .section-grid .grid-column:nth-child(odd) {
  -ms-flex-pack: end;
  justify-content: flex-end;
}
.turns22 .section-grid .grid-column:nth-child(2n) {
  -ms-flex-pack: start;
  justify-content: flex-start;
}
.turns22 .block-number {
  -ms-flex-align: center;
  align-items: center;
  -ms-flex-item-align: start;
  align-self: flex-start;
  display: flex;
  font-size: 24px;
  height: 95px;
  -ms-flex-pack: center;
  justify-content: center;
  margin: 0 auto;
  text-align: center;
  width: 95px;
}
.turns22 .block-copy {
  display: -ms-flexbox;
  display: flex;
  -ms-flex-direction: column;
  flex-direction: column;
  -ms-flex-positive: 1;
  flex-grow: 1;
  -ms-flex-pack: center;
  align-items: center;
  justify-content: center;
  text-align: center;
  padding: 75px;
}
.turns22 .block-header {
  color: #fff;
  font-size: 40px;
  margin: 0 0 30px;
  line-height: 1.3;
}
.turns22 .block-paragraph {
  color: #fff;
  font-size: 16px;
  margin: 0;
}
.turns22 .block-hashtag {
  color: #03363d;
  font-weight: 700;
  margin: 30px 0 0;
}
.turns22 .handhelds-show {
  display: none;
}
.turns22 .handhelds-hide {
  display: block;
}
.turns22 .section-hero {
  background: #00abc8;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-direction: column;
  flex-direction: column;
  -ms-flex-pack: center;
  justify-content: center;
}
.turns22 .section-hero .wrap-inner {
  display: -ms-flexbox;
  display: flex;
  -ms-flex-direction: row;
  flex-direction: row;
  padding: 100px 0;
}
.turns22 .section-hero .hero-number {
  text-align: center;
  width: 50%;
}
.turns22 .section-hero .hero-number-image {
  margin-top: 100px;
  -ms-flex-item-align: center;
  -ms-grid-row-align: center;
  align-self: center;
  width: 95%;
}
.turns22 .section-hero .hero-logo {
  margin: 0 auto 40px;
  width: 30px;
}
.turns22 .section-hero .hero-arrow-link {
  margin: 60px auto 0;
  transition: 0.2s;
  width: 30px;
}
.turns22 .section-hero .hero-arrow-link img {
  width: 100%;
}
.turns22 .section-hero .hero-arrow-link:focus,
.turns22 .section-hero .hero-arrow-link:hover {
  transform: translateY(5px);
}
.turns22 .section-hero .hero-content {
  display: -ms-flexbox;
  display: flex;
  -ms-flex-direction: column;
  flex-direction: column;
  -ms-flex-pack: center;
  justify-content: center;
  text-align: center;
  width: 50%;
}
.turns22 .section-hero .hero-content .hero-copy {
  color: #fff;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-direction: column;
  flex-direction: column;
  -ms-flex-pack: center;
  justify-content: center;
  width: 100%;
}
.turns22 .section-hero .hero-content .hero-copy .hero-heading {
  margin: 0;
  color: #fff;
  font-size: 26px;
  font-weight: 500;
}
.turns22 .section-hero .hero-content .hero-copy .hero-subheading {
  font-size: 46px;
  margin: 40px auto 20px;
  max-width: 380px;
  color: #fff;
}
.turns22 .section-hero .hero-content .hero-copy .hero-paragraph {
  font-size: 17px;
  margin: 0 auto;
  max-width: 380px;
  color: #fff;
}
.turns22 .section-intro {
  background: #fff;
  min-height: auto;
  padding: 100px 0;
  text-align: center;
}
.turns22 .section-intro .block-header {
  color: #2a2d36;
  margin: 0 auto;
  max-width: 500px;
}
.turns22 .section-lesson-1 .grid-column:nth-child(odd) {
  background: url(../assets/images/turns22/lesson_1_bg.jpg) top left/cover no-repeat
    #fff;
}
.turns22 .section-lesson-1 .grid-column:nth-child(2n),
.turns22 .section-lesson-7-8 .grid-column:nth-child(odd) {
  background: #0075a3;
}
.turns22 .section-lesson-1 .block-copy {
  padding-top: 100px;
  padding-bottom: 100px;
}
.turns22 .section-lesson-1 .block-header {
  max-width: 280px;
}
.turns22 .section-lesson-1 .block-paragraph {
  max-width: 320px;
}
.turns22 .section-lesson-2 .grid-column:nth-child(odd),
.turns22 .section-lesson-7-8 .grid-column:nth-child(2n) {
  background: #263746;
}
.turns22 .section-lesson-2 .grid-column:nth-child(2n) .tweet-shirt {
  -ms-flex-item-align: center;
  -ms-grid-row-align: center;
  align-self: center;
  background: #fff;
  max-width: 70%;
  margin: 0 auto;
}
.turns22 .section-lesson-2 .block-header {
  max-width: 200px;
}
.turns22 .section-lesson-2 a {
  font-family: MaisonNeue-Demi;
}
.turns22 .section-lesson-3 {
  background-image: url(../assets/images/turns22/lesson_3_bg.jpg);
  background-size: cover;
  -ms-flex-align: center;
  align-items: center;
  background-position: center;
  background-repeat: no-repeat;
  display: -ms-flexbox;
  display: flex;
}
.turns22 .section-lesson-3 .lesson-content {
  background: #296fb7;
  margin: 150px auto;
  padding: 0 30px 50px;
  width: 75%;
}
@media only screen and (max-width: 975px) {
  .turns22 .section-grid .grid-column .column-inner-wrap {
    width: calc(778px / 2);
  }
  .turns22 .block-copy {
    padding: 50px;
  }
  .turns22 .block-header {
    font-size: 36px;
  }
  .turns22 .block-paragraph {
    padding: 0 30px;
  }
  .turns22 .section-hero .hero-content .hero-copy .hero-paragraph {
    width: 82%;
  }
  .turns22 .section-lesson-3 .lesson-content {
    width: auto;
  }
}
.turns22 .section-lesson-3 .block-header {
  font-size: 30px;
  max-width: 420px;
  margin: 30px auto 0;
}
.turns22 .section-lesson-3 .block-copy {
  padding: 20px 0;
  text-align: center;
}
.turns22 .section-lesson-3 .block-paragraph {
  margin: 30px auto 0;
  max-width: 300px;
}
.turns22 .section-lesson-3 a {
  font-size: 18px;
}
.turns22 .section-lesson-4-5 .grid-column:nth-child(odd) .block-header {
  max-width: 350px;
}
.turns22 .section-lesson-4-5 .grid-column:nth-child(2n) .block-paragraph,
.turns22 .section-lesson-4-5 .grid-column:nth-child(odd) .block-paragraph {
  max-width: 330px;
}
.turns22 .section-lesson-4-5 .grid-column:nth-child(2n) .block-header,
.turns22 .section-lesson-7-8 .grid-column:nth-child(2n) .block-header,
.turns22 .section-lesson-7-8 .grid-column:nth-child(odd) .block-header {
  max-width: 300px;
  margin-bottom: 10px;
}
.turns22
  .section-lesson-4-5
  .grid-column:nth-child(2n)
  .block-header:first-child {
  margin-bottom: 0;
}
.turns22 .section-lesson-4-5 .block-header,
.turns22 .section-lesson-4-5 .block-paragraph {
  color: #2b2e37;
}
.turns22 .section-lesson-4-5 .block-paragraph a {
  color: #0075a3;
  font-family: MaisonNeue-Demi;
}
.turns22 .section-lesson-10 .block-number,
.turns22 .section-lesson-4-5 .grid-column:nth-child(odd) {
  background: #b8e3ec;
}
.turns22 .section-lesson-4-5 .grid-column:nth-child(2n) {
  background: #89d3e0;
}
.turns22 .section-lesson-6 .block-header {
  max-width: 280px;
  margin: 0 auto;
}
.turns22 .section-lesson-6 .grid-column:nth-child(odd) {
  background-image: url(../assets/images/turns22/lesson_6_bg.jpg);
  background-size: cover;
  background-repeat: no-repeat;
  background-position: center;
}
@media (min--moz-device-pixel-ratio: 1.3),
  (-webkit-min-device-pixel-ratio: 1.3),
  (min-device-pixel-ratio: 1.3),
  (min-resolution: 1.3dppx) {
  .turns22 .section-lesson-6 .grid-column:nth-child(odd) {
    background-image: url(../assets/images/turns22/lesson_6_bg.jpg);
    background-size: cover;
  }
}
.turns22 .section-lesson-6 .grid-column:nth-child(2n) {
  background: #296fb7;
}
.turns22 .section-lesson-9 .grid-column:nth-child(odd) {
  background: #00abc8;
}
.turns22 .section-lesson-9 .grid-column:nth-child(2n) {
  background: #fff;
}
.turns22 .section-lesson-9 .content-logo {
  margin: 10px 20px;
  width: 180px;
}
.turns22 .section-lesson-9 .block-header {
  color: #fff;
  max-width: 280px;
}
.turns22 .section-lesson-9 .block-paragraph {
  color: #263746;
  font-size: 24px;
  margin-bottom: 10px;
  max-width: 300px;
}
.turns22 .section-lesson-9 .block-paragraph-bold {
  font-family: MaisonNeue-Bold;
}
.turns22 .section-lesson-9 .block-tag {
  color: #00acc8;
}
.turns22 .section-lesson-9 ul {
  width: 85%;
  margin: 20px auto;
  text-align: left;
  counter-reset: number;
  list-style-type: none;
}
.turns22 .section-lesson-9 ul li:before {
  position: absolute;
  left: 0;
  counter-increment: number;
  content: counter(number) "\a0";
}
.turns22 .section-lesson-9 ul li {
  position: relative;
  max-width: 280px;
  color: #2b2e37;
  padding-left: 15px;
}
.turns22 .section-lesson-10 .grid-column:nth-child(2n) {
  background: url(../assets/images/turns22/lesson_10_bg.png) top right/cover no-repeat;
}
.turns22 .section-lesson-10 .block-header,
.turns22 .section-lesson-11 .block-paragraph {
  color: #2b2e37;
  max-width: 300px;
}
.turns22 .section-lesson-10 .block-paragraph {
  color: #2b2e37;
  margin: 10px auto 40px;
  max-width: 250px;
}
.turns22 .section-lesson-11 {
  background-color: #f3f3f5;
}
.turns22 .section-lesson-11 .grid-column:nth-child(odd) {
  background: url(../assets/images/turns22/lesson_11_bg.png) center right/cover
    no-repeat #f3f3f5;
}
.turns22 .section-lesson-11 .complicated-relationships {
  margin: 0 auto 35px;
  width: 75%;
}
.turns22 .section-lesson-11 .block-header {
  max-width: 300px;
  color: #2b2e37;
}
.turns22 .section-lesson-11 .odc__btn {
  margin-top: 40px;
}
.turns22 .section-casablanca {
  background: url(../assets/images/turns22/casblanca_bg.jpg) 0 0 / cover no-repeat;
  display: -ms-flexbox;
  display: flex;
  text-align: center;
}
.turns22 .section-casablanca .wrap-inner {
  display: -ms-flexbox;
  display: flex;
  -ms-flex-direction: column;
  flex-direction: column;
  -ms-flex-pack: center;
  justify-content: center;
}
.turns22 .section-casablanca .block-header {
  color: #fff;
  margin: 0 auto 40px;
  max-width: 650px;
}
.turns22 .section-casablanca .casablanca-logo-image {
  height: auto;
  width: 60px;
}
.turns22 .section-snapchat {
  display: -ms-flexbox;
  display: flex;
  text-align: center;
}
.turns22 .section-snapchat .wrap-inner {
  display: -ms-flexbox;
  display: flex;
  -ms-flex-direction: column;
  flex-direction: column;
  -ms-flex-pack: justify;
  justify-content: space-between;
}
.turns22 .section-snapchat .snapchat-follow {
  display: -ms-flexbox;
  display: flex;
  -ms-flex-direction: column;
  flex-direction: column;
  -ms-flex-positive: 1;
  flex-grow: 1;
  -ms-flex-pack: center;
  justify-content: center;
}
.turns22 .section-snapchat .snapchat-logo {
  height: 150px;
  margin: 0 auto;
  width: 150px;
}
.turns22 .section-snapchat .block-header {
  color: #2b2e37;
  font-size: 28px;
  margin: 40px 0 0;
}
@media only screen and (max-width: 700px) {
  .turns22 .section-grid {
    -ms-flex-direction: column;
    flex-direction: column;
  }
  .turns22 .section-grid .grid-column {
    min-height: 100vh;
    width: 100%;
  }
  .turns22 .section-grid .grid-column .column-inner-wrap {
    width: 100%;
  }
  .turns22 .block-copy {
    padding: 50px 15%;
  }
  .turns22 .block-header {
    font-size: 28px;
  }
  .turns22 .block-paragraph {
    padding: 0;
  }
  .turns22 .block-hashtag {
    margin: 30px 0;
  }
  .turns22 .handhelds-show {
    display: block;
  }
  .turns22 .handhelds-hide,
  .turns22 .section-lesson-11 .grid-column:nth-child(odd) {
    display: none;
  }
  .turns22 .section-hero .wrap-inner {
    -ms-flex-direction: column;
    flex-direction: column;
    padding: 60px 0;
  }
  .turns22 .section-hero .hero-number {
    height: auto;
    width: 100%;
    -ms-flex-direction: column;
    flex-direction: column;
  }
  .turns22 .section-hero .hero-number-image {
    margin: 40px auto;
    max-width: 90%;
  }
  .turns22 .section-hero .hero-logo {
    margin-bottom: 30px;
  }
  .turns22 .section-hero .hero-content {
    padding: 20px 0;
    width: 100%;
  }
  .turns22 .section-hero .hero-content .hero-copy .hero-heading,
  .turns22 .section-snapchat .block-header {
    font-size: 22px;
  }
  .turns22 .section-hero .hero-content .hero-copy .hero-subheading {
    font-size: 40px;
  }
  .turns22 .section-intro {
    padding: 80px 15%;
  }
  .turns22 .section-lesson-2 .grid-column:nth-child(2n) .tweet-shirt {
    max-width: 100%;
  }
  .turns22 .section-lesson-3 .block-header {
    font-size: 22px;
    width: 100%;
  }
  .turns22 .section-lesson-9 .content-logo {
    margin-bottom: 40px;
  }
}
.turns22 .section-snapchat .block-paragraph {
  color: #2b2e37;
  font-size: 13px;
  margin: 0 auto 30px;
  max-width: 700px;
}

	</style>

<article class="turns22">
	<section class="section section-hero">
		<div class="wrap-inner">
			<div class="hero-number">
				<a class="handhelds-show" href="<?php echo base_url(); ?>">
					<img class="hero-logo" src="<?php echo base_url(); ?>assets/images/turns22/o_logo.png" alt="Logo: OdessaInc">
				</a>
				<img class="hero-number-image" src="<?php echo base_url(); ?>assets/images/turns22/aniv_22.png" alt="The number 22">
			</div>
			<div class="hero-content">
				<a class="handhelds-hide" href="<?php echo base_url(); ?>">
					<img class="hero-logo" src="<?php echo base_url(); ?>assets/images/turns22/o_logo.png" alt="Logo: OdessaInc">
				</a>
				<div class="hero-copy">
					<h1 class="hero-heading">Odessa is 22 years old</h1>
					<h2 class="hero-subheading">Like a fine vintage, we get better with age</h2>
					<p class="hero-paragraph">It’s true... we’re now 22, and we’ve seen some things. Back when we started, the <a href="https://512pixels.net/wp-content/uploads/S3/2012-12-13-bondi-blue.jpeg" target="_blank">Apple iMac</a> was the colorful craze in technology and a little something called <a href="https://mybeeponline.com/wp-content/uploads/2018/09/98google-1.jpg" target="_blank">Google</a> launched at Stanford. From a college dorm in the midwest, Odessa’s co-founders were about to start their own journey. Times sure have changed. We have too.</p>
				</div>
				<a class="hero-arrow-link js-down-arrow" href="javascript:void(0)"><img class="hero-arrow-image" src="<?php echo base_url(); ?>/assets/images/turns22/arrow.png" alt="Icon: down arrow"></a>
			</div>
		</div>
	</section>
	<section class="section section-intro js-section-intro">
		<h2 class="block-header">Here are a few of the lessons we’ve learned along the&nbsp;way.</h2>
	</section>
	<section class="section section-grid section-lesson-1">
		<div class="grid-column"> </div>
		<div class="grid-column">
			<div class="column-inner-wrap">
				<div class="block-number">01</div>
				<div class="block-copy">
					<h3 class="block-header">Always think of the customer.</h3>
					<p class="block-paragraph">It’s a partnership not just a purchase. Stick with the customer for smooth sailing, choppy waters, and everything in between. Just steer clear of icebergs.</p>
				</div>
			</div>
		</div>
	</section>
	<section class="section section-grid section-lesson-2">
		<div class="grid-column">
			<div class="column-inner-wrap">
				<div class="block-number">02</div>
				<div class="block-copy">
					<h3 class="block-header">Don’t test releases in production. Ever.</h3>
					<p class="block-paragraph"><span class="SL_swap" id="turns-10-blog-link"><a href="<?php echo base_url(); ?>assets/images/production-testing.jpg" target="_blank">People will be annoyed</a></span></p>
				</div>
			</div>
		</div>
		<div class="grid-column"> <img class="tweet-shirt" src="<?php echo base_url(); ?>assets/images/turns22/lesson_2_bg.jpg" alt="Photo: T-shirt"> </div>
	</section>
	<section class="section section-lesson-3">
		<div class="wrap-inner">
			<div class="lesson-content">
				<div class="block-number">03</div>
				<div class="block-copy">
					<h3 class="block-header">Business teams are made of people, and those people have care and compassion for their communities.</h3>
					<p class="block-paragraph">Keep community engagement front and center. Be mindful, responsible, and generous with time and profit.</p>
					<p class="block-paragraph block-paragraph-bold"><a class="text-link" href="https://www.odessainc.com/blog/non-profit-foundation-launch/" target="_blank">See what we’re doing</a></p>
				</div>
			</div>
		</div>
	</section>
	<section class="section section-grid section-lesson-4-5">
		<div class="grid-column">
			<div class="column-inner-wrap">
				<div class="block-number">04</div>
				<div class="block-copy">
					<h3 class="block-header">All companies will make mistakes from time to time. It’s ok.</h3>
					<p class="block-paragraph">Stay nimble, stay open, and above all else – fail fast and keep moving.</p>
					<p class="block-hashtag">#callitagile</p>
				</div>
			</div>
		</div>
		<div class="grid-column">
			<div class="column-inner-wrap">
				<div class="block-number">05</div>
				<div class="block-copy">
					<h3 class="block-header">The B’s in B2B still represent people.</h3>
					<h3 class="block-header">Make selling enterprise software fun.</h3>
					<p class="block-paragraph">
						<a class="text-link" href="<?php echo base_url(); ?>/assets/images/turns22/who-we.jpg" target="_blank">How we do</a>
					</p>
				</div>
			</div>
		</div>
	</section>
	<section class="section section-grid section-lesson-6">
		<div class="grid-column"> </div>
		<div class="grid-column">
			<div class="column-inner-wrap">
				<div class="block-number">06</div>
				<div class="block-copy">
					<h3 class="block-header">Celebrate all the wins – the small and the big ones.</h3>
				</div>
			</div>
		</div>
	</section>
	<section class="section section-grid section-lesson-7-8">
		<div class="grid-column">
			<div class="column-inner-wrap">
				<div class="block-number">07</div>
				<div class="block-copy">
					<h3 class="block-header">Ups and downs are great for trampolines. In business, aim for a straight line up and to the right.</h3>
					<p class="block-paragraph block-paragraph-bold"><a class="text-link" href="https://www.odessainc.com/blog/odessa-recognized-on-inc5000-list" target="_blank">Just ask Inc 5000</a></p>
				</div>
			</div>
		</div>
		<div class="grid-column">
			<div class="column-inner-wrap">
				<div class="block-number">08</div>
				<div class="block-copy">
					<h3 class="block-header">Being good people attracts more good people.</h3>
					<p class="block-paragraph"><a class="text-link" href="https://www.odessainc.com/blog/navigating-virtual-interviews-remote-work/" target="_blank">Here’s how we pick ‘em</a></p>
				</div>
			</div>
		</div>
	</section>
	<section class="section section-grid section-lesson-9">
		<div class="grid-column">
			<div class="column-inner-wrap">
				<div class="block-number">09</div>
				<div class="block-copy">
					<h3 class="block-header">Make sure to name your company something truly <i>epic</i>.</h3>
				</div>
			</div>
		</div>
		<div class="grid-column">
			<div class="column-inner-wrap">
				<div class="block-number"></div>
				<div class="block-copy">
					<img class="content-logo" src="<?php echo base_url(); ?>assets/images/logo.png" alt="Logo: OdessaInc">
					<p class="block-paragraph block-paragraph-bold">né odyssey</p>
					<p class="block-tag">noun  |  od•ys•sey  |  \ä-də-sē\</p>
					<ul>
						<li>: a long wandering or voyage usually marked by many changes of fortune</li>
						<li>: an intellectual or spiritual wandering or quest • an odyssey of self-discovery</li>
					</ul>
				</div>
			</div>
		</div>
	</section>
	<section class="section section-grid section-lesson-10">
		<div class="grid-column">
			<div class="column-inner-wrap">
				<div class="block-number">10</div>
				<div class="block-copy">
					<h3 class="block-header">Be innovative. Think bigger. Build solutions that work well together.</h3>
					<p class="block-paragraph">Like a masterful game of Tetris, but for asset finance.</p>
					<a href="https://www.odessainc.com/platform" class="odc__btn odc__btn--primary odc__btn--md" target="_blank">Explore the Platform</a>
				</div>
			</div>
		</div>
		<div class="grid-column"> </div>
	</section>
	<section class="section section-grid section-lesson-11">
		<div class="grid-column"> </div>
		<div class="grid-column">
			<div class="column-inner-wrap">
				<div class="block-number">11</div>
				<div class="block-copy">
					<img class="complicated-relationships handhelds-show" src="<?php echo base_url(); ?>assets/images/turns22/lesson_11_bg.png" alt="Illustration: people working together">
					<h3 class="block-header">Growth can get complicated. Keep it simple.</h3>
					<p class="block-paragraph">We’ve shared ours. Now your turn. Let us be a part of your transformation.</p>
					<a href="https://www.odessainc.com/get-started" class="odc__btn odc__btn--primary odc__btn--md" target="_blank">Get Started</a>
				</div>
			</div>
		</div>
	</section>
	<section class="section section-casablanca">
		<div class="wrap-inner">
			<h3 class="block-header">Here’s to the next 22 trips around the sun – we hope you’ll join us</h3>
			<a class="casablanca-logo-link" href="<?php echo base_url(); ?>">
				<img class="casablanca-logo-image" src="<?php echo base_url(); ?>assets/images/turns22/o_logo.png" alt="Logo: OdessaInc">
			</a>
		</div>
	</section>
	<section class="section section-snapchat">
		<div class="wrap-inner">
			<div class="snapchat-follow"> <img class="snapchat-logo" src="<?php echo base_url(); ?>assets/images/turns22/instagram_logo.png" alt="Logo: Snapchat">
				<h3 class="block-header">Follow us <a class="text-link" href="https://www.instagram.com/odessainc/" target="_blank">@OdessaInc</a></h3>
			</div>
			<p class="block-paragraph">iMac is a trademark or registered trademark of Apple, Inc. Google is a trademark or registered trademark of Alphabet, Inc. Tetris is a trademark or registered trademark of The Tetris Company, LLC.</p>
		</div>
	</section>
</article>
<script>
	$(document).ready(function() {
		$('.js-down-arrow').on('click', function() {
			$('html, body').animate({
				scrollTop: $('.js-section-intro').offset().top
			}, 500);
		});
	});
</script>