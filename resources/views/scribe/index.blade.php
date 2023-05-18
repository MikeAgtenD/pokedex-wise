<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>pokedex-wise Documentation</title>

    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset("/vendor/scribe/css/theme-default.style.css") }}" media="screen">
    <link rel="stylesheet" href="{{ asset("/vendor/scribe/css/theme-default.print.css") }}" media="print">

    <script src="https://cdn.jsdelivr.net/npm/lodash@4.17.10/lodash.min.js"></script>

    <link rel="stylesheet"
          href="https://unpkg.com/@highlightjs/cdn-assets@11.6.0/styles/obsidian.min.css">
    <script src="https://unpkg.com/@highlightjs/cdn-assets@11.6.0/highlight.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jets/0.14.1/jets.min.js"></script>

    <style id="language-style">
        /* starts out as display none and is replaced with js later  */
                    body .content .bash-example code { display: none; }
                    body .content .javascript-example code { display: none; }
            </style>

    <script>
        var tryItOutBaseUrl = "https://pokedex-wise.test";
        var useCsrf = Boolean();
        var csrfUrl = "/sanctum/csrf-cookie";
    </script>
    <script src="{{ asset("/vendor/scribe/js/tryitout-4.19.1.js") }}"></script>

    <script src="{{ asset("/vendor/scribe/js/theme-default-4.19.1.js") }}"></script>

</head>

<body data-languages="[&quot;bash&quot;,&quot;javascript&quot;]">

<a href="#" id="nav-button">
    <span>
        MENU
        <img src="{{ asset("/vendor/scribe/images/navbar.png") }}" alt="navbar-image"/>
    </span>
