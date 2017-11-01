# graficos_Chart.js

Link para voce ver como e feito: http://renatolucena.ml/blog/blogs/Maio_Grafico.html 
Biblioteca e baixada da fonte: http://www.chartjs.org/

<!DOCTYPE html>
<head><meta charset="utf-8" />
<script type="text/javascript">window.NREUM||(NREUM={});NREUM.info={"beacon":"bam.nr-data.net","errorBeacon":"bam.nr-data.net","licenseKey":"27851e2035","applicationID":"3094824","transactionName":"JQpZTURXXlRcRBYSXhURRBZFUF1P","queueTime":0,"applicationTime":95,"agent":""}
</script>
<title>Criando um dashboard dinâmico com o ChartJS</title>
<script>window.Tutsplus = {};
Tutsplus.environment = 'production';
Tutsplus.recaptchaSiteKey = '6Lc_OAETAAAAABHaGkjvRfbPQizlpILv2YzeqTil';
Tutsplus.rollbarToken = '5b20f5bdb8ae402fb5bcfd50cc7f04a3';
Tutsplus.rollbarEnabled = true;
Tutsplus.ssoEnabled = true;
Tutsplus.ssoServer = 'https://account.envato.com';
</script>

<script src="https://static.tutsplus.com/assets/application-a10d8c36432513124d11f66992952768.js">
</script>
<link rel="alternate" type="application/atom+xml" title="Atom 1.0" href="https://tutsplus.com/posts.atom" /><meta name="csrf-param" content="authenticity_token" />
<meta name="csrf-token" content="ig9zTaoVkT2Vvi8EGbntWS6//Pma//8pFX2goHPU/hrYN4OWXK6TE7gxVvGdE8jsfTC+WSXiBOni17onneFLMw==" />
<meta content="initial-scale=1" name="viewport" />
<meta content="index, follow" name="robots" />
<meta content="Criando um dashboard dinâmico com o ChartJS" property="og:title" />
<meta content="Web Design Envato Tuts+" property="og:site_name" />
<meta content="1494084460809023" property="fb:app_id" />
<meta content="Hoje vamos criar um dashboard com gráficos dinâmicos utilizando a solução ChartJS. ChartJS é uma poderosa biblioteca JavaScript, sem dependências, que auxilia na criação de gráficos..." name="description" property="og:description" /><meta content="article" property="og:type" /><meta content="https://webdesign.tutsplus.com/pt/tutorials/build-a-dynamic-dashboard-with-chartjs--webdesign-14363" property="og:url" /><meta content="true" property="native:billable" /><meta content="2980" property="native:length" /><meta property="native:priority" /><link href="https://webdesign.tutsplus.com/tutorials/build-a-dynamic-dashboard-with-chartjs--webdesign-14363" hreflang="en" rel="alternate" /><link href="https://webdesign.tutsplus.com/pt/tutorials/build-a-dynamic-dashboard-with-chartjs--webdesign-14363" hreflang="pt" rel="alternate" /><meta content="https://cms-assets.tutsplus.com/uploads/users/30/posts/9822/preview_image/chartjs-retina.png" property="og:image" /><meta content="summary_large_image" name="twitter:card" /><meta content="@tutsplus" name="twitter:site" /><meta content="Criando um dashboard dinâmico com o ChartJS" name="twitter:title" /><meta content="


 


Hoje vamos criar um dashboard com gráficos dinâmicos utilizando a solução ChartJS. ChartJS é uma poderosa biblioteca JavaScript, sem dependências, que auxilia na criação de gráficos..." name="twitter:description" /><meta content="https://cms-assets.tutsplus.com/uploads/users/30/posts/9822/preview_image/chartjs-retina.png" name="twitter:image" /><meta content="t60fIs6JfmiK5FpPBlh_bKr5lJSX6abJYYIFjqiFG3M" name="google-site-verification" /><link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700" rel="stylesheet" type="text/css" /><meta content="D3E35339A8EC086B14C62277CBEC8234" name="msvalidate.01" /></head><body class="page-body topic-webdesign" data-ga-account="UA-11792865-37" data-ga-domain="tutsplus.com" data-wt-dcsid="dcs222cpd4g6lg7wb3cum8l5g_6w6m"><nav class="global-nav view"></nav><div class="avert avert--leaderboard"></div>
<div class="page-content topic-webdesign"><main class="content"><div class="content-banner"><div class="content-banner-restricted-width"><div class="content-banner__icon"></div>
<div class="content-banner__body"><h1 class="content-banner__title">Criando um dashboard dinâmico com o ChartJS</h1></div></div></div><div class="content-title"></div><article class="post article view">
  <div class="layout__content-with-sidebar"><div class="content-heading"><div class="content-heading__primary"><div class="content-heading__primary-authorship"><span class="content-heading__author">by <span class="content-heading__author-name"><a rel="author" href="https://tutsplus.com/authors/jonathan-cutrell">Jonathan Cutrell</a></span></span><time class="content-heading__publication-date" datetime="2013-08-12T10:38:23Z" title="12 Aug 2013">12 Aug 2013</time></div><div class="content-heading__primary-attributes"></div>