</a>
<div class="tocify-wrapper">
    
            <div class="lang-selector">
                                            <button type="button" class="lang-button" data-language-name="bash">bash</button>
                                            <button type="button" class="lang-button" data-language-name="javascript">javascript</button>
                    </div>
    
    <div class="search">
        <input type="text" class="search" id="input-search" placeholder="Search">
    </div>

    <div id="toc">
                    <ul id="tocify-header-introduction" class="tocify-header">
                <li class="tocify-item level-1" data-unique="introduction">
                    <a href="#introduction">Introduction</a>
                </li>
                            </ul>
                    <ul id="tocify-header-authenticating-requests" class="tocify-header">
                <li class="tocify-item level-1" data-unique="authenticating-requests">
                    <a href="#authenticating-requests">Authenticating requests</a>
                </li>
                            </ul>
                    <ul id="tocify-header-endpoints" class="tocify-header">
                <li class="tocify-item level-1" data-unique="endpoints">
                    <a href="#endpoints">Endpoints</a>
                </li>
                                    <ul id="tocify-subheader-endpoints" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="endpoints-GETapi-user">
                                <a href="#endpoints-GETapi-user">GET api/user</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-v1-pokemons">
                                <a href="#endpoints-GETapi-v1-pokemons">GET api/v1/pokemons</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-v1-pokemons--id-">
                                <a href="#endpoints-GETapi-v1-pokemons--id-">GET api/v1/pokemons/{id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-v1-teams">
                                <a href="#endpoints-GETapi-v1-teams">GET api/v1/teams</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-v1-teams">
                                <a href="#endpoints-POSTapi-v1-teams">POST api/v1/teams</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-v1-teams--id-">
                                <a href="#endpoints-GETapi-v1-teams--id-">GET api/v1/teams/{id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-v1-teams--id-">
                                <a href="#endpoints-POSTapi-v1-teams--id-">POST api/v1/teams/{id}</a>
                            </li>
                                                                        </ul>
                            </ul>
            </div>

    <ul class="toc-footer" id="toc-footer">
                    <li style="padding-bottom: 5px;"><a href="{{ route("scribe.postman") }}">View Postman collection</a></li>
                            <li style="padding-bottom: 5px;"><a href="{{ route("scribe.openapi") }}">View OpenAPI spec</a></li>
                <li><a href="http://github.com/knuckleswtf/scribe">Documentation powered by Scribe ✍</a></li>
    </ul>

    <ul class="toc-footer" id="last-updated">
        <li>Last updated: May 18, 2023</li>
    </ul>
</div>

<div class="page-wrapper">
    <div class="dark-box"></div>
    <div class="content">
        <h1 id="introduction">Introduction</h1>
<aside>
    <strong>Base URL</strong>: <code>https://pokedex-wise.test</code>
</aside>
<p>This documentation aims to provide all the information you need to work with our API.</p>
<aside>As you scroll, you'll see code examples for working with the API in different programming languages in the dark area to the right (or as part of the content on mobile).
You can switch the language used with the tabs at the top right (or from the nav menu at the top left on mobile).</aside>

        <h1 id="authenticating-requests">Authenticating requests</h1>
<p>This API is not authenticated.</p>

        <h1 id="endpoints">Endpoints</h1>

    

                                <h2 id="endpoints-GETapi-user">GET api/user</h2>

<p>
</p>



<span id="example-requests-GETapi-user">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "https://pokedex-wise.test/api/user" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "https://pokedex-wise.test/api/user"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-user">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-user" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-user"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-user"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-user" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-user">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-user" data-method="GET"
      data-path="api/user"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-user', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-user"
                    onclick="tryItOut('GETapi-user');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-user"
                    onclick="cancelTryOut('GETapi-user');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-user"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/user</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Content-Type"                data-endpoint="GETapi-user"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Accept"                data-endpoint="GETapi-user"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETapi-v1-pokemons">GET api/v1/pokemons</h2>

<p>
</p>



<span id="example-requests-GETapi-v1-pokemons">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "https://pokedex-wise.test/api/v1/pokemons" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "https://pokedex-wise.test/api/v1/pokemons"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-v1-pokemons">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 59
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;data&quot;: [
        {
            &quot;id&quot;: 1,
            &quot;name&quot;: &quot;bulbasaur&quot;,
            &quot;sprites&quot;: {
                &quot;front_default&quot;: &quot;storage/bulbasaur_front_default.png&quot;
            },
            &quot;types&quot;: [
                {
                    &quot;type&quot;: {
                        &quot;name&quot;: &quot;grass&quot;
                    },
                    &quot;slot&quot;: 1
                },
                {
                    &quot;type&quot;: {
                        &quot;name&quot;: &quot;poison&quot;
                    },
                    &quot;slot&quot;: 2
                }
            ]
        },
        {
            &quot;id&quot;: 2,
            &quot;name&quot;: &quot;ivysaur&quot;,
            &quot;sprites&quot;: {
                &quot;front_default&quot;: &quot;storage/ivysaur_front_default.png&quot;
            },
            &quot;types&quot;: [
                {
                    &quot;type&quot;: {
                        &quot;name&quot;: &quot;grass&quot;
                    },
                    &quot;slot&quot;: 1
                },
                {
                    &quot;type&quot;: {
                        &quot;name&quot;: &quot;poison&quot;
                    },
                    &quot;slot&quot;: 2
                }
            ]
        },
        {
            &quot;id&quot;: 3,
            &quot;name&quot;: &quot;venusaur&quot;,
            &quot;sprites&quot;: {
                &quot;front_default&quot;: &quot;storage/venusaur_front_default.png&quot;
            },
            &quot;types&quot;: [
                {
                    &quot;type&quot;: {
                        &quot;name&quot;: &quot;grass&quot;
                    },
                    &quot;slot&quot;: 1
                },
                {
                    &quot;type&quot;: {
                        &quot;name&quot;: &quot;poison&quot;
                    },
                    &quot;slot&quot;: 2
                }
            ]
        },
        {
            &quot;id&quot;: 4,
            &quot;name&quot;: &quot;charmander&quot;,
            &quot;sprites&quot;: {
                &quot;front_default&quot;: &quot;storage/charmander_front_default.png&quot;
            },
            &quot;types&quot;: [
                {
                    &quot;type&quot;: {
                        &quot;name&quot;: &quot;fire&quot;
                    },
                    &quot;slot&quot;: 1
                }
            ]
        },
        {
            &quot;id&quot;: 5,
            &quot;name&quot;: &quot;charmeleon&quot;,
            &quot;sprites&quot;: {
                &quot;front_default&quot;: &quot;storage/charmeleon_front_default.png&quot;
            },
            &quot;types&quot;: [
                {
                    &quot;type&quot;: {
                        &quot;name&quot;: &quot;fire&quot;
                    },
                    &quot;slot&quot;: 1
                }
            ]
        },
        {
            &quot;id&quot;: 6,
            &quot;name&quot;: &quot;charizard&quot;,
            &quot;sprites&quot;: {
                &quot;front_default&quot;: &quot;storage/charizard_front_default.png&quot;
            },
            &quot;types&quot;: [
                {
                    &quot;type&quot;: {
                        &quot;name&quot;: &quot;fire&quot;
                    },
                    &quot;slot&quot;: 1
                },
                {
                    &quot;type&quot;: {
                        &quot;name&quot;: &quot;flying&quot;
                    },
                    &quot;slot&quot;: 2
                }
            ]
        },
        {
            &quot;id&quot;: 7,
            &quot;name&quot;: &quot;squirtle&quot;,
            &quot;sprites&quot;: {
                &quot;front_default&quot;: &quot;storage/squirtle_front_default.png&quot;
            },
            &quot;types&quot;: [
                {
                    &quot;type&quot;: {
                        &quot;name&quot;: &quot;water&quot;
                    },
                    &quot;slot&quot;: 1
                }
            ]
        },
        {
            &quot;id&quot;: 8,
            &quot;name&quot;: &quot;wartortle&quot;,
            &quot;sprites&quot;: {
                &quot;front_default&quot;: &quot;storage/wartortle_front_default.png&quot;
            },
            &quot;types&quot;: [
                {
                    &quot;type&quot;: {
                        &quot;name&quot;: &quot;water&quot;
                    },
                    &quot;slot&quot;: 1
                }
            ]
        },
        {
            &quot;id&quot;: 9,
            &quot;name&quot;: &quot;blastoise&quot;,
            &quot;sprites&quot;: {
                &quot;front_default&quot;: &quot;storage/blastoise_front_default.png&quot;
            },
            &quot;types&quot;: [
                {
                    &quot;type&quot;: {
                        &quot;name&quot;: &quot;water&quot;
                    },
                    &quot;slot&quot;: 1
                }
            ]
        },
        {
            &quot;id&quot;: 10,
            &quot;name&quot;: &quot;caterpie&quot;,
            &quot;sprites&quot;: {
                &quot;front_default&quot;: &quot;storage/caterpie_front_default.png&quot;
            },
            &quot;types&quot;: [
                {
                    &quot;type&quot;: {
                        &quot;name&quot;: &quot;bug&quot;
                    },
                    &quot;slot&quot;: 1
                }
            ]
        },
        {
            &quot;id&quot;: 11,
            &quot;name&quot;: &quot;metapod&quot;,
            &quot;sprites&quot;: {
                &quot;front_default&quot;: &quot;storage/metapod_front_default.png&quot;
            },
            &quot;types&quot;: [
                {
                    &quot;type&quot;: {
                        &quot;name&quot;: &quot;bug&quot;
                    },
                    &quot;slot&quot;: 1
                }
            ]
        },
        {
            &quot;id&quot;: 12,
            &quot;name&quot;: &quot;butterfree&quot;,
            &quot;sprites&quot;: {
                &quot;front_default&quot;: &quot;storage/butterfree_front_default.png&quot;
            },
            &quot;types&quot;: [
                {
                    &quot;type&quot;: {
                        &quot;name&quot;: &quot;bug&quot;
                    },
                    &quot;slot&quot;: 1
                },
                {
                    &quot;type&quot;: {
                        &quot;name&quot;: &quot;flying&quot;
                    },
                    &quot;slot&quot;: 2
                }
            ]
        },
        {
            &quot;id&quot;: 13,
            &quot;name&quot;: &quot;weedle&quot;,
            &quot;sprites&quot;: {
                &quot;front_default&quot;: &quot;storage/weedle_front_default.png&quot;
            },
            &quot;types&quot;: [
                {
                    &quot;type&quot;: {
                        &quot;name&quot;: &quot;bug&quot;
                    },
                    &quot;slot&quot;: 1
                },
                {
                    &quot;type&quot;: {
                        &quot;name&quot;: &quot;poison&quot;
                    },
                    &quot;slot&quot;: 2
                }
            ]
        },
        {
            &quot;id&quot;: 14,
            &quot;name&quot;: &quot;kakuna&quot;,
            &quot;sprites&quot;: {
                &quot;front_default&quot;: &quot;storage/kakuna_front_default.png&quot;
            },
            &quot;types&quot;: [
                {
                    &quot;type&quot;: {
                        &quot;name&quot;: &quot;bug&quot;
                    },
                    &quot;slot&quot;: 1
                },
                {
                    &quot;type&quot;: {
                        &quot;name&quot;: &quot;poison&quot;
                    },
                    &quot;slot&quot;: 2
                }
            ]
        },
        {
            &quot;id&quot;: 15,
            &quot;name&quot;: &quot;beedrill&quot;,
            &quot;sprites&quot;: {
                &quot;front_default&quot;: &quot;storage/beedrill_front_default.png&quot;
            },
            &quot;types&quot;: [
                {
                    &quot;type&quot;: {
                        &quot;name&quot;: &quot;bug&quot;
                    },
                    &quot;slot&quot;: 1
                },
                {
                    &quot;type&quot;: {
                        &quot;name&quot;: &quot;poison&quot;
                    },
                    &quot;slot&quot;: 2
                }
            ]
        },
        {
            &quot;id&quot;: 16,
            &quot;name&quot;: &quot;pidgey&quot;,
            &quot;sprites&quot;: {
                &quot;front_default&quot;: &quot;storage/pidgey_front_default.png&quot;
            },
            &quot;types&quot;: [
                {
                    &quot;type&quot;: {
                        &quot;name&quot;: &quot;normal&quot;
                    },
                    &quot;slot&quot;: 1
                },
                {
                    &quot;type&quot;: {
                        &quot;name&quot;: &quot;flying&quot;
                    },
                    &quot;slot&quot;: 2
                }
            ]
        },
        {
            &quot;id&quot;: 17,
            &quot;name&quot;: &quot;pidgeotto&quot;,
            &quot;sprites&quot;: {
                &quot;front_default&quot;: &quot;storage/pidgeotto_front_default.png&quot;
            },
            &quot;types&quot;: [
                {
                    &quot;type&quot;: {
                        &quot;name&quot;: &quot;normal&quot;
                    },
                    &quot;slot&quot;: 1
                },
                {
                    &quot;type&quot;: {
                        &quot;name&quot;: &quot;flying&quot;
                    },
                    &quot;slot&quot;: 2
                }
            ]
        },
        {
            &quot;id&quot;: 18,
            &quot;name&quot;: &quot;pidgeot&quot;,
            &quot;sprites&quot;: {
                &quot;front_default&quot;: &quot;storage/pidgeot_front_default.png&quot;
            },
            &quot;types&quot;: [
                {
                    &quot;type&quot;: {
                        &quot;name&quot;: &quot;normal&quot;
                    },
                    &quot;slot&quot;: 1
                },
                {
                    &quot;type&quot;: {
                        &quot;name&quot;: &quot;flying&quot;
                    },
                    &quot;slot&quot;: 2
                }
            ]
        },
        {
            &quot;id&quot;: 19,
            &quot;name&quot;: &quot;rattata&quot;,
            &quot;sprites&quot;: {
                &quot;front_default&quot;: &quot;storage/rattata_front_default.png&quot;
            },
            &quot;types&quot;: [
                {
                    &quot;type&quot;: {
                        &quot;name&quot;: &quot;normal&quot;
                    },
                    &quot;slot&quot;: 1
                }
            ]
        },
        {
            &quot;id&quot;: 20,
            &quot;name&quot;: &quot;raticate&quot;,
            &quot;sprites&quot;: {
                &quot;front_default&quot;: &quot;storage/raticate_front_default.png&quot;
            },
            &quot;types&quot;: [
                {
                    &quot;type&quot;: {
                        &quot;name&quot;: &quot;normal&quot;
                    },
                    &quot;slot&quot;: 1
                }
            ]
        },
        {
            &quot;id&quot;: 21,
            &quot;name&quot;: &quot;spearow&quot;,
            &quot;sprites&quot;: {
                &quot;front_default&quot;: &quot;storage/spearow_front_default.png&quot;
            },
            &quot;types&quot;: [
                {
                    &quot;type&quot;: {
                        &quot;name&quot;: &quot;normal&quot;
                    },
                    &quot;slot&quot;: 1
                },
                {
                    &quot;type&quot;: {
                        &quot;name&quot;: &quot;flying&quot;
                    },
                    &quot;slot&quot;: 2
                }
            ]
        },
        {
            &quot;id&quot;: 22,
            &quot;name&quot;: &quot;fearow&quot;,
            &quot;sprites&quot;: {
                &quot;front_default&quot;: &quot;storage/fearow_front_default.png&quot;
            },
            &quot;types&quot;: [
                {
                    &quot;type&quot;: {
                        &quot;name&quot;: &quot;normal&quot;
                    },
                    &quot;slot&quot;: 1
                },
                {
                    &quot;type&quot;: {
                        &quot;name&quot;: &quot;flying&quot;
                    },
                    &quot;slot&quot;: 2
                }
            ]
        },
        {
            &quot;id&quot;: 23,
            &quot;name&quot;: &quot;ekans&quot;,
            &quot;sprites&quot;: {
                &quot;front_default&quot;: &quot;storage/ekans_front_default.png&quot;
            },
            &quot;types&quot;: [
                {
                    &quot;type&quot;: {
                        &quot;name&quot;: &quot;poison&quot;
                    },
                    &quot;slot&quot;: 1
                }
            ]
        },
        {
            &quot;id&quot;: 24,
            &quot;name&quot;: &quot;arbok&quot;,
            &quot;sprites&quot;: {
                &quot;front_default&quot;: &quot;storage/arbok_front_default.png&quot;
            },
            &quot;types&quot;: [
                {
                    &quot;type&quot;: {
                        &quot;name&quot;: &quot;poison&quot;
                    },
                    &quot;slot&quot;: 1
                }
            ]
        },
        {
            &quot;id&quot;: 25,
            &quot;name&quot;: &quot;pikachu&quot;,
            &quot;sprites&quot;: {
                &quot;front_default&quot;: &quot;storage/pikachu_front_default.png&quot;
            },
            &quot;types&quot;: [
                {
                    &quot;type&quot;: {
                        &quot;name&quot;: &quot;electric&quot;
                    },
                    &quot;slot&quot;: 1
                }
            ]
        },
        {
            &quot;id&quot;: 26,
            &quot;name&quot;: &quot;raichu&quot;,
            &quot;sprites&quot;: {
                &quot;front_default&quot;: &quot;storage/raichu_front_default.png&quot;
            },
            &quot;types&quot;: [
                {
                    &quot;type&quot;: {
                        &quot;name&quot;: &quot;electric&quot;
                    },
                    &quot;slot&quot;: 1
                }
            ]
        },
        {
            &quot;id&quot;: 27,
            &quot;name&quot;: &quot;sandshrew&quot;,
            &quot;sprites&quot;: {
                &quot;front_default&quot;: &quot;storage/sandshrew_front_default.png&quot;
            },
            &quot;types&quot;: [
                {
                    &quot;type&quot;: {
                        &quot;name&quot;: &quot;ground&quot;
                    },
                    &quot;slot&quot;: 1
                }
            ]
        },
        {
            &quot;id&quot;: 28,
            &quot;name&quot;: &quot;sandslash&quot;,
            &quot;sprites&quot;: {
                &quot;front_default&quot;: &quot;storage/sandslash_front_default.png&quot;
            },
            &quot;types&quot;: [
                {
                    &quot;type&quot;: {
                        &quot;name&quot;: &quot;ground&quot;
                    },
                    &quot;slot&quot;: 1
                }
            ]
        },
        {
            &quot;id&quot;: 29,
            &quot;name&quot;: &quot;nidoran-f&quot;,
            &quot;sprites&quot;: {
                &quot;front_default&quot;: &quot;storage/nidoran-f_front_default.png&quot;
            },
            &quot;types&quot;: [
                {
                    &quot;type&quot;: {
                        &quot;name&quot;: &quot;poison&quot;
                    },
                    &quot;slot&quot;: 1
                }
            ]
        },
        {
            &quot;id&quot;: 30,
            &quot;name&quot;: &quot;nidorina&quot;,
            &quot;sprites&quot;: {
                &quot;front_default&quot;: &quot;storage/nidorina_front_default.png&quot;
            },
            &quot;types&quot;: [
                {
                    &quot;type&quot;: {
                        &quot;name&quot;: &quot;poison&quot;
                    },
                    &quot;slot&quot;: 1
                }
            ]
        },
        {
            &quot;id&quot;: 31,
            &quot;name&quot;: &quot;nidoqueen&quot;,
            &quot;sprites&quot;: {
                &quot;front_default&quot;: &quot;storage/nidoqueen_front_default.png&quot;
            },
            &quot;types&quot;: [
                {
                    &quot;type&quot;: {
                        &quot;name&quot;: &quot;poison&quot;
                    },
                    &quot;slot&quot;: 1
                },
                {
                    &quot;type&quot;: {
                        &quot;name&quot;: &quot;ground&quot;
                    },
                    &quot;slot&quot;: 2
                }
            ]
        },
        {
            &quot;id&quot;: 32,
            &quot;name&quot;: &quot;nidoran-m&quot;,
            &quot;sprites&quot;: {
                &quot;front_default&quot;: &quot;storage/nidoran-m_front_default.png&quot;
            },
            &quot;types&quot;: [
                {
                    &quot;type&quot;: {
                        &quot;name&quot;: &quot;poison&quot;
                    },
                    &quot;slot&quot;: 1
                }
            ]
        },
        {
            &quot;id&quot;: 33,
            &quot;name&quot;: &quot;nidorino&quot;,
            &quot;sprites&quot;: {
                &quot;front_default&quot;: &quot;storage/nidorino_front_default.png&quot;
            },
            &quot;types&quot;: [
                {
                    &quot;type&quot;: {
                        &quot;name&quot;: &quot;poison&quot;
                    },
                    &quot;slot&quot;: 1
                }
            ]
        },
        {
            &quot;id&quot;: 34,
            &quot;name&quot;: &quot;nidoking&quot;,
            &quot;sprites&quot;: {
                &quot;front_default&quot;: &quot;storage/nidoking_front_default.png&quot;
            },
            &quot;types&quot;: [
                {
                    &quot;type&quot;: {
                        &quot;name&quot;: &quot;poison&quot;
                    },
                    &quot;slot&quot;: 1
                },
                {
                    &quot;type&quot;: {
                        &quot;name&quot;: &quot;ground&quot;
                    },
                    &quot;slot&quot;: 2
                }
            ]
        },
        {
            &quot;id&quot;: 35,
            &quot;name&quot;: &quot;clefairy&quot;,
            &quot;sprites&quot;: {
                &quot;front_default&quot;: &quot;storage/clefairy_front_default.png&quot;
            },
            &quot;types&quot;: [
                {
                    &quot;type&quot;: {
                        &quot;name&quot;: &quot;fairy&quot;
                    },
                    &quot;slot&quot;: 1
                }
            ]
        },
        {
            &quot;id&quot;: 36,
            &quot;name&quot;: &quot;clefable&quot;,
            &quot;sprites&quot;: {
                &quot;front_default&quot;: &quot;storage/clefable_front_default.png&quot;
            },
            &quot;types&quot;: [
                {
                    &quot;type&quot;: {
                        &quot;name&quot;: &quot;fairy&quot;
                    },
                    &quot;slot&quot;: 1
                }
            ]
        },
        {
            &quot;id&quot;: 37,
            &quot;name&quot;: &quot;vulpix&quot;,
            &quot;sprites&quot;: {
                &quot;front_default&quot;: &quot;storage/vulpix_front_default.png&quot;
            },
            &quot;types&quot;: [
                {
                    &quot;type&quot;: {
                        &quot;name&quot;: &quot;fire&quot;
                    },
                    &quot;slot&quot;: 1
                }
            ]
        },
        {
            &quot;id&quot;: 38,
            &quot;name&quot;: &quot;ninetales&quot;,
            &quot;sprites&quot;: {
                &quot;front_default&quot;: &quot;storage/ninetales_front_default.png&quot;
            },
            &quot;types&quot;: [
                {
                    &quot;type&quot;: {
                        &quot;name&quot;: &quot;fire&quot;
                    },
                    &quot;slot&quot;: 1
                }
            ]
        },
        {
            &quot;id&quot;: 39,
            &quot;name&quot;: &quot;jigglypuff&quot;,
            &quot;sprites&quot;: {
                &quot;front_default&quot;: &quot;storage/jigglypuff_front_default.png&quot;
            },
            &quot;types&quot;: [
                {
                    &quot;type&quot;: {
                        &quot;name&quot;: &quot;normal&quot;
                    },
                    &quot;slot&quot;: 1
                },
                {
                    &quot;type&quot;: {
                        &quot;name&quot;: &quot;fairy&quot;
                    },
                    &quot;slot&quot;: 2
                }
            ]
        },
        {
            &quot;id&quot;: 40,
            &quot;name&quot;: &quot;wigglytuff&quot;,
            &quot;sprites&quot;: {
                &quot;front_default&quot;: &quot;storage/wigglytuff_front_default.png&quot;
            },
            &quot;types&quot;: [
                {
                    &quot;type&quot;: {
                        &quot;name&quot;: &quot;normal&quot;
                    },
                    &quot;slot&quot;: 1
                },
                {
                    &quot;type&quot;: {
                        &quot;name&quot;: &quot;fairy&quot;
                    },
                    &quot;slot&quot;: 2
                }
            ]
        },
        {
            &quot;id&quot;: 41,
            &quot;name&quot;: &quot;zubat&quot;,
            &quot;sprites&quot;: {
                &quot;front_default&quot;: &quot;storage/zubat_front_default.png&quot;
            },
            &quot;types&quot;: [
                {
                    &quot;type&quot;: {
                        &quot;name&quot;: &quot;poison&quot;
                    },
                    &quot;slot&quot;: 1
                },
                {
                    &quot;type&quot;: {
                        &quot;name&quot;: &quot;flying&quot;
                    },
                    &quot;slot&quot;: 2
                }
            ]
        },
        {
            &quot;id&quot;: 42,
            &quot;name&quot;: &quot;golbat&quot;,
            &quot;sprites&quot;: {
                &quot;front_default&quot;: &quot;storage/golbat_front_default.png&quot;
            },
            &quot;types&quot;: [
                {
                    &quot;type&quot;: {
                        &quot;name&quot;: &quot;poison&quot;
                    },
                    &quot;slot&quot;: 1
                },
                {
                    &quot;type&quot;: {
                        &quot;name&quot;: &quot;flying&quot;
                    },
                    &quot;slot&quot;: 2
                }
            ]
        },
        {
            &quot;id&quot;: 43,
            &quot;name&quot;: &quot;oddish&quot;,
            &quot;sprites&quot;: {
                &quot;front_default&quot;: &quot;storage/oddish_front_default.png&quot;
            },
            &quot;types&quot;: [
                {
                    &quot;type&quot;: {
                        &quot;name&quot;: &quot;grass&quot;
                    },
                    &quot;slot&quot;: 1
                },
                {
                    &quot;type&quot;: {
                        &quot;name&quot;: &quot;poison&quot;
                    },
                    &quot;slot&quot;: 2
                }
            ]
        },
        {
            &quot;id&quot;: 44,
            &quot;name&quot;: &quot;gloom&quot;,
            &quot;sprites&quot;: {
                &quot;front_default&quot;: &quot;storage/gloom_front_default.png&quot;
            },
            &quot;types&quot;: [
                {
                    &quot;type&quot;: {
                        &quot;name&quot;: &quot;grass&quot;
                    },
                    &quot;slot&quot;: 1
                },
                {
                    &quot;type&quot;: {
                        &quot;name&quot;: &quot;poison&quot;
                    },
                    &quot;slot&quot;: 2
                }
            ]
        },
        {
            &quot;id&quot;: 45,
            &quot;name&quot;: &quot;vileplume&quot;,
            &quot;sprites&quot;: {
                &quot;front_default&quot;: &quot;storage/vileplume_front_default.png&quot;
            },
            &quot;types&quot;: [
                {
                    &quot;type&quot;: {
                        &quot;name&quot;: &quot;grass&quot;
                    },
                    &quot;slot&quot;: 1
                },
                {
                    &quot;type&quot;: {
                        &quot;name&quot;: &quot;poison&quot;
                    },
                    &quot;slot&quot;: 2
                }
            ]
        },
        {
            &quot;id&quot;: 46,
            &quot;name&quot;: &quot;paras&quot;,
            &quot;sprites&quot;: {
                &quot;front_default&quot;: &quot;storage/paras_front_default.png&quot;
            },
            &quot;types&quot;: [
                {
                    &quot;type&quot;: {
                        &quot;name&quot;: &quot;bug&quot;
                    },
                    &quot;slot&quot;: 1
                },
                {
                    &quot;type&quot;: {
                        &quot;name&quot;: &quot;grass&quot;
                    },
                    &quot;slot&quot;: 2
                }
            ]
        },
        {
            &quot;id&quot;: 47,
            &quot;name&quot;: &quot;parasect&quot;,
            &quot;sprites&quot;: {
                &quot;front_default&quot;: &quot;storage/parasect_front_default.png&quot;
            },
            &quot;types&quot;: [
                {
                    &quot;type&quot;: {
                        &quot;name&quot;: &quot;bug&quot;
                    },
                    &quot;slot&quot;: 1
                },
                {
                    &quot;type&quot;: {
                        &quot;name&quot;: &quot;grass&quot;
                    },
                    &quot;slot&quot;: 2
                }
            ]
        },
        {
            &quot;id&quot;: 48,
            &quot;name&quot;: &quot;venonat&quot;,
            &quot;sprites&quot;: {
                &quot;front_default&quot;: &quot;storage/venonat_front_default.png&quot;
            },
            &quot;types&quot;: [
                {
                    &quot;type&quot;: {
                        &quot;name&quot;: &quot;bug&quot;
                    },
                    &quot;slot&quot;: 1
                },
                {
                    &quot;type&quot;: {
                        &quot;name&quot;: &quot;poison&quot;
                    },
                    &quot;slot&quot;: 2
                }
            ]
        },
        {
            &quot;id&quot;: 49,
            &quot;name&quot;: &quot;venomoth&quot;,
            &quot;sprites&quot;: {
                &quot;front_default&quot;: &quot;storage/venomoth_front_default.png&quot;
            },
            &quot;types&quot;: [
                {
                    &quot;type&quot;: {
                        &quot;name&quot;: &quot;bug&quot;
                    },
                    &quot;slot&quot;: 1
                },
                {
                    &quot;type&quot;: {
                        &quot;name&quot;: &quot;poison&quot;
                    },
                    &quot;slot&quot;: 2
                }
            ]
        },
        {
            &quot;id&quot;: 50,
            &quot;name&quot;: &quot;diglett&quot;,
            &quot;sprites&quot;: {
                &quot;front_default&quot;: &quot;storage/diglett_front_default.png&quot;
            },
            &quot;types&quot;: [
                {
                    &quot;type&quot;: {
                        &quot;name&quot;: &quot;ground&quot;
                    },
                    &quot;slot&quot;: 1
                }
            ]
        },
        {
            &quot;id&quot;: 51,
            &quot;name&quot;: &quot;dugtrio&quot;,
            &quot;sprites&quot;: {
                &quot;front_default&quot;: &quot;storage/dugtrio_front_default.png&quot;
            },
            &quot;types&quot;: [
                {
                    &quot;type&quot;: {
                        &quot;name&quot;: &quot;ground&quot;
                    },
                    &quot;slot&quot;: 1
                }
            ]
        },
        {
            &quot;id&quot;: 52,
            &quot;name&quot;: &quot;meowth&quot;,
            &quot;sprites&quot;: {
                &quot;front_default&quot;: &quot;storage/meowth_front_default.png&quot;
            },
            &quot;types&quot;: [
                {
                    &quot;type&quot;: {
                        &quot;name&quot;: &quot;normal&quot;
                    },
                    &quot;slot&quot;: 1
                }
            ]
        },
        {
            &quot;id&quot;: 53,
            &quot;name&quot;: &quot;persian&quot;,
            &quot;sprites&quot;: {
                &quot;front_default&quot;: &quot;storage/persian_front_default.png&quot;
            },
            &quot;types&quot;: [
                {
                    &quot;type&quot;: {
                        &quot;name&quot;: &quot;normal&quot;
                    },
                    &quot;slot&quot;: 1
                }
            ]
        },
        {
            &quot;id&quot;: 54,
            &quot;name&quot;: &quot;psyduck&quot;,
            &quot;sprites&quot;: {
                &quot;front_default&quot;: &quot;storage/psyduck_front_default.png&quot;
            },
            &quot;types&quot;: [
                {
                    &quot;type&quot;: {
                        &quot;name&quot;: &quot;water&quot;
                    },
                    &quot;slot&quot;: 1
                }
            ]
        },
        {
            &quot;id&quot;: 55,
            &quot;name&quot;: &quot;golduck&quot;,
            &quot;sprites&quot;: {
                &quot;front_default&quot;: &quot;storage/golduck_front_default.png&quot;
            },
            &quot;types&quot;: [
                {
                    &quot;type&quot;: {
                        &quot;name&quot;: &quot;water&quot;
                    },
                    &quot;slot&quot;: 1
                }
            ]
        },
        {
            &quot;id&quot;: 56,
            &quot;name&quot;: &quot;mankey&quot;,
            &quot;sprites&quot;: {
                &quot;front_default&quot;: &quot;storage/mankey_front_default.png&quot;
            },
            &quot;types&quot;: [
                {
                    &quot;type&quot;: {
                        &quot;name&quot;: &quot;fighting&quot;
                    },
                    &quot;slot&quot;: 1
                }
            ]
        },
        {
            &quot;id&quot;: 57,
            &quot;name&quot;: &quot;primeape&quot;,
            &quot;sprites&quot;: {
                &quot;front_default&quot;: &quot;storage/primeape_front_default.png&quot;
            },
            &quot;types&quot;: [
                {
                    &quot;type&quot;: {
                        &quot;name&quot;: &quot;fighting&quot;
                    },
                    &quot;slot&quot;: 1
                }
            ]
        },
        {
            &quot;id&quot;: 58,
            &quot;name&quot;: &quot;growlithe&quot;,
            &quot;sprites&quot;: {
                &quot;front_default&quot;: &quot;storage/growlithe_front_default.png&quot;
            },
            &quot;types&quot;: [
                {
                    &quot;type&quot;: {
                        &quot;name&quot;: &quot;fire&quot;
                    },
                    &quot;slot&quot;: 1
                }
            ]
        },
        {
            &quot;id&quot;: 59,
            &quot;name&quot;: &quot;arcanine&quot;,
            &quot;sprites&quot;: {
                &quot;front_default&quot;: &quot;storage/arcanine_front_default.png&quot;
            },
            &quot;types&quot;: [
                {
                    &quot;type&quot;: {
                        &quot;name&quot;: &quot;fire&quot;
                    },
                    &quot;slot&quot;: 1
                }
            ]
        },
        {
            &quot;id&quot;: 60,
            &quot;name&quot;: &quot;poliwag&quot;,
            &quot;sprites&quot;: {
                &quot;front_default&quot;: &quot;storage/poliwag_front_default.png&quot;
            },
            &quot;types&quot;: [
                {
                    &quot;type&quot;: {
                        &quot;name&quot;: &quot;water&quot;
                    },
                    &quot;slot&quot;: 1
                }
            ]
        },
        {
            &quot;id&quot;: 61,
            &quot;name&quot;: &quot;poliwhirl&quot;,
            &quot;sprites&quot;: {
                &quot;front_default&quot;: &quot;storage/poliwhirl_front_default.png&quot;
            },
            &quot;types&quot;: [
                {
                    &quot;type&quot;: {
                        &quot;name&quot;: &quot;water&quot;
                    },
                    &quot;slot&quot;: 1
                }
            ]
        },
        {
            &quot;id&quot;: 62,
            &quot;name&quot;: &quot;poliwrath&quot;,
            &quot;sprites&quot;: {
                &quot;front_default&quot;: &quot;storage/poliwrath_front_default.png&quot;
            },
            &quot;types&quot;: [
                {
                    &quot;type&quot;: {
                        &quot;name&quot;: &quot;water&quot;
                    },
                    &quot;slot&quot;: 1
                },
                {
                    &quot;type&quot;: {
                        &quot;name&quot;: &quot;fighting&quot;
                    },
                    &quot;slot&quot;: 2
                }
            ]
        },
        {
            &quot;id&quot;: 63,
            &quot;name&quot;: &quot;abra&quot;,
            &quot;sprites&quot;: {
                &quot;front_default&quot;: &quot;storage/abra_front_default.png&quot;
            },
            &quot;types&quot;: [
                {
                    &quot;type&quot;: {
                        &quot;name&quot;: &quot;psychic&quot;
                    },
                    &quot;slot&quot;: 1
                }
            ]
        },
        {
            &quot;id&quot;: 64,
            &quot;name&quot;: &quot;kadabra&quot;,
            &quot;sprites&quot;: {
                &quot;front_default&quot;: &quot;storage/kadabra_front_default.png&quot;
            },
            &quot;types&quot;: [
                {
                    &quot;type&quot;: {
                        &quot;name&quot;: &quot;psychic&quot;
                    },
                    &quot;slot&quot;: 1
                }
            ]
        },
        {
            &quot;id&quot;: 65,
            &quot;name&quot;: &quot;alakazam&quot;,
            &quot;sprites&quot;: {
                &quot;front_default&quot;: &quot;storage/alakazam_front_default.png&quot;
            },
            &quot;types&quot;: [
                {
                    &quot;type&quot;: {
                        &quot;name&quot;: &quot;psychic&quot;
                    },
                    &quot;slot&quot;: 1
                }
            ]
        },
        {
            &quot;id&quot;: 66,
            &quot;name&quot;: &quot;machop&quot;,
            &quot;sprites&quot;: {
                &quot;front_default&quot;: &quot;storage/machop_front_default.png&quot;
            },
            &quot;types&quot;: [
                {
                    &quot;type&quot;: {
                        &quot;name&quot;: &quot;fighting&quot;
                    },
                    &quot;slot&quot;: 1
                }
            ]
        },
        {
            &quot;id&quot;: 67,
            &quot;name&quot;: &quot;machoke&quot;,
            &quot;sprites&quot;: {
                &quot;front_default&quot;: &quot;storage/machoke_front_default.png&quot;
            },
            &quot;types&quot;: [
                {
                    &quot;type&quot;: {
                        &quot;name&quot;: &quot;fighting&quot;
                    },
                    &quot;slot&quot;: 1
                }
            ]
        },
        {
            &quot;id&quot;: 68,
            &quot;name&quot;: &quot;machamp&quot;,
            &quot;sprites&quot;: {
                &quot;front_default&quot;: &quot;storage/machamp_front_default.png&quot;
            },
            &quot;types&quot;: [
                {
                    &quot;type&quot;: {
                        &quot;name&quot;: &quot;fighting&quot;
                    },
                    &quot;slot&quot;: 1
                }
            ]
        },
        {
            &quot;id&quot;: 69,
            &quot;name&quot;: &quot;bellsprout&quot;,
            &quot;sprites&quot;: {
                &quot;front_default&quot;: &quot;storage/bellsprout_front_default.png&quot;
            },
            &quot;types&quot;: [
                {
                    &quot;type&quot;: {
                        &quot;name&quot;: &quot;grass&quot;
                    },
                    &quot;slot&quot;: 1
                },
                {
                    &quot;type&quot;: {
                        &quot;name&quot;: &quot;poison&quot;
                    },
                    &quot;slot&quot;: 2
                }
            ]
        },
        {
            &quot;id&quot;: 70,
            &quot;name&quot;: &quot;weepinbell&quot;,
            &quot;sprites&quot;: {
                &quot;front_default&quot;: &quot;storage/weepinbell_front_default.png&quot;
            },
            &quot;types&quot;: [
                {
                    &quot;type&quot;: {
                        &quot;name&quot;: &quot;grass&quot;
                    },
                    &quot;slot&quot;: 1
                },
                {
                    &quot;type&quot;: {
                        &quot;name&quot;: &quot;poison&quot;
                    },
                    &quot;slot&quot;: 2
                }
            ]
        },
        {
            &quot;id&quot;: 71,
            &quot;name&quot;: &quot;victreebel&quot;,
            &quot;sprites&quot;: {
                &quot;front_default&quot;: &quot;storage/victreebel_front_default.png&quot;
            },
            &quot;types&quot;: [
                {
                    &quot;type&quot;: {
                        &quot;name&quot;: &quot;grass&quot;
                    },
                    &quot;slot&quot;: 1
                },
                {
                    &quot;type&quot;: {
                        &quot;name&quot;: &quot;poison&quot;
                    },
                    &quot;slot&quot;: 2
                }
            ]
        },
        {
            &quot;id&quot;: 72,
            &quot;name&quot;: &quot;tentacool&quot;,
            &quot;sprites&quot;: {
                &quot;front_default&quot;: &quot;storage/tentacool_front_default.png&quot;
            },
            &quot;types&quot;: [
                {
                    &quot;type&quot;: {
                        &quot;name&quot;: &quot;water&quot;
                    },
                    &quot;slot&quot;: 1
                },
                {
                    &quot;type&quot;: {
                        &quot;name&quot;: &quot;poison&quot;
                    },
                    &quot;slot&quot;: 2
                }
            ]
        },
        {
            &quot;id&quot;: 73,
            &quot;name&quot;: &quot;tentacruel&quot;,
            &quot;sprites&quot;: {
                &quot;front_default&quot;: &quot;storage/tentacruel_front_default.png&quot;
            },
            &quot;types&quot;: [
                {
                    &quot;type&quot;: {
                        &quot;name&quot;: &quot;water&quot;
                    },
                    &quot;slot&quot;: 1
                },
                {
                    &quot;type&quot;: {
                        &quot;name&quot;: &quot;poison&quot;
                    },
                    &quot;slot&quot;: 2
                }
            ]
        },
        {
            &quot;id&quot;: 74,
            &quot;name&quot;: &quot;geodude&quot;,
            &quot;sprites&quot;: {
                &quot;front_default&quot;: &quot;storage/geodude_front_default.png&quot;
            },
            &quot;types&quot;: [
                {
                    &quot;type&quot;: {
                        &quot;name&quot;: &quot;rock&quot;
                    },
                    &quot;slot&quot;: 1
                },
                {
                    &quot;type&quot;: {
                        &quot;name&quot;: &quot;ground&quot;
                    },
                    &quot;slot&quot;: 2
                }
            ]
        },
        {
            &quot;id&quot;: 75,
            &quot;name&quot;: &quot;graveler&quot;,
            &quot;sprites&quot;: {
                &quot;front_default&quot;: &quot;storage/graveler_front_default.png&quot;
            },
            &quot;types&quot;: [
                {
                    &quot;type&quot;: {
                        &quot;name&quot;: &quot;rock&quot;
                    },
                    &quot;slot&quot;: 1
                },
                {
                    &quot;type&quot;: {
                        &quot;name&quot;: &quot;ground&quot;
                    },
                    &quot;slot&quot;: 2
                }
            ]
        },
        {
            &quot;id&quot;: 76,
            &quot;name&quot;: &quot;golem&quot;,
            &quot;sprites&quot;: {
                &quot;front_default&quot;: &quot;storage/golem_front_default.png&quot;
            },
            &quot;types&quot;: [
                {
                    &quot;type&quot;: {
                        &quot;name&quot;: &quot;rock&quot;
                    },
                    &quot;slot&quot;: 1
                },
                {
                    &quot;type&quot;: {
                        &quot;name&quot;: &quot;ground&quot;
                    },
                    &quot;slot&quot;: 2
                }
            ]
        },
        {
            &quot;id&quot;: 77,
            &quot;name&quot;: &quot;ponyta&quot;,
            &quot;sprites&quot;: {
                &quot;front_default&quot;: &quot;storage/ponyta_front_default.png&quot;
            },
            &quot;types&quot;: [
                {
                    &quot;type&quot;: {
                        &quot;name&quot;: &quot;fire&quot;
                    },
                    &quot;slot&quot;: 1
                }
            ]
        },
        {
            &quot;id&quot;: 78,
            &quot;name&quot;: &quot;rapidash&quot;,
            &quot;sprites&quot;: {
                &quot;front_default&quot;: &quot;storage/rapidash_front_default.png&quot;
            },
            &quot;types&quot;: [
                {
                    &quot;type&quot;: {
                        &quot;name&quot;: &quot;fire&quot;
                    },
                    &quot;slot&quot;: 1
                }
            ]
        },
        {
            &quot;id&quot;: 79,
            &quot;name&quot;: &quot;slowpoke&quot;,
            &quot;sprites&quot;: {
                &quot;front_default&quot;: &quot;storage/slowpoke_front_default.png&quot;
            },
            &quot;types&quot;: [
                {
                    &quot;type&quot;: {
                        &quot;name&quot;: &quot;water&quot;
                    },
                    &quot;slot&quot;: 1
                },
                {
                    &quot;type&quot;: {
                        &quot;name&quot;: &quot;psychic&quot;
                    },
                    &quot;slot&quot;: 2
                }
            ]
        },
        {
            &quot;id&quot;: 80,
            &quot;name&quot;: &quot;slowbro&quot;,
            &quot;sprites&quot;: {
                &quot;front_default&quot;: &quot;storage/slowbro_front_default.png&quot;
            },
            &quot;types&quot;: [
                {
                    &quot;type&quot;: {
                        &quot;name&quot;: &quot;water&quot;
                    },
                    &quot;slot&quot;: 1
                },
                {
                    &quot;type&quot;: {
                        &quot;name&quot;: &quot;psychic&quot;
                    },
                    &quot;slot&quot;: 2
                }
            ]
        },
        {
            &quot;id&quot;: 81,
            &quot;name&quot;: &quot;magnemite&quot;,
            &quot;sprites&quot;: {
                &quot;front_default&quot;: &quot;storage/magnemite_front_default.png&quot;
            },
            &quot;types&quot;: [
                {
                    &quot;type&quot;: {
                        &quot;name&quot;: &quot;electric&quot;
                    },
                    &quot;slot&quot;: 1
                },
                {
                    &quot;type&quot;: {
                        &quot;name&quot;: &quot;steel&quot;
                    },
                    &quot;slot&quot;: 2
                }
            ]
        },
        {
            &quot;id&quot;: 82,
            &quot;name&quot;: &quot;magneton&quot;,
            &quot;sprites&quot;: {
                &quot;front_default&quot;: &quot;storage/magneton_front_default.png&quot;
            },
            &quot;types&quot;: [
                {
                    &quot;type&quot;: {
                        &quot;name&quot;: &quot;electric&quot;
                    },
                    &quot;slot&quot;: 1
                },
                {
                    &quot;type&quot;: {
                        &quot;name&quot;: &quot;steel&quot;
                    },
                    &quot;slot&quot;: 2
                }
            ]
        },
        {
            &quot;id&quot;: 83,
            &quot;name&quot;: &quot;farfetchd&quot;,
            &quot;sprites&quot;: {
                &quot;front_default&quot;: &quot;storage/farfetchd_front_default.png&quot;
            },
            &quot;types&quot;: [
                {
                    &quot;type&quot;: {
                        &quot;name&quot;: &quot;normal&quot;
                    },
                    &quot;slot&quot;: 1
                },
                {
                    &quot;type&quot;: {
                        &quot;name&quot;: &quot;flying&quot;
                    },
                    &quot;slot&quot;: 2
                }
            ]
        },
        {
            &quot;id&quot;: 84,
            &quot;name&quot;: &quot;doduo&quot;,
            &quot;sprites&quot;: {
                &quot;front_default&quot;: &quot;storage/doduo_front_default.png&quot;
            },
            &quot;types&quot;: [
                {
                    &quot;type&quot;: {
                        &quot;name&quot;: &quot;normal&quot;
                    },
                    &quot;slot&quot;: 1
                },
                {
                    &quot;type&quot;: {
                        &quot;name&quot;: &quot;flying&quot;
                    },
                    &quot;slot&quot;: 2
                }
            ]
        },
        {
            &quot;id&quot;: 85,
            &quot;name&quot;: &quot;dodrio&quot;,
            &quot;sprites&quot;: {
                &quot;front_default&quot;: &quot;storage/dodrio_front_default.png&quot;
            },
            &quot;types&quot;: [
                {
                    &quot;type&quot;: {
                        &quot;name&quot;: &quot;normal&quot;
                    },
                    &quot;slot&quot;: 1
                },
                {
                    &quot;type&quot;: {
                        &quot;name&quot;: &quot;flying&quot;
                    },
                    &quot;slot&quot;: 2
                }
            ]
        },
        {
            &quot;id&quot;: 86,
            &quot;name&quot;: &quot;seel&quot;,
            &quot;sprites&quot;: {
                &quot;front_default&quot;: &quot;storage/seel_front_default.png&quot;
            },
            &quot;types&quot;: [
                {
                    &quot;type&quot;: {
                        &quot;name&quot;: &quot;water&quot;
                    },
                    &quot;slot&quot;: 1
                }
            ]
        },
        {
            &quot;id&quot;: 87,
            &quot;name&quot;: &quot;dewgong&quot;,
            &quot;sprites&quot;: {
                &quot;front_default&quot;: &quot;storage/dewgong_front_default.png&quot;
            },
            &quot;types&quot;: [
                {
                    &quot;type&quot;: {
                        &quot;name&quot;: &quot;water&quot;
                    },
                    &quot;slot&quot;: 1
                },
                {
                    &quot;type&quot;: {
                        &quot;name&quot;: &quot;ice&quot;
                    },
                    &quot;slot&quot;: 2
                }
            ]
        },
        {
            &quot;id&quot;: 88,
            &quot;name&quot;: &quot;grimer&quot;,
            &quot;sprites&quot;: {
                &quot;front_default&quot;: &quot;storage/grimer_front_default.png&quot;
            },
            &quot;types&quot;: [
                {
                    &quot;type&quot;: {
                        &quot;name&quot;: &quot;poison&quot;
                    },
                    &quot;slot&quot;: 1
                }
            ]
        },
        {
            &quot;id&quot;: 89,
            &quot;name&quot;: &quot;muk&quot;,
            &quot;sprites&quot;: {
                &quot;front_default&quot;: &quot;storage/muk_front_default.png&quot;
            },
            &quot;types&quot;: [
                {
                    &quot;type&quot;: {
                        &quot;name&quot;: &quot;poison&quot;
                    },
                    &quot;slot&quot;: 1
                }
            ]
        },
        {
            &quot;id&quot;: 90,
            &quot;name&quot;: &quot;shellder&quot;,
            &quot;sprites&quot;: {
                &quot;front_default&quot;: &quot;storage/shellder_front_default.png&quot;
            },
            &quot;types&quot;: [
                {
                    &quot;type&quot;: {
                        &quot;name&quot;: &quot;water&quot;
                    },
                    &quot;slot&quot;: 1
                }
            ]
        },
        {
            &quot;id&quot;: 91,
            &quot;name&quot;: &quot;cloyster&quot;,
            &quot;sprites&quot;: {
                &quot;front_default&quot;: &quot;storage/cloyster_front_default.png&quot;
            },
            &quot;types&quot;: [
                {
                    &quot;type&quot;: {
                        &quot;name&quot;: &quot;water&quot;
                    },
                    &quot;slot&quot;: 1
                },
                {
                    &quot;type&quot;: {
                        &quot;name&quot;: &quot;ice&quot;
                    },
                    &quot;slot&quot;: 2
                }
            ]
        },
        {
            &quot;id&quot;: 92,
            &quot;name&quot;: &quot;gastly&quot;,
            &quot;sprites&quot;: {
                &quot;front_default&quot;: &quot;storage/gastly_front_default.png&quot;
            },
            &quot;types&quot;: [
                {
                    &quot;type&quot;: {
                        &quot;name&quot;: &quot;ghost&quot;
                    },
                    &quot;slot&quot;: 1
                },
                {
                    &quot;type&quot;: {
                        &quot;name&quot;: &quot;poison&quot;
                    },
                    &quot;slot&quot;: 2
                }
            ]
        },
        {
            &quot;id&quot;: 93,
            &quot;name&quot;: &quot;haunter&quot;,
            &quot;sprites&quot;: {
                &quot;front_default&quot;: &quot;storage/haunter_front_default.png&quot;
            },
            &quot;types&quot;: [
                {
                    &quot;type&quot;: {
                        &quot;name&quot;: &quot;ghost&quot;
                    },
                    &quot;slot&quot;: 1
                },
                {
                    &quot;type&quot;: {
                        &quot;name&quot;: &quot;poison&quot;
                    },
                    &quot;slot&quot;: 2
                }
            ]
        },
        {
            &quot;id&quot;: 94,
            &quot;name&quot;: &quot;gengar&quot;,
            &quot;sprites&quot;: {
                &quot;front_default&quot;: &quot;storage/gengar_front_default.png&quot;
            },
            &quot;types&quot;: [
                {
                    &quot;type&quot;: {
                        &quot;name&quot;: &quot;ghost&quot;
                    },
                    &quot;slot&quot;: 1
                },
                {
                    &quot;type&quot;: {
                        &quot;name&quot;: &quot;poison&quot;
                    },
                    &quot;slot&quot;: 2
                }
            ]
        },
        {
            &quot;id&quot;: 95,
            &quot;name&quot;: &quot;onix&quot;,
            &quot;sprites&quot;: {
                &quot;front_default&quot;: &quot;storage/onix_front_default.png&quot;
            },
            &quot;types&quot;: [
                {
                    &quot;type&quot;: {
                        &quot;name&quot;: &quot;rock&quot;
                    },
                    &quot;slot&quot;: 1
                },
                {
                    &quot;type&quot;: {
                        &quot;name&quot;: &quot;ground&quot;
                    },
                    &quot;slot&quot;: 2
                }
            ]
        },
        {
            &quot;id&quot;: 96,
            &quot;name&quot;: &quot;drowzee&quot;,
            &quot;sprites&quot;: {
                &quot;front_default&quot;: &quot;storage/drowzee_front_default.png&quot;
            },
            &quot;types&quot;: [
                {
                    &quot;type&quot;: {
                        &quot;name&quot;: &quot;psychic&quot;
                    },
                    &quot;slot&quot;: 1
                }
            ]
        },
        {
            &quot;id&quot;: 97,
            &quot;name&quot;: &quot;hypno&quot;,
            &quot;sprites&quot;: {
                &quot;front_default&quot;: &quot;storage/hypno_front_default.png&quot;
            },
            &quot;types&quot;: [
                {
                    &quot;type&quot;: {
                        &quot;name&quot;: &quot;psychic&quot;
                    },
                    &quot;slot&quot;: 1
                }
            ]
        },
        {
            &quot;id&quot;: 98,
            &quot;name&quot;: &quot;krabby&quot;,
            &quot;sprites&quot;: {
                &quot;front_default&quot;: &quot;storage/krabby_front_default.png&quot;
            },
            &quot;types&quot;: [
                {
                    &quot;type&quot;: {
                        &quot;name&quot;: &quot;water&quot;
                    },
                    &quot;slot&quot;: 1
                }
            ]
        },
        {
            &quot;id&quot;: 99,
            &quot;name&quot;: &quot;kingler&quot;,
            &quot;sprites&quot;: {
                &quot;front_default&quot;: &quot;storage/kingler_front_default.png&quot;
            },
            &quot;types&quot;: [
                {
                    &quot;type&quot;: {
                        &quot;name&quot;: &quot;water&quot;
                    },
                    &quot;slot&quot;: 1
                }
            ]
        },
        {
            &quot;id&quot;: 100,
            &quot;name&quot;: &quot;voltorb&quot;,
            &quot;sprites&quot;: {
                &quot;front_default&quot;: &quot;storage/voltorb_front_default.png&quot;
            },
            &quot;types&quot;: [
                {
                    &quot;type&quot;: {
                        &quot;name&quot;: &quot;electric&quot;
                    },
                    &quot;slot&quot;: 1
                }
            ]
        },
        {
            &quot;id&quot;: 101,
            &quot;name&quot;: &quot;electrode&quot;,
            &quot;sprites&quot;: {
                &quot;front_default&quot;: &quot;storage/electrode_front_default.png&quot;
            },
            &quot;types&quot;: [
                {
                    &quot;type&quot;: {
                        &quot;name&quot;: &quot;electric&quot;
                    },
                    &quot;slot&quot;: 1
                }
            ]
        },
        {
            &quot;id&quot;: 102,
            &quot;name&quot;: &quot;exeggcute&quot;,
            &quot;sprites&quot;: {
                &quot;front_default&quot;: &quot;storage/exeggcute_front_default.png&quot;
            },
            &quot;types&quot;: [
                {
                    &quot;type&quot;: {
                        &quot;name&quot;: &quot;grass&quot;
                    },
                    &quot;slot&quot;: 1
                },
                {
                    &quot;type&quot;: {
                        &quot;name&quot;: &quot;psychic&quot;
                    },
                    &quot;slot&quot;: 2
                }
            ]
        },
        {
            &quot;id&quot;: 103,
            &quot;name&quot;: &quot;exeggutor&quot;,
            &quot;sprites&quot;: {
                &quot;front_default&quot;: &quot;storage/exeggutor_front_default.png&quot;
            },
            &quot;types&quot;: [
                {
                    &quot;type&quot;: {
                        &quot;name&quot;: &quot;grass&quot;
                    },
                    &quot;slot&quot;: 1
                },
                {
                    &quot;type&quot;: {
                        &quot;name&quot;: &quot;psychic&quot;
                    },
                    &quot;slot&quot;: 2
                }
            ]
        },
        {
            &quot;id&quot;: 104,
            &quot;name&quot;: &quot;cubone&quot;,
            &quot;sprites&quot;: {
                &quot;front_default&quot;: &quot;storage/cubone_front_default.png&quot;
            },
            &quot;types&quot;: [
                {
                    &quot;type&quot;: {
                        &quot;name&quot;: &quot;ground&quot;
                    },
                    &quot;slot&quot;: 1
                }
            ]
        },
        {
            &quot;id&quot;: 105,
            &quot;name&quot;: &quot;marowak&quot;,
            &quot;sprites&quot;: {
                &quot;front_default&quot;: &quot;storage/marowak_front_default.png&quot;
            },
            &quot;types&quot;: [
                {
                    &quot;type&quot;: {
                        &quot;name&quot;: &quot;ground&quot;
                    },
                    &quot;slot&quot;: 1
                }
            ]
        },
        {
            &quot;id&quot;: 106,
            &quot;name&quot;: &quot;hitmonlee&quot;,
            &quot;sprites&quot;: {
                &quot;front_default&quot;: &quot;storage/hitmonlee_front_default.png&quot;
            },
            &quot;types&quot;: [
                {
                    &quot;type&quot;: {
                        &quot;name&quot;: &quot;fighting&quot;
                    },
                    &quot;slot&quot;: 1
                }
            ]
        },
        {
            &quot;id&quot;: 107,
            &quot;name&quot;: &quot;hitmonchan&quot;,
            &quot;sprites&quot;: {
                &quot;front_default&quot;: &quot;storage/hitmonchan_front_default.png&quot;
            },
            &quot;types&quot;: [
                {
                    &quot;type&quot;: {
                        &quot;name&quot;: &quot;fighting&quot;
                    },
                    &quot;slot&quot;: 1
                }
            ]
        },
        {
            &quot;id&quot;: 108,
            &quot;name&quot;: &quot;lickitung&quot;,
            &quot;sprites&quot;: {
                &quot;front_default&quot;: &quot;storage/lickitung_front_default.png&quot;
            },
            &quot;types&quot;: [
                {
                    &quot;type&quot;: {
                        &quot;name&quot;: &quot;normal&quot;
                    },
                    &quot;slot&quot;: 1
                }
            ]
        },
        {
            &quot;id&quot;: 109,
            &quot;name&quot;: &quot;koffing&quot;,
            &quot;sprites&quot;: {
                &quot;front_default&quot;: &quot;storage/koffing_front_default.png&quot;
            },
            &quot;types&quot;: [
                {
                    &quot;type&quot;: {
                        &quot;name&quot;: &quot;poison&quot;
                    },
                    &quot;slot&quot;: 1
                }
            ]
        },
        {
            &quot;id&quot;: 110,
            &quot;name&quot;: &quot;weezing&quot;,
            &quot;sprites&quot;: {
                &quot;front_default&quot;: &quot;storage/weezing_front_default.png&quot;
            },
            &quot;types&quot;: [
                {
                    &quot;type&quot;: {
                        &quot;name&quot;: &quot;poison&quot;
                    },
                    &quot;slot&quot;: 1
                }
            ]
        },
        {
            &quot;id&quot;: 111,
            &quot;name&quot;: &quot;rhyhorn&quot;,
            &quot;sprites&quot;: {
                &quot;front_default&quot;: &quot;storage/rhyhorn_front_default.png&quot;
            },
            &quot;types&quot;: [
                {
                    &quot;type&quot;: {
                        &quot;name&quot;: &quot;ground&quot;
                    },
                    &quot;slot&quot;: 1
                },
                {
                    &quot;type&quot;: {
                        &quot;name&quot;: &quot;rock&quot;
                    },
                    &quot;slot&quot;: 2
                }
            ]
        },
        {
            &quot;id&quot;: 112,
            &quot;name&quot;: &quot;rhydon&quot;,
            &quot;sprites&quot;: {
                &quot;front_default&quot;: &quot;storage/rhydon_front_default.png&quot;
            },
            &quot;types&quot;: [
                {
                    &quot;type&quot;: {
                        &quot;name&quot;: &quot;ground&quot;
                    },
                    &quot;slot&quot;: 1
                },
                {
                    &quot;type&quot;: {
                        &quot;name&quot;: &quot;rock&quot;
                    },
                    &quot;slot&quot;: 2
                }
            ]
        },
        {
            &quot;id&quot;: 113,
            &quot;name&quot;: &quot;chansey&quot;,
            &quot;sprites&quot;: {
                &quot;front_default&quot;: &quot;storage/chansey_front_default.png&quot;
            },
            &quot;types&quot;: [
                {
                    &quot;type&quot;: {
                        &quot;name&quot;: &quot;normal&quot;
                    },
                    &quot;slot&quot;: 1
                }
            ]
        },
        {
            &quot;id&quot;: 114,
            &quot;name&quot;: &quot;tangela&quot;,
            &quot;sprites&quot;: {
                &quot;front_default&quot;: &quot;storage/tangela_front_default.png&quot;
            },
            &quot;types&quot;: [
                {
                    &quot;type&quot;: {
                        &quot;name&quot;: &quot;grass&quot;
                    },
                    &quot;slot&quot;: 1
                }
            ]
        },
        {
            &quot;id&quot;: 115,
            &quot;name&quot;: &quot;kangaskhan&quot;,
            &quot;sprites&quot;: {
                &quot;front_default&quot;: &quot;storage/kangaskhan_front_default.png&quot;
            },
            &quot;types&quot;: [
                {
                    &quot;type&quot;: {
                        &quot;name&quot;: &quot;normal&quot;
                    },
                    &quot;slot&quot;: 1
                }
            ]
        },
        {
            &quot;id&quot;: 116,
            &quot;name&quot;: &quot;horsea&quot;,
            &quot;sprites&quot;: {
                &quot;front_default&quot;: &quot;storage/horsea_front_default.png&quot;
            },
            &quot;types&quot;: [
                {
                    &quot;type&quot;: {
                        &quot;name&quot;: &quot;water&quot;
                    },
                    &quot;slot&quot;: 1
                }
            ]
        },
        {
            &quot;id&quot;: 117,
            &quot;name&quot;: &quot;seadra&quot;,
            &quot;sprites&quot;: {
                &quot;front_default&quot;: &quot;storage/seadra_front_default.png&quot;
            },
            &quot;types&quot;: [
                {
                    &quot;type&quot;: {
                        &quot;name&quot;: &quot;water&quot;
                    },
                    &quot;slot&quot;: 1
                }
            ]
        },
        {
            &quot;id&quot;: 118,
            &quot;name&quot;: &quot;goldeen&quot;,
            &quot;sprites&quot;: {
                &quot;front_default&quot;: &quot;storage/goldeen_front_default.png&quot;
            },
            &quot;types&quot;: [
                {
                    &quot;type&quot;: {
                        &quot;name&quot;: &quot;water&quot;
                    },
                    &quot;slot&quot;: 1
                }
            ]
        },
        {
            &quot;id&quot;: 119,
            &quot;name&quot;: &quot;seaking&quot;,
            &quot;sprites&quot;: {
                &quot;front_default&quot;: &quot;storage/seaking_front_default.png&quot;
            },
            &quot;types&quot;: [
                {
                    &quot;type&quot;: {
                        &quot;name&quot;: &quot;water&quot;
                    },
                    &quot;slot&quot;: 1
                }
            ]
        },
        {
            &quot;id&quot;: 120,
            &quot;name&quot;: &quot;staryu&quot;,
            &quot;sprites&quot;: {
                &quot;front_default&quot;: &quot;storage/staryu_front_default.png&quot;
            },
            &quot;types&quot;: [
                {
                    &quot;type&quot;: {
                        &quot;name&quot;: &quot;water&quot;
                    },
                    &quot;slot&quot;: 1
                }
            ]
        },
        {
            &quot;id&quot;: 121,
            &quot;name&quot;: &quot;starmie&quot;,
            &quot;sprites&quot;: {
                &quot;front_default&quot;: &quot;storage/starmie_front_default.png&quot;
            },
            &quot;types&quot;: [
                {
                    &quot;type&quot;: {
                        &quot;name&quot;: &quot;water&quot;
                    },
                    &quot;slot&quot;: 1
                },
                {
                    &quot;type&quot;: {
                        &quot;name&quot;: &quot;psychic&quot;
                    },
                    &quot;slot&quot;: 2
                }
            ]
        },
        {
            &quot;id&quot;: 122,
            &quot;name&quot;: &quot;mr-mime&quot;,
            &quot;sprites&quot;: {
                &quot;front_default&quot;: &quot;storage/mr-mime_front_default.png&quot;
            },
            &quot;types&quot;: [
                {
                    &quot;type&quot;: {
                        &quot;name&quot;: &quot;psychic&quot;
                    },
                    &quot;slot&quot;: 1
                },
                {
                    &quot;type&quot;: {
                        &quot;name&quot;: &quot;fairy&quot;
                    },
                    &quot;slot&quot;: 2
                }
            ]
        },
        {
            &quot;id&quot;: 123,
            &quot;name&quot;: &quot;scyther&quot;,
            &quot;sprites&quot;: {
                &quot;front_default&quot;: &quot;storage/scyther_front_default.png&quot;
            },
            &quot;types&quot;: [
                {
                    &quot;type&quot;: {
                        &quot;name&quot;: &quot;bug&quot;
                    },
                    &quot;slot&quot;: 1
                },
                {
                    &quot;type&quot;: {
                        &quot;name&quot;: &quot;flying&quot;
                    },
                    &quot;slot&quot;: 2
                }
            ]
        },
        {
            &quot;id&quot;: 124,
            &quot;name&quot;: &quot;jynx&quot;,
            &quot;sprites&quot;: {
                &quot;front_default&quot;: &quot;storage/jynx_front_default.png&quot;
            },
            &quot;types&quot;: [
                {
                    &quot;type&quot;: {
                        &quot;name&quot;: &quot;ice&quot;
                    },
                    &quot;slot&quot;: 1
                },
                {
                    &quot;type&quot;: {
                        &quot;name&quot;: &quot;psychic&quot;
                    },
                    &quot;slot&quot;: 2
                }
            ]
        },
        {
            &quot;id&quot;: 125,
            &quot;name&quot;: &quot;electabuzz&quot;,
            &quot;sprites&quot;: {
                &quot;front_default&quot;: &quot;storage/electabuzz_front_default.png&quot;
            },
            &quot;types&quot;: [
                {
                    &quot;type&quot;: {
                        &quot;name&quot;: &quot;electric&quot;
                    },
                    &quot;slot&quot;: 1
                }
            ]
        },
        {
            &quot;id&quot;: 126,
            &quot;name&quot;: &quot;magmar&quot;,
            &quot;sprites&quot;: {
                &quot;front_default&quot;: &quot;storage/magmar_front_default.png&quot;
            },
            &quot;types&quot;: [
                {
                    &quot;type&quot;: {
                        &quot;name&quot;: &quot;fire&quot;
                    },
                    &quot;slot&quot;: 1
                }
            ]
        },
        {
            &quot;id&quot;: 127,
            &quot;name&quot;: &quot;pinsir&quot;,
            &quot;sprites&quot;: {
                &quot;front_default&quot;: &quot;storage/pinsir_front_default.png&quot;
            },
            &quot;types&quot;: [
                {
                    &quot;type&quot;: {
                        &quot;name&quot;: &quot;bug&quot;
                    },
                    &quot;slot&quot;: 1
                }
            ]
        },
        {
            &quot;id&quot;: 128,
            &quot;name&quot;: &quot;tauros&quot;,
            &quot;sprites&quot;: {
                &quot;front_default&quot;: &quot;storage/tauros_front_default.png&quot;
            },
            &quot;types&quot;: [
                {
                    &quot;type&quot;: {
                        &quot;name&quot;: &quot;normal&quot;
                    },
                    &quot;slot&quot;: 1
                }
            ]
        },
        {
            &quot;id&quot;: 129,
            &quot;name&quot;: &quot;magikarp&quot;,
            &quot;sprites&quot;: {
                &quot;front_default&quot;: &quot;storage/magikarp_front_default.png&quot;
            },
            &quot;types&quot;: [
                {
                    &quot;type&quot;: {
                        &quot;name&quot;: &quot;water&quot;
                    },
                    &quot;slot&quot;: 1
                }
            ]
        },
        {
            &quot;id&quot;: 130,
            &quot;name&quot;: &quot;gyarados&quot;,
            &quot;sprites&quot;: {
                &quot;front_default&quot;: &quot;storage/gyarados_front_default.png&quot;
            },
            &quot;types&quot;: [
                {
                    &quot;type&quot;: {
                        &quot;name&quot;: &quot;water&quot;
                    },
                    &quot;slot&quot;: 1
                },
                {
                    &quot;type&quot;: {
                        &quot;name&quot;: &quot;flying&quot;
                    },
                    &quot;slot&quot;: 2
                }
            ]
        },
        {
            &quot;id&quot;: 131,
            &quot;name&quot;: &quot;lapras&quot;,
            &quot;sprites&quot;: {
                &quot;front_default&quot;: &quot;storage/lapras_front_default.png&quot;
            },
            &quot;types&quot;: [
                {
                    &quot;type&quot;: {
                        &quot;name&quot;: &quot;water&quot;
                    },
                    &quot;slot&quot;: 1
                },
                {
                    &quot;type&quot;: {
                        &quot;name&quot;: &quot;ice&quot;
                    },
                    &quot;slot&quot;: 2
                }
            ]
        },
        {
            &quot;id&quot;: 132,
            &quot;name&quot;: &quot;ditto&quot;,
            &quot;sprites&quot;: {
                &quot;front_default&quot;: &quot;storage/ditto_front_default.png&quot;
            },
            &quot;types&quot;: [
                {
                    &quot;type&quot;: {
                        &quot;name&quot;: &quot;normal&quot;
                    },
                    &quot;slot&quot;: 1
                }
            ]
        },
        {
            &quot;id&quot;: 133,
            &quot;name&quot;: &quot;eevee&quot;,
            &quot;sprites&quot;: {
                &quot;front_default&quot;: &quot;storage/eevee_front_default.png&quot;
            },
            &quot;types&quot;: [
                {
                    &quot;type&quot;: {
                        &quot;name&quot;: &quot;normal&quot;
                    },
                    &quot;slot&quot;: 1
                }
            ]
        },
        {
            &quot;id&quot;: 134,
            &quot;name&quot;: &quot;vaporeon&quot;,
            &quot;sprites&quot;: {
                &quot;front_default&quot;: &quot;storage/vaporeon_front_default.png&quot;
            },
            &quot;types&quot;: [
                {
                    &quot;type&quot;: {
                        &quot;name&quot;: &quot;water&quot;
                    },
                    &quot;slot&quot;: 1
                }
            ]
        },
        {
            &quot;id&quot;: 135,
            &quot;name&quot;: &quot;jolteon&quot;,
            &quot;sprites&quot;: {
                &quot;front_default&quot;: &quot;storage/jolteon_front_default.png&quot;
            },
            &quot;types&quot;: [
                {
                    &quot;type&quot;: {
                        &quot;name&quot;: &quot;electric&quot;
                    },
                    &quot;slot&quot;: 1
                }
            ]
        },
        {
            &quot;id&quot;: 136,
            &quot;name&quot;: &quot;flareon&quot;,
            &quot;sprites&quot;: {
                &quot;front_default&quot;: &quot;storage/flareon_front_default.png&quot;
            },
            &quot;types&quot;: [
                {
                    &quot;type&quot;: {
                        &quot;name&quot;: &quot;fire&quot;
                    },
                    &quot;slot&quot;: 1
                }
            ]
        },
        {
            &quot;id&quot;: 137,
            &quot;name&quot;: &quot;porygon&quot;,
            &quot;sprites&quot;: {
                &quot;front_default&quot;: &quot;storage/porygon_front_default.png&quot;
            },
            &quot;types&quot;: [
                {
                    &quot;type&quot;: {
                        &quot;name&quot;: &quot;normal&quot;
                    },
                    &quot;slot&quot;: 1
                }
            ]
        },
        {
            &quot;id&quot;: 138,
            &quot;name&quot;: &quot;omanyte&quot;,
            &quot;sprites&quot;: {
                &quot;front_default&quot;: &quot;storage/omanyte_front_default.png&quot;
            },
            &quot;types&quot;: [
                {
                    &quot;type&quot;: {
                        &quot;name&quot;: &quot;rock&quot;
                    },
                    &quot;slot&quot;: 1
                },
                {
                    &quot;type&quot;: {
                        &quot;name&quot;: &quot;water&quot;
                    },
                    &quot;slot&quot;: 2
                }
            ]
        },
        {
            &quot;id&quot;: 139,
            &quot;name&quot;: &quot;omastar&quot;,
            &quot;sprites&quot;: {
                &quot;front_default&quot;: &quot;storage/omastar_front_default.png&quot;
            },
            &quot;types&quot;: [
                {
                    &quot;type&quot;: {
                        &quot;name&quot;: &quot;rock&quot;
                    },
                    &quot;slot&quot;: 1
                },
                {
                    &quot;type&quot;: {
                        &quot;name&quot;: &quot;water&quot;
                    },
                    &quot;slot&quot;: 2
                }
            ]
        },
        {
            &quot;id&quot;: 140,
            &quot;name&quot;: &quot;kabuto&quot;,
            &quot;sprites&quot;: {
                &quot;front_default&quot;: &quot;storage/kabuto_front_default.png&quot;
            },
            &quot;types&quot;: [
                {
                    &quot;type&quot;: {
                        &quot;name&quot;: &quot;rock&quot;
                    },
                    &quot;slot&quot;: 1
                },
                {
                    &quot;type&quot;: {
                        &quot;name&quot;: &quot;water&quot;
                    },
                    &quot;slot&quot;: 2
                }
            ]
        },
        {
            &quot;id&quot;: 141,
            &quot;name&quot;: &quot;kabutops&quot;,
            &quot;sprites&quot;: {
                &quot;front_default&quot;: &quot;storage/kabutops_front_default.png&quot;
            },
            &quot;types&quot;: [
                {
                    &quot;type&quot;: {
                        &quot;name&quot;: &quot;rock&quot;
                    },
                    &quot;slot&quot;: 1
                },
                {
                    &quot;type&quot;: {
                        &quot;name&quot;: &quot;water&quot;
                    },
                    &quot;slot&quot;: 2
                }
            ]
        },
        {
            &quot;id&quot;: 142,
            &quot;name&quot;: &quot;aerodactyl&quot;,
            &quot;sprites&quot;: {
                &quot;front_default&quot;: &quot;storage/aerodactyl_front_default.png&quot;
            },
            &quot;types&quot;: [
                {
                    &quot;type&quot;: {
                        &quot;name&quot;: &quot;rock&quot;
                    },
                    &quot;slot&quot;: 1
                },
                {
                    &quot;type&quot;: {
                        &quot;name&quot;: &quot;flying&quot;
                    },
                    &quot;slot&quot;: 2
                }
            ]
        },
        {
            &quot;id&quot;: 143,
            &quot;name&quot;: &quot;snorlax&quot;,
            &quot;sprites&quot;: {
                &quot;front_default&quot;: &quot;storage/snorlax_front_default.png&quot;
            },
            &quot;types&quot;: [
                {
                    &quot;type&quot;: {
                        &quot;name&quot;: &quot;normal&quot;
                    },
                    &quot;slot&quot;: 1
                }
            ]
        },
        {
            &quot;id&quot;: 144,
            &quot;name&quot;: &quot;articuno&quot;,
            &quot;sprites&quot;: {
                &quot;front_default&quot;: &quot;storage/articuno_front_default.png&quot;
            },
            &quot;types&quot;: [
                {
                    &quot;type&quot;: {
                        &quot;name&quot;: &quot;ice&quot;
                    },
                    &quot;slot&quot;: 1
                },
                {
                    &quot;type&quot;: {
                        &quot;name&quot;: &quot;flying&quot;
                    },
                    &quot;slot&quot;: 2
                }
            ]
        },
        {
            &quot;id&quot;: 145,
            &quot;name&quot;: &quot;zapdos&quot;,
            &quot;sprites&quot;: {
                &quot;front_default&quot;: &quot;storage/zapdos_front_default.png&quot;
            },
            &quot;types&quot;: [
                {
                    &quot;type&quot;: {
                        &quot;name&quot;: &quot;electric&quot;
                    },
                    &quot;slot&quot;: 1
                },
                {
                    &quot;type&quot;: {
                        &quot;name&quot;: &quot;flying&quot;
                    },
                    &quot;slot&quot;: 2
                }
            ]
        },
        {
            &quot;id&quot;: 146,
            &quot;name&quot;: &quot;moltres&quot;,
            &quot;sprites&quot;: {
                &quot;front_default&quot;: &quot;storage/moltres_front_default.png&quot;
            },
            &quot;types&quot;: [
                {
                    &quot;type&quot;: {
                        &quot;name&quot;: &quot;fire&quot;
                    },
                    &quot;slot&quot;: 1
                },
                {
                    &quot;type&quot;: {
                        &quot;name&quot;: &quot;flying&quot;
                    },
                    &quot;slot&quot;: 2
                }
            ]
        },
        {
            &quot;id&quot;: 147,
            &quot;name&quot;: &quot;dratini&quot;,
            &quot;sprites&quot;: {
                &quot;front_default&quot;: &quot;storage/dratini_front_default.png&quot;
            },
            &quot;types&quot;: [
                {
                    &quot;type&quot;: {
                        &quot;name&quot;: &quot;dragon&quot;
                    },
                    &quot;slot&quot;: 1
                }
            ]
        },
        {
            &quot;id&quot;: 148,
            &quot;name&quot;: &quot;dragonair&quot;,
            &quot;sprites&quot;: {
                &quot;front_default&quot;: &quot;storage/dragonair_front_default.png&quot;
            },
            &quot;types&quot;: [
                {
                    &quot;type&quot;: {
                        &quot;name&quot;: &quot;dragon&quot;
                    },
                    &quot;slot&quot;: 1
                }
            ]
        },
        {
            &quot;id&quot;: 149,
            &quot;name&quot;: &quot;dragonite&quot;,
            &quot;sprites&quot;: {
                &quot;front_default&quot;: &quot;storage/dragonite_front_default.png&quot;
            },
            &quot;types&quot;: [
                {
                    &quot;type&quot;: {
                        &quot;name&quot;: &quot;dragon&quot;
                    },
                    &quot;slot&quot;: 1
                },
                {
                    &quot;type&quot;: {
                        &quot;name&quot;: &quot;flying&quot;
                    },
                    &quot;slot&quot;: 2
                }
            ]
        },
        {
            &quot;id&quot;: 150,
            &quot;name&quot;: &quot;mewtwo&quot;,
            &quot;sprites&quot;: {
                &quot;front_default&quot;: &quot;storage/mewtwo_front_default.png&quot;
            },
            &quot;types&quot;: [
                {
                    &quot;type&quot;: {
                        &quot;name&quot;: &quot;psychic&quot;
                    },
                    &quot;slot&quot;: 1
                }
            ]
        },
        {
            &quot;id&quot;: 151,
            &quot;name&quot;: &quot;mew&quot;,
            &quot;sprites&quot;: {
                &quot;front_default&quot;: &quot;storage/mew_front_default.png&quot;
            },
            &quot;types&quot;: [
                {
                    &quot;type&quot;: {
                        &quot;name&quot;: &quot;psychic&quot;
                    },
                    &quot;slot&quot;: 1
                }
            ]
        },
        {
            &quot;id&quot;: 152,
            &quot;name&quot;: &quot;pikachu&quot;,
            &quot;sprites&quot;: {
                &quot;front_default&quot;: &quot;https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/25.png&quot;
            },
            &quot;types&quot;: []
        },
        {
            &quot;id&quot;: 153,
            &quot;name&quot;: &quot;pikachu&quot;,
            &quot;sprites&quot;: {
                &quot;front_default&quot;: &quot;https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/25.png&quot;
            },
            &quot;types&quot;: []
        },
        {
            &quot;id&quot;: 154,
            &quot;name&quot;: &quot;pikachu&quot;,
            &quot;sprites&quot;: {
                &quot;front_default&quot;: &quot;https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/25.png&quot;
            },
            &quot;types&quot;: []
        },
        {
            &quot;id&quot;: 155,
            &quot;name&quot;: &quot;pikachu&quot;,
            &quot;sprites&quot;: {
                &quot;front_default&quot;: &quot;https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/25.png&quot;
            },
            &quot;types&quot;: []
        },
        {
            &quot;id&quot;: 156,
            &quot;name&quot;: &quot;pikachu&quot;,
            &quot;sprites&quot;: {
                &quot;front_default&quot;: &quot;https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/25.png&quot;
            },
            &quot;types&quot;: [
                {
                    &quot;type&quot;: {
                        &quot;name&quot;: &quot;electric&quot;
                    },
                    &quot;slot&quot;: 1
                }
            ]
        },
        {
            &quot;id&quot;: 157,
            &quot;name&quot;: &quot;bulbasaur&quot;,
            &quot;sprites&quot;: {
                &quot;front_default&quot;: &quot;https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/1.png&quot;
            },
            &quot;types&quot;: [
                {
                    &quot;type&quot;: {
                        &quot;name&quot;: &quot;grass&quot;
                    },
                    &quot;slot&quot;: 1
                },
                {
                    &quot;type&quot;: {
                        &quot;name&quot;: &quot;poison&quot;
                    },
                    &quot;slot&quot;: 2
                }
            ]
        },
        {
            &quot;id&quot;: 158,
            &quot;name&quot;: &quot;clefairy&quot;,
            &quot;sprites&quot;: {
                &quot;front_default&quot;: &quot;https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/35.png&quot;
            },
            &quot;types&quot;: [
                {
                    &quot;type&quot;: {
                        &quot;name&quot;: &quot;fairy&quot;
                    },
                    &quot;slot&quot;: 1
                }
            ]
        },
        {
            &quot;id&quot;: 159,
            &quot;name&quot;: &quot;charizard&quot;,
            &quot;sprites&quot;: {
                &quot;front_default&quot;: &quot;https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/6.png&quot;
            },
            &quot;types&quot;: [
                {
                    &quot;type&quot;: {
                        &quot;name&quot;: &quot;fire&quot;
                    },
                    &quot;slot&quot;: 1
                },
                {
                    &quot;type&quot;: {
                        &quot;name&quot;: &quot;flying&quot;
                    },
                    &quot;slot&quot;: 2
                }
            ]
        },
        {
            &quot;id&quot;: 160,
            &quot;name&quot;: &quot;carracosta&quot;,
            &quot;sprites&quot;: {
                &quot;front_default&quot;: &quot;https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/565.png&quot;
            },
            &quot;types&quot;: [
                {
                    &quot;type&quot;: {
                        &quot;name&quot;: &quot;water&quot;
                    },
                    &quot;slot&quot;: 1
                },
                {
                    &quot;type&quot;: {
                        &quot;name&quot;: &quot;rock&quot;
                    },
                    &quot;slot&quot;: 2
                }
            ]
        }
    ]
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-v1-pokemons" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-pokemons"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-pokemons"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-v1-pokemons" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-pokemons">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-v1-pokemons" data-method="GET"
      data-path="api/v1/pokemons"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-pokemons', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-pokemons"
                    onclick="tryItOut('GETapi-v1-pokemons');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-pokemons"
                    onclick="cancelTryOut('GETapi-v1-pokemons');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-pokemons"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/pokemons</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Content-Type"                data-endpoint="GETapi-v1-pokemons"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Accept"                data-endpoint="GETapi-v1-pokemons"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>sort</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
               name="sort"                data-endpoint="GETapi-v1-pokemons"
               value=""
               data-component="body">
    <br>

        </div>
        </form>

                    <h2 id="endpoints-GETapi-v1-pokemons--id-">GET api/v1/pokemons/{id}</h2>

<p>
</p>



<span id="example-requests-GETapi-v1-pokemons--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "https://pokedex-wise.test/api/v1/pokemons/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "https://pokedex-wise.test/api/v1/pokemons/1"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-v1-pokemons--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 58
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;data&quot;: {
        &quot;id&quot;: 1,
        &quot;name&quot;: &quot;bulbasaur&quot;,
        &quot;sprites&quot;: {
            &quot;front_default&quot;: &quot;storage/bulbasaur_front_default.png&quot;,
            &quot;front_female&quot;: null,
            &quot;front_shiny&quot;: &quot;https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/shiny/1.png&quot;,
            &quot;front_shiny_female&quot;: null,
            &quot;back_default&quot;: &quot;https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/back/1.png&quot;,
            &quot;back_female&quot;: null,
            &quot;back_shiny&quot;: &quot;https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/back/shiny/1.png&quot;,
            &quot;back_shiny_female&quot;: null
        },
        &quot;types&quot;: [
            {
                &quot;type&quot;: &quot;grass&quot;,
                &quot;slot&quot;: 1
            },
            {
                &quot;type&quot;: &quot;poison&quot;,
                &quot;slot&quot;: 2
            }
        ],
        &quot;height&quot;: 7,
        &quot;weight&quot;: 69,
        &quot;abilities&quot;: [
            {
                &quot;ability&quot;: &quot;overgrow&quot;,
                &quot;is_hidden&quot;: 0,
                &quot;slot&quot;: 1
            },
            {
                &quot;ability&quot;: &quot;chlorophyll&quot;,
                &quot;is_hidden&quot;: 1,
                &quot;slot&quot;: 3
            }
        ]
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-v1-pokemons--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-pokemons--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-pokemons--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-v1-pokemons--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-pokemons--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-v1-pokemons--id-" data-method="GET"
      data-path="api/v1/pokemons/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-pokemons--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-pokemons--id-"
                    onclick="tryItOut('GETapi-v1-pokemons--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-pokemons--id-"
                    onclick="cancelTryOut('GETapi-v1-pokemons--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-pokemons--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/pokemons/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Content-Type"                data-endpoint="GETapi-v1-pokemons--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Accept"                data-endpoint="GETapi-v1-pokemons--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               name="id"                data-endpoint="GETapi-v1-pokemons--id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the pokemon. Example: <code>1</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-GETapi-v1-teams">GET api/v1/teams</h2>

<p>
</p>



<span id="example-requests-GETapi-v1-teams">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "https://pokedex-wise.test/api/v1/teams" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "https://pokedex-wise.test/api/v1/teams"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-v1-teams">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 57
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;data&quot;: [
        {
            &quot;id&quot;: 1,
            &quot;name&quot;: &quot;Mike&#039;s pokemon team&quot;,
            &quot;pokemons&quot;: [
                1,
                2,
                3,
                4,
                5,
                6
            ]
        }
    ]
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-v1-teams" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-teams"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-teams"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-v1-teams" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-teams">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-v1-teams" data-method="GET"
      data-path="api/v1/teams"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-teams', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-teams"
                    onclick="tryItOut('GETapi-v1-teams');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-teams"
                    onclick="cancelTryOut('GETapi-v1-teams');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-teams"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/teams</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Content-Type"                data-endpoint="GETapi-v1-teams"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Accept"                data-endpoint="GETapi-v1-teams"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-POSTapi-v1-teams">POST api/v1/teams</h2>

<p>
</p>



<span id="example-requests-POSTapi-v1-teams">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "https://pokedex-wise.test/api/v1/teams" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"name\": \"lmemzumeafgzrptvshbgwcvry\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "https://pokedex-wise.test/api/v1/teams"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "lmemzumeafgzrptvshbgwcvry"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-v1-teams">
</span>
<span id="execution-results-POSTapi-v1-teams" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-v1-teams"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-teams"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-v1-teams" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-teams">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-v1-teams" data-method="POST"
      data-path="api/v1/teams"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-teams', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-v1-teams"
                    onclick="tryItOut('POSTapi-v1-teams');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-v1-teams"
                    onclick="cancelTryOut('POSTapi-v1-teams');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-v1-teams"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/v1/teams</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Content-Type"                data-endpoint="POSTapi-v1-teams"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Accept"                data-endpoint="POSTapi-v1-teams"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="name"                data-endpoint="POSTapi-v1-teams"
               value="lmemzumeafgzrptvshbgwcvry"
               data-component="body">
    <br>
<p>Must not be greater than 255 characters. Example: <code>lmemzumeafgzrptvshbgwcvry</code></p>
        </div>
        </form>

                    <h2 id="endpoints-GETapi-v1-teams--id-">GET api/v1/teams/{id}</h2>

<p>
</p>



<span id="example-requests-GETapi-v1-teams--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "https://pokedex-wise.test/api/v1/teams/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "https://pokedex-wise.test/api/v1/teams/1"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-v1-teams--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 56
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;data&quot;: {
        &quot;id&quot;: 1,
        &quot;name&quot;: &quot;Mike&#039;s pokemon team&quot;,
        &quot;pokemons&quot;: [
            1,
            2,
            3,
            4,
            5,
            6
        ]
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-v1-teams--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-teams--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-teams--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-v1-teams--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-teams--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-v1-teams--id-" data-method="GET"
      data-path="api/v1/teams/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-teams--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-teams--id-"
                    onclick="tryItOut('GETapi-v1-teams--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-teams--id-"
                    onclick="cancelTryOut('GETapi-v1-teams--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-teams--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/teams/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Content-Type"                data-endpoint="GETapi-v1-teams--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Accept"                data-endpoint="GETapi-v1-teams--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               name="id"                data-endpoint="GETapi-v1-teams--id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the team. Example: <code>1</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-POSTapi-v1-teams--id-">POST api/v1/teams/{id}</h2>

<p>
</p>



<span id="example-requests-POSTapi-v1-teams--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "https://pokedex-wise.test/api/v1/teams/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "https://pokedex-wise.test/api/v1/teams/1"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-v1-teams--id-">
</span>
<span id="execution-results-POSTapi-v1-teams--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-v1-teams--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-teams--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-v1-teams--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-teams--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-v1-teams--id-" data-method="POST"
      data-path="api/v1/teams/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-teams--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-v1-teams--id-"
                    onclick="tryItOut('POSTapi-v1-teams--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-v1-teams--id-"
                    onclick="cancelTryOut('POSTapi-v1-teams--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-v1-teams--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/v1/teams/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Content-Type"                data-endpoint="POSTapi-v1-teams--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Accept"                data-endpoint="POSTapi-v1-teams--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               name="id"                data-endpoint="POSTapi-v1-teams--id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the team. Example: <code>1</code></p>
            </div>
                    </form>

            

        
    </div>
    <div class="dark-box">
                    <div class="lang-selector">
                                                        <button type="button" class="lang-button" data-language-name="bash">bash</button>
                                                        <button type="button" class="lang-button" data-language-name="javascript">javascript</button>
                            </div>
            </div>
</div>
</body>
</html>