</div><div class="content-heading__secondary"><div class="content-heading__secondary-categories"></div>
</div></div><div class="post-body view"><div class="post-body__translated-by"><p>&nbsp;</p>
</div>
<div class="post-body__body"><script async="" charset="utf-8" src="//platform.twitter.com/widgets.js"></script><div class="post-body__content">

<figure>
 <img alt="" src="https://cdn.tutsplus.com/webdesign/uploads/2013/08/chartjs-final.png"></figure>

<p>Hoje vamos criar um dashboard com gráficos dinâmicos utilizando a solução <a href="http://www.chartjs.org/" rel="external">ChartJS</a>. ChartJS é uma poderosa biblioteca JavaScript, sem dependências, que auxilia na criação de gráficos para web através do elemento HTML canvas. E o melhor, a utilização do ChartJS é super simples até mesmo para designers. Vamos focar na parte funcional da biblioteca para criar gráficos de maneira simples e rápida. Vamos criar um dashboard responsivo do inicio ao fim.</p>

<h2>Introdução</h2>

<p>Vamos criar nossa dashboard com base no <a href="http://html5boilerplate.com/" rel="external">HTML5 Boilerplate</a>. Faça download do arquivo compactado, ou clone o repositório via Git. Vamos nomear o diretório do projeto de "chartjs_dashboard", e jogar todos os arquivos direto na pasta.</p>

<pre class="brush:bash noskimlinks noskimwords"># na linha de comando / terminal 
git clone git@github.com:h5bp/html5-boilerplate.git chartjs_dashboard</pre>

<p>Agora é a vez do ChartJS. Vá a até a versão uminified (versão sem compressão, facilita a leitura de erros e deixa o código mais legível, eliminando espaços no texto para otimizar a performance de leitura e execução) do ChartJS no link <a>raw.github.com/nnnick/Chart.js/master/Chart.js</a>, e copie todo o conteúdo para o seu arquivo js/plugins.js.</p>

<div>
 <strong>Dica:</strong>
 em produção, é recomendado utilizar a versão minified (comprimida) do arquivo JavaScript do ChartJS para otimizar a performance.</div>

<p>Sua estrutura de arquivos deve estar parecida com essa:</p>

<pre class="brush:bash noskimlinks noskimwords">├── 404.html 
├── crossdomain.xml 
├── css 
│ ├── main.css 
│ └── normalize.css 
├── favicon.ico 
├── img 
├── index.html 
├── js 
│ ├── main.js 
│ ├── plugins.js 
│ └── vendor 
│ ├── jquery-1.10.1.min.js 
│ └── modernizr-2.6.2.min.js 
└── robots.txt</pre>

<p><strong>Nota:</strong> não incluímos os arquivos do HTML5 Boirlerplate que não vamos utilizar.</p>

<h2>Paleta de cores</h2>

<p>Antes de começar a programar o site, vamos começar definindo uma paleta de cores para o design. Com isso temos o inicio de uma style guide para o nosso pequeno projeto, uma prática comum de design.</p>

<p>Se você vai criar um dashboard com uma marca em mente, ou para empresas por exemplo, tente usar as cores da marca. No nosso exemplo vamos definir duas cores primárias e duas auxiliares. Também vamos utilizar contrastes e sombras dessas cores.</p>

<div>
 <ul>
 <li>dark blue: <code>#637b85</code></li>
 <li>green: <code>#2c9c69</code></li>
 <li>yellow: <code>#dbba34</code></li>
 <li>red: <code>#c62f29</code></li>
 </ul>
 <p>Vamos utilizar uma camada mais clara do dark blue, <code>#d0dde3</code>. E por último, vamos utilizar cores na escala do cinza.</p>
</div>

<h2>Introdução básica ao ChartJS</h2>

<p>O ChartJS utiliza o elemento canvas. O elemento canvas junto com JavaScript permite a criação de uma interface para desenhar pixels. É muito comparado ao <a href="http://webdesign.tutsplus.com/pt/articles/getting-started-with-scalable-vector-graphics-svg--webdesign-7515" rel="external">SVG</a>, que oferece um elemento no DOM que permite a criação de vetores em páginas web. No entanto, desenhar pixels no elemento canvas não permite manter o elemento na memória e o mesmo não responde a eventos JavaScript.</p>

<p>Se deseja mais informações sobre o ChartJS, visite meu post (Thierry Rene) de <a href="http://websocialdev.com/graficos-chart-js-introducao/" title="Chart.js – como criar gráficos com o Chart.js">introdução ao ChartJS</a>.</p>

<p>Chega de conversa fiada - Como de fato começar a utilizar o ChartJS?</p>

<p>Por sorte, a pagina do <a href="http://www.chartjs.org/" rel="external">ChartJS</a> tem uma série de exemplos que ajudam muito na primeira utilização da biblioteca. O padrão é criar o elemento canvas no arquivo HTML, selecionar este com JavaScript, e criar o gráfico.</p>

<pre class="brush: html noskimlinks noskimwords">&lt;canvas id="something"&gt;&lt;/canvas&gt;
&lt;script&gt;
var canvas = document.getElementById("something");
var ctx = canvas.getContext("2d");
new Chart(ctx).Line(data, options);
&lt;/script&gt;</pre>

<p>O exemplo acima assume que você declarou como objetos os itens 'data' e 'options', para criar um gráfico em linha.</p>

<p>No nosso exemplo vamos utilizar o gráfico em rosca, em linha, e radar. Esses gráficos vão representar diferentes métricas, mas você pode adaptar como quiser para qualquer outro negócio sem muita dificuldade.</p>

<h3>Marcação HTML</h3>

<p>Vamos começar definindo algumas linhas básicas em HTML para o layout da nossa página.</p>

<pre class="brush: html noskimlinks noskimwords">&lt;div class="wrapper"&gt;
&lt;header&gt;
 &lt;div class="container clearfix"&gt;
 &lt;h1&gt;Overview &lt;span&gt;July 8-12, 2013&lt;/span&gt;&lt;a class="button"&gt;Change Date Range&lt;/a&gt;&lt;/h1&gt;
 &lt;/div&gt;
&lt;/header&gt;
&lt;div class="container clearfix"&gt;
 &lt;div class="third widget doughnut"&gt;
 &lt;h3&gt;Breakdown of Hours&lt;/h3&gt;
 &lt;div class="canvas-container"&gt;
 &lt;canvas id="hours"&gt;&lt;/canvas&gt;
 &lt;/div&gt;
 &lt;/div&gt;
 &lt;div class="third widget line"&gt;
 &lt;div class="chart-legend"&gt;
 &lt;h3&gt;Shipments per Day&lt;/h3&gt;
 &lt;/div&gt;
 &lt;div class="canvas-container"&gt;
 &lt;canvas id="shipments"&gt;&lt;/canvas&gt;
 &lt;/div&gt;
 &lt;/div&gt;
 &lt;div class="third widget"&gt;
 &lt;div class="chart-legend"&gt;
 &lt;h3&gt;Customer Service Assessment&lt;/h3&gt;
 &lt;/div&gt;
 &lt;div class="canvas-container"&gt;
 &lt;canvas id="departments"&gt;&lt;/canvas&gt;
 &lt;/div&gt;
 &lt;/div&gt;
&lt;/div&gt;
&lt;div class="push"&gt;&lt;/div&gt;
&lt;/div&gt;
&lt;footer&gt;
&lt;/footer&gt;</pre>

<p>Note que aqui temos as seções header, o meio "middle" e o rodapé "footer" Here, we can see that we have a basic header, middle, and footer section. Estamos utilizando a classes .wrapper e .push para criar o rodapé (<a href="http://ryanfait.com/sticky-footer/" rel="external">clique aqui para maiores informações sobre o rodapé sticky footer</a>). Vamos criar um layout com foco na responsividade ou mobile friendly, e a partir deste vamos definir os demais layouts, para tablets, desktops e afins. Vamos ter um certo trabalho durante a criação mas a estrutura não vai apresentar problemas de exibição do conteúdo, pelo menos inicialmente.</p>

<h2>Antes de continuarmos...</h2>

<p>O elemento canvas não funciona muito bem com media queries, que é o recurso mais comum para aplicar técnicas responsivas em páginas web. Então vamos utilizar um método diferente para criar gráficos responsivos com ajuda do JavaScript.</p>

<p>Dentro do nosso arquivo main.js, vamos criar uma função de redimesionamento baseada no tamanho da tela. Também vamos precisar de uma função para redesenhar o canvas após a função de redimesionamento ser executada. E por último, quando o gráfico é refeito não precisa de animações.</p>

<pre class="brush:js noskimlinks noskimwords">(function(){
// variável para o timeout
var t;
// função de redimensionamento
// com argumento para animar ou não o gráfico
function size(animate){
// Não queremos que haja uma animação no gráfico caso o mesmo tenha sido
// redimensionado
 // Otimiza o carregamento da função que apenas executa o redimensionamento após redimensionar a janela
 clearTimeout(t);
 // Essa linha vai resetar o timeout.
 t = setTimeout(function(){
 $("canvas").each(function(i,el){
 // Configurar a altura e largura do elemento canvas igual a do elemento pai.
 // O elemento pai é a div.canvas-container
 $(el).attr({
 "width":$(el).parent().width(),
 "height":$(el).parent().outerHeight()
 });
 });
 redraw(animate);

// criamos um loop através dos widgets e configuramos a altura de acordo
 var m = 0;
 // temos de remover qualquer configuração de altura inline.
 $(".widget").height("");
 $(".widget").each(function(i,el){ m = Math.max(m,$(el).height()); });
 $(".widget").height(m);

}, 100); // o timeout está configurado para 100 milisegundos
}
$(window).on('resize', size);
function redraw(animation){
 var options = {};
 if (!animation){
 options.animation = false;
 } else {
 options.animation = true;
 }
 // ....
 // a resto da criação do gráfico ocorre nesta partehere
 // ....
}
size();
</pre>

<p>Se ficou confusa a explicação, não se preocupe! Encaminhe um comentário e nós da comunidade Tuts+ vamos tentar te ajudar para que você entenda o que está ocorrendo neste exemplo!</p>

<h2>Um pouco de CSS para começarmos</h2>

<p>Precisamos configurar algumas estruturas básicas em CSS antes de começarmos. O HTML5 Boilerplate inclui o normalize e outras soluções que você pode alterar, mas para o bem do tutorial, vamos escrever nosso código CSS após a linha "Author's custom styles".</p>

<pre class="brush: css noskimlinks noskimwords">html, body {
height: 100%;
}
body {
 font-family: 'Source Sans Pro', sans-serif;
 color: #666;
}
/* button */
.button {
 cursor: pointer;
 text-decoration: none;
 font-size: 0.6em;
 font-weight: 400;
 text-transform: uppercase;
 display: inline-block;
 padding: 4px 6px;
 margin: 0 10px;
 position: relative;
 background: #ccc;
 color: #fff;
 box-shadow: 0 0 2px rgba(0,0,0,0.1);
 background: rgb(190,190,190); /* Old browsers */
 background: -moz-linear-gradient(top, rgba(190,190,190,1) 0%, rgba(170,170,170,1) 100%); /* FF3.6+ */
 background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(190,190,190,1)), color-stop(100%,rgba(170,170,170,1))); /* Chrome,Safari4+ */
 background: -webkit-linear-gradient(top, rgba(190,190,190,1) 0%,rgba(170,170,170,1) 100%); /* Chrome10+,Safari5.1+ */
 background: -o-linear-gradient(top, rgba(190,190,190,1) 0%,rgba(170,170,170,1) 100%); /* Opera 11.10+ */
 background: -ms-linear-gradient(top, rgba(190,190,190,1) 0%,rgba(170,170,170,1) 100%); /* IE10+ */
 background: linear-gradient(to bottom, rgba(190,190,190,1) 0%,rgba(170,170,170,1) 100%); /* W3C */
 filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#bebebe', endColorstr='#aaaaaa',GradientType=0 ); /* IE6-9 */
}
.button:hover {
 background: #637b85;
}
/* Header styles */
header {
 text-align: center;
 background: #637b85;
 color: #fff;
 margin-bottom: 40px;
}
header span {
 font-weight: 200;
}
header .button {
 font-size: 0.2em;
 top: -6px;
}

/* various containers */
.container {
 width: 200px;
 margin: 0 auto;
}
.canvas-container {
 min-height: 300px;
 max-height: 600px;
 position: relative;
}
.widget {
 position: relative;
 margin-bottom: 80px;
 background: #efefef;
 padding: 12px;
 margin-bottom: 30px;
 -webkit-box-sizing: border-box;
 -moz-box-sizing: border-box;
 box-sizing: border-box;
}
</pre>

<p>Aqui definimos via CSS as configurações do sticky footer, assim como a classe para botões, uma classe para centralizar o container, uma classe para a box que vai utilizar o elemento canvas, e uma para o widgets. Também adicionamos uma fonte do Google Fonts conforme a linha de código abaixo, descrita no head do documento HTML.</p>

<pre class="brush: html noskimlinks noskimwords">&lt;link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,400,700' rel='stylesheet' type='text/css'&gt;</pre>

<h2>Gráfico Rosca</h2>

<p>Os gráficos em rosca são bem parecidos com gráficos pizza, exceto o fundo no meio, que no gráfico rosca é oco, e o no pizza é totalmente preenchido. Por padrão, o ChartJS define que 50% do meio deve ser retirado para criar o gráfico em rosca; vamos utilizar esse mesmo padrão. O código para criar o gráfico rosca está descrito abaixo.</p>

<pre class="brush:js noskimlinks noskimwords">
var data = [
{
 value: 20,
 color:"#637b85"
 },
 {
 value : 30,
 color : "#2c9c69"
 },
 {
 value : 40,
 color : "#dbba34"
 },
 {
 value : 10,
 color : "#c62f29"
 }

];
var canvas = document.getElementById("hours");
var ctx = canvas.getContext("2d");
new Chart(ctx).Doughnut(data);
</pre>

<p>Neste bloco definimos a cor e as informações que vão gerar o gráfico. Isso é tudo que o gráfico em rosca exige para funcionar. De qualquer modo, o que cada uma dessas sessões representa? Infelizmente o CHARTJS ainda não possui uma forma simples para definir as informações de label das seções do gráfico rosca; mas podemos criar nossas próprias labels para apresentar a informação de cada seção. Modifique o widget HTML do gráfico rosca conforme o bloco abaixo.</p>

<pre class="brush: html noskimlinks noskimwords">&lt;div class="third widget doughnut"&gt;
&lt;h3&gt;Breakdown of Hours&lt;/h3&gt;
 &lt;p&gt;&lt;a href="" class="button"&gt;Filter By Employee&lt;/a&gt;&lt;/p&gt;
 &lt;div class="canvas-container"&gt;
 &lt;canvas id="hours"&gt;&lt;/canvas&gt;
 &lt;span class="status"&gt;&lt;/span&gt;
 &lt;/div&gt;
 &lt;div class="chart-legend"&gt;
 &lt;ul&gt;
 &lt;li class="ship"&gt;Shipping &amp;amp; Receiving&lt;/li&gt;
 &lt;li class="rework"&gt;Rework&lt;/li&gt;
 &lt;li class="admin"&gt;Administrative&lt;/li&gt;
 &lt;li class="prod"&gt;Production&lt;/li&gt;
 &lt;/ul&gt;
 &lt;/div&gt;
&lt;/div&gt;</pre>

<p>Utilizamos os elementos li através de suas classes, considerando a pseudo classe :before.</p>

<pre class="brush: css noskimlinks noskimwords">.chart-legend ul {
list-style: none;
 width: 100%;
 margin: 30px auto 0;
}
.chart-legend li {
 text-indent: 16px;
 line-height: 24px;
 position: relative;
 font-weight: 200;
 display: block;
 float: left;
 width: 50%;
 font-size: 0.8em;
}
.chart-legend li:before {
 display: block;
 width: 10px;
 height: 16px;
 position: absolute;
 left: 0;
 top: 3px;
 content: "";
}
.ship:before { background-color: #637b85; }
.rework:before { background-color: #2c9c69; }
.admin:before { background-color: #dbba34; }
.prod:before { background-color: #c62f29; }</pre>

<p>Continuando, vamos ter um botão curtir no centro do gráfico rosca. Isso exige alguns truques CSS e a inclusão da solução <a href="http://daverupert.com/2012/04/uncle-daves-ol-padded-box/" rel="external">Uncle Dave's Ol' Padded Box</a> para que o círculo seja responsivo. Vamos utilizar o elemento span com a classe .status para criar esse círculo. Adicione as seguintes linhas no arquivo main.css:</p>

<pre class="brush: css noskimlinks noskimwords">.widget.doughnut .status {
display: block;
 position: absolute;
 top: 50%;
 left: 50%;
 width: 30%;
 height: 0;
 padding-top: 12%;
 padding-bottom: 18%;
 color: #444;
 margin-top: -15%;
 margin-left: -15%;
 font-size: 1.4em;
 font-weight: 700;
 text-align: center;
 border-radius: 50%;
 background-color: #aaa;
 background-image: url(data:image/png;base64,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);
 background-repeat: no-repeat;
 background-size: 30%;
 background-position: center;
}</pre>

<p>O elemento mais notável aqui é a utilização do <a href="http://hub.tutsplus.com/tutorials/the-what-why-and-how-of-data-uris-in-web-design--webdesign-8648" rel="external">data URI</a> para o background image. Isso evita mais requisições HTTP. Também definimos a position deste elemento como absoluta dentro do elemento .widget, que anteriormente definimos com position relative.</p>

<p>Vamos em frente configurar a tipografia do widget. Utilizamos apenas os elementos "p" e "h3" dentro do widget; abaixo está o CSS utilizado.</p>

<pre class="brush: css noskimlinks noskimwords">
.widget p {
margin-top: 0;
 text-align: center;
}

.widget h3 {
 margin: -12px 0 12px -12px;
 padding: 12px;
 width: 100%;
 text-align: center;
 color: #627b86;
 line-height: 2em;
 background: #d0dde3;
}
</pre>

<p>As regras margin e padding no elemento "h3" permitem ao mesmo se posicionar no widget, com 12px de padding do topo. Também definimos o top margin para 0 no elemento "p" para ficar mais próximo e parecido com o header do widget.</p>

<h2>Gráfico Linha</h2>

<p>Um dos recursos mais interessantes do ChartJS é que alguns dos gráficos tem suporte para múltiplos conjuntos de informações. Esse conjunto de informações é carregada com o gráfico sequencialmente, permitindo a comparação de uma informação com outra. Um exemplo de utilização deste recurso é o gráfico em linha. Vamos utilizar dois conjuntos de informações (datasets) para explorar essa funcionalidade.</p>

<pre class="brush:js noskimlinks noskimwords">
var data = {
labels : ["Mon","Tue","Wed","Thu","Fri","Sat","Sun"],
 datasets : [
 {
 fillColor : "rgba(99,123,133,0.4)",
 strokeColor : "rgba(220,220,220,1)",
 pointColor : "rgba(220,220,220,1)",
 pointStrokeColor : "#fff",
 data : [65,54,30,81,56,55,40]
 },
 {
 fillColor : "rgba(219,186,52,0.4)",
 strokeColor : "rgba(220,220,220,1)",
 pointColor : "rgba(220,220,220,1)",
 pointStrokeColor : "#fff",
 data : [20,60,42,58,31,21,50]
 },
 ]
}
var canvas = document.getElementById("shipments");
var ctx = canvas.getContext("2d");
new Chart(ctx).Line(data, options);
</pre>

<p>Algumas informações importantes neste bloco de código: primeiro, estamos utilizando as mesmas variáveis do gráfico em rosca, criado anteriormente. Isso é completamente válido em JavaScript, e reduz a memória utilizada pelo script. Mas, pode causar complicações no futuro, então se você planeja utilizar esse código no futuro, e planeja adaptar este código para produção, é recomendado criar novas variáveis para cada gráfico.</p>

<p>Segundo, o gráfico em linha suporta labels, ou legendas. Isso é importante, pois evita de criar uma legenda manualmente para o gráfico. Também é importante que a as informações da label batam com as informações da linha. No exemplo abaixo, nosso primeiro data-point é o primeiro dataset, 65, que está atrelado a label "Mon".</p>

<p>E por último, as cores para o dataset são as cores definidas anteriormente na versão RGBa, azul escuro e amarelo. Você consegue converter facilmente uma cor em HEX para RGBa incluindo o código da cor no colorpicker do PhotoShop, se você não tiver PhotoShop existem diversas ferramentas online que podem fazer isso facilmente.</p>

<p>Também vamos adicionar uma marcação HTML para inserir botões e textos para o usuário. No fim o bloco do widget vai se parecer com o bloco de código abaixo.</p>

<pre class="brush: html noskimlinks noskimwords">&lt;div class="third widget line"&gt;
&lt;div class="chart-legend"&gt;
 &lt;h3&gt;Shipments per Day&lt;/h3&gt;
 &lt;p&gt;&lt;span&gt;This Week&lt;/span&gt; &amp;mdash; &lt;strong&gt;Last Week&lt;/strong&gt;&lt;/p&gt;
 &lt;p&gt;&lt;a href="" class="button"&gt;Change Date Range&lt;/a&gt;&lt;a href="" class="button"&gt;Filter by Location&lt;/a&gt;&lt;/p&gt;
 &lt;/div&gt;
 &lt;div class="canvas-container"&gt;
 &lt;canvas id="shipments"&gt;&lt;/canvas&gt;
 &lt;/div&gt;
&lt;/div&gt;</pre>

<p>Vamos polir um pouco esse bloco de marcação com as seguintes regras CSS:</p>

<pre class="brush: css noskimlinks noskimwords">
.widget.line p span {
color: #dbba34;
}
.widget.line p strong {
 color: #637b85;
 font-weight: 400;
}
</pre>

<h2>Gráfico radar</h2>

<p>O gráfico radar é útil para destinguir uma seleção de variáveis em um unico gráfico, onde você consegue ter uma visão simples das diferenças entre as variáveis. No nosso exemplo, vamos explorar a ideia de serviço ao cliente, baseado em quantas vezes certas palavras chave são mencionadas. No gráfico radar, os pontos em amarelo ajudam a ter noção do desempenho do serviço ao cliente.</p>

<p>Vamos criar o gráfico! Mais uma vez, vou utilizar a mesma variável de antes.</p>

<pre class="brush:js noskimlinks noskimwords">var data = {
labels : ["Helpful","Friendly","Kind","Rude","Slow","Frustrating"],
 datasets : [
 {
 fillColor : "rgba(220,220,220,0.5)",
 strokeColor : "#637b85",
 pointColor : "#dbba34",
 pointStrokeColor : "#637b85",
 data : [65,59,90,81,30,56]
 }
 ]
}
var canvas = document.getElementById("departments");
var ctx = canvas.getContext("2d");
new Chart(ctx).Radar(data, options);</pre>

<p>Abaixo a marcação HTML que vai acompanhar este bloco de JavaScript para gerar o gráfico:</p>

<pre class="brush: html noskimlinks noskimwords">&lt;div class="third widget"&gt;
&lt;div class="chart-legend"&gt;
 &lt;h3&gt;Customer Service Assessment&lt;/h3&gt;
 &lt;p&gt;based on words mentioned&lt;/p&gt;
 &lt;p&gt;&lt;a href="" class="button"&gt;Track another word&lt;/a&gt;&lt;/p&gt;
 &lt;/div&gt;
 &lt;div class="canvas-container"&gt;
 &lt;canvas id="departments"&gt;&lt;/canvas&gt;
 &lt;/div&gt;
&lt;/div&gt;</pre>

<p>Olhando o gráfico, da a impressão que um ponto que vai para cima está melhor do que o ponto que vai para baixo e para os lados. Por outro lado, não perdemos a informação de cada variável, que fica muito clara no gráfico. No nosso exemplo, a palavra "rude" foi mencionada várias vezes mas a sensação do serviço é positiva, conforme mostra o gráfico em relação a outras palavras mencionadas.</p>

<h2>Gráficos responsivos</h2>

<p>Já configuramos o elemento cavas para ser responsivo com a função JavaScript que criamos no inicio do tutorial. Agora precisamos tornar o CSS também responsivo utilizando media queries. Abaixo está o CSS que vamos utilizar para essa tarefa.</p>

<pre class="brush: css noskimlinks noskimwords">
@media only screen and (min-width:300px){
.container {
 width: 300px;
 margin: 0 auto;
 }
}

@media only screen and (min-width:600px){
 .container {
 width: 580px;
 margin: 0 auto;
 }
 .third {
 float: left;
 width: 47.5%;
 margin-left: 5%;
 }
 .third:first-child {
 margin-left: 0;
 }
 .third:last-child {
 display: block;
 width: 100%;
 margin-left: 0;
 }
}

@media only screen and (min-width:960px){
 .container {
 width: 940px;
 }
 .third {
 float: left;
 width: 30%;
 margin-left: 2.5%;
 margin-right: 2.5%;
 }
 .third:first-child {
 margin-left: 0;
 }
 .third:last-child {
 margin-right: 0;
 margin-left: 2.5%;
 width: 30%;
 }
}
@media only screen and (min-width:1140px){
 .container {
 width: 1120px;
 }
}
@media only screen and (min-width:1360px){
 .container {
 width: 1300px;
 }
}
</pre>

<p>A primeira coisa a notar neste CSS é que todas as medias queries são baseadas em <i>min-width</i>, que quer dizer que certas regras são aplicadas em uma certa medida mínima (normalmente é utilizada a medida max, <i>max-width</i>). Isso siginifica que estamos focando em telas pequenas, adicionando novas regras conforme a necessidade. Nosso design não requer muitas mudanças em cada breakepoint, mas essa é uma das boas práticas CSS que podem e devem ser exploradas.</p>

<figure>
 <img width="630" alt="chartjs-small" src="https://cdn.tutsplus.com/webdesign/uploads/2013/08/chartjs-small.png" height="520"></figure>

<figure>
 <img width="630" alt="chartjs-mid" src="https://cdn.tutsplus.com/webdesign/uploads/2013/08/chartjs-mid.png" height="533"></figure>

<figure>
 <img width="630" alt="chartjs-large" src="https://cdn.tutsplus.com/webdesign/uploads/2013/08/chartjs-large.png" height="465"></figure>

<p>Podemos adicionar mudanças básicas do layout em cada breakpoint, incluindo a largura do primeiro elemento container, assim como a classe <i>.third</i>, que utilizados em cada widget. Antes de 400 de largura, todos os gráficos são posicionados um acima do outro. Entre 400 e 600 de largura, deixamos dois widgets dividindo o espaço total da primeira linha, enquanto o terceiro gráfico (radar) é apresentado na linha inteira abaixo. Acima de 960 de largura, utilizamos três colunas na mesma linha.</p>

<h2>Conclusão</h2>

<p>Neste tutorial introduzimos o ChartJS criando um dashboard. Os principais conceitos descritos neste tutorial podem ajudar a criar projetos utilizando essa solução, além de incentivar o design responsivo de baixo pra cima (técnica utilizada com as media queries).</p>

<p>&nbsp;</p>

</div></div></div>  
</div><div class="layout__sidebar"><div class="post__sidebar"><div class="post__sidebar-primary"><div class="weekly-digest-subscription"><div class="weekly-digest-subscription--header"></div>
</div>
      <div class="avert"></div></div></div></div></article></main><div class="market-highlight market-highlight--padded-bottom"><div class="market-highlight__cards"></div>
</div></div>
<script type="text/javascript">
/* <![CDATA[ */
  var google_conversion_id = 943617023;
  var google_custom_params = window.google_tag_params;
  var google_remarketing_only = true;
/* ]]> */
</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
  <div style="display:inline;">
    <img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/943617023/?value=0&amp;guid=ON&amp;script=0"/>
  </div>
</noscript>
<script src="https://static.tutsplus.com/assets/body-3d0484042aa3c33363fa81d5d9603bc3.js" async="async"></script><script src="//s.skimresources.com/js/1342X1022246.skimlinks.js" type="text/javascript"></script></body></html>
