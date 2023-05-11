# Endpoints


## The action to show widget output via ajax.




> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/arrilot/load-widget" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/arrilot/load-widget"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (500):

```json
{
    "message": "The payload is invalid.",
    "exception": "Illuminate\\Contracts\\Encryption\\DecryptException",
    "file": "C:\\Users\\User\\Desktop\\karoostudio\\vendor\\laravel\\framework\\src\\Illuminate\\Encryption\\Encrypter.php",
    "line": 221,
    "trace": [
        {
            "file": "C:\\Users\\User\\Desktop\\karoostudio\\vendor\\laravel\\framework\\src\\Illuminate\\Encryption\\Encrypter.php",
            "line": 158,
            "function": "getJsonPayload",
            "class": "Illuminate\\Encryption\\Encrypter",
            "type": "->"
        },
        {
            "file": "C:\\Users\\User\\Desktop\\karoostudio\\vendor\\arrilot\\laravel-widgets\\src\\Factories\\AbstractWidgetFactory.php",
            "line": 217,
            "function": "decrypt",
            "class": "Illuminate\\Encryption\\Encrypter",
            "type": "->"
        },
        {
            "file": "C:\\Users\\User\\Desktop\\karoostudio\\vendor\\arrilot\\laravel-widgets\\src\\Controllers\\WidgetController.php",
            "line": 28,
            "function": "decryptWidgetParams",
            "class": "Arrilot\\Widgets\\Factories\\AbstractWidgetFactory",
            "type": "->"
        },
        {
            "file": "C:\\Users\\User\\Desktop\\karoostudio\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Controller.php",
            "line": 54,
            "function": "showWidget",
            "class": "Arrilot\\Widgets\\Controllers\\WidgetController",
            "type": "->"
        },
        {
            "file": "C:\\Users\\User\\Desktop\\karoostudio\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\ControllerDispatcher.php",
            "line": 45,
            "function": "callAction",
            "class": "Illuminate\\Routing\\Controller",
            "type": "->"
        },
        {
            "file": "C:\\Users\\User\\Desktop\\karoostudio\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Route.php",
            "line": 262,
            "function": "dispatch",
            "class": "Illuminate\\Routing\\ControllerDispatcher",
            "type": "->"
        },
        {
            "file": "C:\\Users\\User\\Desktop\\karoostudio\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Route.php",
            "line": 205,
            "function": "runController",
            "class": "Illuminate\\Routing\\Route",
            "type": "->"
        },
        {
            "file": "C:\\Users\\User\\Desktop\\karoostudio\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 721,
            "function": "run",
            "class": "Illuminate\\Routing\\Route",
            "type": "->"
        },
        {
            "file": "C:\\Users\\User\\Desktop\\karoostudio\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 128,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "C:\\Users\\User\\Desktop\\karoostudio\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Middleware\\SubstituteBindings.php",
            "line": 50,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "C:\\Users\\User\\Desktop\\karoostudio\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Routing\\Middleware\\SubstituteBindings",
            "type": "->"
        },
        {
            "file": "C:\\Users\\User\\Desktop\\karoostudio\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\VerifyCsrfToken.php",
            "line": 78,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "C:\\Users\\User\\Desktop\\karoostudio\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\VerifyCsrfToken",
            "type": "->"
        },
        {
            "file": "C:\\Users\\User\\Desktop\\karoostudio\\vendor\\laravel\\framework\\src\\Illuminate\\View\\Middleware\\ShareErrorsFromSession.php",
            "line": 49,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "C:\\Users\\User\\Desktop\\karoostudio\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\View\\Middleware\\ShareErrorsFromSession",
            "type": "->"
        },
        {
            "file": "C:\\Users\\User\\Desktop\\karoostudio\\vendor\\laravel\\framework\\src\\Illuminate\\Session\\Middleware\\StartSession.php",
            "line": 121,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "C:\\Users\\User\\Desktop\\karoostudio\\vendor\\laravel\\framework\\src\\Illuminate\\Session\\Middleware\\StartSession.php",
            "line": 64,
            "function": "handleStatefulRequest",
            "class": "Illuminate\\Session\\Middleware\\StartSession",
            "type": "->"
        },
        {
            "file": "C:\\Users\\User\\Desktop\\karoostudio\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Session\\Middleware\\StartSession",
            "type": "->"
        },
        {
            "file": "C:\\Users\\User\\Desktop\\karoostudio\\vendor\\laravel\\framework\\src\\Illuminate\\Cookie\\Middleware\\AddQueuedCookiesToResponse.php",
            "line": 37,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "C:\\Users\\User\\Desktop\\karoostudio\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Cookie\\Middleware\\AddQueuedCookiesToResponse",
            "type": "->"
        },
        {
            "file": "C:\\Users\\User\\Desktop\\karoostudio\\vendor\\laravel\\framework\\src\\Illuminate\\Cookie\\Middleware\\EncryptCookies.php",
            "line": 67,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "C:\\Users\\User\\Desktop\\karoostudio\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Cookie\\Middleware\\EncryptCookies",
            "type": "->"
        },
        {
            "file": "C:\\Users\\User\\Desktop\\karoostudio\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 103,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "C:\\Users\\User\\Desktop\\karoostudio\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 723,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "C:\\Users\\User\\Desktop\\karoostudio\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 698,
            "function": "runRouteWithinStack",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "C:\\Users\\User\\Desktop\\karoostudio\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 662,
            "function": "runRoute",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "C:\\Users\\User\\Desktop\\karoostudio\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 651,
            "function": "dispatchToRoute",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "C:\\Users\\User\\Desktop\\karoostudio\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php",
            "line": 167,
            "function": "dispatch",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "C:\\Users\\User\\Desktop\\karoostudio\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 128,
            "function": "Illuminate\\Foundation\\Http\\{closure}",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "C:\\Users\\User\\Desktop\\karoostudio\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest.php",
            "line": 21,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "C:\\Users\\User\\Desktop\\karoostudio\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\ConvertEmptyStringsToNull.php",
            "line": 31,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest",
            "type": "->"
        },
        {
            "file": "C:\\Users\\User\\Desktop\\karoostudio\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\ConvertEmptyStringsToNull",
            "type": "->"
        },
        {
            "file": "C:\\Users\\User\\Desktop\\karoostudio\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest.php",
            "line": 21,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "C:\\Users\\User\\Desktop\\karoostudio\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TrimStrings.php",
            "line": 40,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest",
            "type": "->"
        },
        {
            "file": "C:\\Users\\User\\Desktop\\karoostudio\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TrimStrings",
            "type": "->"
        },
        {
            "file": "C:\\Users\\User\\Desktop\\karoostudio\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize.php",
            "line": 27,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "C:\\Users\\User\\Desktop\\karoostudio\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize",
            "type": "->"
        },
        {
            "file": "C:\\Users\\User\\Desktop\\karoostudio\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\PreventRequestsDuringMaintenance.php",
            "line": 86,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "C:\\Users\\User\\Desktop\\karoostudio\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\PreventRequestsDuringMaintenance",
            "type": "->"
        },
        {
            "file": "C:\\Users\\User\\Desktop\\karoostudio\\vendor\\fruitcake\\laravel-cors\\src\\HandleCors.php",
            "line": 38,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "C:\\Users\\User\\Desktop\\karoostudio\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Fruitcake\\Cors\\HandleCors",
            "type": "->"
        },
        {
            "file": "C:\\Users\\User\\Desktop\\karoostudio\\vendor\\laravel\\framework\\src\\Illuminate\\Http\\Middleware\\TrustProxies.php",
            "line": 39,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "C:\\Users\\User\\Desktop\\karoostudio\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Http\\Middleware\\TrustProxies",
            "type": "->"
        },
        {
            "file": "C:\\Users\\User\\Desktop\\karoostudio\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 103,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "C:\\Users\\User\\Desktop\\karoostudio\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php",
            "line": 142,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "C:\\Users\\User\\Desktop\\karoostudio\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php",
            "line": 111,
            "function": "sendRequestThroughRouter",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "C:\\Users\\User\\Desktop\\karoostudio\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php",
            "line": 324,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "C:\\Users\\User\\Desktop\\karoostudio\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php",
            "line": 305,
            "function": "callLaravelOrLumenRoute",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "C:\\Users\\User\\Desktop\\karoostudio\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php",
            "line": 76,
            "function": "makeApiCall",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "C:\\Users\\User\\Desktop\\karoostudio\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php",
            "line": 51,
            "function": "makeResponseCall",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "C:\\Users\\User\\Desktop\\karoostudio\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php",
            "line": 41,
            "function": "makeResponseCallIfEnabledAndNoSuccessResponses",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "C:\\Users\\User\\Desktop\\karoostudio\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Generator.php",
            "line": 236,
            "function": "__invoke",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "C:\\Users\\User\\Desktop\\karoostudio\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Generator.php",
            "line": 172,
            "function": "iterateThroughStrategies",
            "class": "Knuckles\\Scribe\\Extracting\\Generator",
            "type": "->"
        },
        {
            "file": "C:\\Users\\User\\Desktop\\karoostudio\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Generator.php",
            "line": 127,
            "function": "fetchResponses",
            "class": "Knuckles\\Scribe\\Extracting\\Generator",
            "type": "->"
        },
        {
            "file": "C:\\Users\\User\\Desktop\\karoostudio\\vendor\\knuckleswtf\\scribe\\src\\Commands\\GenerateDocumentation.php",
            "line": 119,
            "function": "processRoute",
            "class": "Knuckles\\Scribe\\Extracting\\Generator",
            "type": "->"
        },
        {
            "file": "C:\\Users\\User\\Desktop\\karoostudio\\vendor\\knuckleswtf\\scribe\\src\\Commands\\GenerateDocumentation.php",
            "line": 73,
            "function": "processRoutes",
            "class": "Knuckles\\Scribe\\Commands\\GenerateDocumentation",
            "type": "->"
        },
        {
            "file": "C:\\Users\\User\\Desktop\\karoostudio\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php",
            "line": 36,
            "function": "handle",
            "class": "Knuckles\\Scribe\\Commands\\GenerateDocumentation",
            "type": "->"
        },
        {
            "file": "C:\\Users\\User\\Desktop\\karoostudio\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Util.php",
            "line": 40,
            "function": "Illuminate\\Container\\{closure}",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "C:\\Users\\User\\Desktop\\karoostudio\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php",
            "line": 93,
            "function": "unwrapIfClosure",
            "class": "Illuminate\\Container\\Util",
            "type": "::"
        },
        {
            "file": "C:\\Users\\User\\Desktop\\karoostudio\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php",
            "line": 37,
            "function": "callBoundMethod",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "C:\\Users\\User\\Desktop\\karoostudio\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php",
            "line": 653,
            "function": "call",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "C:\\Users\\User\\Desktop\\karoostudio\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php",
            "line": 136,
            "function": "call",
            "class": "Illuminate\\Container\\Container",
            "type": "->"
        },
        {
            "file": "C:\\Users\\User\\Desktop\\karoostudio\\vendor\\symfony\\console\\Command\\Command.php",
            "line": 298,
            "function": "execute",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "C:\\Users\\User\\Desktop\\karoostudio\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php",
            "line": 121,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Command\\Command",
            "type": "->"
        },
        {
            "file": "C:\\Users\\User\\Desktop\\karoostudio\\vendor\\symfony\\console\\Application.php",
            "line": 1024,
            "function": "run",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "C:\\Users\\User\\Desktop\\karoostudio\\vendor\\symfony\\console\\Application.php",
            "line": 299,
            "function": "doRunCommand",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "C:\\Users\\User\\Desktop\\karoostudio\\vendor\\symfony\\console\\Application.php",
            "line": 171,
            "function": "doRun",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "C:\\Users\\User\\Desktop\\karoostudio\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Application.php",
            "line": 94,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "C:\\Users\\User\\Desktop\\karoostudio\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Console\\Kernel.php",
            "line": 129,
            "function": "run",
            "class": "Illuminate\\Console\\Application",
            "type": "->"
        },
        {
            "file": "C:\\Users\\User\\Desktop\\karoostudio\\artisan",
            "line": 37,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Console\\Kernel",
            "type": "->"
        }
    ]
}
```
<div id="execution-results-GETarrilot-load-widget" hidden>
    <blockquote>Received response<span id="execution-response-status-GETarrilot-load-widget"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETarrilot-load-widget"></code></pre>
</div>
<div id="execution-error-GETarrilot-load-widget" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETarrilot-load-widget"></code></pre>
</div>
<form id="form-GETarrilot-load-widget" data-method="GET" data-path="arrilot/load-widget" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETarrilot-load-widget', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETarrilot-load-widget" onclick="tryItOut('GETarrilot-load-widget');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETarrilot-load-widget" onclick="cancelTryOut('GETarrilot-load-widget');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETarrilot-load-widget" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>arrilot/load-widget</code></b>
</p>
</form>


## Return an empty response simply to trigger the storage of the CSRF cookie in the browser.




> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/sanctum/csrf-cookie" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/sanctum/csrf-cookie"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


<div id="execution-results-GETsanctum-csrf-cookie" hidden>
    <blockquote>Received response<span id="execution-response-status-GETsanctum-csrf-cookie"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETsanctum-csrf-cookie"></code></pre>
</div>
<div id="execution-error-GETsanctum-csrf-cookie" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETsanctum-csrf-cookie"></code></pre>
</div>
<form id="form-GETsanctum-csrf-cookie" data-method="GET" data-path="sanctum/csrf-cookie" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETsanctum-csrf-cookie', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETsanctum-csrf-cookie" onclick="tryItOut('GETsanctum-csrf-cookie');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETsanctum-csrf-cookie" onclick="cancelTryOut('GETsanctum-csrf-cookie');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETsanctum-csrf-cookie" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>sanctum/csrf-cookie</code></b>
</p>
</form>


## create/update loged in client anatomy




> Example request:

```bash
curl -X POST \
    "http://127.0.0.1:8000/api/v1/application/anatomy" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"gender_id":"deserunt","age":53156.221,"chest_size":1.49046,"waist_size":46,"hip_size":7114982.29,"collar_size":40.8,"shoe_size":71.07553316,"body_shape_id":{}}'

```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/api/v1/application/anatomy"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "gender_id": "deserunt",
    "age": 53156.221,
    "chest_size": 1.49046,
    "waist_size": 46,
    "hip_size": 7114982.29,
    "collar_size": 40.8,
    "shoe_size": 71.07553316,
    "body_shape_id": {}
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-POSTapi-v1-application-anatomy" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-v1-application-anatomy"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-application-anatomy"></code></pre>
</div>
<div id="execution-error-POSTapi-v1-application-anatomy" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-application-anatomy"></code></pre>
</div>
<form id="form-POSTapi-v1-application-anatomy" data-method="POST" data-path="api/v1/application/anatomy" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-application-anatomy', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-v1-application-anatomy" onclick="tryItOut('POSTapi-v1-application-anatomy');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-v1-application-anatomy" onclick="cancelTryOut('POSTapi-v1-application-anatomy');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-v1-application-anatomy" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/v1/application/anatomy</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>gender_id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="gender_id" data-endpoint="POSTapi-v1-application-anatomy" data-component="body" required  hidden>
<br>

</p>
<p>
<b><code>age</code></b>&nbsp;&nbsp;<small>number</small>     <i>optional</i> &nbsp;
<input type="number" name="age" data-endpoint="POSTapi-v1-application-anatomy" data-component="body"  hidden>
<br>

</p>
<p>
<b><code>chest_size</code></b>&nbsp;&nbsp;<small>number</small>  &nbsp;
<input type="number" name="chest_size" data-endpoint="POSTapi-v1-application-anatomy" data-component="body" required  hidden>
<br>

</p>
<p>
<b><code>waist_size</code></b>&nbsp;&nbsp;<small>number</small>  &nbsp;
<input type="number" name="waist_size" data-endpoint="POSTapi-v1-application-anatomy" data-component="body" required  hidden>
<br>

</p>
<p>
<b><code>hip_size</code></b>&nbsp;&nbsp;<small>number</small>  &nbsp;
<input type="number" name="hip_size" data-endpoint="POSTapi-v1-application-anatomy" data-component="body" required  hidden>
<br>

</p>
<p>
<b><code>collar_size</code></b>&nbsp;&nbsp;<small>number</small>  &nbsp;
<input type="number" name="collar_size" data-endpoint="POSTapi-v1-application-anatomy" data-component="body" required  hidden>
<br>

</p>
<p>
<b><code>shoe_size</code></b>&nbsp;&nbsp;<small>number</small>  &nbsp;
<input type="number" name="shoe_size" data-endpoint="POSTapi-v1-application-anatomy" data-component="body" required  hidden>
<br>

</p>
<p>
<b><code>body_shape_id</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="body_shape_id" data-endpoint="POSTapi-v1-application-anatomy" data-component="body"  hidden>
<br>

</p>

</form>


## Show Current Loged In User




> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/api/v1/application/profile" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/api/v1/application/profile"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```
<div id="execution-results-GETapi-v1-application-profile" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-v1-application-profile"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-application-profile"></code></pre>
</div>
<div id="execution-error-GETapi-v1-application-profile" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-application-profile"></code></pre>
</div>
<form id="form-GETapi-v1-application-profile" data-method="GET" data-path="api/v1/application/profile" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-application-profile', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-v1-application-profile" onclick="tryItOut('GETapi-v1-application-profile');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-v1-application-profile" onclick="cancelTryOut('GETapi-v1-application-profile');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-v1-application-profile" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/v1/application/profile</code></b>
</p>
</form>


## Display a listing of the resource.




> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/api/v1/application/profile/genders" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/api/v1/application/profile/genders"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```
<div id="execution-results-GETapi-v1-application-profile-genders" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-v1-application-profile-genders"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-application-profile-genders"></code></pre>
</div>
<div id="execution-error-GETapi-v1-application-profile-genders" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-application-profile-genders"></code></pre>
</div>
<form id="form-GETapi-v1-application-profile-genders" data-method="GET" data-path="api/v1/application/profile/genders" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-application-profile-genders', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-v1-application-profile-genders" onclick="tryItOut('GETapi-v1-application-profile-genders');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-v1-application-profile-genders" onclick="cancelTryOut('GETapi-v1-application-profile-genders');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-v1-application-profile-genders" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/v1/application/profile/genders</code></b>
</p>
</form>


## change password for loged in client




> Example request:

```bash
curl -X POST \
    "http://127.0.0.1:8000/api/v1/application/profile/change-password" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"current_password":"est","password":"id","password_confirmation":"molestias"}'

```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/api/v1/application/profile/change-password"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "current_password": "est",
    "password": "id",
    "password_confirmation": "molestias"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-POSTapi-v1-application-profile-change-password" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-v1-application-profile-change-password"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-application-profile-change-password"></code></pre>
</div>
<div id="execution-error-POSTapi-v1-application-profile-change-password" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-application-profile-change-password"></code></pre>
</div>
<form id="form-POSTapi-v1-application-profile-change-password" data-method="POST" data-path="api/v1/application/profile/change-password" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-application-profile-change-password', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-v1-application-profile-change-password" onclick="tryItOut('POSTapi-v1-application-profile-change-password');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-v1-application-profile-change-password" onclick="cancelTryOut('POSTapi-v1-application-profile-change-password');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-v1-application-profile-change-password" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/v1/application/profile/change-password</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>current_password</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="password" name="current_password" data-endpoint="POSTapi-v1-application-profile-change-password" data-component="body" required  hidden>
<br>

</p>
<p>
<b><code>password</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="password" name="password" data-endpoint="POSTapi-v1-application-profile-change-password" data-component="body" required  hidden>
<br>

</p>
<p>
<b><code>password_confirmation</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="password" name="password_confirmation" data-endpoint="POSTapi-v1-application-profile-change-password" data-component="body" required  hidden>
<br>

</p>

</form>


## create/update loged in client anatomy




> Example request:

```bash
curl -X PUT \
    "http://127.0.0.1:8000/api/v1/application/profile/anatomy" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"gender_id":"quaerat","age":0.7278958,"chest_size":55612.3,"waist_size":1282270.3,"hip_size":0.0411815,"collar_size":669548347.844219,"shoe_size":320.05951627,"body_shape_id":{}}'

```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/api/v1/application/profile/anatomy"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "gender_id": "quaerat",
    "age": 0.7278958,
    "chest_size": 55612.3,
    "waist_size": 1282270.3,
    "hip_size": 0.0411815,
    "collar_size": 669548347.844219,
    "shoe_size": 320.05951627,
    "body_shape_id": {}
}

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-PUTapi-v1-application-profile-anatomy" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTapi-v1-application-profile-anatomy"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-v1-application-profile-anatomy"></code></pre>
</div>
<div id="execution-error-PUTapi-v1-application-profile-anatomy" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-v1-application-profile-anatomy"></code></pre>
</div>
<form id="form-PUTapi-v1-application-profile-anatomy" data-method="PUT" data-path="api/v1/application/profile/anatomy" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PUTapi-v1-application-profile-anatomy', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PUTapi-v1-application-profile-anatomy" onclick="tryItOut('PUTapi-v1-application-profile-anatomy');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PUTapi-v1-application-profile-anatomy" onclick="cancelTryOut('PUTapi-v1-application-profile-anatomy');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PUTapi-v1-application-profile-anatomy" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>api/v1/application/profile/anatomy</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>gender_id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="gender_id" data-endpoint="PUTapi-v1-application-profile-anatomy" data-component="body" required  hidden>
<br>

</p>
<p>
<b><code>age</code></b>&nbsp;&nbsp;<small>number</small>     <i>optional</i> &nbsp;
<input type="number" name="age" data-endpoint="PUTapi-v1-application-profile-anatomy" data-component="body"  hidden>
<br>

</p>
<p>
<b><code>chest_size</code></b>&nbsp;&nbsp;<small>number</small>  &nbsp;
<input type="number" name="chest_size" data-endpoint="PUTapi-v1-application-profile-anatomy" data-component="body" required  hidden>
<br>

</p>
<p>
<b><code>waist_size</code></b>&nbsp;&nbsp;<small>number</small>  &nbsp;
<input type="number" name="waist_size" data-endpoint="PUTapi-v1-application-profile-anatomy" data-component="body" required  hidden>
<br>

</p>
<p>
<b><code>hip_size</code></b>&nbsp;&nbsp;<small>number</small>  &nbsp;
<input type="number" name="hip_size" data-endpoint="PUTapi-v1-application-profile-anatomy" data-component="body" required  hidden>
<br>

</p>
<p>
<b><code>collar_size</code></b>&nbsp;&nbsp;<small>number</small>  &nbsp;
<input type="number" name="collar_size" data-endpoint="PUTapi-v1-application-profile-anatomy" data-component="body" required  hidden>
<br>

</p>
<p>
<b><code>shoe_size</code></b>&nbsp;&nbsp;<small>number</small>  &nbsp;
<input type="number" name="shoe_size" data-endpoint="PUTapi-v1-application-profile-anatomy" data-component="body" required  hidden>
<br>

</p>
<p>
<b><code>body_shape_id</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="body_shape_id" data-endpoint="PUTapi-v1-application-profile-anatomy" data-component="body"  hidden>
<br>

</p>

</form>


## Display a listing of the resource.




> Example request:

```bash
curl -X POST \
    "http://127.0.0.1:8000/api/v1/application/profile/avatar" \
    -H "Content-Type: multipart/form-data" \
    -H "Accept: application/json" \
    -F "image=@C:\Users\User\AppData\Local\Temp\php41E8.tmp" 
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/api/v1/application/profile/avatar"
);

let headers = {
    "Content-Type": "multipart/form-data",
    "Accept": "application/json",
};

const body = new FormData();
body.append('image', document.querySelector('input[name="image"]').files[0]);

fetch(url, {
    method: "POST",
    headers,
    body,
}).then(response => response.json());
```


<div id="execution-results-POSTapi-v1-application-profile-avatar" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-v1-application-profile-avatar"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-application-profile-avatar"></code></pre>
</div>
<div id="execution-error-POSTapi-v1-application-profile-avatar" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-application-profile-avatar"></code></pre>
</div>
<form id="form-POSTapi-v1-application-profile-avatar" data-method="POST" data-path="api/v1/application/profile/avatar" data-authed="0" data-hasfiles="1" data-headers='{"Content-Type":"multipart\/form-data","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-application-profile-avatar', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-v1-application-profile-avatar" onclick="tryItOut('POSTapi-v1-application-profile-avatar');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-v1-application-profile-avatar" onclick="cancelTryOut('POSTapi-v1-application-profile-avatar');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-v1-application-profile-avatar" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/v1/application/profile/avatar</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>image</code></b>&nbsp;&nbsp;<small>file</small>  &nbsp;
<input type="file" name="image" data-endpoint="POSTapi-v1-application-profile-avatar" data-component="body" required  hidden>
<br>
The value must be an image.
</p>

</form>


## Update Avatar Path




> Example request:

```bash
curl -X PUT \
    "http://127.0.0.1:8000/api/v1/application/profile/avatar" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"avatar":"reprehenderit"}'

```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/api/v1/application/profile/avatar"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "avatar": "reprehenderit"
}

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-PUTapi-v1-application-profile-avatar" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTapi-v1-application-profile-avatar"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-v1-application-profile-avatar"></code></pre>
</div>
<div id="execution-error-PUTapi-v1-application-profile-avatar" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-v1-application-profile-avatar"></code></pre>
</div>
<form id="form-PUTapi-v1-application-profile-avatar" data-method="PUT" data-path="api/v1/application/profile/avatar" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PUTapi-v1-application-profile-avatar', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PUTapi-v1-application-profile-avatar" onclick="tryItOut('PUTapi-v1-application-profile-avatar');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PUTapi-v1-application-profile-avatar" onclick="cancelTryOut('PUTapi-v1-application-profile-avatar');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PUTapi-v1-application-profile-avatar" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>api/v1/application/profile/avatar</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>avatar</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="avatar" data-endpoint="PUTapi-v1-application-profile-avatar" data-component="body" required  hidden>
<br>

</p>

</form>


## Display a listing of the resource.




> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/api/v1/application/closet/categories" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/api/v1/application/closet/categories"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```
<div id="execution-results-GETapi-v1-application-closet-categories" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-v1-application-closet-categories"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-application-closet-categories"></code></pre>
</div>
<div id="execution-error-GETapi-v1-application-closet-categories" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-application-closet-categories"></code></pre>
</div>
<form id="form-GETapi-v1-application-closet-categories" data-method="GET" data-path="api/v1/application/closet/categories" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-application-closet-categories', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-v1-application-closet-categories" onclick="tryItOut('GETapi-v1-application-closet-categories');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-v1-application-closet-categories" onclick="cancelTryOut('GETapi-v1-application-closet-categories');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-v1-application-closet-categories" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/v1/application/closet/categories</code></b>
</p>
</form>


## Store a newly created resource in storage.




> Example request:

```bash
curl -X POST \
    "http://127.0.0.1:8000/api/v1/application/closet/categories" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"name":"officia","icon":"dignissimos","active":"1"}'

```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/api/v1/application/closet/categories"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "officia",
    "icon": "dignissimos",
    "active": "1"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-POSTapi-v1-application-closet-categories" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-v1-application-closet-categories"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-application-closet-categories"></code></pre>
</div>
<div id="execution-error-POSTapi-v1-application-closet-categories" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-application-closet-categories"></code></pre>
</div>
<form id="form-POSTapi-v1-application-closet-categories" data-method="POST" data-path="api/v1/application/closet/categories" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-application-closet-categories', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-v1-application-closet-categories" onclick="tryItOut('POSTapi-v1-application-closet-categories');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-v1-application-closet-categories" onclick="cancelTryOut('POSTapi-v1-application-closet-categories');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-v1-application-closet-categories" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/v1/application/closet/categories</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="name" data-endpoint="POSTapi-v1-application-closet-categories" data-component="body" required  hidden>
<br>

</p>
<p>
<b><code>icon</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="icon" data-endpoint="POSTapi-v1-application-closet-categories" data-component="body"  hidden>
<br>

</p>
<p>
<b><code>active</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="active" data-endpoint="POSTapi-v1-application-closet-categories" data-component="body"  hidden>
<br>
The value must be one of <code>0</code> or <code>1</code>.
</p>

</form>


## Display the specified resource.




> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/api/v1/application/closet/categories/cum" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/api/v1/application/closet/categories/cum"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```
<div id="execution-results-GETapi-v1-application-closet-categories--category-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-v1-application-closet-categories--category-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-application-closet-categories--category-"></code></pre>
</div>
<div id="execution-error-GETapi-v1-application-closet-categories--category-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-application-closet-categories--category-"></code></pre>
</div>
<form id="form-GETapi-v1-application-closet-categories--category-" data-method="GET" data-path="api/v1/application/closet/categories/{category}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-application-closet-categories--category-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-v1-application-closet-categories--category-" onclick="tryItOut('GETapi-v1-application-closet-categories--category-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-v1-application-closet-categories--category-" onclick="cancelTryOut('GETapi-v1-application-closet-categories--category-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-v1-application-closet-categories--category-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/v1/application/closet/categories/{category}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>category</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="category" data-endpoint="GETapi-v1-application-closet-categories--category-" data-component="url" required  hidden>
<br>

</p>
</form>


## Remove the specified resource from storage.




> Example request:

```bash
curl -X DELETE \
    "http://127.0.0.1:8000/api/v1/application/closet/categories/placeat" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/api/v1/application/closet/categories/placeat"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "DELETE",
    headers,
}).then(response => response.json());
```


<div id="execution-results-DELETEapi-v1-application-closet-categories--category-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEapi-v1-application-closet-categories--category-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-v1-application-closet-categories--category-"></code></pre>
</div>
<div id="execution-error-DELETEapi-v1-application-closet-categories--category-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-v1-application-closet-categories--category-"></code></pre>
</div>
<form id="form-DELETEapi-v1-application-closet-categories--category-" data-method="DELETE" data-path="api/v1/application/closet/categories/{category}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEapi-v1-application-closet-categories--category-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEapi-v1-application-closet-categories--category-" onclick="tryItOut('DELETEapi-v1-application-closet-categories--category-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEapi-v1-application-closet-categories--category-" onclick="cancelTryOut('DELETEapi-v1-application-closet-categories--category-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEapi-v1-application-closet-categories--category-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>api/v1/application/closet/categories/{category}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>category</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="category" data-endpoint="DELETEapi-v1-application-closet-categories--category-" data-component="url" required  hidden>
<br>

</p>
</form>


## Display a listing of the resource.




> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/api/v1/application/closet/colors" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/api/v1/application/closet/colors"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```
<div id="execution-results-GETapi-v1-application-closet-colors" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-v1-application-closet-colors"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-application-closet-colors"></code></pre>
</div>
<div id="execution-error-GETapi-v1-application-closet-colors" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-application-closet-colors"></code></pre>
</div>
<form id="form-GETapi-v1-application-closet-colors" data-method="GET" data-path="api/v1/application/closet/colors" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-application-closet-colors', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-v1-application-closet-colors" onclick="tryItOut('GETapi-v1-application-closet-colors');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-v1-application-closet-colors" onclick="cancelTryOut('GETapi-v1-application-closet-colors');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-v1-application-closet-colors" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/v1/application/closet/colors</code></b>
</p>
</form>


## Store a newly created resource in storage.




> Example request:

```bash
curl -X POST \
    "http://127.0.0.1:8000/api/v1/application/closet/colors" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"name":"iure","code":"enim"}'

```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/api/v1/application/closet/colors"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "iure",
    "code": "enim"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-POSTapi-v1-application-closet-colors" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-v1-application-closet-colors"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-application-closet-colors"></code></pre>
</div>
<div id="execution-error-POSTapi-v1-application-closet-colors" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-application-closet-colors"></code></pre>
</div>
<form id="form-POSTapi-v1-application-closet-colors" data-method="POST" data-path="api/v1/application/closet/colors" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-application-closet-colors', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-v1-application-closet-colors" onclick="tryItOut('POSTapi-v1-application-closet-colors');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-v1-application-closet-colors" onclick="cancelTryOut('POSTapi-v1-application-closet-colors');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-v1-application-closet-colors" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/v1/application/closet/colors</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="name" data-endpoint="POSTapi-v1-application-closet-colors" data-component="body" required  hidden>
<br>

</p>
<p>
<b><code>code</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="code" data-endpoint="POSTapi-v1-application-closet-colors" data-component="body" required  hidden>
<br>

</p>

</form>


## Display the specified resource.




> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/api/v1/application/closet/colors/accusantium" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/api/v1/application/closet/colors/accusantium"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```
<div id="execution-results-GETapi-v1-application-closet-colors--color-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-v1-application-closet-colors--color-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-application-closet-colors--color-"></code></pre>
</div>
<div id="execution-error-GETapi-v1-application-closet-colors--color-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-application-closet-colors--color-"></code></pre>
</div>
<form id="form-GETapi-v1-application-closet-colors--color-" data-method="GET" data-path="api/v1/application/closet/colors/{color}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-application-closet-colors--color-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-v1-application-closet-colors--color-" onclick="tryItOut('GETapi-v1-application-closet-colors--color-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-v1-application-closet-colors--color-" onclick="cancelTryOut('GETapi-v1-application-closet-colors--color-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-v1-application-closet-colors--color-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/v1/application/closet/colors/{color}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>color</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="color" data-endpoint="GETapi-v1-application-closet-colors--color-" data-component="url" required  hidden>
<br>

</p>
</form>


## Remove the specified resource from storage.




> Example request:

```bash
curl -X DELETE \
    "http://127.0.0.1:8000/api/v1/application/closet/colors/dolorem" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/api/v1/application/closet/colors/dolorem"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "DELETE",
    headers,
}).then(response => response.json());
```


<div id="execution-results-DELETEapi-v1-application-closet-colors--color-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEapi-v1-application-closet-colors--color-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-v1-application-closet-colors--color-"></code></pre>
</div>
<div id="execution-error-DELETEapi-v1-application-closet-colors--color-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-v1-application-closet-colors--color-"></code></pre>
</div>
<form id="form-DELETEapi-v1-application-closet-colors--color-" data-method="DELETE" data-path="api/v1/application/closet/colors/{color}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEapi-v1-application-closet-colors--color-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEapi-v1-application-closet-colors--color-" onclick="tryItOut('DELETEapi-v1-application-closet-colors--color-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEapi-v1-application-closet-colors--color-" onclick="cancelTryOut('DELETEapi-v1-application-closet-colors--color-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEapi-v1-application-closet-colors--color-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>api/v1/application/closet/colors/{color}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>color</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="color" data-endpoint="DELETEapi-v1-application-closet-colors--color-" data-component="url" required  hidden>
<br>

</p>
</form>


## Display a listing of the resource.




> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/api/v1/application/closet/seasons" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/api/v1/application/closet/seasons"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```
<div id="execution-results-GETapi-v1-application-closet-seasons" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-v1-application-closet-seasons"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-application-closet-seasons"></code></pre>
</div>
<div id="execution-error-GETapi-v1-application-closet-seasons" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-application-closet-seasons"></code></pre>
</div>
<form id="form-GETapi-v1-application-closet-seasons" data-method="GET" data-path="api/v1/application/closet/seasons" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-application-closet-seasons', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-v1-application-closet-seasons" onclick="tryItOut('GETapi-v1-application-closet-seasons');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-v1-application-closet-seasons" onclick="cancelTryOut('GETapi-v1-application-closet-seasons');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-v1-application-closet-seasons" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/v1/application/closet/seasons</code></b>
</p>
</form>


## Store a newly created resource in storage.




> Example request:

```bash
curl -X POST \
    "http://127.0.0.1:8000/api/v1/application/closet/seasons" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"name":"est"}'

```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/api/v1/application/closet/seasons"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "est"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-POSTapi-v1-application-closet-seasons" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-v1-application-closet-seasons"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-application-closet-seasons"></code></pre>
</div>
<div id="execution-error-POSTapi-v1-application-closet-seasons" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-application-closet-seasons"></code></pre>
</div>
<form id="form-POSTapi-v1-application-closet-seasons" data-method="POST" data-path="api/v1/application/closet/seasons" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-application-closet-seasons', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-v1-application-closet-seasons" onclick="tryItOut('POSTapi-v1-application-closet-seasons');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-v1-application-closet-seasons" onclick="cancelTryOut('POSTapi-v1-application-closet-seasons');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-v1-application-closet-seasons" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/v1/application/closet/seasons</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="name" data-endpoint="POSTapi-v1-application-closet-seasons" data-component="body" required  hidden>
<br>

</p>

</form>


## Display the specified resource.




> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/api/v1/application/closet/seasons/nemo" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/api/v1/application/closet/seasons/nemo"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```
<div id="execution-results-GETapi-v1-application-closet-seasons--season-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-v1-application-closet-seasons--season-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-application-closet-seasons--season-"></code></pre>
</div>
<div id="execution-error-GETapi-v1-application-closet-seasons--season-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-application-closet-seasons--season-"></code></pre>
</div>
<form id="form-GETapi-v1-application-closet-seasons--season-" data-method="GET" data-path="api/v1/application/closet/seasons/{season}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-application-closet-seasons--season-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-v1-application-closet-seasons--season-" onclick="tryItOut('GETapi-v1-application-closet-seasons--season-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-v1-application-closet-seasons--season-" onclick="cancelTryOut('GETapi-v1-application-closet-seasons--season-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-v1-application-closet-seasons--season-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/v1/application/closet/seasons/{season}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>season</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="season" data-endpoint="GETapi-v1-application-closet-seasons--season-" data-component="url" required  hidden>
<br>

</p>
</form>


## Remove the specified resource from storage.




> Example request:

```bash
curl -X DELETE \
    "http://127.0.0.1:8000/api/v1/application/closet/seasons/dolorem" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/api/v1/application/closet/seasons/dolorem"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "DELETE",
    headers,
}).then(response => response.json());
```


<div id="execution-results-DELETEapi-v1-application-closet-seasons--season-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEapi-v1-application-closet-seasons--season-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-v1-application-closet-seasons--season-"></code></pre>
</div>
<div id="execution-error-DELETEapi-v1-application-closet-seasons--season-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-v1-application-closet-seasons--season-"></code></pre>
</div>
<form id="form-DELETEapi-v1-application-closet-seasons--season-" data-method="DELETE" data-path="api/v1/application/closet/seasons/{season}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEapi-v1-application-closet-seasons--season-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEapi-v1-application-closet-seasons--season-" onclick="tryItOut('DELETEapi-v1-application-closet-seasons--season-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEapi-v1-application-closet-seasons--season-" onclick="cancelTryOut('DELETEapi-v1-application-closet-seasons--season-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEapi-v1-application-closet-seasons--season-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>api/v1/application/closet/seasons/{season}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>season</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="season" data-endpoint="DELETEapi-v1-application-closet-seasons--season-" data-component="url" required  hidden>
<br>

</p>
</form>


## Display a listing of the resource.




> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/api/v1/application/closet/occasions" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/api/v1/application/closet/occasions"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```
<div id="execution-results-GETapi-v1-application-closet-occasions" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-v1-application-closet-occasions"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-application-closet-occasions"></code></pre>
</div>
<div id="execution-error-GETapi-v1-application-closet-occasions" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-application-closet-occasions"></code></pre>
</div>
<form id="form-GETapi-v1-application-closet-occasions" data-method="GET" data-path="api/v1/application/closet/occasions" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-application-closet-occasions', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-v1-application-closet-occasions" onclick="tryItOut('GETapi-v1-application-closet-occasions');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-v1-application-closet-occasions" onclick="cancelTryOut('GETapi-v1-application-closet-occasions');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-v1-application-closet-occasions" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/v1/application/closet/occasions</code></b>
</p>
</form>


## Store a newly created resource in storage.




> Example request:

```bash
curl -X POST \
    "http://127.0.0.1:8000/api/v1/application/closet/occasions" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"name":"et"}'

```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/api/v1/application/closet/occasions"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "et"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-POSTapi-v1-application-closet-occasions" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-v1-application-closet-occasions"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-application-closet-occasions"></code></pre>
</div>
<div id="execution-error-POSTapi-v1-application-closet-occasions" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-application-closet-occasions"></code></pre>
</div>
<form id="form-POSTapi-v1-application-closet-occasions" data-method="POST" data-path="api/v1/application/closet/occasions" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-application-closet-occasions', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-v1-application-closet-occasions" onclick="tryItOut('POSTapi-v1-application-closet-occasions');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-v1-application-closet-occasions" onclick="cancelTryOut('POSTapi-v1-application-closet-occasions');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-v1-application-closet-occasions" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/v1/application/closet/occasions</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="name" data-endpoint="POSTapi-v1-application-closet-occasions" data-component="body" required  hidden>
<br>

</p>

</form>


## Display the specified resource.




> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/api/v1/application/closet/occasions/ex" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/api/v1/application/closet/occasions/ex"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```
<div id="execution-results-GETapi-v1-application-closet-occasions--occasion-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-v1-application-closet-occasions--occasion-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-application-closet-occasions--occasion-"></code></pre>
</div>
<div id="execution-error-GETapi-v1-application-closet-occasions--occasion-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-application-closet-occasions--occasion-"></code></pre>
</div>
<form id="form-GETapi-v1-application-closet-occasions--occasion-" data-method="GET" data-path="api/v1/application/closet/occasions/{occasion}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-application-closet-occasions--occasion-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-v1-application-closet-occasions--occasion-" onclick="tryItOut('GETapi-v1-application-closet-occasions--occasion-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-v1-application-closet-occasions--occasion-" onclick="cancelTryOut('GETapi-v1-application-closet-occasions--occasion-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-v1-application-closet-occasions--occasion-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/v1/application/closet/occasions/{occasion}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>occasion</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="occasion" data-endpoint="GETapi-v1-application-closet-occasions--occasion-" data-component="url" required  hidden>
<br>

</p>
</form>


## Remove the specified resource from storage.




> Example request:

```bash
curl -X DELETE \
    "http://127.0.0.1:8000/api/v1/application/closet/occasions/eos" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/api/v1/application/closet/occasions/eos"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "DELETE",
    headers,
}).then(response => response.json());
```


<div id="execution-results-DELETEapi-v1-application-closet-occasions--occasion-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEapi-v1-application-closet-occasions--occasion-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-v1-application-closet-occasions--occasion-"></code></pre>
</div>
<div id="execution-error-DELETEapi-v1-application-closet-occasions--occasion-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-v1-application-closet-occasions--occasion-"></code></pre>
</div>
<form id="form-DELETEapi-v1-application-closet-occasions--occasion-" data-method="DELETE" data-path="api/v1/application/closet/occasions/{occasion}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEapi-v1-application-closet-occasions--occasion-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEapi-v1-application-closet-occasions--occasion-" onclick="tryItOut('DELETEapi-v1-application-closet-occasions--occasion-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEapi-v1-application-closet-occasions--occasion-" onclick="cancelTryOut('DELETEapi-v1-application-closet-occasions--occasion-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEapi-v1-application-closet-occasions--occasion-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>api/v1/application/closet/occasions/{occasion}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>occasion</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="occasion" data-endpoint="DELETEapi-v1-application-closet-occasions--occasion-" data-component="url" required  hidden>
<br>

</p>
</form>


## Display a listing of the resource with search.




> Example request:

```bash
curl -X POST \
    "http://127.0.0.1:8000/api/v1/application/closet/colors/search" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"search":"dolorem","limit":377351.038,"page":47331.01013,"orderColumn":"deserunt","orderDir":"asc"}'

```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/api/v1/application/closet/colors/search"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "search": "dolorem",
    "limit": 377351.038,
    "page": 47331.01013,
    "orderColumn": "deserunt",
    "orderDir": "asc"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-POSTapi-v1-application-closet-colors-search" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-v1-application-closet-colors-search"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-application-closet-colors-search"></code></pre>
</div>
<div id="execution-error-POSTapi-v1-application-closet-colors-search" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-application-closet-colors-search"></code></pre>
</div>
<form id="form-POSTapi-v1-application-closet-colors-search" data-method="POST" data-path="api/v1/application/closet/colors/search" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-application-closet-colors-search', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-v1-application-closet-colors-search" onclick="tryItOut('POSTapi-v1-application-closet-colors-search');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-v1-application-closet-colors-search" onclick="cancelTryOut('POSTapi-v1-application-closet-colors-search');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-v1-application-closet-colors-search" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/v1/application/closet/colors/search</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>search</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="search" data-endpoint="POSTapi-v1-application-closet-colors-search" data-component="body"  hidden>
<br>

</p>
<p>
<b><code>limit</code></b>&nbsp;&nbsp;<small>number</small>     <i>optional</i> &nbsp;
<input type="number" name="limit" data-endpoint="POSTapi-v1-application-closet-colors-search" data-component="body"  hidden>
<br>

</p>
<p>
<b><code>page</code></b>&nbsp;&nbsp;<small>number</small>     <i>optional</i> &nbsp;
<input type="number" name="page" data-endpoint="POSTapi-v1-application-closet-colors-search" data-component="body"  hidden>
<br>

</p>
<p>
<b><code>orderColumn</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="orderColumn" data-endpoint="POSTapi-v1-application-closet-colors-search" data-component="body"  hidden>
<br>

</p>
<p>
<b><code>orderDir</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="orderDir" data-endpoint="POSTapi-v1-application-closet-colors-search" data-component="body"  hidden>
<br>
The value must be one of <code>asc</code> or <code>desc</code>.
</p>

</form>


## Display a listing of the resource with search.




> Example request:

```bash
curl -X POST \
    "http://127.0.0.1:8000/api/v1/application/closet/occasions/search" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"search":"qui","limit":366272.24393997,"page":318.46,"orderColumn":"consequatur","orderDir":"desc"}'

```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/api/v1/application/closet/occasions/search"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "search": "qui",
    "limit": 366272.24393997,
    "page": 318.46,
    "orderColumn": "consequatur",
    "orderDir": "desc"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-POSTapi-v1-application-closet-occasions-search" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-v1-application-closet-occasions-search"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-application-closet-occasions-search"></code></pre>
</div>
<div id="execution-error-POSTapi-v1-application-closet-occasions-search" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-application-closet-occasions-search"></code></pre>
</div>
<form id="form-POSTapi-v1-application-closet-occasions-search" data-method="POST" data-path="api/v1/application/closet/occasions/search" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-application-closet-occasions-search', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-v1-application-closet-occasions-search" onclick="tryItOut('POSTapi-v1-application-closet-occasions-search');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-v1-application-closet-occasions-search" onclick="cancelTryOut('POSTapi-v1-application-closet-occasions-search');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-v1-application-closet-occasions-search" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/v1/application/closet/occasions/search</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>search</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="search" data-endpoint="POSTapi-v1-application-closet-occasions-search" data-component="body"  hidden>
<br>

</p>
<p>
<b><code>limit</code></b>&nbsp;&nbsp;<small>number</small>     <i>optional</i> &nbsp;
<input type="number" name="limit" data-endpoint="POSTapi-v1-application-closet-occasions-search" data-component="body"  hidden>
<br>

</p>
<p>
<b><code>page</code></b>&nbsp;&nbsp;<small>number</small>     <i>optional</i> &nbsp;
<input type="number" name="page" data-endpoint="POSTapi-v1-application-closet-occasions-search" data-component="body"  hidden>
<br>

</p>
<p>
<b><code>orderColumn</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="orderColumn" data-endpoint="POSTapi-v1-application-closet-occasions-search" data-component="body"  hidden>
<br>

</p>
<p>
<b><code>orderDir</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="orderDir" data-endpoint="POSTapi-v1-application-closet-occasions-search" data-component="body"  hidden>
<br>
The value must be one of <code>asc</code> or <code>desc</code>.
</p>

</form>


## Display a listing of the resource with search.




> Example request:

```bash
curl -X POST \
    "http://127.0.0.1:8000/api/v1/application/closet/seasons/search" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"search":"qui","limit":98.94157316,"page":100.108,"orderColumn":"at","orderDir":"asc"}'

```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/api/v1/application/closet/seasons/search"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "search": "qui",
    "limit": 98.94157316,
    "page": 100.108,
    "orderColumn": "at",
    "orderDir": "asc"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-POSTapi-v1-application-closet-seasons-search" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-v1-application-closet-seasons-search"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-application-closet-seasons-search"></code></pre>
</div>
<div id="execution-error-POSTapi-v1-application-closet-seasons-search" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-application-closet-seasons-search"></code></pre>
</div>
<form id="form-POSTapi-v1-application-closet-seasons-search" data-method="POST" data-path="api/v1/application/closet/seasons/search" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-application-closet-seasons-search', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-v1-application-closet-seasons-search" onclick="tryItOut('POSTapi-v1-application-closet-seasons-search');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-v1-application-closet-seasons-search" onclick="cancelTryOut('POSTapi-v1-application-closet-seasons-search');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-v1-application-closet-seasons-search" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/v1/application/closet/seasons/search</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>search</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="search" data-endpoint="POSTapi-v1-application-closet-seasons-search" data-component="body"  hidden>
<br>

</p>
<p>
<b><code>limit</code></b>&nbsp;&nbsp;<small>number</small>     <i>optional</i> &nbsp;
<input type="number" name="limit" data-endpoint="POSTapi-v1-application-closet-seasons-search" data-component="body"  hidden>
<br>

</p>
<p>
<b><code>page</code></b>&nbsp;&nbsp;<small>number</small>     <i>optional</i> &nbsp;
<input type="number" name="page" data-endpoint="POSTapi-v1-application-closet-seasons-search" data-component="body"  hidden>
<br>

</p>
<p>
<b><code>orderColumn</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="orderColumn" data-endpoint="POSTapi-v1-application-closet-seasons-search" data-component="body"  hidden>
<br>

</p>
<p>
<b><code>orderDir</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="orderDir" data-endpoint="POSTapi-v1-application-closet-seasons-search" data-component="body"  hidden>
<br>
The value must be one of <code>asc</code> or <code>desc</code>.
</p>

</form>


## Display a listing of the resource with search.




> Example request:

```bash
curl -X POST \
    "http://127.0.0.1:8000/api/v1/application/closet/categories/search" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"active":1,"name":"rerum","search":"eum","limit":28.34485,"page":6619.81,"orderColumn":"enim","orderDir":"asc"}'

```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/api/v1/application/closet/categories/search"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "active": 1,
    "name": "rerum",
    "search": "eum",
    "limit": 28.34485,
    "page": 6619.81,
    "orderColumn": "enim",
    "orderDir": "asc"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-POSTapi-v1-application-closet-categories-search" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-v1-application-closet-categories-search"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-application-closet-categories-search"></code></pre>
</div>
<div id="execution-error-POSTapi-v1-application-closet-categories-search" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-application-closet-categories-search"></code></pre>
</div>
<form id="form-POSTapi-v1-application-closet-categories-search" data-method="POST" data-path="api/v1/application/closet/categories/search" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-application-closet-categories-search', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-v1-application-closet-categories-search" onclick="tryItOut('POSTapi-v1-application-closet-categories-search');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-v1-application-closet-categories-search" onclick="cancelTryOut('POSTapi-v1-application-closet-categories-search');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-v1-application-closet-categories-search" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/v1/application/closet/categories/search</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>active</code></b>&nbsp;&nbsp;<small>number</small>     <i>optional</i> &nbsp;
<input type="number" name="active" data-endpoint="POSTapi-v1-application-closet-categories-search" data-component="body"  hidden>
<br>
The value must be one of <code>0</code> or <code>1</code>.
</p>
<p>
<b><code>name</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="name" data-endpoint="POSTapi-v1-application-closet-categories-search" data-component="body"  hidden>
<br>

</p>
<p>
<b><code>search</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="search" data-endpoint="POSTapi-v1-application-closet-categories-search" data-component="body"  hidden>
<br>

</p>
<p>
<b><code>limit</code></b>&nbsp;&nbsp;<small>number</small>     <i>optional</i> &nbsp;
<input type="number" name="limit" data-endpoint="POSTapi-v1-application-closet-categories-search" data-component="body"  hidden>
<br>

</p>
<p>
<b><code>page</code></b>&nbsp;&nbsp;<small>number</small>     <i>optional</i> &nbsp;
<input type="number" name="page" data-endpoint="POSTapi-v1-application-closet-categories-search" data-component="body"  hidden>
<br>

</p>
<p>
<b><code>orderColumn</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="orderColumn" data-endpoint="POSTapi-v1-application-closet-categories-search" data-component="body"  hidden>
<br>

</p>
<p>
<b><code>orderDir</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="orderDir" data-endpoint="POSTapi-v1-application-closet-categories-search" data-component="body"  hidden>
<br>
The value must be one of <code>asc</code> or <code>desc</code>.
</p>

</form>


## Display a listing of the resource.




> Example request:

```bash
curl -X POST \
    "http://127.0.0.1:8000/api/v1/application/closet/image" \
    -H "Content-Type: multipart/form-data" \
    -H "Accept: application/json" \
    -F "image=@C:\Users\User\AppData\Local\Temp\php4535.tmp" 
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/api/v1/application/closet/image"
);

let headers = {
    "Content-Type": "multipart/form-data",
    "Accept": "application/json",
};

const body = new FormData();
body.append('image', document.querySelector('input[name="image"]').files[0]);

fetch(url, {
    method: "POST",
    headers,
    body,
}).then(response => response.json());
```


<div id="execution-results-POSTapi-v1-application-closet-image" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-v1-application-closet-image"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-application-closet-image"></code></pre>
</div>
<div id="execution-error-POSTapi-v1-application-closet-image" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-application-closet-image"></code></pre>
</div>
<form id="form-POSTapi-v1-application-closet-image" data-method="POST" data-path="api/v1/application/closet/image" data-authed="0" data-hasfiles="1" data-headers='{"Content-Type":"multipart\/form-data","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-application-closet-image', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-v1-application-closet-image" onclick="tryItOut('POSTapi-v1-application-closet-image');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-v1-application-closet-image" onclick="cancelTryOut('POSTapi-v1-application-closet-image');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-v1-application-closet-image" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/v1/application/closet/image</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>image</code></b>&nbsp;&nbsp;<small>file</small>  &nbsp;
<input type="file" name="image" data-endpoint="POSTapi-v1-application-closet-image" data-component="body" required  hidden>
<br>
The value must be an image.
</p>

</form>


## Update image for cloth




> Example request:

```bash
curl -X PUT \
    "http://127.0.0.1:8000/api/v1/application/closet/eum/image" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"image":["odio"]}'

```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/api/v1/application/closet/eum/image"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "image": [
        "odio"
    ]
}

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-PUTapi-v1-application-closet--cloth--image" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTapi-v1-application-closet--cloth--image"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-v1-application-closet--cloth--image"></code></pre>
</div>
<div id="execution-error-PUTapi-v1-application-closet--cloth--image" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-v1-application-closet--cloth--image"></code></pre>
</div>
<form id="form-PUTapi-v1-application-closet--cloth--image" data-method="PUT" data-path="api/v1/application/closet/{cloth}/image" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PUTapi-v1-application-closet--cloth--image', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PUTapi-v1-application-closet--cloth--image" onclick="tryItOut('PUTapi-v1-application-closet--cloth--image');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PUTapi-v1-application-closet--cloth--image" onclick="cancelTryOut('PUTapi-v1-application-closet--cloth--image');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PUTapi-v1-application-closet--cloth--image" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>api/v1/application/closet/{cloth}/image</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>cloth</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="cloth" data-endpoint="PUTapi-v1-application-closet--cloth--image" data-component="url" required  hidden>
<br>

</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>image</code></b>&nbsp;&nbsp;<small>string[]</small>  &nbsp;
<input type="text" name="image.0" data-endpoint="PUTapi-v1-application-closet--cloth--image" data-component="body" required  hidden>
<input type="text" name="image.1" data-endpoint="PUTapi-v1-application-closet--cloth--image" data-component="body" hidden>
<br>

</p>

</form>


## Display a listing of the resource with search.




> Example request:

```bash
curl -X POST \
    "http://127.0.0.1:8000/api/v1/application/closet/search" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"name":"dicta","category_id":7190886.9863,"color_id":1.31067,"occasion_id":14320.945,"season_id":49.6,"search":"eum","limit":1352.3,"page":4.54,"orderColumn":"exercitationem","orderDir":"desc"}'

```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/api/v1/application/closet/search"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "dicta",
    "category_id": 7190886.9863,
    "color_id": 1.31067,
    "occasion_id": 14320.945,
    "season_id": 49.6,
    "search": "eum",
    "limit": 1352.3,
    "page": 4.54,
    "orderColumn": "exercitationem",
    "orderDir": "desc"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-POSTapi-v1-application-closet-search" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-v1-application-closet-search"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-application-closet-search"></code></pre>
</div>
<div id="execution-error-POSTapi-v1-application-closet-search" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-application-closet-search"></code></pre>
</div>
<form id="form-POSTapi-v1-application-closet-search" data-method="POST" data-path="api/v1/application/closet/search" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-application-closet-search', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-v1-application-closet-search" onclick="tryItOut('POSTapi-v1-application-closet-search');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-v1-application-closet-search" onclick="cancelTryOut('POSTapi-v1-application-closet-search');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-v1-application-closet-search" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/v1/application/closet/search</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>name</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="name" data-endpoint="POSTapi-v1-application-closet-search" data-component="body"  hidden>
<br>

</p>
<p>
<b><code>category_id</code></b>&nbsp;&nbsp;<small>number</small>     <i>optional</i> &nbsp;
<input type="number" name="category_id" data-endpoint="POSTapi-v1-application-closet-search" data-component="body"  hidden>
<br>

</p>
<p>
<b><code>color_id</code></b>&nbsp;&nbsp;<small>number</small>     <i>optional</i> &nbsp;
<input type="number" name="color_id" data-endpoint="POSTapi-v1-application-closet-search" data-component="body"  hidden>
<br>

</p>
<p>
<b><code>occasion_id</code></b>&nbsp;&nbsp;<small>number</small>     <i>optional</i> &nbsp;
<input type="number" name="occasion_id" data-endpoint="POSTapi-v1-application-closet-search" data-component="body"  hidden>
<br>

</p>
<p>
<b><code>season_id</code></b>&nbsp;&nbsp;<small>number</small>     <i>optional</i> &nbsp;
<input type="number" name="season_id" data-endpoint="POSTapi-v1-application-closet-search" data-component="body"  hidden>
<br>

</p>
<p>
<b><code>search</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="search" data-endpoint="POSTapi-v1-application-closet-search" data-component="body"  hidden>
<br>

</p>
<p>
<b><code>limit</code></b>&nbsp;&nbsp;<small>number</small>     <i>optional</i> &nbsp;
<input type="number" name="limit" data-endpoint="POSTapi-v1-application-closet-search" data-component="body"  hidden>
<br>

</p>
<p>
<b><code>page</code></b>&nbsp;&nbsp;<small>number</small>     <i>optional</i> &nbsp;
<input type="number" name="page" data-endpoint="POSTapi-v1-application-closet-search" data-component="body"  hidden>
<br>

</p>
<p>
<b><code>orderColumn</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="orderColumn" data-endpoint="POSTapi-v1-application-closet-search" data-component="body"  hidden>
<br>

</p>
<p>
<b><code>orderDir</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="orderDir" data-endpoint="POSTapi-v1-application-closet-search" data-component="body"  hidden>
<br>
The value must be one of <code>asc</code> or <code>desc</code>.
</p>

</form>


## Store a newly created resource in storage.




> Example request:

```bash
curl -X POST \
    "http://127.0.0.1:8000/api/v1/application/closet/outfits" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"name":"nam","occasion_id":37595.9731378,"season_id":6470864.4656099975,"bookmarked":"0","clothes":[0.85130863,51735.15624]}'

```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/api/v1/application/closet/outfits"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "nam",
    "occasion_id": 37595.9731378,
    "season_id": 6470864.4656099975,
    "bookmarked": "0",
    "clothes": [
        0.85130863,
        51735.15624
    ]
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-POSTapi-v1-application-closet-outfits" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-v1-application-closet-outfits"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-application-closet-outfits"></code></pre>
</div>
<div id="execution-error-POSTapi-v1-application-closet-outfits" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-application-closet-outfits"></code></pre>
</div>
<form id="form-POSTapi-v1-application-closet-outfits" data-method="POST" data-path="api/v1/application/closet/outfits" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-application-closet-outfits', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-v1-application-closet-outfits" onclick="tryItOut('POSTapi-v1-application-closet-outfits');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-v1-application-closet-outfits" onclick="cancelTryOut('POSTapi-v1-application-closet-outfits');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-v1-application-closet-outfits" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/v1/application/closet/outfits</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="name" data-endpoint="POSTapi-v1-application-closet-outfits" data-component="body" required  hidden>
<br>

</p>
<p>
<b><code>occasion_id</code></b>&nbsp;&nbsp;<small>number</small>     <i>optional</i> &nbsp;
<input type="number" name="occasion_id" data-endpoint="POSTapi-v1-application-closet-outfits" data-component="body"  hidden>
<br>

</p>
<p>
<b><code>season_id</code></b>&nbsp;&nbsp;<small>number</small>     <i>optional</i> &nbsp;
<input type="number" name="season_id" data-endpoint="POSTapi-v1-application-closet-outfits" data-component="body"  hidden>
<br>

</p>
<p>
<b><code>bookmarked</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="bookmarked" data-endpoint="POSTapi-v1-application-closet-outfits" data-component="body"  hidden>
<br>
The value must be one of <code>0</code> or <code>1</code>.
</p>
<p>
<b><code>clothes</code></b>&nbsp;&nbsp;<small>number[]</small>  &nbsp;
<input type="number" name="clothes.0" data-endpoint="POSTapi-v1-application-closet-outfits" data-component="body" required  hidden>
<input type="number" name="clothes.1" data-endpoint="POSTapi-v1-application-closet-outfits" data-component="body" hidden>
<br>

</p>

</form>


## Display the specified resource.




> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/api/v1/application/closet/outfits/est" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/api/v1/application/closet/outfits/est"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```
<div id="execution-results-GETapi-v1-application-closet-outfits--outfit-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-v1-application-closet-outfits--outfit-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-application-closet-outfits--outfit-"></code></pre>
</div>
<div id="execution-error-GETapi-v1-application-closet-outfits--outfit-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-application-closet-outfits--outfit-"></code></pre>
</div>
<form id="form-GETapi-v1-application-closet-outfits--outfit-" data-method="GET" data-path="api/v1/application/closet/outfits/{outfit}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-application-closet-outfits--outfit-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-v1-application-closet-outfits--outfit-" onclick="tryItOut('GETapi-v1-application-closet-outfits--outfit-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-v1-application-closet-outfits--outfit-" onclick="cancelTryOut('GETapi-v1-application-closet-outfits--outfit-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-v1-application-closet-outfits--outfit-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/v1/application/closet/outfits/{outfit}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>outfit</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="outfit" data-endpoint="GETapi-v1-application-closet-outfits--outfit-" data-component="url" required  hidden>
<br>

</p>
</form>


## Update the specified resource in storage.




> Example request:

```bash
curl -X PUT \
    "http://127.0.0.1:8000/api/v1/application/closet/outfits/vitae" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"name":"accusantium","occasion_id":554.6815,"season_id":4457750.297560666,"bookmarked":"1","clothes":[313017.04,582677598.27972]}'

```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/api/v1/application/closet/outfits/vitae"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "accusantium",
    "occasion_id": 554.6815,
    "season_id": 4457750.297560666,
    "bookmarked": "1",
    "clothes": [
        313017.04,
        582677598.27972
    ]
}

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-PUTapi-v1-application-closet-outfits--outfit-" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTapi-v1-application-closet-outfits--outfit-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-v1-application-closet-outfits--outfit-"></code></pre>
</div>
<div id="execution-error-PUTapi-v1-application-closet-outfits--outfit-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-v1-application-closet-outfits--outfit-"></code></pre>
</div>
<form id="form-PUTapi-v1-application-closet-outfits--outfit-" data-method="PUT" data-path="api/v1/application/closet/outfits/{outfit}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PUTapi-v1-application-closet-outfits--outfit-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PUTapi-v1-application-closet-outfits--outfit-" onclick="tryItOut('PUTapi-v1-application-closet-outfits--outfit-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PUTapi-v1-application-closet-outfits--outfit-" onclick="cancelTryOut('PUTapi-v1-application-closet-outfits--outfit-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PUTapi-v1-application-closet-outfits--outfit-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>api/v1/application/closet/outfits/{outfit}</code></b>
</p>
<p>
<small class="badge badge-purple">PATCH</small>
 <b><code>api/v1/application/closet/outfits/{outfit}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>outfit</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="outfit" data-endpoint="PUTapi-v1-application-closet-outfits--outfit-" data-component="url" required  hidden>
<br>

</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>name</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="name" data-endpoint="PUTapi-v1-application-closet-outfits--outfit-" data-component="body"  hidden>
<br>

</p>
<p>
<b><code>occasion_id</code></b>&nbsp;&nbsp;<small>number</small>     <i>optional</i> &nbsp;
<input type="number" name="occasion_id" data-endpoint="PUTapi-v1-application-closet-outfits--outfit-" data-component="body"  hidden>
<br>

</p>
<p>
<b><code>season_id</code></b>&nbsp;&nbsp;<small>number</small>     <i>optional</i> &nbsp;
<input type="number" name="season_id" data-endpoint="PUTapi-v1-application-closet-outfits--outfit-" data-component="body"  hidden>
<br>

</p>
<p>
<b><code>bookmarked</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="bookmarked" data-endpoint="PUTapi-v1-application-closet-outfits--outfit-" data-component="body"  hidden>
<br>
The value must be one of <code>0</code> or <code>1</code>.
</p>
<p>
<b><code>clothes</code></b>&nbsp;&nbsp;<small>number[]</small>     <i>optional</i> &nbsp;
<input type="number" name="clothes.0" data-endpoint="PUTapi-v1-application-closet-outfits--outfit-" data-component="body"  hidden>
<input type="number" name="clothes.1" data-endpoint="PUTapi-v1-application-closet-outfits--outfit-" data-component="body" hidden>
<br>

</p>

</form>


## Display a listing of the resource.




> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/api/v1/application/outfits/occasions" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/api/v1/application/outfits/occasions"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```
<div id="execution-results-GETapi-v1-application-outfits-occasions" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-v1-application-outfits-occasions"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-application-outfits-occasions"></code></pre>
</div>
<div id="execution-error-GETapi-v1-application-outfits-occasions" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-application-outfits-occasions"></code></pre>
</div>
<form id="form-GETapi-v1-application-outfits-occasions" data-method="GET" data-path="api/v1/application/outfits/occasions" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-application-outfits-occasions', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-v1-application-outfits-occasions" onclick="tryItOut('GETapi-v1-application-outfits-occasions');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-v1-application-outfits-occasions" onclick="cancelTryOut('GETapi-v1-application-outfits-occasions');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-v1-application-outfits-occasions" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/v1/application/outfits/occasions</code></b>
</p>
</form>


## Store a newly created resource in storage.




> Example request:

```bash
curl -X POST \
    "http://127.0.0.1:8000/api/v1/application/outfits/occasions" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"name":"veritatis"}'

```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/api/v1/application/outfits/occasions"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "veritatis"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-POSTapi-v1-application-outfits-occasions" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-v1-application-outfits-occasions"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-application-outfits-occasions"></code></pre>
</div>
<div id="execution-error-POSTapi-v1-application-outfits-occasions" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-application-outfits-occasions"></code></pre>
</div>
<form id="form-POSTapi-v1-application-outfits-occasions" data-method="POST" data-path="api/v1/application/outfits/occasions" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-application-outfits-occasions', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-v1-application-outfits-occasions" onclick="tryItOut('POSTapi-v1-application-outfits-occasions');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-v1-application-outfits-occasions" onclick="cancelTryOut('POSTapi-v1-application-outfits-occasions');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-v1-application-outfits-occasions" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/v1/application/outfits/occasions</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="name" data-endpoint="POSTapi-v1-application-outfits-occasions" data-component="body" required  hidden>
<br>

</p>

</form>


## Display the specified resource.




> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/api/v1/application/outfits/occasions/dicta" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/api/v1/application/outfits/occasions/dicta"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```
<div id="execution-results-GETapi-v1-application-outfits-occasions--occasion-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-v1-application-outfits-occasions--occasion-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-application-outfits-occasions--occasion-"></code></pre>
</div>
<div id="execution-error-GETapi-v1-application-outfits-occasions--occasion-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-application-outfits-occasions--occasion-"></code></pre>
</div>
<form id="form-GETapi-v1-application-outfits-occasions--occasion-" data-method="GET" data-path="api/v1/application/outfits/occasions/{occasion}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-application-outfits-occasions--occasion-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-v1-application-outfits-occasions--occasion-" onclick="tryItOut('GETapi-v1-application-outfits-occasions--occasion-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-v1-application-outfits-occasions--occasion-" onclick="cancelTryOut('GETapi-v1-application-outfits-occasions--occasion-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-v1-application-outfits-occasions--occasion-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/v1/application/outfits/occasions/{occasion}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>occasion</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="occasion" data-endpoint="GETapi-v1-application-outfits-occasions--occasion-" data-component="url" required  hidden>
<br>

</p>
</form>


## Remove the specified resource from storage.




> Example request:

```bash
curl -X DELETE \
    "http://127.0.0.1:8000/api/v1/application/outfits/occasions/est" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/api/v1/application/outfits/occasions/est"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "DELETE",
    headers,
}).then(response => response.json());
```


<div id="execution-results-DELETEapi-v1-application-outfits-occasions--occasion-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEapi-v1-application-outfits-occasions--occasion-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-v1-application-outfits-occasions--occasion-"></code></pre>
</div>
<div id="execution-error-DELETEapi-v1-application-outfits-occasions--occasion-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-v1-application-outfits-occasions--occasion-"></code></pre>
</div>
<form id="form-DELETEapi-v1-application-outfits-occasions--occasion-" data-method="DELETE" data-path="api/v1/application/outfits/occasions/{occasion}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEapi-v1-application-outfits-occasions--occasion-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEapi-v1-application-outfits-occasions--occasion-" onclick="tryItOut('DELETEapi-v1-application-outfits-occasions--occasion-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEapi-v1-application-outfits-occasions--occasion-" onclick="cancelTryOut('DELETEapi-v1-application-outfits-occasions--occasion-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEapi-v1-application-outfits-occasions--occasion-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>api/v1/application/outfits/occasions/{occasion}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>occasion</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="occasion" data-endpoint="DELETEapi-v1-application-outfits-occasions--occasion-" data-component="url" required  hidden>
<br>

</p>
</form>


## Display a listing of the resource.




> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/api/v1/application/outfits/seasons" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/api/v1/application/outfits/seasons"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```
<div id="execution-results-GETapi-v1-application-outfits-seasons" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-v1-application-outfits-seasons"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-application-outfits-seasons"></code></pre>
</div>
<div id="execution-error-GETapi-v1-application-outfits-seasons" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-application-outfits-seasons"></code></pre>
</div>
<form id="form-GETapi-v1-application-outfits-seasons" data-method="GET" data-path="api/v1/application/outfits/seasons" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-application-outfits-seasons', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-v1-application-outfits-seasons" onclick="tryItOut('GETapi-v1-application-outfits-seasons');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-v1-application-outfits-seasons" onclick="cancelTryOut('GETapi-v1-application-outfits-seasons');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-v1-application-outfits-seasons" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/v1/application/outfits/seasons</code></b>
</p>
</form>


## Store a newly created resource in storage.




> Example request:

```bash
curl -X POST \
    "http://127.0.0.1:8000/api/v1/application/outfits/seasons" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"name":"excepturi"}'

```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/api/v1/application/outfits/seasons"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "excepturi"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-POSTapi-v1-application-outfits-seasons" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-v1-application-outfits-seasons"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-application-outfits-seasons"></code></pre>
</div>
<div id="execution-error-POSTapi-v1-application-outfits-seasons" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-application-outfits-seasons"></code></pre>
</div>
<form id="form-POSTapi-v1-application-outfits-seasons" data-method="POST" data-path="api/v1/application/outfits/seasons" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-application-outfits-seasons', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-v1-application-outfits-seasons" onclick="tryItOut('POSTapi-v1-application-outfits-seasons');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-v1-application-outfits-seasons" onclick="cancelTryOut('POSTapi-v1-application-outfits-seasons');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-v1-application-outfits-seasons" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/v1/application/outfits/seasons</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="name" data-endpoint="POSTapi-v1-application-outfits-seasons" data-component="body" required  hidden>
<br>

</p>

</form>


## Display the specified resource.




> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/api/v1/application/outfits/seasons/et" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/api/v1/application/outfits/seasons/et"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```
<div id="execution-results-GETapi-v1-application-outfits-seasons--season-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-v1-application-outfits-seasons--season-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-application-outfits-seasons--season-"></code></pre>
</div>
<div id="execution-error-GETapi-v1-application-outfits-seasons--season-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-application-outfits-seasons--season-"></code></pre>
</div>
<form id="form-GETapi-v1-application-outfits-seasons--season-" data-method="GET" data-path="api/v1/application/outfits/seasons/{season}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-application-outfits-seasons--season-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-v1-application-outfits-seasons--season-" onclick="tryItOut('GETapi-v1-application-outfits-seasons--season-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-v1-application-outfits-seasons--season-" onclick="cancelTryOut('GETapi-v1-application-outfits-seasons--season-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-v1-application-outfits-seasons--season-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/v1/application/outfits/seasons/{season}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>season</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="season" data-endpoint="GETapi-v1-application-outfits-seasons--season-" data-component="url" required  hidden>
<br>

</p>
</form>


## Remove the specified resource from storage.




> Example request:

```bash
curl -X DELETE \
    "http://127.0.0.1:8000/api/v1/application/outfits/seasons/dolor" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/api/v1/application/outfits/seasons/dolor"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "DELETE",
    headers,
}).then(response => response.json());
```


<div id="execution-results-DELETEapi-v1-application-outfits-seasons--season-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEapi-v1-application-outfits-seasons--season-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-v1-application-outfits-seasons--season-"></code></pre>
</div>
<div id="execution-error-DELETEapi-v1-application-outfits-seasons--season-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-v1-application-outfits-seasons--season-"></code></pre>
</div>
<form id="form-DELETEapi-v1-application-outfits-seasons--season-" data-method="DELETE" data-path="api/v1/application/outfits/seasons/{season}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEapi-v1-application-outfits-seasons--season-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEapi-v1-application-outfits-seasons--season-" onclick="tryItOut('DELETEapi-v1-application-outfits-seasons--season-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEapi-v1-application-outfits-seasons--season-" onclick="cancelTryOut('DELETEapi-v1-application-outfits-seasons--season-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEapi-v1-application-outfits-seasons--season-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>api/v1/application/outfits/seasons/{season}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>season</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="season" data-endpoint="DELETEapi-v1-application-outfits-seasons--season-" data-component="url" required  hidden>
<br>

</p>
</form>


## Display a listing of the resource with search.




> Example request:

```bash
curl -X POST \
    "http://127.0.0.1:8000/api/v1/application/outfits/occasions/search" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"search":"nihil","limit":5189.6058,"page":7892422.6,"orderColumn":"voluptas","orderDir":"asc"}'

```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/api/v1/application/outfits/occasions/search"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "search": "nihil",
    "limit": 5189.6058,
    "page": 7892422.6,
    "orderColumn": "voluptas",
    "orderDir": "asc"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-POSTapi-v1-application-outfits-occasions-search" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-v1-application-outfits-occasions-search"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-application-outfits-occasions-search"></code></pre>
</div>
<div id="execution-error-POSTapi-v1-application-outfits-occasions-search" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-application-outfits-occasions-search"></code></pre>
</div>
<form id="form-POSTapi-v1-application-outfits-occasions-search" data-method="POST" data-path="api/v1/application/outfits/occasions/search" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-application-outfits-occasions-search', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-v1-application-outfits-occasions-search" onclick="tryItOut('POSTapi-v1-application-outfits-occasions-search');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-v1-application-outfits-occasions-search" onclick="cancelTryOut('POSTapi-v1-application-outfits-occasions-search');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-v1-application-outfits-occasions-search" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/v1/application/outfits/occasions/search</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>search</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="search" data-endpoint="POSTapi-v1-application-outfits-occasions-search" data-component="body"  hidden>
<br>

</p>
<p>
<b><code>limit</code></b>&nbsp;&nbsp;<small>number</small>     <i>optional</i> &nbsp;
<input type="number" name="limit" data-endpoint="POSTapi-v1-application-outfits-occasions-search" data-component="body"  hidden>
<br>

</p>
<p>
<b><code>page</code></b>&nbsp;&nbsp;<small>number</small>     <i>optional</i> &nbsp;
<input type="number" name="page" data-endpoint="POSTapi-v1-application-outfits-occasions-search" data-component="body"  hidden>
<br>

</p>
<p>
<b><code>orderColumn</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="orderColumn" data-endpoint="POSTapi-v1-application-outfits-occasions-search" data-component="body"  hidden>
<br>

</p>
<p>
<b><code>orderDir</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="orderDir" data-endpoint="POSTapi-v1-application-outfits-occasions-search" data-component="body"  hidden>
<br>
The value must be one of <code>asc</code> or <code>desc</code>.
</p>

</form>


## Display a listing of the resource with search.




> Example request:

```bash
curl -X POST \
    "http://127.0.0.1:8000/api/v1/application/outfits/seasons/search" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"search":"fuga","limit":319.8,"page":562.32,"orderColumn":"nesciunt","orderDir":"asc"}'

```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/api/v1/application/outfits/seasons/search"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "search": "fuga",
    "limit": 319.8,
    "page": 562.32,
    "orderColumn": "nesciunt",
    "orderDir": "asc"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-POSTapi-v1-application-outfits-seasons-search" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-v1-application-outfits-seasons-search"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-application-outfits-seasons-search"></code></pre>
</div>
<div id="execution-error-POSTapi-v1-application-outfits-seasons-search" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-application-outfits-seasons-search"></code></pre>
</div>
<form id="form-POSTapi-v1-application-outfits-seasons-search" data-method="POST" data-path="api/v1/application/outfits/seasons/search" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-application-outfits-seasons-search', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-v1-application-outfits-seasons-search" onclick="tryItOut('POSTapi-v1-application-outfits-seasons-search');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-v1-application-outfits-seasons-search" onclick="cancelTryOut('POSTapi-v1-application-outfits-seasons-search');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-v1-application-outfits-seasons-search" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/v1/application/outfits/seasons/search</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>search</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="search" data-endpoint="POSTapi-v1-application-outfits-seasons-search" data-component="body"  hidden>
<br>

</p>
<p>
<b><code>limit</code></b>&nbsp;&nbsp;<small>number</small>     <i>optional</i> &nbsp;
<input type="number" name="limit" data-endpoint="POSTapi-v1-application-outfits-seasons-search" data-component="body"  hidden>
<br>

</p>
<p>
<b><code>page</code></b>&nbsp;&nbsp;<small>number</small>     <i>optional</i> &nbsp;
<input type="number" name="page" data-endpoint="POSTapi-v1-application-outfits-seasons-search" data-component="body"  hidden>
<br>

</p>
<p>
<b><code>orderColumn</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="orderColumn" data-endpoint="POSTapi-v1-application-outfits-seasons-search" data-component="body"  hidden>
<br>

</p>
<p>
<b><code>orderDir</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="orderDir" data-endpoint="POSTapi-v1-application-outfits-seasons-search" data-component="body"  hidden>
<br>
The value must be one of <code>asc</code> or <code>desc</code>.
</p>

</form>


## Display a listing of the resource.




> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/api/v1/application/outfits/closet" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/api/v1/application/outfits/closet"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```
<div id="execution-results-GETapi-v1-application-outfits-closet" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-v1-application-outfits-closet"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-application-outfits-closet"></code></pre>
</div>
<div id="execution-error-GETapi-v1-application-outfits-closet" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-application-outfits-closet"></code></pre>
</div>
<form id="form-GETapi-v1-application-outfits-closet" data-method="GET" data-path="api/v1/application/outfits/closet" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-application-outfits-closet', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-v1-application-outfits-closet" onclick="tryItOut('GETapi-v1-application-outfits-closet');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-v1-application-outfits-closet" onclick="cancelTryOut('GETapi-v1-application-outfits-closet');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-v1-application-outfits-closet" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/v1/application/outfits/closet</code></b>
</p>
</form>


## Display the specified resource.




> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/api/v1/application/outfits/closet/est" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/api/v1/application/outfits/closet/est"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```
<div id="execution-results-GETapi-v1-application-outfits-closet--closet-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-v1-application-outfits-closet--closet-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-application-outfits-closet--closet-"></code></pre>
</div>
<div id="execution-error-GETapi-v1-application-outfits-closet--closet-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-application-outfits-closet--closet-"></code></pre>
</div>
<form id="form-GETapi-v1-application-outfits-closet--closet-" data-method="GET" data-path="api/v1/application/outfits/closet/{closet}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-application-outfits-closet--closet-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-v1-application-outfits-closet--closet-" onclick="tryItOut('GETapi-v1-application-outfits-closet--closet-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-v1-application-outfits-closet--closet-" onclick="cancelTryOut('GETapi-v1-application-outfits-closet--closet-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-v1-application-outfits-closet--closet-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/v1/application/outfits/closet/{closet}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>closet</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="closet" data-endpoint="GETapi-v1-application-outfits-closet--closet-" data-component="url" required  hidden>
<br>

</p>
</form>


## Display a listing of the resource with search.




> Example request:

```bash
curl -X POST \
    "http://127.0.0.1:8000/api/v1/application/outfits/search" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"name":"dolor","occasion_id":336498.901519,"season_id":4,"bookmarked":0,"search":"magnam","limit":52182.3581,"page":56.599,"orderColumn":"excepturi","orderDir":"asc"}'

```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/api/v1/application/outfits/search"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "dolor",
    "occasion_id": 336498.901519,
    "season_id": 4,
    "bookmarked": 0,
    "search": "magnam",
    "limit": 52182.3581,
    "page": 56.599,
    "orderColumn": "excepturi",
    "orderDir": "asc"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-POSTapi-v1-application-outfits-search" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-v1-application-outfits-search"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-application-outfits-search"></code></pre>
</div>
<div id="execution-error-POSTapi-v1-application-outfits-search" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-application-outfits-search"></code></pre>
</div>
<form id="form-POSTapi-v1-application-outfits-search" data-method="POST" data-path="api/v1/application/outfits/search" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-application-outfits-search', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-v1-application-outfits-search" onclick="tryItOut('POSTapi-v1-application-outfits-search');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-v1-application-outfits-search" onclick="cancelTryOut('POSTapi-v1-application-outfits-search');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-v1-application-outfits-search" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/v1/application/outfits/search</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>name</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="name" data-endpoint="POSTapi-v1-application-outfits-search" data-component="body"  hidden>
<br>

</p>
<p>
<b><code>occasion_id</code></b>&nbsp;&nbsp;<small>number</small>     <i>optional</i> &nbsp;
<input type="number" name="occasion_id" data-endpoint="POSTapi-v1-application-outfits-search" data-component="body"  hidden>
<br>

</p>
<p>
<b><code>season_id</code></b>&nbsp;&nbsp;<small>number</small>     <i>optional</i> &nbsp;
<input type="number" name="season_id" data-endpoint="POSTapi-v1-application-outfits-search" data-component="body"  hidden>
<br>

</p>
<p>
<b><code>bookmarked</code></b>&nbsp;&nbsp;<small>number</small>     <i>optional</i> &nbsp;
<input type="number" name="bookmarked" data-endpoint="POSTapi-v1-application-outfits-search" data-component="body"  hidden>
<br>
The value must be one of <code>0</code> or <code>1</code>.
</p>
<p>
<b><code>search</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="search" data-endpoint="POSTapi-v1-application-outfits-search" data-component="body"  hidden>
<br>

</p>
<p>
<b><code>limit</code></b>&nbsp;&nbsp;<small>number</small>     <i>optional</i> &nbsp;
<input type="number" name="limit" data-endpoint="POSTapi-v1-application-outfits-search" data-component="body"  hidden>
<br>

</p>
<p>
<b><code>page</code></b>&nbsp;&nbsp;<small>number</small>     <i>optional</i> &nbsp;
<input type="number" name="page" data-endpoint="POSTapi-v1-application-outfits-search" data-component="body"  hidden>
<br>

</p>
<p>
<b><code>orderColumn</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="orderColumn" data-endpoint="POSTapi-v1-application-outfits-search" data-component="body"  hidden>
<br>

</p>
<p>
<b><code>orderDir</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="orderDir" data-endpoint="POSTapi-v1-application-outfits-search" data-component="body"  hidden>
<br>
The value must be one of <code>asc</code> or <code>desc</code>.
</p>

</form>


## Display a listing of the resource.




> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/api/v1/application/bookmark" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/api/v1/application/bookmark"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```
<div id="execution-results-GETapi-v1-application-bookmark" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-v1-application-bookmark"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-application-bookmark"></code></pre>
</div>
<div id="execution-error-GETapi-v1-application-bookmark" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-application-bookmark"></code></pre>
</div>
<form id="form-GETapi-v1-application-bookmark" data-method="GET" data-path="api/v1/application/bookmark" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-application-bookmark', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-v1-application-bookmark" onclick="tryItOut('GETapi-v1-application-bookmark');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-v1-application-bookmark" onclick="cancelTryOut('GETapi-v1-application-bookmark');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-v1-application-bookmark" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/v1/application/bookmark</code></b>
</p>
</form>


## Display a listing of the resource with search.




> Example request:

```bash
curl -X POST \
    "http://127.0.0.1:8000/api/v1/application/bookmark" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"name":"enim","occasion_id":1380.72,"season_id":6.8064,"bookmarked":0,"search":"ut","limit":177000922.746,"page":24252.121604572,"orderColumn":"porro","orderDir":"desc"}'

```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/api/v1/application/bookmark"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "enim",
    "occasion_id": 1380.72,
    "season_id": 6.8064,
    "bookmarked": 0,
    "search": "ut",
    "limit": 177000922.746,
    "page": 24252.121604572,
    "orderColumn": "porro",
    "orderDir": "desc"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-POSTapi-v1-application-bookmark" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-v1-application-bookmark"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-application-bookmark"></code></pre>
</div>
<div id="execution-error-POSTapi-v1-application-bookmark" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-application-bookmark"></code></pre>
</div>
<form id="form-POSTapi-v1-application-bookmark" data-method="POST" data-path="api/v1/application/bookmark" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-application-bookmark', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-v1-application-bookmark" onclick="tryItOut('POSTapi-v1-application-bookmark');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-v1-application-bookmark" onclick="cancelTryOut('POSTapi-v1-application-bookmark');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-v1-application-bookmark" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/v1/application/bookmark</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>name</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="name" data-endpoint="POSTapi-v1-application-bookmark" data-component="body"  hidden>
<br>

</p>
<p>
<b><code>occasion_id</code></b>&nbsp;&nbsp;<small>number</small>     <i>optional</i> &nbsp;
<input type="number" name="occasion_id" data-endpoint="POSTapi-v1-application-bookmark" data-component="body"  hidden>
<br>

</p>
<p>
<b><code>season_id</code></b>&nbsp;&nbsp;<small>number</small>     <i>optional</i> &nbsp;
<input type="number" name="season_id" data-endpoint="POSTapi-v1-application-bookmark" data-component="body"  hidden>
<br>

</p>
<p>
<b><code>bookmarked</code></b>&nbsp;&nbsp;<small>number</small>     <i>optional</i> &nbsp;
<input type="number" name="bookmarked" data-endpoint="POSTapi-v1-application-bookmark" data-component="body"  hidden>
<br>
The value must be one of <code>0</code> or <code>1</code>.
</p>
<p>
<b><code>search</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="search" data-endpoint="POSTapi-v1-application-bookmark" data-component="body"  hidden>
<br>

</p>
<p>
<b><code>limit</code></b>&nbsp;&nbsp;<small>number</small>     <i>optional</i> &nbsp;
<input type="number" name="limit" data-endpoint="POSTapi-v1-application-bookmark" data-component="body"  hidden>
<br>

</p>
<p>
<b><code>page</code></b>&nbsp;&nbsp;<small>number</small>     <i>optional</i> &nbsp;
<input type="number" name="page" data-endpoint="POSTapi-v1-application-bookmark" data-component="body"  hidden>
<br>

</p>
<p>
<b><code>orderColumn</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="orderColumn" data-endpoint="POSTapi-v1-application-bookmark" data-component="body"  hidden>
<br>

</p>
<p>
<b><code>orderDir</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="orderDir" data-endpoint="POSTapi-v1-application-bookmark" data-component="body"  hidden>
<br>
The value must be one of <code>asc</code> or <code>desc</code>.
</p>

</form>


## Update bookmark.




> Example request:

```bash
curl -X PUT \
    "http://127.0.0.1:8000/api/v1/application/bookmark/et" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"bookmarked":"0"}'

```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/api/v1/application/bookmark/et"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "bookmarked": "0"
}

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-PUTapi-v1-application-bookmark--outfit-" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTapi-v1-application-bookmark--outfit-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-v1-application-bookmark--outfit-"></code></pre>
</div>
<div id="execution-error-PUTapi-v1-application-bookmark--outfit-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-v1-application-bookmark--outfit-"></code></pre>
</div>
<form id="form-PUTapi-v1-application-bookmark--outfit-" data-method="PUT" data-path="api/v1/application/bookmark/{outfit}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PUTapi-v1-application-bookmark--outfit-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PUTapi-v1-application-bookmark--outfit-" onclick="tryItOut('PUTapi-v1-application-bookmark--outfit-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PUTapi-v1-application-bookmark--outfit-" onclick="cancelTryOut('PUTapi-v1-application-bookmark--outfit-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PUTapi-v1-application-bookmark--outfit-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>api/v1/application/bookmark/{outfit}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>outfit</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="outfit" data-endpoint="PUTapi-v1-application-bookmark--outfit-" data-component="url" required  hidden>
<br>

</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>bookmarked</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="bookmarked" data-endpoint="PUTapi-v1-application-bookmark--outfit-" data-component="body" required  hidden>
<br>
The value must be one of <code>0</code> or <code>1</code>.
</p>

</form>


## Display a listing of the resource.




> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/api/v1/application/closet" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/api/v1/application/closet"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```
<div id="execution-results-GETapi-v1-application-closet" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-v1-application-closet"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-application-closet"></code></pre>
</div>
<div id="execution-error-GETapi-v1-application-closet" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-application-closet"></code></pre>
</div>
<form id="form-GETapi-v1-application-closet" data-method="GET" data-path="api/v1/application/closet" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-application-closet', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-v1-application-closet" onclick="tryItOut('GETapi-v1-application-closet');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-v1-application-closet" onclick="cancelTryOut('GETapi-v1-application-closet');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-v1-application-closet" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/v1/application/closet</code></b>
</p>
</form>


## Store a newly created resource in storage.




> Example request:

```bash
curl -X POST \
    "http://127.0.0.1:8000/api/v1/application/closet" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"name":"qui","color_id":147.15,"client_id":13.531884101,"occasion_id":1726,"category_id":687.494028822,"season_id":406.49,"image":["accusantium"]}'

```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/api/v1/application/closet"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "qui",
    "color_id": 147.15,
    "client_id": 13.531884101,
    "occasion_id": 1726,
    "category_id": 687.494028822,
    "season_id": 406.49,
    "image": [
        "accusantium"
    ]
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-POSTapi-v1-application-closet" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-v1-application-closet"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-application-closet"></code></pre>
</div>
<div id="execution-error-POSTapi-v1-application-closet" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-application-closet"></code></pre>
</div>
<form id="form-POSTapi-v1-application-closet" data-method="POST" data-path="api/v1/application/closet" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-application-closet', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-v1-application-closet" onclick="tryItOut('POSTapi-v1-application-closet');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-v1-application-closet" onclick="cancelTryOut('POSTapi-v1-application-closet');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-v1-application-closet" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/v1/application/closet</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="name" data-endpoint="POSTapi-v1-application-closet" data-component="body" required  hidden>
<br>

</p>
<p>
<b><code>color_id</code></b>&nbsp;&nbsp;<small>number</small>  &nbsp;
<input type="number" name="color_id" data-endpoint="POSTapi-v1-application-closet" data-component="body" required  hidden>
<br>

</p>
<p>
<b><code>client_id</code></b>&nbsp;&nbsp;<small>number</small>     <i>optional</i> &nbsp;
<input type="number" name="client_id" data-endpoint="POSTapi-v1-application-closet" data-component="body"  hidden>
<br>

</p>
<p>
<b><code>occasion_id</code></b>&nbsp;&nbsp;<small>number</small>  &nbsp;
<input type="number" name="occasion_id" data-endpoint="POSTapi-v1-application-closet" data-component="body" required  hidden>
<br>

</p>
<p>
<b><code>category_id</code></b>&nbsp;&nbsp;<small>number</small>  &nbsp;
<input type="number" name="category_id" data-endpoint="POSTapi-v1-application-closet" data-component="body" required  hidden>
<br>

</p>
<p>
<b><code>season_id</code></b>&nbsp;&nbsp;<small>number</small>  &nbsp;
<input type="number" name="season_id" data-endpoint="POSTapi-v1-application-closet" data-component="body" required  hidden>
<br>

</p>
<p>
<b><code>image</code></b>&nbsp;&nbsp;<small>string[]</small>  &nbsp;
<input type="text" name="image.0" data-endpoint="POSTapi-v1-application-closet" data-component="body" required  hidden>
<input type="text" name="image.1" data-endpoint="POSTapi-v1-application-closet" data-component="body" hidden>
<br>

</p>

</form>


## Display the specified resource.




> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/api/v1/application/closet/vero" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/api/v1/application/closet/vero"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```
<div id="execution-results-GETapi-v1-application-closet--cloth-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-v1-application-closet--cloth-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-application-closet--cloth-"></code></pre>
</div>
<div id="execution-error-GETapi-v1-application-closet--cloth-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-application-closet--cloth-"></code></pre>
</div>
<form id="form-GETapi-v1-application-closet--cloth-" data-method="GET" data-path="api/v1/application/closet/{cloth}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-application-closet--cloth-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-v1-application-closet--cloth-" onclick="tryItOut('GETapi-v1-application-closet--cloth-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-v1-application-closet--cloth-" onclick="cancelTryOut('GETapi-v1-application-closet--cloth-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-v1-application-closet--cloth-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/v1/application/closet/{cloth}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>cloth</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="cloth" data-endpoint="GETapi-v1-application-closet--cloth-" data-component="url" required  hidden>
<br>

</p>
</form>


## Update the specified resource in storage.




> Example request:

```bash
curl -X PUT \
    "http://127.0.0.1:8000/api/v1/application/closet/culpa" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"name":"nesciunt","color_id":3.13096656,"client_id":488,"occasion_id":137.387,"category_id":33521796.65,"season_id":197.4725512}'

```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/api/v1/application/closet/culpa"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "nesciunt",
    "color_id": 3.13096656,
    "client_id": 488,
    "occasion_id": 137.387,
    "category_id": 33521796.65,
    "season_id": 197.4725512
}

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-PUTapi-v1-application-closet--cloth-" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTapi-v1-application-closet--cloth-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-v1-application-closet--cloth-"></code></pre>
</div>
<div id="execution-error-PUTapi-v1-application-closet--cloth-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-v1-application-closet--cloth-"></code></pre>
</div>
<form id="form-PUTapi-v1-application-closet--cloth-" data-method="PUT" data-path="api/v1/application/closet/{cloth}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PUTapi-v1-application-closet--cloth-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PUTapi-v1-application-closet--cloth-" onclick="tryItOut('PUTapi-v1-application-closet--cloth-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PUTapi-v1-application-closet--cloth-" onclick="cancelTryOut('PUTapi-v1-application-closet--cloth-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PUTapi-v1-application-closet--cloth-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>api/v1/application/closet/{cloth}</code></b>
</p>
<p>
<small class="badge badge-purple">PATCH</small>
 <b><code>api/v1/application/closet/{cloth}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>cloth</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="cloth" data-endpoint="PUTapi-v1-application-closet--cloth-" data-component="url" required  hidden>
<br>

</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>name</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="name" data-endpoint="PUTapi-v1-application-closet--cloth-" data-component="body"  hidden>
<br>

</p>
<p>
<b><code>color_id</code></b>&nbsp;&nbsp;<small>number</small>     <i>optional</i> &nbsp;
<input type="number" name="color_id" data-endpoint="PUTapi-v1-application-closet--cloth-" data-component="body"  hidden>
<br>

</p>
<p>
<b><code>client_id</code></b>&nbsp;&nbsp;<small>number</small>     <i>optional</i> &nbsp;
<input type="number" name="client_id" data-endpoint="PUTapi-v1-application-closet--cloth-" data-component="body"  hidden>
<br>

</p>
<p>
<b><code>occasion_id</code></b>&nbsp;&nbsp;<small>number</small>     <i>optional</i> &nbsp;
<input type="number" name="occasion_id" data-endpoint="PUTapi-v1-application-closet--cloth-" data-component="body"  hidden>
<br>

</p>
<p>
<b><code>category_id</code></b>&nbsp;&nbsp;<small>number</small>     <i>optional</i> &nbsp;
<input type="number" name="category_id" data-endpoint="PUTapi-v1-application-closet--cloth-" data-component="body"  hidden>
<br>

</p>
<p>
<b><code>season_id</code></b>&nbsp;&nbsp;<small>number</small>     <i>optional</i> &nbsp;
<input type="number" name="season_id" data-endpoint="PUTapi-v1-application-closet--cloth-" data-component="body"  hidden>
<br>

</p>

</form>


## Remove the specified resource from storage.




> Example request:

```bash
curl -X DELETE \
    "http://127.0.0.1:8000/api/v1/application/closet/corrupti" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/api/v1/application/closet/corrupti"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "DELETE",
    headers,
}).then(response => response.json());
```


<div id="execution-results-DELETEapi-v1-application-closet--cloth-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEapi-v1-application-closet--cloth-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-v1-application-closet--cloth-"></code></pre>
</div>
<div id="execution-error-DELETEapi-v1-application-closet--cloth-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-v1-application-closet--cloth-"></code></pre>
</div>
<form id="form-DELETEapi-v1-application-closet--cloth-" data-method="DELETE" data-path="api/v1/application/closet/{cloth}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEapi-v1-application-closet--cloth-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEapi-v1-application-closet--cloth-" onclick="tryItOut('DELETEapi-v1-application-closet--cloth-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEapi-v1-application-closet--cloth-" onclick="cancelTryOut('DELETEapi-v1-application-closet--cloth-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEapi-v1-application-closet--cloth-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>api/v1/application/closet/{cloth}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>cloth</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="cloth" data-endpoint="DELETEapi-v1-application-closet--cloth-" data-component="url" required  hidden>
<br>

</p>
</form>


## Display a listing of the resource.




> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/api/v1/application/outfits" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/api/v1/application/outfits"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```
<div id="execution-results-GETapi-v1-application-outfits" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-v1-application-outfits"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-application-outfits"></code></pre>
</div>
<div id="execution-error-GETapi-v1-application-outfits" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-application-outfits"></code></pre>
</div>
<form id="form-GETapi-v1-application-outfits" data-method="GET" data-path="api/v1/application/outfits" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-application-outfits', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-v1-application-outfits" onclick="tryItOut('GETapi-v1-application-outfits');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-v1-application-outfits" onclick="cancelTryOut('GETapi-v1-application-outfits');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-v1-application-outfits" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/v1/application/outfits</code></b>
</p>
</form>


## Store a newly created resource in storage.




> Example request:

```bash
curl -X POST \
    "http://127.0.0.1:8000/api/v1/application/outfits" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"name":"voluptas","occasion_id":24.0404,"season_id":4286.28452,"bookmarked":"0","clothes":[349697.812502755,6865714.280304]}'

```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/api/v1/application/outfits"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "voluptas",
    "occasion_id": 24.0404,
    "season_id": 4286.28452,
    "bookmarked": "0",
    "clothes": [
        349697.812502755,
        6865714.280304
    ]
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-POSTapi-v1-application-outfits" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-v1-application-outfits"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-application-outfits"></code></pre>
</div>
<div id="execution-error-POSTapi-v1-application-outfits" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-application-outfits"></code></pre>
</div>
<form id="form-POSTapi-v1-application-outfits" data-method="POST" data-path="api/v1/application/outfits" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-application-outfits', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-v1-application-outfits" onclick="tryItOut('POSTapi-v1-application-outfits');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-v1-application-outfits" onclick="cancelTryOut('POSTapi-v1-application-outfits');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-v1-application-outfits" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/v1/application/outfits</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="name" data-endpoint="POSTapi-v1-application-outfits" data-component="body" required  hidden>
<br>

</p>
<p>
<b><code>occasion_id</code></b>&nbsp;&nbsp;<small>number</small>     <i>optional</i> &nbsp;
<input type="number" name="occasion_id" data-endpoint="POSTapi-v1-application-outfits" data-component="body"  hidden>
<br>

</p>
<p>
<b><code>season_id</code></b>&nbsp;&nbsp;<small>number</small>     <i>optional</i> &nbsp;
<input type="number" name="season_id" data-endpoint="POSTapi-v1-application-outfits" data-component="body"  hidden>
<br>

</p>
<p>
<b><code>bookmarked</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="bookmarked" data-endpoint="POSTapi-v1-application-outfits" data-component="body"  hidden>
<br>
The value must be one of <code>0</code> or <code>1</code>.
</p>
<p>
<b><code>clothes</code></b>&nbsp;&nbsp;<small>number[]</small>  &nbsp;
<input type="number" name="clothes.0" data-endpoint="POSTapi-v1-application-outfits" data-component="body" required  hidden>
<input type="number" name="clothes.1" data-endpoint="POSTapi-v1-application-outfits" data-component="body" hidden>
<br>

</p>

</form>


## Display the specified resource.




> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/api/v1/application/outfits/minima" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/api/v1/application/outfits/minima"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```
<div id="execution-results-GETapi-v1-application-outfits--outfit-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-v1-application-outfits--outfit-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-application-outfits--outfit-"></code></pre>
</div>
<div id="execution-error-GETapi-v1-application-outfits--outfit-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-application-outfits--outfit-"></code></pre>
</div>
<form id="form-GETapi-v1-application-outfits--outfit-" data-method="GET" data-path="api/v1/application/outfits/{outfit}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-application-outfits--outfit-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-v1-application-outfits--outfit-" onclick="tryItOut('GETapi-v1-application-outfits--outfit-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-v1-application-outfits--outfit-" onclick="cancelTryOut('GETapi-v1-application-outfits--outfit-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-v1-application-outfits--outfit-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/v1/application/outfits/{outfit}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>outfit</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="outfit" data-endpoint="GETapi-v1-application-outfits--outfit-" data-component="url" required  hidden>
<br>

</p>
</form>


## Update the specified resource in storage.




> Example request:

```bash
curl -X PUT \
    "http://127.0.0.1:8000/api/v1/application/outfits/aut" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"name":"sunt","occasion_id":59.150345,"season_id":287538.236487,"bookmarked":"0","clothes":[79698446.0184,8264.21]}'

```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/api/v1/application/outfits/aut"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "sunt",
    "occasion_id": 59.150345,
    "season_id": 287538.236487,
    "bookmarked": "0",
    "clothes": [
        79698446.0184,
        8264.21
    ]
}

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-PUTapi-v1-application-outfits--outfit-" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTapi-v1-application-outfits--outfit-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-v1-application-outfits--outfit-"></code></pre>
</div>
<div id="execution-error-PUTapi-v1-application-outfits--outfit-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-v1-application-outfits--outfit-"></code></pre>
</div>
<form id="form-PUTapi-v1-application-outfits--outfit-" data-method="PUT" data-path="api/v1/application/outfits/{outfit}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PUTapi-v1-application-outfits--outfit-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PUTapi-v1-application-outfits--outfit-" onclick="tryItOut('PUTapi-v1-application-outfits--outfit-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PUTapi-v1-application-outfits--outfit-" onclick="cancelTryOut('PUTapi-v1-application-outfits--outfit-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PUTapi-v1-application-outfits--outfit-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>api/v1/application/outfits/{outfit}</code></b>
</p>
<p>
<small class="badge badge-purple">PATCH</small>
 <b><code>api/v1/application/outfits/{outfit}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>outfit</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="outfit" data-endpoint="PUTapi-v1-application-outfits--outfit-" data-component="url" required  hidden>
<br>

</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>name</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="name" data-endpoint="PUTapi-v1-application-outfits--outfit-" data-component="body"  hidden>
<br>

</p>
<p>
<b><code>occasion_id</code></b>&nbsp;&nbsp;<small>number</small>     <i>optional</i> &nbsp;
<input type="number" name="occasion_id" data-endpoint="PUTapi-v1-application-outfits--outfit-" data-component="body"  hidden>
<br>

</p>
<p>
<b><code>season_id</code></b>&nbsp;&nbsp;<small>number</small>     <i>optional</i> &nbsp;
<input type="number" name="season_id" data-endpoint="PUTapi-v1-application-outfits--outfit-" data-component="body"  hidden>
<br>

</p>
<p>
<b><code>bookmarked</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="bookmarked" data-endpoint="PUTapi-v1-application-outfits--outfit-" data-component="body"  hidden>
<br>
The value must be one of <code>0</code> or <code>1</code>.
</p>
<p>
<b><code>clothes</code></b>&nbsp;&nbsp;<small>number[]</small>     <i>optional</i> &nbsp;
<input type="number" name="clothes.0" data-endpoint="PUTapi-v1-application-outfits--outfit-" data-component="body"  hidden>
<input type="number" name="clothes.1" data-endpoint="PUTapi-v1-application-outfits--outfit-" data-component="body" hidden>
<br>

</p>

</form>


## Remove the specified resource from storage.




> Example request:

```bash
curl -X DELETE \
    "http://127.0.0.1:8000/api/v1/application/outfits/quas" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/api/v1/application/outfits/quas"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "DELETE",
    headers,
}).then(response => response.json());
```


<div id="execution-results-DELETEapi-v1-application-outfits--outfit-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEapi-v1-application-outfits--outfit-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-v1-application-outfits--outfit-"></code></pre>
</div>
<div id="execution-error-DELETEapi-v1-application-outfits--outfit-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-v1-application-outfits--outfit-"></code></pre>
</div>
<form id="form-DELETEapi-v1-application-outfits--outfit-" data-method="DELETE" data-path="api/v1/application/outfits/{outfit}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEapi-v1-application-outfits--outfit-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEapi-v1-application-outfits--outfit-" onclick="tryItOut('DELETEapi-v1-application-outfits--outfit-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEapi-v1-application-outfits--outfit-" onclick="cancelTryOut('DELETEapi-v1-application-outfits--outfit-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEapi-v1-application-outfits--outfit-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>api/v1/application/outfits/{outfit}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>outfit</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="outfit" data-endpoint="DELETEapi-v1-application-outfits--outfit-" data-component="url" required  hidden>
<br>

</p>
</form>


## Display a listing of the resource.




> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/api/v1/panel/seasons" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/api/v1/panel/seasons"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```
<div id="execution-results-GETapi-v1-panel-seasons" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-v1-panel-seasons"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-panel-seasons"></code></pre>
</div>
<div id="execution-error-GETapi-v1-panel-seasons" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-panel-seasons"></code></pre>
</div>
<form id="form-GETapi-v1-panel-seasons" data-method="GET" data-path="api/v1/panel/seasons" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-panel-seasons', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-v1-panel-seasons" onclick="tryItOut('GETapi-v1-panel-seasons');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-v1-panel-seasons" onclick="cancelTryOut('GETapi-v1-panel-seasons');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-v1-panel-seasons" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/v1/panel/seasons</code></b>
</p>
</form>


## Store a newly created resource in storage.




> Example request:

```bash
curl -X POST \
    "http://127.0.0.1:8000/api/v1/panel/seasons" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"name":"saepe"}'

```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/api/v1/panel/seasons"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "saepe"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-POSTapi-v1-panel-seasons" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-v1-panel-seasons"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-panel-seasons"></code></pre>
</div>
<div id="execution-error-POSTapi-v1-panel-seasons" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-panel-seasons"></code></pre>
</div>
<form id="form-POSTapi-v1-panel-seasons" data-method="POST" data-path="api/v1/panel/seasons" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-panel-seasons', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-v1-panel-seasons" onclick="tryItOut('POSTapi-v1-panel-seasons');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-v1-panel-seasons" onclick="cancelTryOut('POSTapi-v1-panel-seasons');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-v1-panel-seasons" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/v1/panel/seasons</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="name" data-endpoint="POSTapi-v1-panel-seasons" data-component="body" required  hidden>
<br>

</p>

</form>


## Display the specified resource.




> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/api/v1/panel/seasons/iusto" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/api/v1/panel/seasons/iusto"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```
<div id="execution-results-GETapi-v1-panel-seasons--season-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-v1-panel-seasons--season-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-panel-seasons--season-"></code></pre>
</div>
<div id="execution-error-GETapi-v1-panel-seasons--season-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-panel-seasons--season-"></code></pre>
</div>
<form id="form-GETapi-v1-panel-seasons--season-" data-method="GET" data-path="api/v1/panel/seasons/{season}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-panel-seasons--season-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-v1-panel-seasons--season-" onclick="tryItOut('GETapi-v1-panel-seasons--season-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-v1-panel-seasons--season-" onclick="cancelTryOut('GETapi-v1-panel-seasons--season-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-v1-panel-seasons--season-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/v1/panel/seasons/{season}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>season</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="season" data-endpoint="GETapi-v1-panel-seasons--season-" data-component="url" required  hidden>
<br>

</p>
</form>


## Remove the specified resource from storage.




> Example request:

```bash
curl -X DELETE \
    "http://127.0.0.1:8000/api/v1/panel/seasons/ea" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/api/v1/panel/seasons/ea"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "DELETE",
    headers,
}).then(response => response.json());
```


<div id="execution-results-DELETEapi-v1-panel-seasons--season-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEapi-v1-panel-seasons--season-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-v1-panel-seasons--season-"></code></pre>
</div>
<div id="execution-error-DELETEapi-v1-panel-seasons--season-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-v1-panel-seasons--season-"></code></pre>
</div>
<form id="form-DELETEapi-v1-panel-seasons--season-" data-method="DELETE" data-path="api/v1/panel/seasons/{season}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEapi-v1-panel-seasons--season-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEapi-v1-panel-seasons--season-" onclick="tryItOut('DELETEapi-v1-panel-seasons--season-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEapi-v1-panel-seasons--season-" onclick="cancelTryOut('DELETEapi-v1-panel-seasons--season-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEapi-v1-panel-seasons--season-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>api/v1/panel/seasons/{season}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>season</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="season" data-endpoint="DELETEapi-v1-panel-seasons--season-" data-component="url" required  hidden>
<br>

</p>
</form>


## Display a listing of the resource.




> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/api/v1/panel/colors" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/api/v1/panel/colors"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```
<div id="execution-results-GETapi-v1-panel-colors" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-v1-panel-colors"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-panel-colors"></code></pre>
</div>
<div id="execution-error-GETapi-v1-panel-colors" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-panel-colors"></code></pre>
</div>
<form id="form-GETapi-v1-panel-colors" data-method="GET" data-path="api/v1/panel/colors" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-panel-colors', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-v1-panel-colors" onclick="tryItOut('GETapi-v1-panel-colors');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-v1-panel-colors" onclick="cancelTryOut('GETapi-v1-panel-colors');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-v1-panel-colors" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/v1/panel/colors</code></b>
</p>
</form>


## Store a newly created resource in storage.




> Example request:

```bash
curl -X POST \
    "http://127.0.0.1:8000/api/v1/panel/colors" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"name":"sapiente","code":"aut"}'

```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/api/v1/panel/colors"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "sapiente",
    "code": "aut"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-POSTapi-v1-panel-colors" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-v1-panel-colors"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-panel-colors"></code></pre>
</div>
<div id="execution-error-POSTapi-v1-panel-colors" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-panel-colors"></code></pre>
</div>
<form id="form-POSTapi-v1-panel-colors" data-method="POST" data-path="api/v1/panel/colors" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-panel-colors', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-v1-panel-colors" onclick="tryItOut('POSTapi-v1-panel-colors');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-v1-panel-colors" onclick="cancelTryOut('POSTapi-v1-panel-colors');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-v1-panel-colors" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/v1/panel/colors</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="name" data-endpoint="POSTapi-v1-panel-colors" data-component="body" required  hidden>
<br>

</p>
<p>
<b><code>code</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="code" data-endpoint="POSTapi-v1-panel-colors" data-component="body" required  hidden>
<br>

</p>

</form>


## Display the specified resource.




> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/api/v1/panel/colors/laborum" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/api/v1/panel/colors/laborum"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```
<div id="execution-results-GETapi-v1-panel-colors--color-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-v1-panel-colors--color-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-panel-colors--color-"></code></pre>
</div>
<div id="execution-error-GETapi-v1-panel-colors--color-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-panel-colors--color-"></code></pre>
</div>
<form id="form-GETapi-v1-panel-colors--color-" data-method="GET" data-path="api/v1/panel/colors/{color}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-panel-colors--color-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-v1-panel-colors--color-" onclick="tryItOut('GETapi-v1-panel-colors--color-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-v1-panel-colors--color-" onclick="cancelTryOut('GETapi-v1-panel-colors--color-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-v1-panel-colors--color-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/v1/panel/colors/{color}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>color</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="color" data-endpoint="GETapi-v1-panel-colors--color-" data-component="url" required  hidden>
<br>

</p>
</form>


## Remove the specified resource from storage.




> Example request:

```bash
curl -X DELETE \
    "http://127.0.0.1:8000/api/v1/panel/colors/consectetur" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/api/v1/panel/colors/consectetur"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "DELETE",
    headers,
}).then(response => response.json());
```


<div id="execution-results-DELETEapi-v1-panel-colors--color-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEapi-v1-panel-colors--color-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-v1-panel-colors--color-"></code></pre>
</div>
<div id="execution-error-DELETEapi-v1-panel-colors--color-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-v1-panel-colors--color-"></code></pre>
</div>
<form id="form-DELETEapi-v1-panel-colors--color-" data-method="DELETE" data-path="api/v1/panel/colors/{color}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEapi-v1-panel-colors--color-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEapi-v1-panel-colors--color-" onclick="tryItOut('DELETEapi-v1-panel-colors--color-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEapi-v1-panel-colors--color-" onclick="cancelTryOut('DELETEapi-v1-panel-colors--color-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEapi-v1-panel-colors--color-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>api/v1/panel/colors/{color}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>color</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="color" data-endpoint="DELETEapi-v1-panel-colors--color-" data-component="url" required  hidden>
<br>

</p>
</form>


## Display a listing of the resource.




> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/api/v1/panel/clients" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/api/v1/panel/clients"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```
<div id="execution-results-GETapi-v1-panel-clients" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-v1-panel-clients"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-panel-clients"></code></pre>
</div>
<div id="execution-error-GETapi-v1-panel-clients" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-panel-clients"></code></pre>
</div>
<form id="form-GETapi-v1-panel-clients" data-method="GET" data-path="api/v1/panel/clients" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-panel-clients', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-v1-panel-clients" onclick="tryItOut('GETapi-v1-panel-clients');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-v1-panel-clients" onclick="cancelTryOut('GETapi-v1-panel-clients');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-v1-panel-clients" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/v1/panel/clients</code></b>
</p>
</form>


## Store a newly created resource in storage.




> Example request:

```bash
curl -X POST \
    "http://127.0.0.1:8000/api/v1/panel/clients" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"name":"quisquam","email":"hudson.matilda@example.net","password":"voluptatem","password_confirmation":"alias","avatar":"enim"}'

```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/api/v1/panel/clients"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "quisquam",
    "email": "hudson.matilda@example.net",
    "password": "voluptatem",
    "password_confirmation": "alias",
    "avatar": "enim"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-POSTapi-v1-panel-clients" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-v1-panel-clients"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-panel-clients"></code></pre>
</div>
<div id="execution-error-POSTapi-v1-panel-clients" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-panel-clients"></code></pre>
</div>
<form id="form-POSTapi-v1-panel-clients" data-method="POST" data-path="api/v1/panel/clients" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-panel-clients', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-v1-panel-clients" onclick="tryItOut('POSTapi-v1-panel-clients');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-v1-panel-clients" onclick="cancelTryOut('POSTapi-v1-panel-clients');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-v1-panel-clients" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/v1/panel/clients</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="name" data-endpoint="POSTapi-v1-panel-clients" data-component="body" required  hidden>
<br>

</p>
<p>
<b><code>email</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="email" data-endpoint="POSTapi-v1-panel-clients" data-component="body" required  hidden>
<br>
The value must be a valid email address.
</p>
<p>
<b><code>password</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="password" name="password" data-endpoint="POSTapi-v1-panel-clients" data-component="body" required  hidden>
<br>

</p>
<p>
<b><code>password_confirmation</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="password" name="password_confirmation" data-endpoint="POSTapi-v1-panel-clients" data-component="body" required  hidden>
<br>

</p>
<p>
<b><code>avatar</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="avatar" data-endpoint="POSTapi-v1-panel-clients" data-component="body"  hidden>
<br>

</p>

</form>


## Display the specified resource.




> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/api/v1/panel/clients/vel" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/api/v1/panel/clients/vel"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```
<div id="execution-results-GETapi-v1-panel-clients--client-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-v1-panel-clients--client-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-panel-clients--client-"></code></pre>
</div>
<div id="execution-error-GETapi-v1-panel-clients--client-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-panel-clients--client-"></code></pre>
</div>
<form id="form-GETapi-v1-panel-clients--client-" data-method="GET" data-path="api/v1/panel/clients/{client}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-panel-clients--client-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-v1-panel-clients--client-" onclick="tryItOut('GETapi-v1-panel-clients--client-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-v1-panel-clients--client-" onclick="cancelTryOut('GETapi-v1-panel-clients--client-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-v1-panel-clients--client-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/v1/panel/clients/{client}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>client</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="client" data-endpoint="GETapi-v1-panel-clients--client-" data-component="url" required  hidden>
<br>

</p>
</form>


## Remove the specified resource from storage.




> Example request:

```bash
curl -X DELETE \
    "http://127.0.0.1:8000/api/v1/panel/clients/eos" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/api/v1/panel/clients/eos"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "DELETE",
    headers,
}).then(response => response.json());
```


<div id="execution-results-DELETEapi-v1-panel-clients--client-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEapi-v1-panel-clients--client-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-v1-panel-clients--client-"></code></pre>
</div>
<div id="execution-error-DELETEapi-v1-panel-clients--client-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-v1-panel-clients--client-"></code></pre>
</div>
<form id="form-DELETEapi-v1-panel-clients--client-" data-method="DELETE" data-path="api/v1/panel/clients/{client}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEapi-v1-panel-clients--client-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEapi-v1-panel-clients--client-" onclick="tryItOut('DELETEapi-v1-panel-clients--client-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEapi-v1-panel-clients--client-" onclick="cancelTryOut('DELETEapi-v1-panel-clients--client-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEapi-v1-panel-clients--client-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>api/v1/panel/clients/{client}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>client</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="client" data-endpoint="DELETEapi-v1-panel-clients--client-" data-component="url" required  hidden>
<br>

</p>
</form>


## Display a listing of the resource.




> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/api/v1/panel/categories" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/api/v1/panel/categories"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```
<div id="execution-results-GETapi-v1-panel-categories" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-v1-panel-categories"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-panel-categories"></code></pre>
</div>
<div id="execution-error-GETapi-v1-panel-categories" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-panel-categories"></code></pre>
</div>
<form id="form-GETapi-v1-panel-categories" data-method="GET" data-path="api/v1/panel/categories" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-panel-categories', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-v1-panel-categories" onclick="tryItOut('GETapi-v1-panel-categories');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-v1-panel-categories" onclick="cancelTryOut('GETapi-v1-panel-categories');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-v1-panel-categories" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/v1/panel/categories</code></b>
</p>
</form>


## Store a newly created resource in storage.




> Example request:

```bash
curl -X POST \
    "http://127.0.0.1:8000/api/v1/panel/categories" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"name":"corporis","icon":"perferendis","active":"0"}'

```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/api/v1/panel/categories"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "corporis",
    "icon": "perferendis",
    "active": "0"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-POSTapi-v1-panel-categories" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-v1-panel-categories"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-panel-categories"></code></pre>
</div>
<div id="execution-error-POSTapi-v1-panel-categories" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-panel-categories"></code></pre>
</div>
<form id="form-POSTapi-v1-panel-categories" data-method="POST" data-path="api/v1/panel/categories" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-panel-categories', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-v1-panel-categories" onclick="tryItOut('POSTapi-v1-panel-categories');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-v1-panel-categories" onclick="cancelTryOut('POSTapi-v1-panel-categories');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-v1-panel-categories" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/v1/panel/categories</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="name" data-endpoint="POSTapi-v1-panel-categories" data-component="body" required  hidden>
<br>

</p>
<p>
<b><code>icon</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="icon" data-endpoint="POSTapi-v1-panel-categories" data-component="body"  hidden>
<br>

</p>
<p>
<b><code>active</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="active" data-endpoint="POSTapi-v1-panel-categories" data-component="body"  hidden>
<br>
The value must be one of <code>0</code> or <code>1</code>.
</p>

</form>


## Display the specified resource.




> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/api/v1/panel/categories/quos" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/api/v1/panel/categories/quos"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```
<div id="execution-results-GETapi-v1-panel-categories--category-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-v1-panel-categories--category-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-panel-categories--category-"></code></pre>
</div>
<div id="execution-error-GETapi-v1-panel-categories--category-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-panel-categories--category-"></code></pre>
</div>
<form id="form-GETapi-v1-panel-categories--category-" data-method="GET" data-path="api/v1/panel/categories/{category}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-panel-categories--category-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-v1-panel-categories--category-" onclick="tryItOut('GETapi-v1-panel-categories--category-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-v1-panel-categories--category-" onclick="cancelTryOut('GETapi-v1-panel-categories--category-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-v1-panel-categories--category-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/v1/panel/categories/{category}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>category</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="category" data-endpoint="GETapi-v1-panel-categories--category-" data-component="url" required  hidden>
<br>

</p>
</form>


## Remove the specified resource from storage.




> Example request:

```bash
curl -X DELETE \
    "http://127.0.0.1:8000/api/v1/panel/categories/beatae" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/api/v1/panel/categories/beatae"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "DELETE",
    headers,
}).then(response => response.json());
```


<div id="execution-results-DELETEapi-v1-panel-categories--category-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEapi-v1-panel-categories--category-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-v1-panel-categories--category-"></code></pre>
</div>
<div id="execution-error-DELETEapi-v1-panel-categories--category-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-v1-panel-categories--category-"></code></pre>
</div>
<form id="form-DELETEapi-v1-panel-categories--category-" data-method="DELETE" data-path="api/v1/panel/categories/{category}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEapi-v1-panel-categories--category-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEapi-v1-panel-categories--category-" onclick="tryItOut('DELETEapi-v1-panel-categories--category-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEapi-v1-panel-categories--category-" onclick="cancelTryOut('DELETEapi-v1-panel-categories--category-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEapi-v1-panel-categories--category-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>api/v1/panel/categories/{category}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>category</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="category" data-endpoint="DELETEapi-v1-panel-categories--category-" data-component="url" required  hidden>
<br>

</p>
</form>


## Display a listing of the resource.




> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/api/v1/panel/blogs" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/api/v1/panel/blogs"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```
<div id="execution-results-GETapi-v1-panel-blogs" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-v1-panel-blogs"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-panel-blogs"></code></pre>
</div>
<div id="execution-error-GETapi-v1-panel-blogs" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-panel-blogs"></code></pre>
</div>
<form id="form-GETapi-v1-panel-blogs" data-method="GET" data-path="api/v1/panel/blogs" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-panel-blogs', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-v1-panel-blogs" onclick="tryItOut('GETapi-v1-panel-blogs');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-v1-panel-blogs" onclick="cancelTryOut('GETapi-v1-panel-blogs');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-v1-panel-blogs" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/v1/panel/blogs</code></b>
</p>
</form>


## Store a newly created resource in storage.




> Example request:

```bash
curl -X POST \
    "http://127.0.0.1:8000/api/v1/panel/blogs" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"title":"nisi","content":"reprehenderit","image":"mollitia"}'

```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/api/v1/panel/blogs"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "title": "nisi",
    "content": "reprehenderit",
    "image": "mollitia"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-POSTapi-v1-panel-blogs" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-v1-panel-blogs"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-panel-blogs"></code></pre>
</div>
<div id="execution-error-POSTapi-v1-panel-blogs" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-panel-blogs"></code></pre>
</div>
<form id="form-POSTapi-v1-panel-blogs" data-method="POST" data-path="api/v1/panel/blogs" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-panel-blogs', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-v1-panel-blogs" onclick="tryItOut('POSTapi-v1-panel-blogs');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-v1-panel-blogs" onclick="cancelTryOut('POSTapi-v1-panel-blogs');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-v1-panel-blogs" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/v1/panel/blogs</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>title</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="title" data-endpoint="POSTapi-v1-panel-blogs" data-component="body" required  hidden>
<br>

</p>
<p>
<b><code>content</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="content" data-endpoint="POSTapi-v1-panel-blogs" data-component="body" required  hidden>
<br>

</p>
<p>
<b><code>image</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="image" data-endpoint="POSTapi-v1-panel-blogs" data-component="body"  hidden>
<br>

</p>

</form>


## Display the specified resource.




> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/api/v1/panel/blogs/officia" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/api/v1/panel/blogs/officia"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```
<div id="execution-results-GETapi-v1-panel-blogs--blog-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-v1-panel-blogs--blog-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-panel-blogs--blog-"></code></pre>
</div>
<div id="execution-error-GETapi-v1-panel-blogs--blog-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-panel-blogs--blog-"></code></pre>
</div>
<form id="form-GETapi-v1-panel-blogs--blog-" data-method="GET" data-path="api/v1/panel/blogs/{blog}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-panel-blogs--blog-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-v1-panel-blogs--blog-" onclick="tryItOut('GETapi-v1-panel-blogs--blog-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-v1-panel-blogs--blog-" onclick="cancelTryOut('GETapi-v1-panel-blogs--blog-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-v1-panel-blogs--blog-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/v1/panel/blogs/{blog}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>blog</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="blog" data-endpoint="GETapi-v1-panel-blogs--blog-" data-component="url" required  hidden>
<br>

</p>
</form>


## Remove the specified resource from storage.




> Example request:

```bash
curl -X DELETE \
    "http://127.0.0.1:8000/api/v1/panel/blogs/et" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/api/v1/panel/blogs/et"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "DELETE",
    headers,
}).then(response => response.json());
```


<div id="execution-results-DELETEapi-v1-panel-blogs--blog-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEapi-v1-panel-blogs--blog-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-v1-panel-blogs--blog-"></code></pre>
</div>
<div id="execution-error-DELETEapi-v1-panel-blogs--blog-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-v1-panel-blogs--blog-"></code></pre>
</div>
<form id="form-DELETEapi-v1-panel-blogs--blog-" data-method="DELETE" data-path="api/v1/panel/blogs/{blog}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEapi-v1-panel-blogs--blog-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEapi-v1-panel-blogs--blog-" onclick="tryItOut('DELETEapi-v1-panel-blogs--blog-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEapi-v1-panel-blogs--blog-" onclick="cancelTryOut('DELETEapi-v1-panel-blogs--blog-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEapi-v1-panel-blogs--blog-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>api/v1/panel/blogs/{blog}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>blog</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="blog" data-endpoint="DELETEapi-v1-panel-blogs--blog-" data-component="url" required  hidden>
<br>

</p>
</form>


## Display a listing of the resource.




> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/api/v1/panel/messages" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/api/v1/panel/messages"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```
<div id="execution-results-GETapi-v1-panel-messages" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-v1-panel-messages"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-panel-messages"></code></pre>
</div>
<div id="execution-error-GETapi-v1-panel-messages" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-panel-messages"></code></pre>
</div>
<form id="form-GETapi-v1-panel-messages" data-method="GET" data-path="api/v1/panel/messages" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-panel-messages', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-v1-panel-messages" onclick="tryItOut('GETapi-v1-panel-messages');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-v1-panel-messages" onclick="cancelTryOut('GETapi-v1-panel-messages');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-v1-panel-messages" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/v1/panel/messages</code></b>
</p>
</form>


## Store a newly created resource in storage.




> Example request:

```bash
curl -X POST \
    "http://127.0.0.1:8000/api/v1/panel/messages" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"name":"saepe","email":"keagan45@example.org","message":"voluptas","reply_id":{},"admin_id":{}}'

```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/api/v1/panel/messages"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "saepe",
    "email": "keagan45@example.org",
    "message": "voluptas",
    "reply_id": {},
    "admin_id": {}
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-POSTapi-v1-panel-messages" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-v1-panel-messages"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-panel-messages"></code></pre>
</div>
<div id="execution-error-POSTapi-v1-panel-messages" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-panel-messages"></code></pre>
</div>
<form id="form-POSTapi-v1-panel-messages" data-method="POST" data-path="api/v1/panel/messages" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-panel-messages', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-v1-panel-messages" onclick="tryItOut('POSTapi-v1-panel-messages');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-v1-panel-messages" onclick="cancelTryOut('POSTapi-v1-panel-messages');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-v1-panel-messages" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/v1/panel/messages</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="name" data-endpoint="POSTapi-v1-panel-messages" data-component="body" required  hidden>
<br>

</p>
<p>
<b><code>email</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="email" data-endpoint="POSTapi-v1-panel-messages" data-component="body" required  hidden>
<br>
The value must be a valid email address.
</p>
<p>
<b><code>message</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="message" data-endpoint="POSTapi-v1-panel-messages" data-component="body" required  hidden>
<br>

</p>
<p>
<b><code>reply_id</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="reply_id" data-endpoint="POSTapi-v1-panel-messages" data-component="body"  hidden>
<br>

</p>
<p>
<b><code>admin_id</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="admin_id" data-endpoint="POSTapi-v1-panel-messages" data-component="body"  hidden>
<br>

</p>

</form>


## Display the specified resource.




> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/api/v1/panel/messages/sit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/api/v1/panel/messages/sit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```
<div id="execution-results-GETapi-v1-panel-messages--message-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-v1-panel-messages--message-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-panel-messages--message-"></code></pre>
</div>
<div id="execution-error-GETapi-v1-panel-messages--message-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-panel-messages--message-"></code></pre>
</div>
<form id="form-GETapi-v1-panel-messages--message-" data-method="GET" data-path="api/v1/panel/messages/{message}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-panel-messages--message-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-v1-panel-messages--message-" onclick="tryItOut('GETapi-v1-panel-messages--message-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-v1-panel-messages--message-" onclick="cancelTryOut('GETapi-v1-panel-messages--message-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-v1-panel-messages--message-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/v1/panel/messages/{message}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>message</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="message" data-endpoint="GETapi-v1-panel-messages--message-" data-component="url" required  hidden>
<br>

</p>
</form>


## Update the specified resource in storage.




> Example request:

```bash
curl -X PUT \
    "http://127.0.0.1:8000/api/v1/panel/messages/in" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"name":"et","email":"thiel.newell@example.net","message":"quod","reply_id":{},"admin_id":{}}'

```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/api/v1/panel/messages/in"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "et",
    "email": "thiel.newell@example.net",
    "message": "quod",
    "reply_id": {},
    "admin_id": {}
}

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-PUTapi-v1-panel-messages--message-" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTapi-v1-panel-messages--message-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-v1-panel-messages--message-"></code></pre>
</div>
<div id="execution-error-PUTapi-v1-panel-messages--message-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-v1-panel-messages--message-"></code></pre>
</div>
<form id="form-PUTapi-v1-panel-messages--message-" data-method="PUT" data-path="api/v1/panel/messages/{message}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PUTapi-v1-panel-messages--message-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PUTapi-v1-panel-messages--message-" onclick="tryItOut('PUTapi-v1-panel-messages--message-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PUTapi-v1-panel-messages--message-" onclick="cancelTryOut('PUTapi-v1-panel-messages--message-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PUTapi-v1-panel-messages--message-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>api/v1/panel/messages/{message}</code></b>
</p>
<p>
<small class="badge badge-purple">PATCH</small>
 <b><code>api/v1/panel/messages/{message}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>message</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="message" data-endpoint="PUTapi-v1-panel-messages--message-" data-component="url" required  hidden>
<br>

</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>name</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="name" data-endpoint="PUTapi-v1-panel-messages--message-" data-component="body"  hidden>
<br>

</p>
<p>
<b><code>email</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="email" data-endpoint="PUTapi-v1-panel-messages--message-" data-component="body"  hidden>
<br>
The value must be a valid email address.
</p>
<p>
<b><code>message</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="message" data-endpoint="PUTapi-v1-panel-messages--message-" data-component="body"  hidden>
<br>

</p>
<p>
<b><code>reply_id</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="reply_id" data-endpoint="PUTapi-v1-panel-messages--message-" data-component="body"  hidden>
<br>

</p>
<p>
<b><code>admin_id</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="admin_id" data-endpoint="PUTapi-v1-panel-messages--message-" data-component="body"  hidden>
<br>

</p>

</form>


## Remove the specified resource from storage.




> Example request:

```bash
curl -X DELETE \
    "http://127.0.0.1:8000/api/v1/panel/messages/temporibus" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/api/v1/panel/messages/temporibus"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "DELETE",
    headers,
}).then(response => response.json());
```


<div id="execution-results-DELETEapi-v1-panel-messages--message-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEapi-v1-panel-messages--message-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-v1-panel-messages--message-"></code></pre>
</div>
<div id="execution-error-DELETEapi-v1-panel-messages--message-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-v1-panel-messages--message-"></code></pre>
</div>
<form id="form-DELETEapi-v1-panel-messages--message-" data-method="DELETE" data-path="api/v1/panel/messages/{message}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEapi-v1-panel-messages--message-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEapi-v1-panel-messages--message-" onclick="tryItOut('DELETEapi-v1-panel-messages--message-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEapi-v1-panel-messages--message-" onclick="cancelTryOut('DELETEapi-v1-panel-messages--message-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEapi-v1-panel-messages--message-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>api/v1/panel/messages/{message}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>message</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="message" data-endpoint="DELETEapi-v1-panel-messages--message-" data-component="url" required  hidden>
<br>

</p>
</form>


## Display a listing of the resource.




> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/api/v1/panel/occasions" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/api/v1/panel/occasions"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```
<div id="execution-results-GETapi-v1-panel-occasions" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-v1-panel-occasions"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-panel-occasions"></code></pre>
</div>
<div id="execution-error-GETapi-v1-panel-occasions" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-panel-occasions"></code></pre>
</div>
<form id="form-GETapi-v1-panel-occasions" data-method="GET" data-path="api/v1/panel/occasions" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-panel-occasions', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-v1-panel-occasions" onclick="tryItOut('GETapi-v1-panel-occasions');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-v1-panel-occasions" onclick="cancelTryOut('GETapi-v1-panel-occasions');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-v1-panel-occasions" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/v1/panel/occasions</code></b>
</p>
</form>


## Store a newly created resource in storage.




> Example request:

```bash
curl -X POST \
    "http://127.0.0.1:8000/api/v1/panel/occasions" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"name":"saepe"}'

```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/api/v1/panel/occasions"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "saepe"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-POSTapi-v1-panel-occasions" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-v1-panel-occasions"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-panel-occasions"></code></pre>
</div>
<div id="execution-error-POSTapi-v1-panel-occasions" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-panel-occasions"></code></pre>
</div>
<form id="form-POSTapi-v1-panel-occasions" data-method="POST" data-path="api/v1/panel/occasions" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-panel-occasions', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-v1-panel-occasions" onclick="tryItOut('POSTapi-v1-panel-occasions');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-v1-panel-occasions" onclick="cancelTryOut('POSTapi-v1-panel-occasions');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-v1-panel-occasions" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/v1/panel/occasions</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="name" data-endpoint="POSTapi-v1-panel-occasions" data-component="body" required  hidden>
<br>

</p>

</form>


## Display the specified resource.




> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/api/v1/panel/occasions/et" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/api/v1/panel/occasions/et"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```
<div id="execution-results-GETapi-v1-panel-occasions--occasion-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-v1-panel-occasions--occasion-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-panel-occasions--occasion-"></code></pre>
</div>
<div id="execution-error-GETapi-v1-panel-occasions--occasion-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-panel-occasions--occasion-"></code></pre>
</div>
<form id="form-GETapi-v1-panel-occasions--occasion-" data-method="GET" data-path="api/v1/panel/occasions/{occasion}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-panel-occasions--occasion-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-v1-panel-occasions--occasion-" onclick="tryItOut('GETapi-v1-panel-occasions--occasion-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-v1-panel-occasions--occasion-" onclick="cancelTryOut('GETapi-v1-panel-occasions--occasion-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-v1-panel-occasions--occasion-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/v1/panel/occasions/{occasion}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>occasion</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="occasion" data-endpoint="GETapi-v1-panel-occasions--occasion-" data-component="url" required  hidden>
<br>

</p>
</form>


## Remove the specified resource from storage.




> Example request:

```bash
curl -X DELETE \
    "http://127.0.0.1:8000/api/v1/panel/occasions/occaecati" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/api/v1/panel/occasions/occaecati"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "DELETE",
    headers,
}).then(response => response.json());
```


<div id="execution-results-DELETEapi-v1-panel-occasions--occasion-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEapi-v1-panel-occasions--occasion-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-v1-panel-occasions--occasion-"></code></pre>
</div>
<div id="execution-error-DELETEapi-v1-panel-occasions--occasion-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-v1-panel-occasions--occasion-"></code></pre>
</div>
<form id="form-DELETEapi-v1-panel-occasions--occasion-" data-method="DELETE" data-path="api/v1/panel/occasions/{occasion}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEapi-v1-panel-occasions--occasion-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEapi-v1-panel-occasions--occasion-" onclick="tryItOut('DELETEapi-v1-panel-occasions--occasion-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEapi-v1-panel-occasions--occasion-" onclick="cancelTryOut('DELETEapi-v1-panel-occasions--occasion-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEapi-v1-panel-occasions--occasion-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>api/v1/panel/occasions/{occasion}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>occasion</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="occasion" data-endpoint="DELETEapi-v1-panel-occasions--occasion-" data-component="url" required  hidden>
<br>

</p>
</form>


## Display a listing of the resource with search.




> Example request:

```bash
curl -X POST \
    "http://127.0.0.1:8000/api/v1/panel/clients/search" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"name":"eum","email":"chaz94@example.org","created_at":"2022-07-09 12:00:27","search":"et","limit":1741680.568,"page":152318681.532339,"orderColumn":"eaque","orderDir":"asc"}'

```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/api/v1/panel/clients/search"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "eum",
    "email": "chaz94@example.org",
    "created_at": "2022-07-09 12:00:27",
    "search": "et",
    "limit": 1741680.568,
    "page": 152318681.532339,
    "orderColumn": "eaque",
    "orderDir": "asc"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-POSTapi-v1-panel-clients-search" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-v1-panel-clients-search"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-panel-clients-search"></code></pre>
</div>
<div id="execution-error-POSTapi-v1-panel-clients-search" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-panel-clients-search"></code></pre>
</div>
<form id="form-POSTapi-v1-panel-clients-search" data-method="POST" data-path="api/v1/panel/clients/search" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-panel-clients-search', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-v1-panel-clients-search" onclick="tryItOut('POSTapi-v1-panel-clients-search');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-v1-panel-clients-search" onclick="cancelTryOut('POSTapi-v1-panel-clients-search');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-v1-panel-clients-search" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/v1/panel/clients/search</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>name</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="name" data-endpoint="POSTapi-v1-panel-clients-search" data-component="body"  hidden>
<br>

</p>
<p>
<b><code>email</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="email" data-endpoint="POSTapi-v1-panel-clients-search" data-component="body"  hidden>
<br>
The value must be a valid email address.
</p>
<p>
<b><code>created_at</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="created_at" data-endpoint="POSTapi-v1-panel-clients-search" data-component="body"  hidden>
<br>
The value must be a valid date in the format Y-m-d H:i:s.
</p>
<p>
<b><code>search</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="search" data-endpoint="POSTapi-v1-panel-clients-search" data-component="body"  hidden>
<br>

</p>
<p>
<b><code>limit</code></b>&nbsp;&nbsp;<small>number</small>     <i>optional</i> &nbsp;
<input type="number" name="limit" data-endpoint="POSTapi-v1-panel-clients-search" data-component="body"  hidden>
<br>

</p>
<p>
<b><code>page</code></b>&nbsp;&nbsp;<small>number</small>     <i>optional</i> &nbsp;
<input type="number" name="page" data-endpoint="POSTapi-v1-panel-clients-search" data-component="body"  hidden>
<br>

</p>
<p>
<b><code>orderColumn</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="orderColumn" data-endpoint="POSTapi-v1-panel-clients-search" data-component="body"  hidden>
<br>

</p>
<p>
<b><code>orderDir</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="orderDir" data-endpoint="POSTapi-v1-panel-clients-search" data-component="body"  hidden>
<br>
The value must be one of <code>asc</code> or <code>desc</code>.
</p>

</form>


## Display a listing of the resource with search.




> Example request:

```bash
curl -X POST \
    "http://127.0.0.1:8000/api/v1/panel/colors/search" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"search":"et","limit":16,"page":1754451.5007,"orderColumn":"voluptatem","orderDir":"asc"}'

```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/api/v1/panel/colors/search"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "search": "et",
    "limit": 16,
    "page": 1754451.5007,
    "orderColumn": "voluptatem",
    "orderDir": "asc"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-POSTapi-v1-panel-colors-search" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-v1-panel-colors-search"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-panel-colors-search"></code></pre>
</div>
<div id="execution-error-POSTapi-v1-panel-colors-search" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-panel-colors-search"></code></pre>
</div>
<form id="form-POSTapi-v1-panel-colors-search" data-method="POST" data-path="api/v1/panel/colors/search" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-panel-colors-search', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-v1-panel-colors-search" onclick="tryItOut('POSTapi-v1-panel-colors-search');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-v1-panel-colors-search" onclick="cancelTryOut('POSTapi-v1-panel-colors-search');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-v1-panel-colors-search" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/v1/panel/colors/search</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>search</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="search" data-endpoint="POSTapi-v1-panel-colors-search" data-component="body"  hidden>
<br>

</p>
<p>
<b><code>limit</code></b>&nbsp;&nbsp;<small>number</small>     <i>optional</i> &nbsp;
<input type="number" name="limit" data-endpoint="POSTapi-v1-panel-colors-search" data-component="body"  hidden>
<br>

</p>
<p>
<b><code>page</code></b>&nbsp;&nbsp;<small>number</small>     <i>optional</i> &nbsp;
<input type="number" name="page" data-endpoint="POSTapi-v1-panel-colors-search" data-component="body"  hidden>
<br>

</p>
<p>
<b><code>orderColumn</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="orderColumn" data-endpoint="POSTapi-v1-panel-colors-search" data-component="body"  hidden>
<br>

</p>
<p>
<b><code>orderDir</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="orderDir" data-endpoint="POSTapi-v1-panel-colors-search" data-component="body"  hidden>
<br>
The value must be one of <code>asc</code> or <code>desc</code>.
</p>

</form>


## Display a listing of the resource with search.




> Example request:

```bash
curl -X POST \
    "http://127.0.0.1:8000/api/v1/panel/occasions/search" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"search":"nostrum","limit":2235123.51627961,"page":364273514.2,"orderColumn":"ratione","orderDir":"desc"}'

```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/api/v1/panel/occasions/search"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "search": "nostrum",
    "limit": 2235123.51627961,
    "page": 364273514.2,
    "orderColumn": "ratione",
    "orderDir": "desc"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-POSTapi-v1-panel-occasions-search" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-v1-panel-occasions-search"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-panel-occasions-search"></code></pre>
</div>
<div id="execution-error-POSTapi-v1-panel-occasions-search" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-panel-occasions-search"></code></pre>
</div>
<form id="form-POSTapi-v1-panel-occasions-search" data-method="POST" data-path="api/v1/panel/occasions/search" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-panel-occasions-search', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-v1-panel-occasions-search" onclick="tryItOut('POSTapi-v1-panel-occasions-search');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-v1-panel-occasions-search" onclick="cancelTryOut('POSTapi-v1-panel-occasions-search');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-v1-panel-occasions-search" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/v1/panel/occasions/search</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>search</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="search" data-endpoint="POSTapi-v1-panel-occasions-search" data-component="body"  hidden>
<br>

</p>
<p>
<b><code>limit</code></b>&nbsp;&nbsp;<small>number</small>     <i>optional</i> &nbsp;
<input type="number" name="limit" data-endpoint="POSTapi-v1-panel-occasions-search" data-component="body"  hidden>
<br>

</p>
<p>
<b><code>page</code></b>&nbsp;&nbsp;<small>number</small>     <i>optional</i> &nbsp;
<input type="number" name="page" data-endpoint="POSTapi-v1-panel-occasions-search" data-component="body"  hidden>
<br>

</p>
<p>
<b><code>orderColumn</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="orderColumn" data-endpoint="POSTapi-v1-panel-occasions-search" data-component="body"  hidden>
<br>

</p>
<p>
<b><code>orderDir</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="orderDir" data-endpoint="POSTapi-v1-panel-occasions-search" data-component="body"  hidden>
<br>
The value must be one of <code>asc</code> or <code>desc</code>.
</p>

</form>


## Display a listing of the resource with search.




> Example request:

```bash
curl -X POST \
    "http://127.0.0.1:8000/api/v1/panel/seasons/search" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"search":"non","limit":418618.06737,"page":67112.67336,"orderColumn":"voluptatem","orderDir":"desc"}'

```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/api/v1/panel/seasons/search"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "search": "non",
    "limit": 418618.06737,
    "page": 67112.67336,
    "orderColumn": "voluptatem",
    "orderDir": "desc"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-POSTapi-v1-panel-seasons-search" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-v1-panel-seasons-search"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-panel-seasons-search"></code></pre>
</div>
<div id="execution-error-POSTapi-v1-panel-seasons-search" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-panel-seasons-search"></code></pre>
</div>
<form id="form-POSTapi-v1-panel-seasons-search" data-method="POST" data-path="api/v1/panel/seasons/search" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-panel-seasons-search', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-v1-panel-seasons-search" onclick="tryItOut('POSTapi-v1-panel-seasons-search');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-v1-panel-seasons-search" onclick="cancelTryOut('POSTapi-v1-panel-seasons-search');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-v1-panel-seasons-search" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/v1/panel/seasons/search</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>search</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="search" data-endpoint="POSTapi-v1-panel-seasons-search" data-component="body"  hidden>
<br>

</p>
<p>
<b><code>limit</code></b>&nbsp;&nbsp;<small>number</small>     <i>optional</i> &nbsp;
<input type="number" name="limit" data-endpoint="POSTapi-v1-panel-seasons-search" data-component="body"  hidden>
<br>

</p>
<p>
<b><code>page</code></b>&nbsp;&nbsp;<small>number</small>     <i>optional</i> &nbsp;
<input type="number" name="page" data-endpoint="POSTapi-v1-panel-seasons-search" data-component="body"  hidden>
<br>

</p>
<p>
<b><code>orderColumn</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="orderColumn" data-endpoint="POSTapi-v1-panel-seasons-search" data-component="body"  hidden>
<br>

</p>
<p>
<b><code>orderDir</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="orderDir" data-endpoint="POSTapi-v1-panel-seasons-search" data-component="body"  hidden>
<br>
The value must be one of <code>asc</code> or <code>desc</code>.
</p>

</form>


## Display a listing of the resource with search.




> Example request:

```bash
curl -X POST \
    "http://127.0.0.1:8000/api/v1/panel/categories/search" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"active":1,"name":"autem","search":"quo","limit":816,"page":489596,"orderColumn":"earum","orderDir":"desc"}'

```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/api/v1/panel/categories/search"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "active": 1,
    "name": "autem",
    "search": "quo",
    "limit": 816,
    "page": 489596,
    "orderColumn": "earum",
    "orderDir": "desc"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-POSTapi-v1-panel-categories-search" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-v1-panel-categories-search"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-panel-categories-search"></code></pre>
</div>
<div id="execution-error-POSTapi-v1-panel-categories-search" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-panel-categories-search"></code></pre>
</div>
<form id="form-POSTapi-v1-panel-categories-search" data-method="POST" data-path="api/v1/panel/categories/search" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-panel-categories-search', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-v1-panel-categories-search" onclick="tryItOut('POSTapi-v1-panel-categories-search');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-v1-panel-categories-search" onclick="cancelTryOut('POSTapi-v1-panel-categories-search');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-v1-panel-categories-search" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/v1/panel/categories/search</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>active</code></b>&nbsp;&nbsp;<small>number</small>     <i>optional</i> &nbsp;
<input type="number" name="active" data-endpoint="POSTapi-v1-panel-categories-search" data-component="body"  hidden>
<br>
The value must be one of <code>0</code> or <code>1</code>.
</p>
<p>
<b><code>name</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="name" data-endpoint="POSTapi-v1-panel-categories-search" data-component="body"  hidden>
<br>

</p>
<p>
<b><code>search</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="search" data-endpoint="POSTapi-v1-panel-categories-search" data-component="body"  hidden>
<br>

</p>
<p>
<b><code>limit</code></b>&nbsp;&nbsp;<small>number</small>     <i>optional</i> &nbsp;
<input type="number" name="limit" data-endpoint="POSTapi-v1-panel-categories-search" data-component="body"  hidden>
<br>

</p>
<p>
<b><code>page</code></b>&nbsp;&nbsp;<small>number</small>     <i>optional</i> &nbsp;
<input type="number" name="page" data-endpoint="POSTapi-v1-panel-categories-search" data-component="body"  hidden>
<br>

</p>
<p>
<b><code>orderColumn</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="orderColumn" data-endpoint="POSTapi-v1-panel-categories-search" data-component="body"  hidden>
<br>

</p>
<p>
<b><code>orderDir</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="orderDir" data-endpoint="POSTapi-v1-panel-categories-search" data-component="body"  hidden>
<br>
The value must be one of <code>asc</code> or <code>desc</code>.
</p>

</form>


## Display a listing of the resource with search.




> Example request:

```bash
curl -X POST \
    "http://127.0.0.1:8000/api/v1/panel/blogs/search" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"content":"ipsam","title":"illum","search":"dolores","limit":294667006.21,"page":7.231276054,"orderColumn":"repudiandae","orderDir":"desc"}'

```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/api/v1/panel/blogs/search"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "content": "ipsam",
    "title": "illum",
    "search": "dolores",
    "limit": 294667006.21,
    "page": 7.231276054,
    "orderColumn": "repudiandae",
    "orderDir": "desc"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-POSTapi-v1-panel-blogs-search" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-v1-panel-blogs-search"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-panel-blogs-search"></code></pre>
</div>
<div id="execution-error-POSTapi-v1-panel-blogs-search" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-panel-blogs-search"></code></pre>
</div>
<form id="form-POSTapi-v1-panel-blogs-search" data-method="POST" data-path="api/v1/panel/blogs/search" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-panel-blogs-search', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-v1-panel-blogs-search" onclick="tryItOut('POSTapi-v1-panel-blogs-search');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-v1-panel-blogs-search" onclick="cancelTryOut('POSTapi-v1-panel-blogs-search');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-v1-panel-blogs-search" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/v1/panel/blogs/search</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>content</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="content" data-endpoint="POSTapi-v1-panel-blogs-search" data-component="body"  hidden>
<br>

</p>
<p>
<b><code>title</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="title" data-endpoint="POSTapi-v1-panel-blogs-search" data-component="body"  hidden>
<br>

</p>
<p>
<b><code>search</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="search" data-endpoint="POSTapi-v1-panel-blogs-search" data-component="body"  hidden>
<br>

</p>
<p>
<b><code>limit</code></b>&nbsp;&nbsp;<small>number</small>     <i>optional</i> &nbsp;
<input type="number" name="limit" data-endpoint="POSTapi-v1-panel-blogs-search" data-component="body"  hidden>
<br>

</p>
<p>
<b><code>page</code></b>&nbsp;&nbsp;<small>number</small>     <i>optional</i> &nbsp;
<input type="number" name="page" data-endpoint="POSTapi-v1-panel-blogs-search" data-component="body"  hidden>
<br>

</p>
<p>
<b><code>orderColumn</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="orderColumn" data-endpoint="POSTapi-v1-panel-blogs-search" data-component="body"  hidden>
<br>

</p>
<p>
<b><code>orderDir</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="orderDir" data-endpoint="POSTapi-v1-panel-blogs-search" data-component="body"  hidden>
<br>
The value must be one of <code>asc</code> or <code>desc</code>.
</p>

</form>


## Display a listing of the resource with search.




> Example request:

```bash
curl -X POST \
    "http://127.0.0.1:8000/api/v1/panel/messages/search" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"email":"sincere84@example.com","message":"tempora","name":"et","search":"tempore","limit":4130530.43797757,"page":291255725.782,"orderColumn":"totam","orderDir":"asc"}'

```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/api/v1/panel/messages/search"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "email": "sincere84@example.com",
    "message": "tempora",
    "name": "et",
    "search": "tempore",
    "limit": 4130530.43797757,
    "page": 291255725.782,
    "orderColumn": "totam",
    "orderDir": "asc"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-POSTapi-v1-panel-messages-search" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-v1-panel-messages-search"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-panel-messages-search"></code></pre>
</div>
<div id="execution-error-POSTapi-v1-panel-messages-search" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-panel-messages-search"></code></pre>
</div>
<form id="form-POSTapi-v1-panel-messages-search" data-method="POST" data-path="api/v1/panel/messages/search" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-panel-messages-search', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-v1-panel-messages-search" onclick="tryItOut('POSTapi-v1-panel-messages-search');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-v1-panel-messages-search" onclick="cancelTryOut('POSTapi-v1-panel-messages-search');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-v1-panel-messages-search" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/v1/panel/messages/search</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>email</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="email" data-endpoint="POSTapi-v1-panel-messages-search" data-component="body"  hidden>
<br>
The value must be a valid email address.
</p>
<p>
<b><code>message</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="message" data-endpoint="POSTapi-v1-panel-messages-search" data-component="body"  hidden>
<br>

</p>
<p>
<b><code>name</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="name" data-endpoint="POSTapi-v1-panel-messages-search" data-component="body"  hidden>
<br>

</p>
<p>
<b><code>search</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="search" data-endpoint="POSTapi-v1-panel-messages-search" data-component="body"  hidden>
<br>

</p>
<p>
<b><code>limit</code></b>&nbsp;&nbsp;<small>number</small>     <i>optional</i> &nbsp;
<input type="number" name="limit" data-endpoint="POSTapi-v1-panel-messages-search" data-component="body"  hidden>
<br>

</p>
<p>
<b><code>page</code></b>&nbsp;&nbsp;<small>number</small>     <i>optional</i> &nbsp;
<input type="number" name="page" data-endpoint="POSTapi-v1-panel-messages-search" data-component="body"  hidden>
<br>

</p>
<p>
<b><code>orderColumn</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="orderColumn" data-endpoint="POSTapi-v1-panel-messages-search" data-component="body"  hidden>
<br>

</p>
<p>
<b><code>orderDir</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="orderDir" data-endpoint="POSTapi-v1-panel-messages-search" data-component="body"  hidden>
<br>
The value must be one of <code>asc</code> or <code>desc</code>.
</p>

</form>


## add reply for a message.




> Example request:

```bash
curl -X POST \
    "http://127.0.0.1:8000/api/v1/panel/messages/quisquam/reply" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"message":"exercitationem"}'

```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/api/v1/panel/messages/quisquam/reply"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "message": "exercitationem"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-POSTapi-v1-panel-messages--message--reply" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-v1-panel-messages--message--reply"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-panel-messages--message--reply"></code></pre>
</div>
<div id="execution-error-POSTapi-v1-panel-messages--message--reply" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-panel-messages--message--reply"></code></pre>
</div>
<form id="form-POSTapi-v1-panel-messages--message--reply" data-method="POST" data-path="api/v1/panel/messages/{message}/reply" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-panel-messages--message--reply', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-v1-panel-messages--message--reply" onclick="tryItOut('POSTapi-v1-panel-messages--message--reply');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-v1-panel-messages--message--reply" onclick="cancelTryOut('POSTapi-v1-panel-messages--message--reply');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-v1-panel-messages--message--reply" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/v1/panel/messages/{message}/reply</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>message</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="message" data-endpoint="POSTapi-v1-panel-messages--message--reply" data-component="url" required  hidden>
<br>

</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>message</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="message" data-endpoint="POSTapi-v1-panel-messages--message--reply" data-component="body" required  hidden>
<br>

</p>

</form>


## Display a listing of the resource.




> Example request:

```bash
curl -X POST \
    "http://127.0.0.1:8000/api/v1/panel/upload" \
    -H "Content-Type: multipart/form-data" \
    -H "Accept: application/json" \
    -F "image=@C:\Users\User\AppData\Local\Temp\php4B12.tmp" 
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/api/v1/panel/upload"
);

let headers = {
    "Content-Type": "multipart/form-data",
    "Accept": "application/json",
};

const body = new FormData();
body.append('image', document.querySelector('input[name="image"]').files[0]);

fetch(url, {
    method: "POST",
    headers,
    body,
}).then(response => response.json());
```


<div id="execution-results-POSTapi-v1-panel-upload" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-v1-panel-upload"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-panel-upload"></code></pre>
</div>
<div id="execution-error-POSTapi-v1-panel-upload" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-panel-upload"></code></pre>
</div>
<form id="form-POSTapi-v1-panel-upload" data-method="POST" data-path="api/v1/panel/upload" data-authed="0" data-hasfiles="1" data-headers='{"Content-Type":"multipart\/form-data","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-panel-upload', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-v1-panel-upload" onclick="tryItOut('POSTapi-v1-panel-upload');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-v1-panel-upload" onclick="cancelTryOut('POSTapi-v1-panel-upload');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-v1-panel-upload" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/v1/panel/upload</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>image</code></b>&nbsp;&nbsp;<small>file</small>  &nbsp;
<input type="file" name="image" data-endpoint="POSTapi-v1-panel-upload" data-component="body" required  hidden>
<br>
The value must be an image.
</p>

</form>


## Display a listing of the resource.




> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/api/v1/landing/blogs" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/api/v1/landing/blogs"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (200):

```json
{
    "success": true,
    "message": "Successfully Founded!",
    "data": []
}
```
<div id="execution-results-GETapi-v1-landing-blogs" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-v1-landing-blogs"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-landing-blogs"></code></pre>
</div>
<div id="execution-error-GETapi-v1-landing-blogs" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-landing-blogs"></code></pre>
</div>
<form id="form-GETapi-v1-landing-blogs" data-method="GET" data-path="api/v1/landing/blogs" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-landing-blogs', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-v1-landing-blogs" onclick="tryItOut('GETapi-v1-landing-blogs');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-v1-landing-blogs" onclick="cancelTryOut('GETapi-v1-landing-blogs');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-v1-landing-blogs" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/v1/landing/blogs</code></b>
</p>
</form>


## Display the specified resource.




> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/api/v1/landing/blogs/quisquam" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/api/v1/landing/blogs/quisquam"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (404):

```json
{
    "message": "No query results for model [App\\Models\\Blog] quisquam",
    "exception": "Symfony\\Component\\HttpKernel\\Exception\\NotFoundHttpException",
    "file": "C:\\Users\\User\\Desktop\\karoostudio\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Exceptions\\Handler.php",
    "line": 385,
    "trace": [
        {
            "file": "C:\\Users\\User\\Desktop\\karoostudio\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Exceptions\\Handler.php",
            "line": 332,
            "function": "prepareException",
            "class": "Illuminate\\Foundation\\Exceptions\\Handler",
            "type": "->"
        },
        {
            "file": "C:\\Users\\User\\Desktop\\karoostudio\\vendor\\nunomaduro\\collision\\src\\Adapters\\Laravel\\ExceptionHandler.php",
            "line": 54,
            "function": "render",
            "class": "Illuminate\\Foundation\\Exceptions\\Handler",
            "type": "->"
        },
        {
            "file": "C:\\Users\\User\\Desktop\\karoostudio\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php",
            "line": 51,
            "function": "render",
            "class": "NunoMaduro\\Collision\\Adapters\\Laravel\\ExceptionHandler",
            "type": "->"
        },
        {
            "file": "C:\\Users\\User\\Desktop\\karoostudio\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 172,
            "function": "handleException",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "C:\\Users\\User\\Desktop\\karoostudio\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Middleware\\ThrottleRequests.php",
            "line": 127,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "C:\\Users\\User\\Desktop\\karoostudio\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Middleware\\ThrottleRequests.php",
            "line": 103,
            "function": "handleRequest",
            "class": "Illuminate\\Routing\\Middleware\\ThrottleRequests",
            "type": "->"
        },
        {
            "file": "C:\\Users\\User\\Desktop\\karoostudio\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Middleware\\ThrottleRequests.php",
            "line": 55,
            "function": "handleRequestUsingNamedLimiter",
            "class": "Illuminate\\Routing\\Middleware\\ThrottleRequests",
            "type": "->"
        },
        {
            "file": "C:\\Users\\User\\Desktop\\karoostudio\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Routing\\Middleware\\ThrottleRequests",
            "type": "->"
        },
        {
            "file": "C:\\Users\\User\\Desktop\\karoostudio\\vendor\\laravel\\sanctum\\src\\Http\\Middleware\\EnsureFrontendRequestsAreStateful.php",
            "line": 33,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "C:\\Users\\User\\Desktop\\karoostudio\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 128,
            "function": "Laravel\\Sanctum\\Http\\Middleware\\{closure}",
            "class": "Laravel\\Sanctum\\Http\\Middleware\\EnsureFrontendRequestsAreStateful",
            "type": "->"
        },
        {
            "file": "C:\\Users\\User\\Desktop\\karoostudio\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 103,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "C:\\Users\\User\\Desktop\\karoostudio\\vendor\\laravel\\sanctum\\src\\Http\\Middleware\\EnsureFrontendRequestsAreStateful.php",
            "line": 34,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "C:\\Users\\User\\Desktop\\karoostudio\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Laravel\\Sanctum\\Http\\Middleware\\EnsureFrontendRequestsAreStateful",
            "type": "->"
        },
        {
            "file": "C:\\Users\\User\\Desktop\\karoostudio\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 103,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "C:\\Users\\User\\Desktop\\karoostudio\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 723,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "C:\\Users\\User\\Desktop\\karoostudio\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 698,
            "function": "runRouteWithinStack",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "C:\\Users\\User\\Desktop\\karoostudio\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 662,
            "function": "runRoute",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "C:\\Users\\User\\Desktop\\karoostudio\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 651,
            "function": "dispatchToRoute",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "C:\\Users\\User\\Desktop\\karoostudio\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php",
            "line": 167,
            "function": "dispatch",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "C:\\Users\\User\\Desktop\\karoostudio\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 128,
            "function": "Illuminate\\Foundation\\Http\\{closure}",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "C:\\Users\\User\\Desktop\\karoostudio\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest.php",
            "line": 21,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "C:\\Users\\User\\Desktop\\karoostudio\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\ConvertEmptyStringsToNull.php",
            "line": 31,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest",
            "type": "->"
        },
        {
            "file": "C:\\Users\\User\\Desktop\\karoostudio\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\ConvertEmptyStringsToNull",
            "type": "->"
        },
        {
            "file": "C:\\Users\\User\\Desktop\\karoostudio\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest.php",
            "line": 21,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "C:\\Users\\User\\Desktop\\karoostudio\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TrimStrings.php",
            "line": 40,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest",
            "type": "->"
        },
        {
            "file": "C:\\Users\\User\\Desktop\\karoostudio\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TrimStrings",
            "type": "->"
        },
        {
            "file": "C:\\Users\\User\\Desktop\\karoostudio\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize.php",
            "line": 27,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "C:\\Users\\User\\Desktop\\karoostudio\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize",
            "type": "->"
        },
        {
            "file": "C:\\Users\\User\\Desktop\\karoostudio\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\PreventRequestsDuringMaintenance.php",
            "line": 86,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "C:\\Users\\User\\Desktop\\karoostudio\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\PreventRequestsDuringMaintenance",
            "type": "->"
        },
        {
            "file": "C:\\Users\\User\\Desktop\\karoostudio\\vendor\\fruitcake\\laravel-cors\\src\\HandleCors.php",
            "line": 52,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "C:\\Users\\User\\Desktop\\karoostudio\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Fruitcake\\Cors\\HandleCors",
            "type": "->"
        },
        {
            "file": "C:\\Users\\User\\Desktop\\karoostudio\\vendor\\laravel\\framework\\src\\Illuminate\\Http\\Middleware\\TrustProxies.php",
            "line": 39,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "C:\\Users\\User\\Desktop\\karoostudio\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Http\\Middleware\\TrustProxies",
            "type": "->"
        },
        {
            "file": "C:\\Users\\User\\Desktop\\karoostudio\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 103,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "C:\\Users\\User\\Desktop\\karoostudio\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php",
            "line": 142,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "C:\\Users\\User\\Desktop\\karoostudio\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php",
            "line": 111,
            "function": "sendRequestThroughRouter",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "C:\\Users\\User\\Desktop\\karoostudio\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php",
            "line": 324,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "C:\\Users\\User\\Desktop\\karoostudio\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php",
            "line": 305,
            "function": "callLaravelOrLumenRoute",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "C:\\Users\\User\\Desktop\\karoostudio\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php",
            "line": 76,
            "function": "makeApiCall",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "C:\\Users\\User\\Desktop\\karoostudio\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php",
            "line": 51,
            "function": "makeResponseCall",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "C:\\Users\\User\\Desktop\\karoostudio\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php",
            "line": 41,
            "function": "makeResponseCallIfEnabledAndNoSuccessResponses",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "C:\\Users\\User\\Desktop\\karoostudio\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Generator.php",
            "line": 236,
            "function": "__invoke",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "C:\\Users\\User\\Desktop\\karoostudio\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Generator.php",
            "line": 172,
            "function": "iterateThroughStrategies",
            "class": "Knuckles\\Scribe\\Extracting\\Generator",
            "type": "->"
        },
        {
            "file": "C:\\Users\\User\\Desktop\\karoostudio\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Generator.php",
            "line": 127,
            "function": "fetchResponses",
            "class": "Knuckles\\Scribe\\Extracting\\Generator",
            "type": "->"
        },
        {
            "file": "C:\\Users\\User\\Desktop\\karoostudio\\vendor\\knuckleswtf\\scribe\\src\\Commands\\GenerateDocumentation.php",
            "line": 119,
            "function": "processRoute",
            "class": "Knuckles\\Scribe\\Extracting\\Generator",
            "type": "->"
        },
        {
            "file": "C:\\Users\\User\\Desktop\\karoostudio\\vendor\\knuckleswtf\\scribe\\src\\Commands\\GenerateDocumentation.php",
            "line": 73,
            "function": "processRoutes",
            "class": "Knuckles\\Scribe\\Commands\\GenerateDocumentation",
            "type": "->"
        },
        {
            "file": "C:\\Users\\User\\Desktop\\karoostudio\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php",
            "line": 36,
            "function": "handle",
            "class": "Knuckles\\Scribe\\Commands\\GenerateDocumentation",
            "type": "->"
        },
        {
            "file": "C:\\Users\\User\\Desktop\\karoostudio\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Util.php",
            "line": 40,
            "function": "Illuminate\\Container\\{closure}",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "C:\\Users\\User\\Desktop\\karoostudio\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php",
            "line": 93,
            "function": "unwrapIfClosure",
            "class": "Illuminate\\Container\\Util",
            "type": "::"
        },
        {
            "file": "C:\\Users\\User\\Desktop\\karoostudio\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php",
            "line": 37,
            "function": "callBoundMethod",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "C:\\Users\\User\\Desktop\\karoostudio\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php",
            "line": 653,
            "function": "call",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "C:\\Users\\User\\Desktop\\karoostudio\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php",
            "line": 136,
            "function": "call",
            "class": "Illuminate\\Container\\Container",
            "type": "->"
        },
        {
            "file": "C:\\Users\\User\\Desktop\\karoostudio\\vendor\\symfony\\console\\Command\\Command.php",
            "line": 298,
            "function": "execute",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "C:\\Users\\User\\Desktop\\karoostudio\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php",
            "line": 121,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Command\\Command",
            "type": "->"
        },
        {
            "file": "C:\\Users\\User\\Desktop\\karoostudio\\vendor\\symfony\\console\\Application.php",
            "line": 1024,
            "function": "run",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "C:\\Users\\User\\Desktop\\karoostudio\\vendor\\symfony\\console\\Application.php",
            "line": 299,
            "function": "doRunCommand",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "C:\\Users\\User\\Desktop\\karoostudio\\vendor\\symfony\\console\\Application.php",
            "line": 171,
            "function": "doRun",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "C:\\Users\\User\\Desktop\\karoostudio\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Application.php",
            "line": 94,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "C:\\Users\\User\\Desktop\\karoostudio\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Console\\Kernel.php",
            "line": 129,
            "function": "run",
            "class": "Illuminate\\Console\\Application",
            "type": "->"
        },
        {
            "file": "C:\\Users\\User\\Desktop\\karoostudio\\artisan",
            "line": 37,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Console\\Kernel",
            "type": "->"
        }
    ]
}
```
<div id="execution-results-GETapi-v1-landing-blogs--blog-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-v1-landing-blogs--blog-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-landing-blogs--blog-"></code></pre>
</div>
<div id="execution-error-GETapi-v1-landing-blogs--blog-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-landing-blogs--blog-"></code></pre>
</div>
<form id="form-GETapi-v1-landing-blogs--blog-" data-method="GET" data-path="api/v1/landing/blogs/{blog}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-landing-blogs--blog-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-v1-landing-blogs--blog-" onclick="tryItOut('GETapi-v1-landing-blogs--blog-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-v1-landing-blogs--blog-" onclick="cancelTryOut('GETapi-v1-landing-blogs--blog-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-v1-landing-blogs--blog-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/v1/landing/blogs/{blog}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>blog</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="blog" data-endpoint="GETapi-v1-landing-blogs--blog-" data-component="url" required  hidden>
<br>

</p>
</form>


## Display a listing of the resource with search.




> Example request:

```bash
curl -X POST \
    "http://127.0.0.1:8000/api/v1/landing/blogs/search" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"content":"possimus","title":"vel","search":"sed","limit":293927.1853,"page":627.756026,"orderColumn":"dolore","orderDir":"desc"}'

```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/api/v1/landing/blogs/search"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "content": "possimus",
    "title": "vel",
    "search": "sed",
    "limit": 293927.1853,
    "page": 627.756026,
    "orderColumn": "dolore",
    "orderDir": "desc"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-POSTapi-v1-landing-blogs-search" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-v1-landing-blogs-search"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-landing-blogs-search"></code></pre>
</div>
<div id="execution-error-POSTapi-v1-landing-blogs-search" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-landing-blogs-search"></code></pre>
</div>
<form id="form-POSTapi-v1-landing-blogs-search" data-method="POST" data-path="api/v1/landing/blogs/search" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-landing-blogs-search', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-v1-landing-blogs-search" onclick="tryItOut('POSTapi-v1-landing-blogs-search');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-v1-landing-blogs-search" onclick="cancelTryOut('POSTapi-v1-landing-blogs-search');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-v1-landing-blogs-search" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/v1/landing/blogs/search</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>content</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="content" data-endpoint="POSTapi-v1-landing-blogs-search" data-component="body"  hidden>
<br>

</p>
<p>
<b><code>title</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="title" data-endpoint="POSTapi-v1-landing-blogs-search" data-component="body"  hidden>
<br>

</p>
<p>
<b><code>search</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="search" data-endpoint="POSTapi-v1-landing-blogs-search" data-component="body"  hidden>
<br>

</p>
<p>
<b><code>limit</code></b>&nbsp;&nbsp;<small>number</small>     <i>optional</i> &nbsp;
<input type="number" name="limit" data-endpoint="POSTapi-v1-landing-blogs-search" data-component="body"  hidden>
<br>

</p>
<p>
<b><code>page</code></b>&nbsp;&nbsp;<small>number</small>     <i>optional</i> &nbsp;
<input type="number" name="page" data-endpoint="POSTapi-v1-landing-blogs-search" data-component="body"  hidden>
<br>

</p>
<p>
<b><code>orderColumn</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="orderColumn" data-endpoint="POSTapi-v1-landing-blogs-search" data-component="body"  hidden>
<br>

</p>
<p>
<b><code>orderDir</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="orderDir" data-endpoint="POSTapi-v1-landing-blogs-search" data-component="body"  hidden>
<br>
The value must be one of <code>asc</code> or <code>desc</code>.
</p>

</form>


## Store a newly created resource in storage.




> Example request:

```bash
curl -X POST \
    "http://127.0.0.1:8000/api/v1/landing/pages/contact_us" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"name":"ut","email":"nannie.kozey@example.com","message":"aut","reply_id":{},"admin_id":{}}'

```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/api/v1/landing/pages/contact_us"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "ut",
    "email": "nannie.kozey@example.com",
    "message": "aut",
    "reply_id": {},
    "admin_id": {}
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-POSTapi-v1-landing-pages-contact_us" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-v1-landing-pages-contact_us"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-landing-pages-contact_us"></code></pre>
</div>
<div id="execution-error-POSTapi-v1-landing-pages-contact_us" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-landing-pages-contact_us"></code></pre>
</div>
<form id="form-POSTapi-v1-landing-pages-contact_us" data-method="POST" data-path="api/v1/landing/pages/contact_us" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-landing-pages-contact_us', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-v1-landing-pages-contact_us" onclick="tryItOut('POSTapi-v1-landing-pages-contact_us');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-v1-landing-pages-contact_us" onclick="cancelTryOut('POSTapi-v1-landing-pages-contact_us');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-v1-landing-pages-contact_us" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/v1/landing/pages/contact_us</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="name" data-endpoint="POSTapi-v1-landing-pages-contact_us" data-component="body" required  hidden>
<br>

</p>
<p>
<b><code>email</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="email" data-endpoint="POSTapi-v1-landing-pages-contact_us" data-component="body" required  hidden>
<br>
The value must be a valid email address.
</p>
<p>
<b><code>message</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="message" data-endpoint="POSTapi-v1-landing-pages-contact_us" data-component="body" required  hidden>
<br>

</p>
<p>
<b><code>reply_id</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="reply_id" data-endpoint="POSTapi-v1-landing-pages-contact_us" data-component="body"  hidden>
<br>

</p>
<p>
<b><code>admin_id</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="admin_id" data-endpoint="POSTapi-v1-landing-pages-contact_us" data-component="body"  hidden>
<br>

</p>

</form>


## Display a listing of the resource.




> Example request:

```bash
curl -X POST \
    "http://127.0.0.1:8000/api/upload" \
    -H "Content-Type: multipart/form-data" \
    -H "Accept: application/json" \
    -F "image=@C:\Users\User\AppData\Local\Temp\php4C3C.tmp" 
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/api/upload"
);

let headers = {
    "Content-Type": "multipart/form-data",
    "Accept": "application/json",
};

const body = new FormData();
body.append('image', document.querySelector('input[name="image"]').files[0]);

fetch(url, {
    method: "POST",
    headers,
    body,
}).then(response => response.json());
```


<div id="execution-results-POSTapi-upload" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-upload"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-upload"></code></pre>
</div>
<div id="execution-error-POSTapi-upload" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-upload"></code></pre>
</div>
<form id="form-POSTapi-upload" data-method="POST" data-path="api/upload" data-authed="0" data-hasfiles="1" data-headers='{"Content-Type":"multipart\/form-data","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-upload', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-upload" onclick="tryItOut('POSTapi-upload');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-upload" onclick="cancelTryOut('POSTapi-upload');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-upload" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/upload</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>image</code></b>&nbsp;&nbsp;<small>file</small>  &nbsp;
<input type="file" name="image" data-endpoint="POSTapi-upload" data-component="body" required  hidden>
<br>
The value must be an image.
</p>

</form>


## /




> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (200):

```json

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            
            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
                    <svg viewBox="0 0 651 192" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-16 w-auto text-gray-700 sm:h-20">
                        <g clip-path="url(#clip0)" fill="#EF3B2D">
                            <path d="M248.032 44.676h-16.466v100.23h47.394v-14.748h-30.928V44.676zM337.091 87.202c-2.101-3.341-5.083-5.965-8.949-7.875-3.865-1.909-7.756-2.864-11.669-2.864-5.062 0-9.69.931-13.89 2.792-4.201 1.861-7.804 4.417-10.811 7.661-3.007 3.246-5.347 6.993-7.016 11.239-1.672 4.249-2.506 8.713-2.506 13.389 0 4.774.834 9.26 2.506 13.459 1.669 4.202 4.009 7.925 7.016 11.169 3.007 3.246 6.609 5.799 10.811 7.66 4.199 1.861 8.828 2.792 13.89 2.792 3.913 0 7.804-.955 11.669-2.863 3.866-1.908 6.849-4.533 8.949-7.875v9.021h15.607V78.182h-15.607v9.02zm-1.431 32.503c-.955 2.578-2.291 4.821-4.009 6.73-1.719 1.91-3.795 3.437-6.229 4.582-2.435 1.146-5.133 1.718-8.091 1.718-2.96 0-5.633-.572-8.019-1.718-2.387-1.146-4.438-2.672-6.156-4.582-1.719-1.909-3.032-4.152-3.938-6.73-.909-2.577-1.36-5.298-1.36-8.161 0-2.864.451-5.585 1.36-8.162.905-2.577 2.219-4.819 3.938-6.729 1.718-1.908 3.77-3.437 6.156-4.582 2.386-1.146 5.059-1.718 8.019-1.718 2.958 0 5.656.572 8.091 1.718 2.434 1.146 4.51 2.674 6.229 4.582 1.718 1.91 3.054 4.152 4.009 6.729.953 2.577 1.432 5.298 1.432 8.162-.001 2.863-.479 5.584-1.432 8.161zM463.954 87.202c-2.101-3.341-5.083-5.965-8.949-7.875-3.865-1.909-7.756-2.864-11.669-2.864-5.062 0-9.69.931-13.89 2.792-4.201 1.861-7.804 4.417-10.811 7.661-3.007 3.246-5.347 6.993-7.016 11.239-1.672 4.249-2.506 8.713-2.506 13.389 0 4.774.834 9.26 2.506 13.459 1.669 4.202 4.009 7.925 7.016 11.169 3.007 3.246 6.609 5.799 10.811 7.66 4.199 1.861 8.828 2.792 13.89 2.792 3.913 0 7.804-.955 11.669-2.863 3.866-1.908 6.849-4.533 8.949-7.875v9.021h15.607V78.182h-15.607v9.02zm-1.432 32.503c-.955 2.578-2.291 4.821-4.009 6.73-1.719 1.91-3.795 3.437-6.229 4.582-2.435 1.146-5.133 1.718-8.091 1.718-2.96 0-5.633-.572-8.019-1.718-2.387-1.146-4.438-2.672-6.156-4.582-1.719-1.909-3.032-4.152-3.938-6.73-.909-2.577-1.36-5.298-1.36-8.161 0-2.864.451-5.585 1.36-8.162.905-2.577 2.219-4.819 3.938-6.729 1.718-1.908 3.77-3.437 6.156-4.582 2.386-1.146 5.059-1.718 8.019-1.718 2.958 0 5.656.572 8.091 1.718 2.434 1.146 4.51 2.674 6.229 4.582 1.718 1.91 3.054 4.152 4.009 6.729.953 2.577 1.432 5.298 1.432 8.162 0 2.863-.479 5.584-1.432 8.161zM650.772 44.676h-15.606v100.23h15.606V44.676zM365.013 144.906h15.607V93.538h26.776V78.182h-42.383v66.724zM542.133 78.182l-19.616 51.096-19.616-51.096h-15.808l25.617 66.724h19.614l25.617-66.724h-15.808zM591.98 76.466c-19.112 0-34.239 15.706-34.239 35.079 0 21.416 14.641 35.079 36.239 35.079 12.088 0 19.806-4.622 29.234-14.688l-10.544-8.158c-.006.008-7.958 10.449-19.832 10.449-13.802 0-19.612-11.127-19.612-16.884h51.777c2.72-22.043-11.772-40.877-33.023-40.877zm-18.713 29.28c.12-1.284 1.917-16.884 18.589-16.884 16.671 0 18.697 15.598 18.813 16.884h-37.402zM184.068 43.892c-.024-.088-.073-.165-.104-.25-.058-.157-.108-.316-.191-.46-.056-.097-.137-.176-.203-.265-.087-.117-.161-.242-.265-.345-.085-.086-.194-.148-.29-.223-.109-.085-.206-.182-.327-.252l-.002-.001-.002-.002-35.648-20.524a2.971 2.971 0 00-2.964 0l-35.647 20.522-.002.002-.002.001c-.121.07-.219.167-.327.252-.096.075-.205.138-.29.223-.103.103-.178.228-.265.345-.066.089-.147.169-.203.265-.083.144-.133.304-.191.46-.031.085-.08.162-.104.25-.067.249-.103.51-.103.776v38.979l-29.706 17.103V24.493a3 3 0 00-.103-.776c-.024-.088-.073-.165-.104-.25-.058-.157-.108-.316-.191-.46-.056-.097-.137-.176-.203-.265-.087-.117-.161-.242-.265-.345-.085-.086-.194-.148-.29-.223-.109-.085-.206-.182-.327-.252l-.002-.001-.002-.002L40.098 1.396a2.971 2.971 0 00-2.964 0L1.487 21.919l-.002.002-.002.001c-.121.07-.219.167-.327.252-.096.075-.205.138-.29.223-.103.103-.178.228-.265.345-.066.089-.147.169-.203.265-.083.144-.133.304-.191.46-.031.085-.08.162-.104.25-.067.249-.103.51-.103.776v122.09c0 1.063.568 2.044 1.489 2.575l71.293 41.045c.156.089.324.143.49.202.078.028.15.074.23.095a2.98 2.98 0 001.524 0c.069-.018.132-.059.2-.083.176-.061.354-.119.519-.214l71.293-41.045a2.971 2.971 0 001.489-2.575v-38.979l34.158-19.666a2.971 2.971 0 001.489-2.575V44.666a3.075 3.075 0 00-.106-.774zM74.255 143.167l-29.648-16.779 31.136-17.926.001-.001 34.164-19.669 29.674 17.084-21.772 12.428-43.555 24.863zm68.329-76.259v33.841l-12.475-7.182-17.231-9.92V49.806l12.475 7.182 17.231 9.92zm2.97-39.335l29.693 17.095-29.693 17.095-29.693-17.095 29.693-17.095zM54.06 114.089l-12.475 7.182V46.733l17.231-9.92 12.475-7.182v74.537l-17.231 9.921zM38.614 7.398l29.693 17.095-29.693 17.095L8.921 24.493 38.614 7.398zM5.938 29.632l12.475 7.182 17.231 9.92v79.676l.001.005-.001.006c0 .114.032.221.045.333.017.146.021.294.059.434l.002.007c.032.117.094.222.14.334.051.124.088.255.156.371a.036.036 0 00.004.009c.061.105.149.191.222.288.081.105.149.22.244.314l.008.01c.084.083.19.142.284.215.106.083.202.178.32.247l.013.005.011.008 34.139 19.321v34.175L5.939 144.867V29.632h-.001zm136.646 115.235l-65.352 37.625V148.31l48.399-27.628 16.953-9.677v33.862zm35.646-61.22l-29.706 17.102V66.908l17.231-9.92 12.475-7.182v33.841z"/>
                        </g>
                    </svg>
                </div>

                <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                    <div class="grid grid-cols-1 md:grid-cols-2">
                        <div class="p-6">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold"><a href="https://laravel.com/docs" class="underline text-gray-900 dark:text-white">Documentation</a></div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    Laravel has wonderful, thorough documentation covering every aspect of the framework. Whether you are new to the framework or have previous experience with Laravel, we recommend reading all of the documentation from beginning to end.
                                </div>
                            </div>
                        </div>

                        <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-t-0 md:border-l">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z"></path><path d="M15 13a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold"><a href="https://laracasts.com" class="underline text-gray-900 dark:text-white">Laracasts</a></div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    Laracasts offers thousands of video tutorials on Laravel, PHP, and JavaScript development. Check them out, see for yourself, and massively level up your development skills in the process.
                                </div>
                            </div>
                        </div>

                        <div class="p-6 border-t border-gray-200 dark:border-gray-700">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"></path></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold"><a href="https://laravel-news.com/" class="underline text-gray-900 dark:text-white">Laravel News</a></div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    Laravel News is a community driven portal and newsletter aggregating all of the latest and most important news in the Laravel ecosystem, including new package releases and tutorials.
                                </div>
                            </div>
                        </div>

                        <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-l">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold text-gray-900 dark:text-white">Vibrant Ecosystem</div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    Laravel's robust library of first-party tools and libraries, such as <a href="https://forge.laravel.com" class="underline">Forge</a>, <a href="https://vapor.laravel.com" class="underline">Vapor</a>, <a href="https://nova.laravel.com" class="underline">Nova</a>, and <a href="https://envoyer.io" class="underline">Envoyer</a> help you take your projects to the next level. Pair them with powerful open source libraries like <a href="https://laravel.com/docs/billing" class="underline">Cashier</a>, <a href="https://laravel.com/docs/dusk" class="underline">Dusk</a>, <a href="https://laravel.com/docs/broadcasting" class="underline">Echo</a>, <a href="https://laravel.com/docs/horizon" class="underline">Horizon</a>, <a href="https://laravel.com/docs/sanctum" class="underline">Sanctum</a>, <a href="https://laravel.com/docs/telescope" class="underline">Telescope</a>, and more.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex justify-center mt-4 sm:items-center sm:justify-between">
                    <div class="text-center text-sm text-gray-500 sm:text-left">
                        <div class="flex items-center">
                            <svg fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor" class="-mt-px w-5 h-5 text-gray-400">
                                <path d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path>
                            </svg>

                            <a href="https://laravel.bigcartel.com" class="ml-1 underline">
                                Shop
                            </a>

                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="ml-4 -mt-px w-5 h-5 text-gray-400">
                                <path d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                            </svg>

                            <a href="https://github.com/sponsors/taylorotwell" class="ml-1 underline">
                                Sponsor
                            </a>
                        </div>
                    </div>

                    <div class="ml-4 text-center text-sm text-gray-500 sm:text-right sm:ml-0">
                        Laravel v8.83.18 (PHP v7.3.12)
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>

```
<div id="execution-results-GET-" hidden>
    <blockquote>Received response<span id="execution-response-status-GET-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GET-"></code></pre>
</div>
<div id="execution-error-GET-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GET-"></code></pre>
</div>
<form id="form-GET-" data-method="GET" data-path="/" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GET-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GET-" onclick="tryItOut('GET-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GET-" onclick="cancelTryOut('GET-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GET-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>/</code></b>
</p>
</form>


## kcp/locale/{lang}




> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/kcp/locale/earum" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/kcp/locale/earum"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


<div id="execution-results-GETkcp-locale--lang-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETkcp-locale--lang-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETkcp-locale--lang-"></code></pre>
</div>
<div id="execution-error-GETkcp-locale--lang-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETkcp-locale--lang-"></code></pre>
</div>
<form id="form-GETkcp-locale--lang-" data-method="GET" data-path="kcp/locale/{lang}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETkcp-locale--lang-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETkcp-locale--lang-" onclick="tryItOut('GETkcp-locale--lang-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETkcp-locale--lang-" onclick="cancelTryOut('GETkcp-locale--lang-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETkcp-locale--lang-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>kcp/locale/{lang}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>lang</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="lang" data-endpoint="GETkcp-locale--lang-" data-component="url" required  hidden>
<br>

</p>
</form>


## kcp/login




> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/kcp/login" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/kcp/login"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (200):

```json

<!DOCTYPE HTML>

<html lang="en">

<head>
    <meta charset="utf-8">
    <title>HotDesk - Voyager</title>
    <meta name="description" content="admin login">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link href="http://127.0.0.1:8000/kcp/voyager-assets?path=css%2Fbootstrap.css" rel="stylesheet">
    <link href="http://127.0.0.1:8000/kcp/voyager-assets?path=css%2Fmaster.css" rel="stylesheet">
    <script src="http://127.0.0.1:8000/kcp/voyager-assets?path=js%2FJQUERY.js"></script>
    <script src="http://127.0.0.1:8000/kcp/voyager-assets?path=js%2FBOOTSTRAP.js"></script>
    <script src="http://127.0.0.1:8000/kcp/voyager-assets?path=js%2Fajax.js"></script>
    <script src="http://127.0.0.1:8000/kcp/voyager-assets?path=js%2Fchart.js"></script>
</head>

<body class="en">


<div class="container-fluid">
    <div class="login-form">

        <form action="http://127.0.0.1:8000/kcp/login" method="POST">

                        <input type="hidden" name="_token" value="FgI6q6xWsNf3CmcCXgIfc4CKwviaW008JwkUFB8X">
            <div class="flex-box justify-content-between">

                <svg width="158" height="36" viewBox="0 0 158 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M7.12079 7.456L6.32879 12.736H22.6968C23.2248 12.736 23.6648 12.56 24.0168 12.208C24.3981 11.8267 24.5888 11.372 24.5888 10.844V7.456H30.7928V10.844C30.7928 11.372 30.9688 11.8267 31.3208 12.208C31.7021 12.56 32.1421 12.736 32.6408 12.736H34.1368V24H29.5608C29.0328 24 28.5781 23.824 28.1968 23.472C27.8448 23.0907 27.6688 22.6507 27.6688 22.152C27.6688 22.6507 27.4781 23.0907 27.0968 23.472C26.7448 23.824 26.3195 24 25.8208 24H6.41679C5.62479 24 4.89146 23.8533 4.21679 23.56C3.54212 23.2667 2.94079 22.8707 2.41279 22.372C1.91412 21.844 1.51812 21.2427 1.22479 20.568C0.931457 19.8933 0.78479 19.16 0.78479 18.368V7.456H7.12079ZM11.0368 5.08L13.8528 2.264L16.0088 4.46399L18.2088 2.264L21.0248 5.08L18.2088 7.852L16.0088 5.696L13.8528 7.852L11.0368 5.08Z"
                        fill="#A2B1BA"/>
                    <path
                        d="M33.2606 18.632C33.2606 18.5147 33.2752 18.148 33.3046 17.532C33.3046 16.8867 33.3486 16.212 33.4366 15.508C33.4952 14.804 33.5832 14.1733 33.7006 13.616C33.8179 13.0293 33.9646 12.736 34.1406 12.736H36.9126L35.9006 6.04799L42.8526 4.2L43.1606 18.236V18.456C43.1606 19.16 43.0139 19.8493 42.7206 20.524C42.4566 21.1987 42.0606 21.8 41.5326 22.328C41.0339 22.8267 40.4326 23.2373 39.7286 23.56C39.0539 23.8533 38.3206 24 37.5286 24H34.1406C33.9352 24 33.7739 23.7507 33.6566 23.252C33.5392 22.724 33.4512 22.1373 33.3926 21.492C33.3339 20.8467 33.3046 20.2453 33.3046 19.688C33.2752 19.1013 33.2606 18.7493 33.2606 18.632ZM31.3686 28.884L34.1846 26.068L36.3406 28.268L38.5406 26.068L41.3566 28.884L38.5406 31.656L36.3406 29.5L34.1846 31.656L31.3686 28.884Z"
                        fill="#A2B1BA"/>
                    <path
                        d="M42.515 27.212L49.115 19.556L47.399 7.67599L55.231 5.168L55.407 12.736H58.267V24H55.627V24.44C55.627 25.232 55.4803 25.9653 55.187 26.64C54.8937 27.3147 54.483 27.9013 53.955 28.4C53.4563 28.928 52.8697 29.3387 52.195 29.632C51.5203 29.9253 50.8017 30.072 50.039 30.072H42.515V27.212Z"
                        fill="#A2B1BA"/>
                    <path
                        d="M57.366 17.488C57.3954 17.0773 57.4394 16.5933 57.498 16.036C57.5274 15.4787 57.586 14.9653 57.674 14.496C57.7327 13.9973 57.806 13.5867 57.894 13.264C57.982 12.912 58.0994 12.736 58.246 12.736H62.91L61.898 6.04799L68.85 4.2L69.158 18.236V18.456C69.158 19.16 69.0114 19.8493 68.718 20.524C68.454 21.1987 68.058 21.8 67.53 22.328C67.0314 22.8267 66.43 23.2373 65.726 23.56C65.0514 23.8533 64.318 24 63.526 24H58.246C58.0407 24 57.8794 23.7507 57.762 23.252C57.6447 22.724 57.5567 22.1373 57.498 21.492C57.4394 20.8467 57.41 20.2453 57.41 19.688C57.3807 19.1013 57.366 18.7493 57.366 18.632V17.488ZM60.226 26.068L62.382 28.268L64.582 26.068L67.398 28.884L64.582 31.656L62.382 29.5L60.226 31.656L57.41 28.884L60.226 26.068Z"
                        fill="#A2B1BA"/>
                    <path
                        d="M71.8551 11.152H75.2871C75.2871 11.6213 75.4338 12.0027 75.7271 12.296C76.0204 12.5893 76.4311 12.736 76.9591 12.736H81.4031L78.6751 4.948L86.5951 2.88L88.0911 12.736H89.5431V24C88.7804 24 88.1058 23.7653 87.5191 23.296C86.9324 22.7973 86.5658 22.1813 86.4191 21.448C86.2724 22.1813 85.9058 22.7973 85.3191 23.296C84.7324 23.7653 84.0578 24 83.2951 24H77.4431C76.6804 24 75.9618 23.8533 75.2871 23.56C74.6124 23.2667 74.0111 22.8707 73.4831 22.372C72.9844 21.844 72.5884 21.2427 72.2951 20.568C72.0018 19.8933 71.8551 19.1747 71.8551 18.412V11.152Z"
                        fill="#A2B1BA"/>
                    <path
                        d="M88.6473 18.632C88.6473 18.5147 88.662 18.148 88.6913 17.532C88.6913 16.8867 88.7353 16.212 88.8233 15.508C88.882 14.804 88.97 14.1733 89.0873 13.616C89.2046 13.0293 89.3513 12.736 89.5273 12.736H91.4633V9.568C91.4633 8.51199 91.83 7.632 92.5633 6.928C93.326 6.19466 94.2206 5.828 95.2473 5.828H101.275C102.302 5.828 103.182 6.19466 103.915 6.928C104.649 7.66133 105.015 8.54133 105.015 9.568V20.436C105.015 20.9347 104.942 21.404 104.795 21.844C104.502 22.724 103.974 23.428 103.211 23.956C102.449 24.4547 101.627 24.704 100.747 24.704C100.043 24.704 99.4126 24.5573 98.8553 24.264L95.9513 22.812C95.5113 23.1933 95.0713 23.4867 94.6313 23.692C94.2206 23.8973 93.722 24 93.1353 24H89.5273C89.322 24 89.1606 23.7507 89.0433 23.252C88.926 22.724 88.838 22.1373 88.7793 21.492C88.7206 20.8467 88.6913 20.2453 88.6913 19.688C88.662 19.1013 88.6473 18.7493 88.6473 18.632ZM96.0393 12.956L100.659 16.168C100.777 16.2853 100.953 16.344 101.187 16.344C101.451 16.344 101.686 16.256 101.891 16.08C102.126 15.8747 102.243 15.6253 102.243 15.332V13.924C102.243 13.66 102.141 13.44 101.935 13.264C101.73 13.0587 101.495 12.956 101.231 12.956H96.0393Z"
                        fill="#A2B1BA"/>
                    <path
                        d="M109.883 26.508L110.499 10.14L116.791 11.328L115.427 20.92C117.099 21.3893 118.874 21.624 120.751 21.624C122.511 21.624 124.213 21.404 125.855 20.964L123.743 2.572L132.147 0.0639954L132.279 12.736H135.271V24H132.367L132.411 26.684C132.411 27.476 132.265 28.2093 131.971 28.884C131.678 29.588 131.267 30.1893 130.739 30.688C130.241 31.216 129.654 31.6267 128.979 31.92C128.305 32.2133 127.586 32.36 126.823 32.36H115.471C114.65 32.36 113.902 32.1987 113.227 31.876C112.553 31.5827 111.966 31.172 111.467 30.644C110.969 30.116 110.573 29.5147 110.279 28.84C110.015 28.1653 109.883 27.4613 109.883 26.728V26.508Z"
                        fill="#A2B1BA"/>
                    <path
                        d="M134.409 17.488C134.438 17.0773 134.482 16.5933 134.541 16.036C134.57 15.4787 134.629 14.9653 134.717 14.496C134.776 13.9973 134.849 13.5867 134.937 13.264C135.025 12.912 135.142 12.736 135.289 12.736H136.741C137.24 12.736 137.68 12.56 138.061 12.208C138.442 11.8267 138.633 11.372 138.633 10.844V7.456H144.837V10.844C144.837 11.372 145.013 11.8267 145.365 12.208C145.746 12.56 146.186 12.736 146.685 12.736H148.137V24H143.605C143.077 24 142.666 23.868 142.373 23.604C142.109 23.3107 141.889 23.164 141.713 23.164C141.537 23.164 141.302 23.3107 141.009 23.604C140.745 23.868 140.349 24 139.821 24H135.289C135.084 24 134.922 23.7507 134.805 23.252C134.688 22.724 134.6 22.1373 134.541 21.492C134.482 20.8467 134.453 20.2453 134.453 19.688C134.424 19.1013 134.409 18.7493 134.409 18.632V17.488ZM138.677 3.056L141.185 0.547994L143.737 3.056L141.185 5.564L138.677 3.056Z"
                        fill="#A2B1BA"/>
                    <path
                        d="M147.257 17.488C147.286 17.0773 147.33 16.5933 147.389 16.036C147.418 15.4787 147.477 14.9653 147.565 14.496C147.623 13.9973 147.697 13.5867 147.785 13.264C147.873 12.912 147.99 12.736 148.137 12.736H150.909L149.897 6.04799L156.849 4.2L157.157 18.236V18.456C157.157 19.16 157.01 19.8493 156.717 20.524C156.453 21.1987 156.057 21.8 155.529 22.328C155.03 22.8267 154.429 23.2373 153.725 23.56C153.05 23.8533 152.317 24 151.525 24H148.137C147.931 24 147.77 23.7507 147.653 23.252C147.535 22.724 147.447 22.1373 147.389 21.492C147.33 20.8467 147.301 20.2453 147.301 19.688C147.271 19.1013 147.257 18.7493 147.257 18.632V17.488ZM145.365 28.84L148.181 26.068L150.381 28.224L152.537 26.068L155.353 28.84L152.537 31.656L150.381 29.456L148.181 31.656L145.365 28.84ZM147.829 33.196L150.381 30.688L152.889 33.196L150.381 35.704L147.829 33.196Z"
                        fill="#A2B1BA"/>
                </svg>
                <a class="logo-item flex-box">
                    <img src="http://127.0.0.1:8000/kcp/voyager-assets?path=icon%2Flogo-item.svg">
                </a>
            </div>

                <div class="input-row">
                    <label>
                        E-mail
                    </label>
                    <input type="text" name="email" id="email" value=""
                           placeholder="E-mail" >

                </div>

                <div class="input-row">
                    <label>
                        Password
                    </label>
                    <input type="password" name="password" placeholder="Password" required>
                </div>



            <div class="buttons">
                <input type="hidden" name="remember" id="remember" value="1">

                <button type="submit"  class="flex-box add-new" data-en="Login" data-fa="ورود">
                    Login
                </button>
            </div>

              


        </form>

    </div>
    <div class="web-item left-box position-relative">
        <img class="pattern" src="http://127.0.0.1:8000/kcp/voyager-assets?path=icon%2Fpattern.svg">
        <img class="man1 position-absolute" src="http://127.0.0.1:8000/kcp/voyager-assets?path=photo%2Fman-holding-coffee-cup%25201.png">
        <img class="man2 position-absolute" src="http://127.0.0.1:8000/kcp/voyager-assets?path=photo%2Fman-holding-coffee-cup%25202.png">

    </div>
</div>



<script>
    var btn = document.querySelector('button[type="submit"]');
    var form = document.forms[0];
    btn.addEventListener('click', function (ev) {
        if (form.checkValidity()) {
            btn.querySelector('.signingin').className = 'signingin';
            btn.querySelector('.signin').className = 'signin hidden';
        } else {
            ev.preventDefault();
        }
    });

</script>
</body>

</html>

```
<div id="execution-results-GETkcp-login" hidden>
    <blockquote>Received response<span id="execution-response-status-GETkcp-login"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETkcp-login"></code></pre>
</div>
<div id="execution-error-GETkcp-login" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETkcp-login"></code></pre>
</div>
<form id="form-GETkcp-login" data-method="GET" data-path="kcp/login" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETkcp-login', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETkcp-login" onclick="tryItOut('GETkcp-login');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETkcp-login" onclick="cancelTryOut('GETkcp-login');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETkcp-login" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>kcp/login</code></b>
</p>
</form>


## kcp/login




> Example request:

```bash
curl -X POST \
    "http://127.0.0.1:8000/kcp/login" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/kcp/login"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response => response.json());
```


<div id="execution-results-POSTkcp-login" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTkcp-login"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTkcp-login"></code></pre>
</div>
<div id="execution-error-POSTkcp-login" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTkcp-login"></code></pre>
</div>
<form id="form-POSTkcp-login" data-method="POST" data-path="kcp/login" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTkcp-login', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTkcp-login" onclick="tryItOut('POSTkcp-login');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTkcp-login" onclick="cancelTryOut('POSTkcp-login');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTkcp-login" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>kcp/login</code></b>
</p>
</form>


## kcp




> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/kcp" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/kcp"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (302):

```json

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="refresh" content="0;url='http://127.0.0.1:8000/kcp/login'" />

        <title>Redirecting to http://127.0.0.1:8000/kcp/login</title>
    </head>
    <body>
        Redirecting to <a href="http://127.0.0.1:8000/kcp/login">http://127.0.0.1:8000/kcp/login</a>.
    </body>
</html>
```
<div id="execution-results-GETkcp" hidden>
    <blockquote>Received response<span id="execution-response-status-GETkcp"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETkcp"></code></pre>
</div>
<div id="execution-error-GETkcp" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETkcp"></code></pre>
</div>
<form id="form-GETkcp" data-method="GET" data-path="kcp" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETkcp', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETkcp" onclick="tryItOut('GETkcp');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETkcp" onclick="cancelTryOut('GETkcp');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETkcp" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>kcp</code></b>
</p>
</form>


## kcp/logout




> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/kcp/logout" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/kcp/logout"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (302):

```json

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="refresh" content="0;url='http://127.0.0.1:8000/kcp/login'" />

        <title>Redirecting to http://127.0.0.1:8000/kcp/login</title>
    </head>
    <body>
        Redirecting to <a href="http://127.0.0.1:8000/kcp/login">http://127.0.0.1:8000/kcp/login</a>.
    </body>
</html>
```
<div id="execution-results-GETkcp-logout" hidden>
    <blockquote>Received response<span id="execution-response-status-GETkcp-logout"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETkcp-logout"></code></pre>
</div>
<div id="execution-error-GETkcp-logout" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETkcp-logout"></code></pre>
</div>
<form id="form-GETkcp-logout" data-method="GET" data-path="kcp/logout" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETkcp-logout', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETkcp-logout" onclick="tryItOut('GETkcp-logout');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETkcp-logout" onclick="cancelTryOut('GETkcp-logout');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETkcp-logout" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>kcp/logout</code></b>
</p>
</form>


## kcp/upload




> Example request:

```bash
curl -X POST \
    "http://127.0.0.1:8000/kcp/upload" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/kcp/upload"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response => response.json());
```


<div id="execution-results-POSTkcp-upload" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTkcp-upload"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTkcp-upload"></code></pre>
</div>
<div id="execution-error-POSTkcp-upload" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTkcp-upload"></code></pre>
</div>
<form id="form-POSTkcp-upload" data-method="POST" data-path="kcp/upload" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTkcp-upload', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTkcp-upload" onclick="tryItOut('POSTkcp-upload');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTkcp-upload" onclick="cancelTryOut('POSTkcp-upload');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTkcp-upload" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>kcp/upload</code></b>
</p>
</form>


## kcp/profile




> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/kcp/profile" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/kcp/profile"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (302):

```json

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="refresh" content="0;url='http://127.0.0.1:8000/kcp/login'" />

        <title>Redirecting to http://127.0.0.1:8000/kcp/login</title>
    </head>
    <body>
        Redirecting to <a href="http://127.0.0.1:8000/kcp/login">http://127.0.0.1:8000/kcp/login</a>.
    </body>
</html>
```
<div id="execution-results-GETkcp-profile" hidden>
    <blockquote>Received response<span id="execution-response-status-GETkcp-profile"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETkcp-profile"></code></pre>
</div>
<div id="execution-error-GETkcp-profile" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETkcp-profile"></code></pre>
</div>
<form id="form-GETkcp-profile" data-method="GET" data-path="kcp/profile" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETkcp-profile', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETkcp-profile" onclick="tryItOut('GETkcp-profile');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETkcp-profile" onclick="cancelTryOut('GETkcp-profile');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETkcp-profile" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>kcp/profile</code></b>
</p>
</form>


## Order BREAD items.




> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/kcp/users/order" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/kcp/users/order"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (302):

```json

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="refresh" content="0;url='http://127.0.0.1:8000/kcp/login'" />

        <title>Redirecting to http://127.0.0.1:8000/kcp/login</title>
    </head>
    <body>
        Redirecting to <a href="http://127.0.0.1:8000/kcp/login">http://127.0.0.1:8000/kcp/login</a>.
    </body>
</html>
```
<div id="execution-results-GETkcp-users-order" hidden>
    <blockquote>Received response<span id="execution-response-status-GETkcp-users-order"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETkcp-users-order"></code></pre>
</div>
<div id="execution-error-GETkcp-users-order" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETkcp-users-order"></code></pre>
</div>
<form id="form-GETkcp-users-order" data-method="GET" data-path="kcp/users/order" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETkcp-users-order', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETkcp-users-order" onclick="tryItOut('GETkcp-users-order');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETkcp-users-order" onclick="cancelTryOut('GETkcp-users-order');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETkcp-users-order" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>kcp/users/order</code></b>
</p>
</form>


## kcp/users/action




> Example request:

```bash
curl -X POST \
    "http://127.0.0.1:8000/kcp/users/action" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/kcp/users/action"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response => response.json());
```


<div id="execution-results-POSTkcp-users-action" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTkcp-users-action"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTkcp-users-action"></code></pre>
</div>
<div id="execution-error-POSTkcp-users-action" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTkcp-users-action"></code></pre>
</div>
<form id="form-POSTkcp-users-action" data-method="POST" data-path="kcp/users/action" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTkcp-users-action', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTkcp-users-action" onclick="tryItOut('POSTkcp-users-action');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTkcp-users-action" onclick="cancelTryOut('POSTkcp-users-action');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTkcp-users-action" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>kcp/users/action</code></b>
</p>
</form>


## kcp/users/order




> Example request:

```bash
curl -X POST \
    "http://127.0.0.1:8000/kcp/users/order" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/kcp/users/order"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response => response.json());
```


<div id="execution-results-POSTkcp-users-order" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTkcp-users-order"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTkcp-users-order"></code></pre>
</div>
<div id="execution-error-POSTkcp-users-order" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTkcp-users-order"></code></pre>
</div>
<form id="form-POSTkcp-users-order" data-method="POST" data-path="kcp/users/order" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTkcp-users-order', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTkcp-users-order" onclick="tryItOut('POSTkcp-users-order');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTkcp-users-order" onclick="cancelTryOut('POSTkcp-users-order');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTkcp-users-order" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>kcp/users/order</code></b>
</p>
</form>


## kcp/users/{id}/restore




> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/kcp/users/debitis/restore" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/kcp/users/debitis/restore"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (302):

```json

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="refresh" content="0;url='http://127.0.0.1:8000/kcp/login'" />

        <title>Redirecting to http://127.0.0.1:8000/kcp/login</title>
    </head>
    <body>
        Redirecting to <a href="http://127.0.0.1:8000/kcp/login">http://127.0.0.1:8000/kcp/login</a>.
    </body>
</html>
```
<div id="execution-results-GETkcp-users--id--restore" hidden>
    <blockquote>Received response<span id="execution-response-status-GETkcp-users--id--restore"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETkcp-users--id--restore"></code></pre>
</div>
<div id="execution-error-GETkcp-users--id--restore" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETkcp-users--id--restore"></code></pre>
</div>
<form id="form-GETkcp-users--id--restore" data-method="GET" data-path="kcp/users/{id}/restore" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETkcp-users--id--restore', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETkcp-users--id--restore" onclick="tryItOut('GETkcp-users--id--restore');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETkcp-users--id--restore" onclick="cancelTryOut('GETkcp-users--id--restore');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETkcp-users--id--restore" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>kcp/users/{id}/restore</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="GETkcp-users--id--restore" data-component="url" required  hidden>
<br>

</p>
</form>


## Get BREAD relations data.




> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/kcp/users/relation" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/kcp/users/relation"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (302):

```json

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="refresh" content="0;url='http://127.0.0.1:8000/kcp/login'" />

        <title>Redirecting to http://127.0.0.1:8000/kcp/login</title>
    </head>
    <body>
        Redirecting to <a href="http://127.0.0.1:8000/kcp/login">http://127.0.0.1:8000/kcp/login</a>.
    </body>
</html>
```
<div id="execution-results-GETkcp-users-relation" hidden>
    <blockquote>Received response<span id="execution-response-status-GETkcp-users-relation"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETkcp-users-relation"></code></pre>
</div>
<div id="execution-error-GETkcp-users-relation" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETkcp-users-relation"></code></pre>
</div>
<form id="form-GETkcp-users-relation" data-method="GET" data-path="kcp/users/relation" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETkcp-users-relation', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETkcp-users-relation" onclick="tryItOut('GETkcp-users-relation');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETkcp-users-relation" onclick="cancelTryOut('GETkcp-users-relation');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETkcp-users-relation" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>kcp/users/relation</code></b>
</p>
</form>


## kcp/users/remove




> Example request:

```bash
curl -X POST \
    "http://127.0.0.1:8000/kcp/users/remove" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/kcp/users/remove"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response => response.json());
```


<div id="execution-results-POSTkcp-users-remove" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTkcp-users-remove"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTkcp-users-remove"></code></pre>
</div>
<div id="execution-error-POSTkcp-users-remove" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTkcp-users-remove"></code></pre>
</div>
<form id="form-POSTkcp-users-remove" data-method="POST" data-path="kcp/users/remove" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTkcp-users-remove', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTkcp-users-remove" onclick="tryItOut('POSTkcp-users-remove');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTkcp-users-remove" onclick="cancelTryOut('POSTkcp-users-remove');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTkcp-users-remove" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>kcp/users/remove</code></b>
</p>
</form>


## kcp/users




> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/kcp/users" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/kcp/users"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (302):

```json

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="refresh" content="0;url='http://127.0.0.1:8000/kcp/login'" />

        <title>Redirecting to http://127.0.0.1:8000/kcp/login</title>
    </head>
    <body>
        Redirecting to <a href="http://127.0.0.1:8000/kcp/login">http://127.0.0.1:8000/kcp/login</a>.
    </body>
</html>
```
<div id="execution-results-GETkcp-users" hidden>
    <blockquote>Received response<span id="execution-response-status-GETkcp-users"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETkcp-users"></code></pre>
</div>
<div id="execution-error-GETkcp-users" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETkcp-users"></code></pre>
</div>
<form id="form-GETkcp-users" data-method="GET" data-path="kcp/users" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETkcp-users', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETkcp-users" onclick="tryItOut('GETkcp-users');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETkcp-users" onclick="cancelTryOut('GETkcp-users');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETkcp-users" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>kcp/users</code></b>
</p>
</form>


## kcp/users/create




> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/kcp/users/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/kcp/users/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (302):

```json

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="refresh" content="0;url='http://127.0.0.1:8000/kcp/login'" />

        <title>Redirecting to http://127.0.0.1:8000/kcp/login</title>
    </head>
    <body>
        Redirecting to <a href="http://127.0.0.1:8000/kcp/login">http://127.0.0.1:8000/kcp/login</a>.
    </body>
</html>
```
<div id="execution-results-GETkcp-users-create" hidden>
    <blockquote>Received response<span id="execution-response-status-GETkcp-users-create"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETkcp-users-create"></code></pre>
</div>
<div id="execution-error-GETkcp-users-create" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETkcp-users-create"></code></pre>
</div>
<form id="form-GETkcp-users-create" data-method="GET" data-path="kcp/users/create" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETkcp-users-create', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETkcp-users-create" onclick="tryItOut('GETkcp-users-create');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETkcp-users-create" onclick="cancelTryOut('GETkcp-users-create');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETkcp-users-create" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>kcp/users/create</code></b>
</p>
</form>


## POST BRE(A)D - Store data.




> Example request:

```bash
curl -X POST \
    "http://127.0.0.1:8000/kcp/users" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/kcp/users"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response => response.json());
```


<div id="execution-results-POSTkcp-users" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTkcp-users"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTkcp-users"></code></pre>
</div>
<div id="execution-error-POSTkcp-users" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTkcp-users"></code></pre>
</div>
<form id="form-POSTkcp-users" data-method="POST" data-path="kcp/users" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTkcp-users', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTkcp-users" onclick="tryItOut('POSTkcp-users');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTkcp-users" onclick="cancelTryOut('POSTkcp-users');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTkcp-users" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>kcp/users</code></b>
</p>
</form>


## kcp/users/{id}




> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/kcp/users/natus" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/kcp/users/natus"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (302):

```json

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="refresh" content="0;url='http://127.0.0.1:8000/kcp/login'" />

        <title>Redirecting to http://127.0.0.1:8000/kcp/login</title>
    </head>
    <body>
        Redirecting to <a href="http://127.0.0.1:8000/kcp/login">http://127.0.0.1:8000/kcp/login</a>.
    </body>
</html>
```
<div id="execution-results-GETkcp-users--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETkcp-users--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETkcp-users--id-"></code></pre>
</div>
<div id="execution-error-GETkcp-users--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETkcp-users--id-"></code></pre>
</div>
<form id="form-GETkcp-users--id-" data-method="GET" data-path="kcp/users/{id}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETkcp-users--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETkcp-users--id-" onclick="tryItOut('GETkcp-users--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETkcp-users--id-" onclick="cancelTryOut('GETkcp-users--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETkcp-users--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>kcp/users/{id}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="GETkcp-users--id-" data-component="url" required  hidden>
<br>

</p>
</form>


## kcp/users/{id}/edit




> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/kcp/users/impedit/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/kcp/users/impedit/edit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (302):

```json

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="refresh" content="0;url='http://127.0.0.1:8000/kcp/login'" />

        <title>Redirecting to http://127.0.0.1:8000/kcp/login</title>
    </head>
    <body>
        Redirecting to <a href="http://127.0.0.1:8000/kcp/login">http://127.0.0.1:8000/kcp/login</a>.
    </body>
</html>
```
<div id="execution-results-GETkcp-users--id--edit" hidden>
    <blockquote>Received response<span id="execution-response-status-GETkcp-users--id--edit"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETkcp-users--id--edit"></code></pre>
</div>
<div id="execution-error-GETkcp-users--id--edit" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETkcp-users--id--edit"></code></pre>
</div>
<form id="form-GETkcp-users--id--edit" data-method="GET" data-path="kcp/users/{id}/edit" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETkcp-users--id--edit', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETkcp-users--id--edit" onclick="tryItOut('GETkcp-users--id--edit');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETkcp-users--id--edit" onclick="cancelTryOut('GETkcp-users--id--edit');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETkcp-users--id--edit" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>kcp/users/{id}/edit</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="GETkcp-users--id--edit" data-component="url" required  hidden>
<br>

</p>
</form>


## kcp/users/{id}




> Example request:

```bash
curl -X PUT \
    "http://127.0.0.1:8000/kcp/users/laborum" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/kcp/users/laborum"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "PUT",
    headers,
}).then(response => response.json());
```


<div id="execution-results-PUTkcp-users--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTkcp-users--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTkcp-users--id-"></code></pre>
</div>
<div id="execution-error-PUTkcp-users--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTkcp-users--id-"></code></pre>
</div>
<form id="form-PUTkcp-users--id-" data-method="PUT" data-path="kcp/users/{id}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PUTkcp-users--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PUTkcp-users--id-" onclick="tryItOut('PUTkcp-users--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PUTkcp-users--id-" onclick="cancelTryOut('PUTkcp-users--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PUTkcp-users--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>kcp/users/{id}</code></b>
</p>
<p>
<small class="badge badge-purple">PATCH</small>
 <b><code>kcp/users/{id}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="PUTkcp-users--id-" data-component="url" required  hidden>
<br>

</p>
</form>


## kcp/users/{id}




> Example request:

```bash
curl -X DELETE \
    "http://127.0.0.1:8000/kcp/users/doloremque" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/kcp/users/doloremque"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "DELETE",
    headers,
}).then(response => response.json());
```


<div id="execution-results-DELETEkcp-users--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEkcp-users--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEkcp-users--id-"></code></pre>
</div>
<div id="execution-error-DELETEkcp-users--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEkcp-users--id-"></code></pre>
</div>
<form id="form-DELETEkcp-users--id-" data-method="DELETE" data-path="kcp/users/{id}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEkcp-users--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEkcp-users--id-" onclick="tryItOut('DELETEkcp-users--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEkcp-users--id-" onclick="cancelTryOut('DELETEkcp-users--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEkcp-users--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>kcp/users/{id}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="DELETEkcp-users--id-" data-component="url" required  hidden>
<br>

</p>
</form>


## Order BREAD items.




> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/kcp/menus/order" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/kcp/menus/order"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (302):

```json

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="refresh" content="0;url='http://127.0.0.1:8000/kcp/login'" />

        <title>Redirecting to http://127.0.0.1:8000/kcp/login</title>
    </head>
    <body>
        Redirecting to <a href="http://127.0.0.1:8000/kcp/login">http://127.0.0.1:8000/kcp/login</a>.
    </body>
</html>
```
<div id="execution-results-GETkcp-menus-order" hidden>
    <blockquote>Received response<span id="execution-response-status-GETkcp-menus-order"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETkcp-menus-order"></code></pre>
</div>
<div id="execution-error-GETkcp-menus-order" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETkcp-menus-order"></code></pre>
</div>
<form id="form-GETkcp-menus-order" data-method="GET" data-path="kcp/menus/order" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETkcp-menus-order', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETkcp-menus-order" onclick="tryItOut('GETkcp-menus-order');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETkcp-menus-order" onclick="cancelTryOut('GETkcp-menus-order');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETkcp-menus-order" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>kcp/menus/order</code></b>
</p>
</form>


## kcp/menus/action




> Example request:

```bash
curl -X POST \
    "http://127.0.0.1:8000/kcp/menus/action" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/kcp/menus/action"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response => response.json());
```


<div id="execution-results-POSTkcp-menus-action" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTkcp-menus-action"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTkcp-menus-action"></code></pre>
</div>
<div id="execution-error-POSTkcp-menus-action" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTkcp-menus-action"></code></pre>
</div>
<form id="form-POSTkcp-menus-action" data-method="POST" data-path="kcp/menus/action" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTkcp-menus-action', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTkcp-menus-action" onclick="tryItOut('POSTkcp-menus-action');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTkcp-menus-action" onclick="cancelTryOut('POSTkcp-menus-action');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTkcp-menus-action" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>kcp/menus/action</code></b>
</p>
</form>


## kcp/menus/order




> Example request:

```bash
curl -X POST \
    "http://127.0.0.1:8000/kcp/menus/order" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/kcp/menus/order"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response => response.json());
```


<div id="execution-results-POSTkcp-menus-order" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTkcp-menus-order"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTkcp-menus-order"></code></pre>
</div>
<div id="execution-error-POSTkcp-menus-order" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTkcp-menus-order"></code></pre>
</div>
<form id="form-POSTkcp-menus-order" data-method="POST" data-path="kcp/menus/order" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTkcp-menus-order', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTkcp-menus-order" onclick="tryItOut('POSTkcp-menus-order');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTkcp-menus-order" onclick="cancelTryOut('POSTkcp-menus-order');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTkcp-menus-order" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>kcp/menus/order</code></b>
</p>
</form>


## kcp/menus/{id}/restore




> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/kcp/menus/tempore/restore" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/kcp/menus/tempore/restore"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (302):

```json

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="refresh" content="0;url='http://127.0.0.1:8000/kcp/login'" />

        <title>Redirecting to http://127.0.0.1:8000/kcp/login</title>
    </head>
    <body>
        Redirecting to <a href="http://127.0.0.1:8000/kcp/login">http://127.0.0.1:8000/kcp/login</a>.
    </body>
</html>
```
<div id="execution-results-GETkcp-menus--id--restore" hidden>
    <blockquote>Received response<span id="execution-response-status-GETkcp-menus--id--restore"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETkcp-menus--id--restore"></code></pre>
</div>
<div id="execution-error-GETkcp-menus--id--restore" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETkcp-menus--id--restore"></code></pre>
</div>
<form id="form-GETkcp-menus--id--restore" data-method="GET" data-path="kcp/menus/{id}/restore" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETkcp-menus--id--restore', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETkcp-menus--id--restore" onclick="tryItOut('GETkcp-menus--id--restore');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETkcp-menus--id--restore" onclick="cancelTryOut('GETkcp-menus--id--restore');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETkcp-menus--id--restore" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>kcp/menus/{id}/restore</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="GETkcp-menus--id--restore" data-component="url" required  hidden>
<br>

</p>
</form>


## Get BREAD relations data.




> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/kcp/menus/relation" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/kcp/menus/relation"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (302):

```json

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="refresh" content="0;url='http://127.0.0.1:8000/kcp/login'" />

        <title>Redirecting to http://127.0.0.1:8000/kcp/login</title>
    </head>
    <body>
        Redirecting to <a href="http://127.0.0.1:8000/kcp/login">http://127.0.0.1:8000/kcp/login</a>.
    </body>
</html>
```
<div id="execution-results-GETkcp-menus-relation" hidden>
    <blockquote>Received response<span id="execution-response-status-GETkcp-menus-relation"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETkcp-menus-relation"></code></pre>
</div>
<div id="execution-error-GETkcp-menus-relation" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETkcp-menus-relation"></code></pre>
</div>
<form id="form-GETkcp-menus-relation" data-method="GET" data-path="kcp/menus/relation" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETkcp-menus-relation', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETkcp-menus-relation" onclick="tryItOut('GETkcp-menus-relation');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETkcp-menus-relation" onclick="cancelTryOut('GETkcp-menus-relation');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETkcp-menus-relation" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>kcp/menus/relation</code></b>
</p>
</form>


## kcp/menus/remove




> Example request:

```bash
curl -X POST \
    "http://127.0.0.1:8000/kcp/menus/remove" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/kcp/menus/remove"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response => response.json());
```


<div id="execution-results-POSTkcp-menus-remove" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTkcp-menus-remove"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTkcp-menus-remove"></code></pre>
</div>
<div id="execution-error-POSTkcp-menus-remove" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTkcp-menus-remove"></code></pre>
</div>
<form id="form-POSTkcp-menus-remove" data-method="POST" data-path="kcp/menus/remove" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTkcp-menus-remove', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTkcp-menus-remove" onclick="tryItOut('POSTkcp-menus-remove');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTkcp-menus-remove" onclick="cancelTryOut('POSTkcp-menus-remove');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTkcp-menus-remove" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>kcp/menus/remove</code></b>
</p>
</form>


## kcp/menus




> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/kcp/menus" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/kcp/menus"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (302):

```json

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="refresh" content="0;url='http://127.0.0.1:8000/kcp/login'" />

        <title>Redirecting to http://127.0.0.1:8000/kcp/login</title>
    </head>
    <body>
        Redirecting to <a href="http://127.0.0.1:8000/kcp/login">http://127.0.0.1:8000/kcp/login</a>.
    </body>
</html>
```
<div id="execution-results-GETkcp-menus" hidden>
    <blockquote>Received response<span id="execution-response-status-GETkcp-menus"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETkcp-menus"></code></pre>
</div>
<div id="execution-error-GETkcp-menus" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETkcp-menus"></code></pre>
</div>
<form id="form-GETkcp-menus" data-method="GET" data-path="kcp/menus" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETkcp-menus', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETkcp-menus" onclick="tryItOut('GETkcp-menus');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETkcp-menus" onclick="cancelTryOut('GETkcp-menus');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETkcp-menus" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>kcp/menus</code></b>
</p>
</form>


## kcp/menus/create




> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/kcp/menus/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/kcp/menus/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (302):

```json

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="refresh" content="0;url='http://127.0.0.1:8000/kcp/login'" />

        <title>Redirecting to http://127.0.0.1:8000/kcp/login</title>
    </head>
    <body>
        Redirecting to <a href="http://127.0.0.1:8000/kcp/login">http://127.0.0.1:8000/kcp/login</a>.
    </body>
</html>
```
<div id="execution-results-GETkcp-menus-create" hidden>
    <blockquote>Received response<span id="execution-response-status-GETkcp-menus-create"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETkcp-menus-create"></code></pre>
</div>
<div id="execution-error-GETkcp-menus-create" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETkcp-menus-create"></code></pre>
</div>
<form id="form-GETkcp-menus-create" data-method="GET" data-path="kcp/menus/create" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETkcp-menus-create', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETkcp-menus-create" onclick="tryItOut('GETkcp-menus-create');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETkcp-menus-create" onclick="cancelTryOut('GETkcp-menus-create');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETkcp-menus-create" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>kcp/menus/create</code></b>
</p>
</form>


## POST BRE(A)D - Store data.




> Example request:

```bash
curl -X POST \
    "http://127.0.0.1:8000/kcp/menus" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/kcp/menus"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response => response.json());
```


<div id="execution-results-POSTkcp-menus" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTkcp-menus"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTkcp-menus"></code></pre>
</div>
<div id="execution-error-POSTkcp-menus" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTkcp-menus"></code></pre>
</div>
<form id="form-POSTkcp-menus" data-method="POST" data-path="kcp/menus" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTkcp-menus', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTkcp-menus" onclick="tryItOut('POSTkcp-menus');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTkcp-menus" onclick="cancelTryOut('POSTkcp-menus');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTkcp-menus" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>kcp/menus</code></b>
</p>
</form>


## kcp/menus/{id}




> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/kcp/menus/labore" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/kcp/menus/labore"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (302):

```json

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="refresh" content="0;url='http://127.0.0.1:8000/kcp/login'" />

        <title>Redirecting to http://127.0.0.1:8000/kcp/login</title>
    </head>
    <body>
        Redirecting to <a href="http://127.0.0.1:8000/kcp/login">http://127.0.0.1:8000/kcp/login</a>.
    </body>
</html>
```
<div id="execution-results-GETkcp-menus--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETkcp-menus--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETkcp-menus--id-"></code></pre>
</div>
<div id="execution-error-GETkcp-menus--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETkcp-menus--id-"></code></pre>
</div>
<form id="form-GETkcp-menus--id-" data-method="GET" data-path="kcp/menus/{id}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETkcp-menus--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETkcp-menus--id-" onclick="tryItOut('GETkcp-menus--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETkcp-menus--id-" onclick="cancelTryOut('GETkcp-menus--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETkcp-menus--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>kcp/menus/{id}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="GETkcp-menus--id-" data-component="url" required  hidden>
<br>

</p>
</form>


## kcp/menus/{id}/edit




> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/kcp/menus/cupiditate/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/kcp/menus/cupiditate/edit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (302):

```json

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="refresh" content="0;url='http://127.0.0.1:8000/kcp/login'" />

        <title>Redirecting to http://127.0.0.1:8000/kcp/login</title>
    </head>
    <body>
        Redirecting to <a href="http://127.0.0.1:8000/kcp/login">http://127.0.0.1:8000/kcp/login</a>.
    </body>
</html>
```
<div id="execution-results-GETkcp-menus--id--edit" hidden>
    <blockquote>Received response<span id="execution-response-status-GETkcp-menus--id--edit"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETkcp-menus--id--edit"></code></pre>
</div>
<div id="execution-error-GETkcp-menus--id--edit" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETkcp-menus--id--edit"></code></pre>
</div>
<form id="form-GETkcp-menus--id--edit" data-method="GET" data-path="kcp/menus/{id}/edit" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETkcp-menus--id--edit', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETkcp-menus--id--edit" onclick="tryItOut('GETkcp-menus--id--edit');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETkcp-menus--id--edit" onclick="cancelTryOut('GETkcp-menus--id--edit');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETkcp-menus--id--edit" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>kcp/menus/{id}/edit</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="GETkcp-menus--id--edit" data-component="url" required  hidden>
<br>

</p>
</form>


## kcp/menus/{id}




> Example request:

```bash
curl -X PUT \
    "http://127.0.0.1:8000/kcp/menus/suscipit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/kcp/menus/suscipit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "PUT",
    headers,
}).then(response => response.json());
```


<div id="execution-results-PUTkcp-menus--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTkcp-menus--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTkcp-menus--id-"></code></pre>
</div>
<div id="execution-error-PUTkcp-menus--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTkcp-menus--id-"></code></pre>
</div>
<form id="form-PUTkcp-menus--id-" data-method="PUT" data-path="kcp/menus/{id}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PUTkcp-menus--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PUTkcp-menus--id-" onclick="tryItOut('PUTkcp-menus--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PUTkcp-menus--id-" onclick="cancelTryOut('PUTkcp-menus--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PUTkcp-menus--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>kcp/menus/{id}</code></b>
</p>
<p>
<small class="badge badge-purple">PATCH</small>
 <b><code>kcp/menus/{id}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="PUTkcp-menus--id-" data-component="url" required  hidden>
<br>

</p>
</form>


## kcp/menus/{id}




> Example request:

```bash
curl -X DELETE \
    "http://127.0.0.1:8000/kcp/menus/voluptas" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/kcp/menus/voluptas"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "DELETE",
    headers,
}).then(response => response.json());
```


<div id="execution-results-DELETEkcp-menus--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEkcp-menus--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEkcp-menus--id-"></code></pre>
</div>
<div id="execution-error-DELETEkcp-menus--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEkcp-menus--id-"></code></pre>
</div>
<form id="form-DELETEkcp-menus--id-" data-method="DELETE" data-path="kcp/menus/{id}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEkcp-menus--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEkcp-menus--id-" onclick="tryItOut('DELETEkcp-menus--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEkcp-menus--id-" onclick="cancelTryOut('DELETEkcp-menus--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEkcp-menus--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>kcp/menus/{id}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="DELETEkcp-menus--id-" data-component="url" required  hidden>
<br>

</p>
</form>


## Order BREAD items.




> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/kcp/metas/order" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/kcp/metas/order"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (302):

```json

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="refresh" content="0;url='http://127.0.0.1:8000/kcp/login'" />

        <title>Redirecting to http://127.0.0.1:8000/kcp/login</title>
    </head>
    <body>
        Redirecting to <a href="http://127.0.0.1:8000/kcp/login">http://127.0.0.1:8000/kcp/login</a>.
    </body>
</html>
```
<div id="execution-results-GETkcp-metas-order" hidden>
    <blockquote>Received response<span id="execution-response-status-GETkcp-metas-order"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETkcp-metas-order"></code></pre>
</div>
<div id="execution-error-GETkcp-metas-order" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETkcp-metas-order"></code></pre>
</div>
<form id="form-GETkcp-metas-order" data-method="GET" data-path="kcp/metas/order" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETkcp-metas-order', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETkcp-metas-order" onclick="tryItOut('GETkcp-metas-order');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETkcp-metas-order" onclick="cancelTryOut('GETkcp-metas-order');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETkcp-metas-order" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>kcp/metas/order</code></b>
</p>
</form>


## kcp/metas/action




> Example request:

```bash
curl -X POST \
    "http://127.0.0.1:8000/kcp/metas/action" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/kcp/metas/action"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response => response.json());
```


<div id="execution-results-POSTkcp-metas-action" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTkcp-metas-action"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTkcp-metas-action"></code></pre>
</div>
<div id="execution-error-POSTkcp-metas-action" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTkcp-metas-action"></code></pre>
</div>
<form id="form-POSTkcp-metas-action" data-method="POST" data-path="kcp/metas/action" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTkcp-metas-action', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTkcp-metas-action" onclick="tryItOut('POSTkcp-metas-action');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTkcp-metas-action" onclick="cancelTryOut('POSTkcp-metas-action');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTkcp-metas-action" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>kcp/metas/action</code></b>
</p>
</form>


## kcp/metas/order




> Example request:

```bash
curl -X POST \
    "http://127.0.0.1:8000/kcp/metas/order" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/kcp/metas/order"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response => response.json());
```


<div id="execution-results-POSTkcp-metas-order" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTkcp-metas-order"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTkcp-metas-order"></code></pre>
</div>
<div id="execution-error-POSTkcp-metas-order" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTkcp-metas-order"></code></pre>
</div>
<form id="form-POSTkcp-metas-order" data-method="POST" data-path="kcp/metas/order" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTkcp-metas-order', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTkcp-metas-order" onclick="tryItOut('POSTkcp-metas-order');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTkcp-metas-order" onclick="cancelTryOut('POSTkcp-metas-order');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTkcp-metas-order" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>kcp/metas/order</code></b>
</p>
</form>


## kcp/metas/{id}/restore




> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/kcp/metas/nesciunt/restore" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/kcp/metas/nesciunt/restore"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (302):

```json

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="refresh" content="0;url='http://127.0.0.1:8000/kcp/login'" />

        <title>Redirecting to http://127.0.0.1:8000/kcp/login</title>
    </head>
    <body>
        Redirecting to <a href="http://127.0.0.1:8000/kcp/login">http://127.0.0.1:8000/kcp/login</a>.
    </body>
</html>
```
<div id="execution-results-GETkcp-metas--id--restore" hidden>
    <blockquote>Received response<span id="execution-response-status-GETkcp-metas--id--restore"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETkcp-metas--id--restore"></code></pre>
</div>
<div id="execution-error-GETkcp-metas--id--restore" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETkcp-metas--id--restore"></code></pre>
</div>
<form id="form-GETkcp-metas--id--restore" data-method="GET" data-path="kcp/metas/{id}/restore" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETkcp-metas--id--restore', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETkcp-metas--id--restore" onclick="tryItOut('GETkcp-metas--id--restore');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETkcp-metas--id--restore" onclick="cancelTryOut('GETkcp-metas--id--restore');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETkcp-metas--id--restore" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>kcp/metas/{id}/restore</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="GETkcp-metas--id--restore" data-component="url" required  hidden>
<br>

</p>
</form>


## Get BREAD relations data.




> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/kcp/metas/relation" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/kcp/metas/relation"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (302):

```json

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="refresh" content="0;url='http://127.0.0.1:8000/kcp/login'" />

        <title>Redirecting to http://127.0.0.1:8000/kcp/login</title>
    </head>
    <body>
        Redirecting to <a href="http://127.0.0.1:8000/kcp/login">http://127.0.0.1:8000/kcp/login</a>.
    </body>
</html>
```
<div id="execution-results-GETkcp-metas-relation" hidden>
    <blockquote>Received response<span id="execution-response-status-GETkcp-metas-relation"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETkcp-metas-relation"></code></pre>
</div>
<div id="execution-error-GETkcp-metas-relation" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETkcp-metas-relation"></code></pre>
</div>
<form id="form-GETkcp-metas-relation" data-method="GET" data-path="kcp/metas/relation" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETkcp-metas-relation', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETkcp-metas-relation" onclick="tryItOut('GETkcp-metas-relation');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETkcp-metas-relation" onclick="cancelTryOut('GETkcp-metas-relation');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETkcp-metas-relation" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>kcp/metas/relation</code></b>
</p>
</form>


## kcp/metas/remove




> Example request:

```bash
curl -X POST \
    "http://127.0.0.1:8000/kcp/metas/remove" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/kcp/metas/remove"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response => response.json());
```


<div id="execution-results-POSTkcp-metas-remove" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTkcp-metas-remove"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTkcp-metas-remove"></code></pre>
</div>
<div id="execution-error-POSTkcp-metas-remove" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTkcp-metas-remove"></code></pre>
</div>
<form id="form-POSTkcp-metas-remove" data-method="POST" data-path="kcp/metas/remove" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTkcp-metas-remove', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTkcp-metas-remove" onclick="tryItOut('POSTkcp-metas-remove');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTkcp-metas-remove" onclick="cancelTryOut('POSTkcp-metas-remove');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTkcp-metas-remove" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>kcp/metas/remove</code></b>
</p>
</form>


## kcp/metas




> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/kcp/metas" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/kcp/metas"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (302):

```json

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="refresh" content="0;url='http://127.0.0.1:8000/kcp/login'" />

        <title>Redirecting to http://127.0.0.1:8000/kcp/login</title>
    </head>
    <body>
        Redirecting to <a href="http://127.0.0.1:8000/kcp/login">http://127.0.0.1:8000/kcp/login</a>.
    </body>
</html>
```
<div id="execution-results-GETkcp-metas" hidden>
    <blockquote>Received response<span id="execution-response-status-GETkcp-metas"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETkcp-metas"></code></pre>
</div>
<div id="execution-error-GETkcp-metas" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETkcp-metas"></code></pre>
</div>
<form id="form-GETkcp-metas" data-method="GET" data-path="kcp/metas" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETkcp-metas', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETkcp-metas" onclick="tryItOut('GETkcp-metas');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETkcp-metas" onclick="cancelTryOut('GETkcp-metas');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETkcp-metas" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>kcp/metas</code></b>
</p>
</form>


## kcp/metas/create




> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/kcp/metas/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/kcp/metas/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (302):

```json

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="refresh" content="0;url='http://127.0.0.1:8000/kcp/login'" />

        <title>Redirecting to http://127.0.0.1:8000/kcp/login</title>
    </head>
    <body>
        Redirecting to <a href="http://127.0.0.1:8000/kcp/login">http://127.0.0.1:8000/kcp/login</a>.
    </body>
</html>
```
<div id="execution-results-GETkcp-metas-create" hidden>
    <blockquote>Received response<span id="execution-response-status-GETkcp-metas-create"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETkcp-metas-create"></code></pre>
</div>
<div id="execution-error-GETkcp-metas-create" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETkcp-metas-create"></code></pre>
</div>
<form id="form-GETkcp-metas-create" data-method="GET" data-path="kcp/metas/create" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETkcp-metas-create', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETkcp-metas-create" onclick="tryItOut('GETkcp-metas-create');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETkcp-metas-create" onclick="cancelTryOut('GETkcp-metas-create');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETkcp-metas-create" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>kcp/metas/create</code></b>
</p>
</form>


## POST BRE(A)D - Store data.




> Example request:

```bash
curl -X POST \
    "http://127.0.0.1:8000/kcp/metas" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/kcp/metas"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response => response.json());
```


<div id="execution-results-POSTkcp-metas" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTkcp-metas"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTkcp-metas"></code></pre>
</div>
<div id="execution-error-POSTkcp-metas" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTkcp-metas"></code></pre>
</div>
<form id="form-POSTkcp-metas" data-method="POST" data-path="kcp/metas" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTkcp-metas', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTkcp-metas" onclick="tryItOut('POSTkcp-metas');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTkcp-metas" onclick="cancelTryOut('POSTkcp-metas');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTkcp-metas" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>kcp/metas</code></b>
</p>
</form>


## kcp/metas/{id}




> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/kcp/metas/et" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/kcp/metas/et"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (302):

```json

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="refresh" content="0;url='http://127.0.0.1:8000/kcp/login'" />

        <title>Redirecting to http://127.0.0.1:8000/kcp/login</title>
    </head>
    <body>
        Redirecting to <a href="http://127.0.0.1:8000/kcp/login">http://127.0.0.1:8000/kcp/login</a>.
    </body>
</html>
```
<div id="execution-results-GETkcp-metas--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETkcp-metas--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETkcp-metas--id-"></code></pre>
</div>
<div id="execution-error-GETkcp-metas--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETkcp-metas--id-"></code></pre>
</div>
<form id="form-GETkcp-metas--id-" data-method="GET" data-path="kcp/metas/{id}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETkcp-metas--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETkcp-metas--id-" onclick="tryItOut('GETkcp-metas--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETkcp-metas--id-" onclick="cancelTryOut('GETkcp-metas--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETkcp-metas--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>kcp/metas/{id}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="GETkcp-metas--id-" data-component="url" required  hidden>
<br>

</p>
</form>


## kcp/metas/{id}/edit




> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/kcp/metas/ut/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/kcp/metas/ut/edit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (302):

```json

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="refresh" content="0;url='http://127.0.0.1:8000/kcp/login'" />

        <title>Redirecting to http://127.0.0.1:8000/kcp/login</title>
    </head>
    <body>
        Redirecting to <a href="http://127.0.0.1:8000/kcp/login">http://127.0.0.1:8000/kcp/login</a>.
    </body>
</html>
```
<div id="execution-results-GETkcp-metas--id--edit" hidden>
    <blockquote>Received response<span id="execution-response-status-GETkcp-metas--id--edit"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETkcp-metas--id--edit"></code></pre>
</div>
<div id="execution-error-GETkcp-metas--id--edit" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETkcp-metas--id--edit"></code></pre>
</div>
<form id="form-GETkcp-metas--id--edit" data-method="GET" data-path="kcp/metas/{id}/edit" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETkcp-metas--id--edit', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETkcp-metas--id--edit" onclick="tryItOut('GETkcp-metas--id--edit');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETkcp-metas--id--edit" onclick="cancelTryOut('GETkcp-metas--id--edit');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETkcp-metas--id--edit" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>kcp/metas/{id}/edit</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="GETkcp-metas--id--edit" data-component="url" required  hidden>
<br>

</p>
</form>


## kcp/metas/{id}




> Example request:

```bash
curl -X PUT \
    "http://127.0.0.1:8000/kcp/metas/rerum" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/kcp/metas/rerum"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "PUT",
    headers,
}).then(response => response.json());
```


<div id="execution-results-PUTkcp-metas--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTkcp-metas--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTkcp-metas--id-"></code></pre>
</div>
<div id="execution-error-PUTkcp-metas--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTkcp-metas--id-"></code></pre>
</div>
<form id="form-PUTkcp-metas--id-" data-method="PUT" data-path="kcp/metas/{id}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PUTkcp-metas--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PUTkcp-metas--id-" onclick="tryItOut('PUTkcp-metas--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PUTkcp-metas--id-" onclick="cancelTryOut('PUTkcp-metas--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PUTkcp-metas--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>kcp/metas/{id}</code></b>
</p>
<p>
<small class="badge badge-purple">PATCH</small>
 <b><code>kcp/metas/{id}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="PUTkcp-metas--id-" data-component="url" required  hidden>
<br>

</p>
</form>


## kcp/metas/{id}




> Example request:

```bash
curl -X DELETE \
    "http://127.0.0.1:8000/kcp/metas/nostrum" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/kcp/metas/nostrum"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "DELETE",
    headers,
}).then(response => response.json());
```


<div id="execution-results-DELETEkcp-metas--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEkcp-metas--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEkcp-metas--id-"></code></pre>
</div>
<div id="execution-error-DELETEkcp-metas--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEkcp-metas--id-"></code></pre>
</div>
<form id="form-DELETEkcp-metas--id-" data-method="DELETE" data-path="kcp/metas/{id}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEkcp-metas--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEkcp-metas--id-" onclick="tryItOut('DELETEkcp-metas--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEkcp-metas--id-" onclick="cancelTryOut('DELETEkcp-metas--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEkcp-metas--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>kcp/metas/{id}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="DELETEkcp-metas--id-" data-component="url" required  hidden>
<br>

</p>
</form>


## Order BREAD items.




> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/kcp/roles/order" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/kcp/roles/order"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (302):

```json

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="refresh" content="0;url='http://127.0.0.1:8000/kcp/login'" />

        <title>Redirecting to http://127.0.0.1:8000/kcp/login</title>
    </head>
    <body>
        Redirecting to <a href="http://127.0.0.1:8000/kcp/login">http://127.0.0.1:8000/kcp/login</a>.
    </body>
</html>
```
<div id="execution-results-GETkcp-roles-order" hidden>
    <blockquote>Received response<span id="execution-response-status-GETkcp-roles-order"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETkcp-roles-order"></code></pre>
</div>
<div id="execution-error-GETkcp-roles-order" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETkcp-roles-order"></code></pre>
</div>
<form id="form-GETkcp-roles-order" data-method="GET" data-path="kcp/roles/order" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETkcp-roles-order', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETkcp-roles-order" onclick="tryItOut('GETkcp-roles-order');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETkcp-roles-order" onclick="cancelTryOut('GETkcp-roles-order');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETkcp-roles-order" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>kcp/roles/order</code></b>
</p>
</form>


## kcp/roles/action




> Example request:

```bash
curl -X POST \
    "http://127.0.0.1:8000/kcp/roles/action" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/kcp/roles/action"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response => response.json());
```


<div id="execution-results-POSTkcp-roles-action" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTkcp-roles-action"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTkcp-roles-action"></code></pre>
</div>
<div id="execution-error-POSTkcp-roles-action" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTkcp-roles-action"></code></pre>
</div>
<form id="form-POSTkcp-roles-action" data-method="POST" data-path="kcp/roles/action" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTkcp-roles-action', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTkcp-roles-action" onclick="tryItOut('POSTkcp-roles-action');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTkcp-roles-action" onclick="cancelTryOut('POSTkcp-roles-action');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTkcp-roles-action" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>kcp/roles/action</code></b>
</p>
</form>


## kcp/roles/order




> Example request:

```bash
curl -X POST \
    "http://127.0.0.1:8000/kcp/roles/order" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/kcp/roles/order"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response => response.json());
```


<div id="execution-results-POSTkcp-roles-order" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTkcp-roles-order"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTkcp-roles-order"></code></pre>
</div>
<div id="execution-error-POSTkcp-roles-order" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTkcp-roles-order"></code></pre>
</div>
<form id="form-POSTkcp-roles-order" data-method="POST" data-path="kcp/roles/order" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTkcp-roles-order', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTkcp-roles-order" onclick="tryItOut('POSTkcp-roles-order');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTkcp-roles-order" onclick="cancelTryOut('POSTkcp-roles-order');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTkcp-roles-order" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>kcp/roles/order</code></b>
</p>
</form>


## kcp/roles/{id}/restore




> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/kcp/roles/quae/restore" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/kcp/roles/quae/restore"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (302):

```json

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="refresh" content="0;url='http://127.0.0.1:8000/kcp/login'" />

        <title>Redirecting to http://127.0.0.1:8000/kcp/login</title>
    </head>
    <body>
        Redirecting to <a href="http://127.0.0.1:8000/kcp/login">http://127.0.0.1:8000/kcp/login</a>.
    </body>
</html>
```
<div id="execution-results-GETkcp-roles--id--restore" hidden>
    <blockquote>Received response<span id="execution-response-status-GETkcp-roles--id--restore"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETkcp-roles--id--restore"></code></pre>
</div>
<div id="execution-error-GETkcp-roles--id--restore" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETkcp-roles--id--restore"></code></pre>
</div>
<form id="form-GETkcp-roles--id--restore" data-method="GET" data-path="kcp/roles/{id}/restore" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETkcp-roles--id--restore', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETkcp-roles--id--restore" onclick="tryItOut('GETkcp-roles--id--restore');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETkcp-roles--id--restore" onclick="cancelTryOut('GETkcp-roles--id--restore');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETkcp-roles--id--restore" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>kcp/roles/{id}/restore</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="GETkcp-roles--id--restore" data-component="url" required  hidden>
<br>

</p>
</form>


## Get BREAD relations data.




> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/kcp/roles/relation" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/kcp/roles/relation"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (302):

```json

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="refresh" content="0;url='http://127.0.0.1:8000/kcp/login'" />

        <title>Redirecting to http://127.0.0.1:8000/kcp/login</title>
    </head>
    <body>
        Redirecting to <a href="http://127.0.0.1:8000/kcp/login">http://127.0.0.1:8000/kcp/login</a>.
    </body>
</html>
```
<div id="execution-results-GETkcp-roles-relation" hidden>
    <blockquote>Received response<span id="execution-response-status-GETkcp-roles-relation"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETkcp-roles-relation"></code></pre>
</div>
<div id="execution-error-GETkcp-roles-relation" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETkcp-roles-relation"></code></pre>
</div>
<form id="form-GETkcp-roles-relation" data-method="GET" data-path="kcp/roles/relation" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETkcp-roles-relation', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETkcp-roles-relation" onclick="tryItOut('GETkcp-roles-relation');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETkcp-roles-relation" onclick="cancelTryOut('GETkcp-roles-relation');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETkcp-roles-relation" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>kcp/roles/relation</code></b>
</p>
</form>


## kcp/roles/remove




> Example request:

```bash
curl -X POST \
    "http://127.0.0.1:8000/kcp/roles/remove" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/kcp/roles/remove"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response => response.json());
```


<div id="execution-results-POSTkcp-roles-remove" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTkcp-roles-remove"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTkcp-roles-remove"></code></pre>
</div>
<div id="execution-error-POSTkcp-roles-remove" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTkcp-roles-remove"></code></pre>
</div>
<form id="form-POSTkcp-roles-remove" data-method="POST" data-path="kcp/roles/remove" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTkcp-roles-remove', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTkcp-roles-remove" onclick="tryItOut('POSTkcp-roles-remove');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTkcp-roles-remove" onclick="cancelTryOut('POSTkcp-roles-remove');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTkcp-roles-remove" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>kcp/roles/remove</code></b>
</p>
</form>


## kcp/roles




> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/kcp/roles" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/kcp/roles"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (302):

```json

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="refresh" content="0;url='http://127.0.0.1:8000/kcp/login'" />

        <title>Redirecting to http://127.0.0.1:8000/kcp/login</title>
    </head>
    <body>
        Redirecting to <a href="http://127.0.0.1:8000/kcp/login">http://127.0.0.1:8000/kcp/login</a>.
    </body>
</html>
```
<div id="execution-results-GETkcp-roles" hidden>
    <blockquote>Received response<span id="execution-response-status-GETkcp-roles"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETkcp-roles"></code></pre>
</div>
<div id="execution-error-GETkcp-roles" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETkcp-roles"></code></pre>
</div>
<form id="form-GETkcp-roles" data-method="GET" data-path="kcp/roles" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETkcp-roles', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETkcp-roles" onclick="tryItOut('GETkcp-roles');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETkcp-roles" onclick="cancelTryOut('GETkcp-roles');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETkcp-roles" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>kcp/roles</code></b>
</p>
</form>


## kcp/roles/create




> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/kcp/roles/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/kcp/roles/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (302):

```json

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="refresh" content="0;url='http://127.0.0.1:8000/kcp/login'" />

        <title>Redirecting to http://127.0.0.1:8000/kcp/login</title>
    </head>
    <body>
        Redirecting to <a href="http://127.0.0.1:8000/kcp/login">http://127.0.0.1:8000/kcp/login</a>.
    </body>
</html>
```
<div id="execution-results-GETkcp-roles-create" hidden>
    <blockquote>Received response<span id="execution-response-status-GETkcp-roles-create"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETkcp-roles-create"></code></pre>
</div>
<div id="execution-error-GETkcp-roles-create" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETkcp-roles-create"></code></pre>
</div>
<form id="form-GETkcp-roles-create" data-method="GET" data-path="kcp/roles/create" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETkcp-roles-create', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETkcp-roles-create" onclick="tryItOut('GETkcp-roles-create');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETkcp-roles-create" onclick="cancelTryOut('GETkcp-roles-create');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETkcp-roles-create" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>kcp/roles/create</code></b>
</p>
</form>


## kcp/roles




> Example request:

```bash
curl -X POST \
    "http://127.0.0.1:8000/kcp/roles" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/kcp/roles"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response => response.json());
```


<div id="execution-results-POSTkcp-roles" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTkcp-roles"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTkcp-roles"></code></pre>
</div>
<div id="execution-error-POSTkcp-roles" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTkcp-roles"></code></pre>
</div>
<form id="form-POSTkcp-roles" data-method="POST" data-path="kcp/roles" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTkcp-roles', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTkcp-roles" onclick="tryItOut('POSTkcp-roles');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTkcp-roles" onclick="cancelTryOut('POSTkcp-roles');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTkcp-roles" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>kcp/roles</code></b>
</p>
</form>


## kcp/roles/{id}




> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/kcp/roles/sunt" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/kcp/roles/sunt"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (302):

```json

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="refresh" content="0;url='http://127.0.0.1:8000/kcp/login'" />

        <title>Redirecting to http://127.0.0.1:8000/kcp/login</title>
    </head>
    <body>
        Redirecting to <a href="http://127.0.0.1:8000/kcp/login">http://127.0.0.1:8000/kcp/login</a>.
    </body>
</html>
```
<div id="execution-results-GETkcp-roles--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETkcp-roles--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETkcp-roles--id-"></code></pre>
</div>
<div id="execution-error-GETkcp-roles--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETkcp-roles--id-"></code></pre>
</div>
<form id="form-GETkcp-roles--id-" data-method="GET" data-path="kcp/roles/{id}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETkcp-roles--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETkcp-roles--id-" onclick="tryItOut('GETkcp-roles--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETkcp-roles--id-" onclick="cancelTryOut('GETkcp-roles--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETkcp-roles--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>kcp/roles/{id}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="GETkcp-roles--id-" data-component="url" required  hidden>
<br>

</p>
</form>


## kcp/roles/{id}/edit




> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/kcp/roles/et/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/kcp/roles/et/edit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (302):

```json

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="refresh" content="0;url='http://127.0.0.1:8000/kcp/login'" />

        <title>Redirecting to http://127.0.0.1:8000/kcp/login</title>
    </head>
    <body>
        Redirecting to <a href="http://127.0.0.1:8000/kcp/login">http://127.0.0.1:8000/kcp/login</a>.
    </body>
</html>
```
<div id="execution-results-GETkcp-roles--id--edit" hidden>
    <blockquote>Received response<span id="execution-response-status-GETkcp-roles--id--edit"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETkcp-roles--id--edit"></code></pre>
</div>
<div id="execution-error-GETkcp-roles--id--edit" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETkcp-roles--id--edit"></code></pre>
</div>
<form id="form-GETkcp-roles--id--edit" data-method="GET" data-path="kcp/roles/{id}/edit" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETkcp-roles--id--edit', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETkcp-roles--id--edit" onclick="tryItOut('GETkcp-roles--id--edit');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETkcp-roles--id--edit" onclick="cancelTryOut('GETkcp-roles--id--edit');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETkcp-roles--id--edit" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>kcp/roles/{id}/edit</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="GETkcp-roles--id--edit" data-component="url" required  hidden>
<br>

</p>
</form>


## kcp/roles/{id}




> Example request:

```bash
curl -X PUT \
    "http://127.0.0.1:8000/kcp/roles/quia" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/kcp/roles/quia"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "PUT",
    headers,
}).then(response => response.json());
```


<div id="execution-results-PUTkcp-roles--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTkcp-roles--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTkcp-roles--id-"></code></pre>
</div>
<div id="execution-error-PUTkcp-roles--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTkcp-roles--id-"></code></pre>
</div>
<form id="form-PUTkcp-roles--id-" data-method="PUT" data-path="kcp/roles/{id}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PUTkcp-roles--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PUTkcp-roles--id-" onclick="tryItOut('PUTkcp-roles--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PUTkcp-roles--id-" onclick="cancelTryOut('PUTkcp-roles--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PUTkcp-roles--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>kcp/roles/{id}</code></b>
</p>
<p>
<small class="badge badge-purple">PATCH</small>
 <b><code>kcp/roles/{id}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="PUTkcp-roles--id-" data-component="url" required  hidden>
<br>

</p>
</form>


## kcp/roles/{id}




> Example request:

```bash
curl -X DELETE \
    "http://127.0.0.1:8000/kcp/roles/occaecati" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/kcp/roles/occaecati"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "DELETE",
    headers,
}).then(response => response.json());
```


<div id="execution-results-DELETEkcp-roles--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEkcp-roles--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEkcp-roles--id-"></code></pre>
</div>
<div id="execution-error-DELETEkcp-roles--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEkcp-roles--id-"></code></pre>
</div>
<form id="form-DELETEkcp-roles--id-" data-method="DELETE" data-path="kcp/roles/{id}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEkcp-roles--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEkcp-roles--id-" onclick="tryItOut('DELETEkcp-roles--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEkcp-roles--id-" onclick="cancelTryOut('DELETEkcp-roles--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEkcp-roles--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>kcp/roles/{id}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="DELETEkcp-roles--id-" data-component="url" required  hidden>
<br>

</p>
</form>


## Order BREAD items.




> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/kcp/charts/order" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/kcp/charts/order"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (302):

```json

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="refresh" content="0;url='http://127.0.0.1:8000/kcp/login'" />

        <title>Redirecting to http://127.0.0.1:8000/kcp/login</title>
    </head>
    <body>
        Redirecting to <a href="http://127.0.0.1:8000/kcp/login">http://127.0.0.1:8000/kcp/login</a>.
    </body>
</html>
```
<div id="execution-results-GETkcp-charts-order" hidden>
    <blockquote>Received response<span id="execution-response-status-GETkcp-charts-order"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETkcp-charts-order"></code></pre>
</div>
<div id="execution-error-GETkcp-charts-order" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETkcp-charts-order"></code></pre>
</div>
<form id="form-GETkcp-charts-order" data-method="GET" data-path="kcp/charts/order" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETkcp-charts-order', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETkcp-charts-order" onclick="tryItOut('GETkcp-charts-order');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETkcp-charts-order" onclick="cancelTryOut('GETkcp-charts-order');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETkcp-charts-order" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>kcp/charts/order</code></b>
</p>
</form>


## kcp/charts/action




> Example request:

```bash
curl -X POST \
    "http://127.0.0.1:8000/kcp/charts/action" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/kcp/charts/action"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response => response.json());
```


<div id="execution-results-POSTkcp-charts-action" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTkcp-charts-action"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTkcp-charts-action"></code></pre>
</div>
<div id="execution-error-POSTkcp-charts-action" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTkcp-charts-action"></code></pre>
</div>
<form id="form-POSTkcp-charts-action" data-method="POST" data-path="kcp/charts/action" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTkcp-charts-action', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTkcp-charts-action" onclick="tryItOut('POSTkcp-charts-action');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTkcp-charts-action" onclick="cancelTryOut('POSTkcp-charts-action');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTkcp-charts-action" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>kcp/charts/action</code></b>
</p>
</form>


## kcp/charts/order




> Example request:

```bash
curl -X POST \
    "http://127.0.0.1:8000/kcp/charts/order" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/kcp/charts/order"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response => response.json());
```


<div id="execution-results-POSTkcp-charts-order" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTkcp-charts-order"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTkcp-charts-order"></code></pre>
</div>
<div id="execution-error-POSTkcp-charts-order" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTkcp-charts-order"></code></pre>
</div>
<form id="form-POSTkcp-charts-order" data-method="POST" data-path="kcp/charts/order" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTkcp-charts-order', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTkcp-charts-order" onclick="tryItOut('POSTkcp-charts-order');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTkcp-charts-order" onclick="cancelTryOut('POSTkcp-charts-order');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTkcp-charts-order" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>kcp/charts/order</code></b>
</p>
</form>


## kcp/charts/{id}/restore




> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/kcp/charts/earum/restore" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/kcp/charts/earum/restore"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (302):

```json

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="refresh" content="0;url='http://127.0.0.1:8000/kcp/login'" />

        <title>Redirecting to http://127.0.0.1:8000/kcp/login</title>
    </head>
    <body>
        Redirecting to <a href="http://127.0.0.1:8000/kcp/login">http://127.0.0.1:8000/kcp/login</a>.
    </body>
</html>
```
<div id="execution-results-GETkcp-charts--id--restore" hidden>
    <blockquote>Received response<span id="execution-response-status-GETkcp-charts--id--restore"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETkcp-charts--id--restore"></code></pre>
</div>
<div id="execution-error-GETkcp-charts--id--restore" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETkcp-charts--id--restore"></code></pre>
</div>
<form id="form-GETkcp-charts--id--restore" data-method="GET" data-path="kcp/charts/{id}/restore" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETkcp-charts--id--restore', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETkcp-charts--id--restore" onclick="tryItOut('GETkcp-charts--id--restore');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETkcp-charts--id--restore" onclick="cancelTryOut('GETkcp-charts--id--restore');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETkcp-charts--id--restore" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>kcp/charts/{id}/restore</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="GETkcp-charts--id--restore" data-component="url" required  hidden>
<br>

</p>
</form>


## Get BREAD relations data.




> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/kcp/charts/relation" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/kcp/charts/relation"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (302):

```json

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="refresh" content="0;url='http://127.0.0.1:8000/kcp/login'" />

        <title>Redirecting to http://127.0.0.1:8000/kcp/login</title>
    </head>
    <body>
        Redirecting to <a href="http://127.0.0.1:8000/kcp/login">http://127.0.0.1:8000/kcp/login</a>.
    </body>
</html>
```
<div id="execution-results-GETkcp-charts-relation" hidden>
    <blockquote>Received response<span id="execution-response-status-GETkcp-charts-relation"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETkcp-charts-relation"></code></pre>
</div>
<div id="execution-error-GETkcp-charts-relation" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETkcp-charts-relation"></code></pre>
</div>
<form id="form-GETkcp-charts-relation" data-method="GET" data-path="kcp/charts/relation" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETkcp-charts-relation', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETkcp-charts-relation" onclick="tryItOut('GETkcp-charts-relation');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETkcp-charts-relation" onclick="cancelTryOut('GETkcp-charts-relation');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETkcp-charts-relation" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>kcp/charts/relation</code></b>
</p>
</form>


## kcp/charts/remove




> Example request:

```bash
curl -X POST \
    "http://127.0.0.1:8000/kcp/charts/remove" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/kcp/charts/remove"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response => response.json());
```


<div id="execution-results-POSTkcp-charts-remove" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTkcp-charts-remove"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTkcp-charts-remove"></code></pre>
</div>
<div id="execution-error-POSTkcp-charts-remove" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTkcp-charts-remove"></code></pre>
</div>
<form id="form-POSTkcp-charts-remove" data-method="POST" data-path="kcp/charts/remove" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTkcp-charts-remove', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTkcp-charts-remove" onclick="tryItOut('POSTkcp-charts-remove');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTkcp-charts-remove" onclick="cancelTryOut('POSTkcp-charts-remove');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTkcp-charts-remove" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>kcp/charts/remove</code></b>
</p>
</form>


## kcp/charts




> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/kcp/charts" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/kcp/charts"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (302):

```json

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="refresh" content="0;url='http://127.0.0.1:8000/kcp/login'" />

        <title>Redirecting to http://127.0.0.1:8000/kcp/login</title>
    </head>
    <body>
        Redirecting to <a href="http://127.0.0.1:8000/kcp/login">http://127.0.0.1:8000/kcp/login</a>.
    </body>
</html>
```
<div id="execution-results-GETkcp-charts" hidden>
    <blockquote>Received response<span id="execution-response-status-GETkcp-charts"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETkcp-charts"></code></pre>
</div>
<div id="execution-error-GETkcp-charts" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETkcp-charts"></code></pre>
</div>
<form id="form-GETkcp-charts" data-method="GET" data-path="kcp/charts" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETkcp-charts', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETkcp-charts" onclick="tryItOut('GETkcp-charts');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETkcp-charts" onclick="cancelTryOut('GETkcp-charts');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETkcp-charts" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>kcp/charts</code></b>
</p>
</form>


## kcp/charts/create




> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/kcp/charts/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/kcp/charts/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (302):

```json

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="refresh" content="0;url='http://127.0.0.1:8000/kcp/login'" />

        <title>Redirecting to http://127.0.0.1:8000/kcp/login</title>
    </head>
    <body>
        Redirecting to <a href="http://127.0.0.1:8000/kcp/login">http://127.0.0.1:8000/kcp/login</a>.
    </body>
</html>
```
<div id="execution-results-GETkcp-charts-create" hidden>
    <blockquote>Received response<span id="execution-response-status-GETkcp-charts-create"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETkcp-charts-create"></code></pre>
</div>
<div id="execution-error-GETkcp-charts-create" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETkcp-charts-create"></code></pre>
</div>
<form id="form-GETkcp-charts-create" data-method="GET" data-path="kcp/charts/create" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETkcp-charts-create', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETkcp-charts-create" onclick="tryItOut('GETkcp-charts-create');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETkcp-charts-create" onclick="cancelTryOut('GETkcp-charts-create');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETkcp-charts-create" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>kcp/charts/create</code></b>
</p>
</form>


## POST BRE(A)D - Store data.




> Example request:

```bash
curl -X POST \
    "http://127.0.0.1:8000/kcp/charts" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/kcp/charts"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response => response.json());
```


<div id="execution-results-POSTkcp-charts" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTkcp-charts"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTkcp-charts"></code></pre>
</div>
<div id="execution-error-POSTkcp-charts" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTkcp-charts"></code></pre>
</div>
<form id="form-POSTkcp-charts" data-method="POST" data-path="kcp/charts" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTkcp-charts', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTkcp-charts" onclick="tryItOut('POSTkcp-charts');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTkcp-charts" onclick="cancelTryOut('POSTkcp-charts');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTkcp-charts" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>kcp/charts</code></b>
</p>
</form>


## kcp/charts/{id}




> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/kcp/charts/quasi" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/kcp/charts/quasi"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (302):

```json

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="refresh" content="0;url='http://127.0.0.1:8000/kcp/login'" />

        <title>Redirecting to http://127.0.0.1:8000/kcp/login</title>
    </head>
    <body>
        Redirecting to <a href="http://127.0.0.1:8000/kcp/login">http://127.0.0.1:8000/kcp/login</a>.
    </body>
</html>
```
<div id="execution-results-GETkcp-charts--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETkcp-charts--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETkcp-charts--id-"></code></pre>
</div>
<div id="execution-error-GETkcp-charts--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETkcp-charts--id-"></code></pre>
</div>
<form id="form-GETkcp-charts--id-" data-method="GET" data-path="kcp/charts/{id}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETkcp-charts--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETkcp-charts--id-" onclick="tryItOut('GETkcp-charts--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETkcp-charts--id-" onclick="cancelTryOut('GETkcp-charts--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETkcp-charts--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>kcp/charts/{id}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="GETkcp-charts--id-" data-component="url" required  hidden>
<br>

</p>
</form>


## kcp/charts/{id}/edit




> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/kcp/charts/sit/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/kcp/charts/sit/edit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (302):

```json

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="refresh" content="0;url='http://127.0.0.1:8000/kcp/login'" />

        <title>Redirecting to http://127.0.0.1:8000/kcp/login</title>
    </head>
    <body>
        Redirecting to <a href="http://127.0.0.1:8000/kcp/login">http://127.0.0.1:8000/kcp/login</a>.
    </body>
</html>
```
<div id="execution-results-GETkcp-charts--id--edit" hidden>
    <blockquote>Received response<span id="execution-response-status-GETkcp-charts--id--edit"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETkcp-charts--id--edit"></code></pre>
</div>
<div id="execution-error-GETkcp-charts--id--edit" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETkcp-charts--id--edit"></code></pre>
</div>
<form id="form-GETkcp-charts--id--edit" data-method="GET" data-path="kcp/charts/{id}/edit" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETkcp-charts--id--edit', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETkcp-charts--id--edit" onclick="tryItOut('GETkcp-charts--id--edit');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETkcp-charts--id--edit" onclick="cancelTryOut('GETkcp-charts--id--edit');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETkcp-charts--id--edit" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>kcp/charts/{id}/edit</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="GETkcp-charts--id--edit" data-component="url" required  hidden>
<br>

</p>
</form>


## kcp/charts/{id}




> Example request:

```bash
curl -X PUT \
    "http://127.0.0.1:8000/kcp/charts/quis" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/kcp/charts/quis"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "PUT",
    headers,
}).then(response => response.json());
```


<div id="execution-results-PUTkcp-charts--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTkcp-charts--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTkcp-charts--id-"></code></pre>
</div>
<div id="execution-error-PUTkcp-charts--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTkcp-charts--id-"></code></pre>
</div>
<form id="form-PUTkcp-charts--id-" data-method="PUT" data-path="kcp/charts/{id}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PUTkcp-charts--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PUTkcp-charts--id-" onclick="tryItOut('PUTkcp-charts--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PUTkcp-charts--id-" onclick="cancelTryOut('PUTkcp-charts--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PUTkcp-charts--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>kcp/charts/{id}</code></b>
</p>
<p>
<small class="badge badge-purple">PATCH</small>
 <b><code>kcp/charts/{id}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="PUTkcp-charts--id-" data-component="url" required  hidden>
<br>

</p>
</form>


## kcp/charts/{id}




> Example request:

```bash
curl -X DELETE \
    "http://127.0.0.1:8000/kcp/charts/ut" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/kcp/charts/ut"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "DELETE",
    headers,
}).then(response => response.json());
```


<div id="execution-results-DELETEkcp-charts--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEkcp-charts--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEkcp-charts--id-"></code></pre>
</div>
<div id="execution-error-DELETEkcp-charts--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEkcp-charts--id-"></code></pre>
</div>
<form id="form-DELETEkcp-charts--id-" data-method="DELETE" data-path="kcp/charts/{id}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEkcp-charts--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEkcp-charts--id-" onclick="tryItOut('DELETEkcp-charts--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEkcp-charts--id-" onclick="cancelTryOut('DELETEkcp-charts--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEkcp-charts--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>kcp/charts/{id}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="DELETEkcp-charts--id-" data-component="url" required  hidden>
<br>

</p>
</form>


## Order BREAD items.




> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/kcp/landings/order" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/kcp/landings/order"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (302):

```json

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="refresh" content="0;url='http://127.0.0.1:8000/kcp/login'" />

        <title>Redirecting to http://127.0.0.1:8000/kcp/login</title>
    </head>
    <body>
        Redirecting to <a href="http://127.0.0.1:8000/kcp/login">http://127.0.0.1:8000/kcp/login</a>.
    </body>
</html>
```
<div id="execution-results-GETkcp-landings-order" hidden>
    <blockquote>Received response<span id="execution-response-status-GETkcp-landings-order"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETkcp-landings-order"></code></pre>
</div>
<div id="execution-error-GETkcp-landings-order" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETkcp-landings-order"></code></pre>
</div>
<form id="form-GETkcp-landings-order" data-method="GET" data-path="kcp/landings/order" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETkcp-landings-order', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETkcp-landings-order" onclick="tryItOut('GETkcp-landings-order');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETkcp-landings-order" onclick="cancelTryOut('GETkcp-landings-order');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETkcp-landings-order" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>kcp/landings/order</code></b>
</p>
</form>


## kcp/landings/action




> Example request:

```bash
curl -X POST \
    "http://127.0.0.1:8000/kcp/landings/action" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/kcp/landings/action"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response => response.json());
```


<div id="execution-results-POSTkcp-landings-action" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTkcp-landings-action"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTkcp-landings-action"></code></pre>
</div>
<div id="execution-error-POSTkcp-landings-action" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTkcp-landings-action"></code></pre>
</div>
<form id="form-POSTkcp-landings-action" data-method="POST" data-path="kcp/landings/action" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTkcp-landings-action', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTkcp-landings-action" onclick="tryItOut('POSTkcp-landings-action');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTkcp-landings-action" onclick="cancelTryOut('POSTkcp-landings-action');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTkcp-landings-action" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>kcp/landings/action</code></b>
</p>
</form>


## kcp/landings/order




> Example request:

```bash
curl -X POST \
    "http://127.0.0.1:8000/kcp/landings/order" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/kcp/landings/order"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response => response.json());
```


<div id="execution-results-POSTkcp-landings-order" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTkcp-landings-order"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTkcp-landings-order"></code></pre>
</div>
<div id="execution-error-POSTkcp-landings-order" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTkcp-landings-order"></code></pre>
</div>
<form id="form-POSTkcp-landings-order" data-method="POST" data-path="kcp/landings/order" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTkcp-landings-order', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTkcp-landings-order" onclick="tryItOut('POSTkcp-landings-order');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTkcp-landings-order" onclick="cancelTryOut('POSTkcp-landings-order');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTkcp-landings-order" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>kcp/landings/order</code></b>
</p>
</form>


## kcp/landings/{id}/restore




> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/kcp/landings/qui/restore" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/kcp/landings/qui/restore"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (302):

```json

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="refresh" content="0;url='http://127.0.0.1:8000/kcp/login'" />

        <title>Redirecting to http://127.0.0.1:8000/kcp/login</title>
    </head>
    <body>
        Redirecting to <a href="http://127.0.0.1:8000/kcp/login">http://127.0.0.1:8000/kcp/login</a>.
    </body>
</html>
```
<div id="execution-results-GETkcp-landings--id--restore" hidden>
    <blockquote>Received response<span id="execution-response-status-GETkcp-landings--id--restore"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETkcp-landings--id--restore"></code></pre>
</div>
<div id="execution-error-GETkcp-landings--id--restore" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETkcp-landings--id--restore"></code></pre>
</div>
<form id="form-GETkcp-landings--id--restore" data-method="GET" data-path="kcp/landings/{id}/restore" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETkcp-landings--id--restore', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETkcp-landings--id--restore" onclick="tryItOut('GETkcp-landings--id--restore');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETkcp-landings--id--restore" onclick="cancelTryOut('GETkcp-landings--id--restore');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETkcp-landings--id--restore" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>kcp/landings/{id}/restore</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="GETkcp-landings--id--restore" data-component="url" required  hidden>
<br>

</p>
</form>


## Get BREAD relations data.




> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/kcp/landings/relation" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/kcp/landings/relation"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (302):

```json

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="refresh" content="0;url='http://127.0.0.1:8000/kcp/login'" />

        <title>Redirecting to http://127.0.0.1:8000/kcp/login</title>
    </head>
    <body>
        Redirecting to <a href="http://127.0.0.1:8000/kcp/login">http://127.0.0.1:8000/kcp/login</a>.
    </body>
</html>
```
<div id="execution-results-GETkcp-landings-relation" hidden>
    <blockquote>Received response<span id="execution-response-status-GETkcp-landings-relation"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETkcp-landings-relation"></code></pre>
</div>
<div id="execution-error-GETkcp-landings-relation" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETkcp-landings-relation"></code></pre>
</div>
<form id="form-GETkcp-landings-relation" data-method="GET" data-path="kcp/landings/relation" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETkcp-landings-relation', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETkcp-landings-relation" onclick="tryItOut('GETkcp-landings-relation');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETkcp-landings-relation" onclick="cancelTryOut('GETkcp-landings-relation');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETkcp-landings-relation" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>kcp/landings/relation</code></b>
</p>
</form>


## kcp/landings/remove




> Example request:

```bash
curl -X POST \
    "http://127.0.0.1:8000/kcp/landings/remove" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/kcp/landings/remove"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response => response.json());
```


<div id="execution-results-POSTkcp-landings-remove" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTkcp-landings-remove"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTkcp-landings-remove"></code></pre>
</div>
<div id="execution-error-POSTkcp-landings-remove" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTkcp-landings-remove"></code></pre>
</div>
<form id="form-POSTkcp-landings-remove" data-method="POST" data-path="kcp/landings/remove" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTkcp-landings-remove', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTkcp-landings-remove" onclick="tryItOut('POSTkcp-landings-remove');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTkcp-landings-remove" onclick="cancelTryOut('POSTkcp-landings-remove');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTkcp-landings-remove" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>kcp/landings/remove</code></b>
</p>
</form>


## kcp/landings




> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/kcp/landings" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/kcp/landings"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (302):

```json

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="refresh" content="0;url='http://127.0.0.1:8000/kcp/login'" />

        <title>Redirecting to http://127.0.0.1:8000/kcp/login</title>
    </head>
    <body>
        Redirecting to <a href="http://127.0.0.1:8000/kcp/login">http://127.0.0.1:8000/kcp/login</a>.
    </body>
</html>
```
<div id="execution-results-GETkcp-landings" hidden>
    <blockquote>Received response<span id="execution-response-status-GETkcp-landings"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETkcp-landings"></code></pre>
</div>
<div id="execution-error-GETkcp-landings" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETkcp-landings"></code></pre>
</div>
<form id="form-GETkcp-landings" data-method="GET" data-path="kcp/landings" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETkcp-landings', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETkcp-landings" onclick="tryItOut('GETkcp-landings');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETkcp-landings" onclick="cancelTryOut('GETkcp-landings');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETkcp-landings" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>kcp/landings</code></b>
</p>
</form>


## kcp/landings/create




> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/kcp/landings/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/kcp/landings/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (302):

```json

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="refresh" content="0;url='http://127.0.0.1:8000/kcp/login'" />

        <title>Redirecting to http://127.0.0.1:8000/kcp/login</title>
    </head>
    <body>
        Redirecting to <a href="http://127.0.0.1:8000/kcp/login">http://127.0.0.1:8000/kcp/login</a>.
    </body>
</html>
```
<div id="execution-results-GETkcp-landings-create" hidden>
    <blockquote>Received response<span id="execution-response-status-GETkcp-landings-create"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETkcp-landings-create"></code></pre>
</div>
<div id="execution-error-GETkcp-landings-create" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETkcp-landings-create"></code></pre>
</div>
<form id="form-GETkcp-landings-create" data-method="GET" data-path="kcp/landings/create" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETkcp-landings-create', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETkcp-landings-create" onclick="tryItOut('GETkcp-landings-create');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETkcp-landings-create" onclick="cancelTryOut('GETkcp-landings-create');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETkcp-landings-create" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>kcp/landings/create</code></b>
</p>
</form>


## POST BRE(A)D - Store data.




> Example request:

```bash
curl -X POST \
    "http://127.0.0.1:8000/kcp/landings" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/kcp/landings"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response => response.json());
```


<div id="execution-results-POSTkcp-landings" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTkcp-landings"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTkcp-landings"></code></pre>
</div>
<div id="execution-error-POSTkcp-landings" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTkcp-landings"></code></pre>
</div>
<form id="form-POSTkcp-landings" data-method="POST" data-path="kcp/landings" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTkcp-landings', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTkcp-landings" onclick="tryItOut('POSTkcp-landings');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTkcp-landings" onclick="cancelTryOut('POSTkcp-landings');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTkcp-landings" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>kcp/landings</code></b>
</p>
</form>


## kcp/landings/{id}




> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/kcp/landings/non" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/kcp/landings/non"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (302):

```json

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="refresh" content="0;url='http://127.0.0.1:8000/kcp/login'" />

        <title>Redirecting to http://127.0.0.1:8000/kcp/login</title>
    </head>
    <body>
        Redirecting to <a href="http://127.0.0.1:8000/kcp/login">http://127.0.0.1:8000/kcp/login</a>.
    </body>
</html>
```
<div id="execution-results-GETkcp-landings--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETkcp-landings--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETkcp-landings--id-"></code></pre>
</div>
<div id="execution-error-GETkcp-landings--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETkcp-landings--id-"></code></pre>
</div>
<form id="form-GETkcp-landings--id-" data-method="GET" data-path="kcp/landings/{id}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETkcp-landings--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETkcp-landings--id-" onclick="tryItOut('GETkcp-landings--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETkcp-landings--id-" onclick="cancelTryOut('GETkcp-landings--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETkcp-landings--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>kcp/landings/{id}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="GETkcp-landings--id-" data-component="url" required  hidden>
<br>

</p>
</form>


## kcp/landings/{id}/edit




> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/kcp/landings/eos/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/kcp/landings/eos/edit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (302):

```json

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="refresh" content="0;url='http://127.0.0.1:8000/kcp/login'" />

        <title>Redirecting to http://127.0.0.1:8000/kcp/login</title>
    </head>
    <body>
        Redirecting to <a href="http://127.0.0.1:8000/kcp/login">http://127.0.0.1:8000/kcp/login</a>.
    </body>
</html>
```
<div id="execution-results-GETkcp-landings--id--edit" hidden>
    <blockquote>Received response<span id="execution-response-status-GETkcp-landings--id--edit"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETkcp-landings--id--edit"></code></pre>
</div>
<div id="execution-error-GETkcp-landings--id--edit" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETkcp-landings--id--edit"></code></pre>
</div>
<form id="form-GETkcp-landings--id--edit" data-method="GET" data-path="kcp/landings/{id}/edit" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETkcp-landings--id--edit', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETkcp-landings--id--edit" onclick="tryItOut('GETkcp-landings--id--edit');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETkcp-landings--id--edit" onclick="cancelTryOut('GETkcp-landings--id--edit');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETkcp-landings--id--edit" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>kcp/landings/{id}/edit</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="GETkcp-landings--id--edit" data-component="url" required  hidden>
<br>

</p>
</form>


## kcp/landings/{id}




> Example request:

```bash
curl -X PUT \
    "http://127.0.0.1:8000/kcp/landings/nostrum" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/kcp/landings/nostrum"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "PUT",
    headers,
}).then(response => response.json());
```


<div id="execution-results-PUTkcp-landings--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTkcp-landings--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTkcp-landings--id-"></code></pre>
</div>
<div id="execution-error-PUTkcp-landings--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTkcp-landings--id-"></code></pre>
</div>
<form id="form-PUTkcp-landings--id-" data-method="PUT" data-path="kcp/landings/{id}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PUTkcp-landings--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PUTkcp-landings--id-" onclick="tryItOut('PUTkcp-landings--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PUTkcp-landings--id-" onclick="cancelTryOut('PUTkcp-landings--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PUTkcp-landings--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>kcp/landings/{id}</code></b>
</p>
<p>
<small class="badge badge-purple">PATCH</small>
 <b><code>kcp/landings/{id}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="PUTkcp-landings--id-" data-component="url" required  hidden>
<br>

</p>
</form>


## kcp/landings/{id}




> Example request:

```bash
curl -X DELETE \
    "http://127.0.0.1:8000/kcp/landings/qui" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/kcp/landings/qui"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "DELETE",
    headers,
}).then(response => response.json());
```


<div id="execution-results-DELETEkcp-landings--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEkcp-landings--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEkcp-landings--id-"></code></pre>
</div>
<div id="execution-error-DELETEkcp-landings--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEkcp-landings--id-"></code></pre>
</div>
<form id="form-DELETEkcp-landings--id-" data-method="DELETE" data-path="kcp/landings/{id}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEkcp-landings--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEkcp-landings--id-" onclick="tryItOut('DELETEkcp-landings--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEkcp-landings--id-" onclick="cancelTryOut('DELETEkcp-landings--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEkcp-landings--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>kcp/landings/{id}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="DELETEkcp-landings--id-" data-component="url" required  hidden>
<br>

</p>
</form>


## kcp/menus/{menu}/builder




> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/kcp/menus/aut/builder" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/kcp/menus/aut/builder"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (302):

```json

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="refresh" content="0;url='http://127.0.0.1:8000/kcp/login'" />

        <title>Redirecting to http://127.0.0.1:8000/kcp/login</title>
    </head>
    <body>
        Redirecting to <a href="http://127.0.0.1:8000/kcp/login">http://127.0.0.1:8000/kcp/login</a>.
    </body>
</html>
```
<div id="execution-results-GETkcp-menus--menu--builder" hidden>
    <blockquote>Received response<span id="execution-response-status-GETkcp-menus--menu--builder"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETkcp-menus--menu--builder"></code></pre>
</div>
<div id="execution-error-GETkcp-menus--menu--builder" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETkcp-menus--menu--builder"></code></pre>
</div>
<form id="form-GETkcp-menus--menu--builder" data-method="GET" data-path="kcp/menus/{menu}/builder" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETkcp-menus--menu--builder', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETkcp-menus--menu--builder" onclick="tryItOut('GETkcp-menus--menu--builder');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETkcp-menus--menu--builder" onclick="cancelTryOut('GETkcp-menus--menu--builder');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETkcp-menus--menu--builder" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>kcp/menus/{menu}/builder</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>menu</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="menu" data-endpoint="GETkcp-menus--menu--builder" data-component="url" required  hidden>
<br>

</p>
</form>


## kcp/menus/{menu}/order




> Example request:

```bash
curl -X POST \
    "http://127.0.0.1:8000/kcp/menus/numquam/order" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/kcp/menus/numquam/order"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response => response.json());
```


<div id="execution-results-POSTkcp-menus--menu--order" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTkcp-menus--menu--order"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTkcp-menus--menu--order"></code></pre>
</div>
<div id="execution-error-POSTkcp-menus--menu--order" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTkcp-menus--menu--order"></code></pre>
</div>
<form id="form-POSTkcp-menus--menu--order" data-method="POST" data-path="kcp/menus/{menu}/order" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTkcp-menus--menu--order', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTkcp-menus--menu--order" onclick="tryItOut('POSTkcp-menus--menu--order');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTkcp-menus--menu--order" onclick="cancelTryOut('POSTkcp-menus--menu--order');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTkcp-menus--menu--order" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>kcp/menus/{menu}/order</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>menu</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="menu" data-endpoint="POSTkcp-menus--menu--order" data-component="url" required  hidden>
<br>

</p>
</form>


## kcp/menus/{menu}/item/{id}




> Example request:

```bash
curl -X DELETE \
    "http://127.0.0.1:8000/kcp/menus/voluptatem/item/rerum" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/kcp/menus/voluptatem/item/rerum"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "DELETE",
    headers,
}).then(response => response.json());
```


<div id="execution-results-DELETEkcp-menus--menu--item--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEkcp-menus--menu--item--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEkcp-menus--menu--item--id-"></code></pre>
</div>
<div id="execution-error-DELETEkcp-menus--menu--item--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEkcp-menus--menu--item--id-"></code></pre>
</div>
<form id="form-DELETEkcp-menus--menu--item--id-" data-method="DELETE" data-path="kcp/menus/{menu}/item/{id}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEkcp-menus--menu--item--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEkcp-menus--menu--item--id-" onclick="tryItOut('DELETEkcp-menus--menu--item--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEkcp-menus--menu--item--id-" onclick="cancelTryOut('DELETEkcp-menus--menu--item--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEkcp-menus--menu--item--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>kcp/menus/{menu}/item/{id}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>menu</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="menu" data-endpoint="DELETEkcp-menus--menu--item--id-" data-component="url" required  hidden>
<br>

</p>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="DELETEkcp-menus--menu--item--id-" data-component="url" required  hidden>
<br>

</p>
</form>


## kcp/menus/{menu}/item




> Example request:

```bash
curl -X POST \
    "http://127.0.0.1:8000/kcp/menus/dignissimos/item" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/kcp/menus/dignissimos/item"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response => response.json());
```


<div id="execution-results-POSTkcp-menus--menu--item" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTkcp-menus--menu--item"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTkcp-menus--menu--item"></code></pre>
</div>
<div id="execution-error-POSTkcp-menus--menu--item" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTkcp-menus--menu--item"></code></pre>
</div>
<form id="form-POSTkcp-menus--menu--item" data-method="POST" data-path="kcp/menus/{menu}/item" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTkcp-menus--menu--item', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTkcp-menus--menu--item" onclick="tryItOut('POSTkcp-menus--menu--item');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTkcp-menus--menu--item" onclick="cancelTryOut('POSTkcp-menus--menu--item');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTkcp-menus--menu--item" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>kcp/menus/{menu}/item</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>menu</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="menu" data-endpoint="POSTkcp-menus--menu--item" data-component="url" required  hidden>
<br>

</p>
</form>


## kcp/menus/{menu}/item




> Example request:

```bash
curl -X PUT \
    "http://127.0.0.1:8000/kcp/menus/id/item" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/kcp/menus/id/item"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "PUT",
    headers,
}).then(response => response.json());
```


<div id="execution-results-PUTkcp-menus--menu--item" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTkcp-menus--menu--item"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTkcp-menus--menu--item"></code></pre>
</div>
<div id="execution-error-PUTkcp-menus--menu--item" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTkcp-menus--menu--item"></code></pre>
</div>
<form id="form-PUTkcp-menus--menu--item" data-method="PUT" data-path="kcp/menus/{menu}/item" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PUTkcp-menus--menu--item', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PUTkcp-menus--menu--item" onclick="tryItOut('PUTkcp-menus--menu--item');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PUTkcp-menus--menu--item" onclick="cancelTryOut('PUTkcp-menus--menu--item');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PUTkcp-menus--menu--item" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>kcp/menus/{menu}/item</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>menu</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="menu" data-endpoint="PUTkcp-menus--menu--item" data-component="url" required  hidden>
<br>

</p>
</form>


## kcp/settings




> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/kcp/settings" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/kcp/settings"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (302):

```json

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="refresh" content="0;url='http://127.0.0.1:8000/kcp/login'" />

        <title>Redirecting to http://127.0.0.1:8000/kcp/login</title>
    </head>
    <body>
        Redirecting to <a href="http://127.0.0.1:8000/kcp/login">http://127.0.0.1:8000/kcp/login</a>.
    </body>
</html>
```
<div id="execution-results-GETkcp-settings" hidden>
    <blockquote>Received response<span id="execution-response-status-GETkcp-settings"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETkcp-settings"></code></pre>
</div>
<div id="execution-error-GETkcp-settings" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETkcp-settings"></code></pre>
</div>
<form id="form-GETkcp-settings" data-method="GET" data-path="kcp/settings" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETkcp-settings', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETkcp-settings" onclick="tryItOut('GETkcp-settings');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETkcp-settings" onclick="cancelTryOut('GETkcp-settings');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETkcp-settings" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>kcp/settings</code></b>
</p>
</form>


## kcp/settings




> Example request:

```bash
curl -X POST \
    "http://127.0.0.1:8000/kcp/settings" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/kcp/settings"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response => response.json());
```


<div id="execution-results-POSTkcp-settings" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTkcp-settings"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTkcp-settings"></code></pre>
</div>
<div id="execution-error-POSTkcp-settings" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTkcp-settings"></code></pre>
</div>
<form id="form-POSTkcp-settings" data-method="POST" data-path="kcp/settings" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTkcp-settings', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTkcp-settings" onclick="tryItOut('POSTkcp-settings');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTkcp-settings" onclick="cancelTryOut('POSTkcp-settings');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTkcp-settings" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>kcp/settings</code></b>
</p>
</form>


## kcp/settings




> Example request:

```bash
curl -X PUT \
    "http://127.0.0.1:8000/kcp/settings" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/kcp/settings"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "PUT",
    headers,
}).then(response => response.json());
```


<div id="execution-results-PUTkcp-settings" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTkcp-settings"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTkcp-settings"></code></pre>
</div>
<div id="execution-error-PUTkcp-settings" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTkcp-settings"></code></pre>
</div>
<form id="form-PUTkcp-settings" data-method="PUT" data-path="kcp/settings" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PUTkcp-settings', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PUTkcp-settings" onclick="tryItOut('PUTkcp-settings');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PUTkcp-settings" onclick="cancelTryOut('PUTkcp-settings');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PUTkcp-settings" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>kcp/settings</code></b>
</p>
</form>


## kcp/settings/{id}




> Example request:

```bash
curl -X DELETE \
    "http://127.0.0.1:8000/kcp/settings/fugiat" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/kcp/settings/fugiat"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "DELETE",
    headers,
}).then(response => response.json());
```


<div id="execution-results-DELETEkcp-settings--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEkcp-settings--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEkcp-settings--id-"></code></pre>
</div>
<div id="execution-error-DELETEkcp-settings--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEkcp-settings--id-"></code></pre>
</div>
<form id="form-DELETEkcp-settings--id-" data-method="DELETE" data-path="kcp/settings/{id}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEkcp-settings--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEkcp-settings--id-" onclick="tryItOut('DELETEkcp-settings--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEkcp-settings--id-" onclick="cancelTryOut('DELETEkcp-settings--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEkcp-settings--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>kcp/settings/{id}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="DELETEkcp-settings--id-" data-component="url" required  hidden>
<br>

</p>
</form>


## kcp/settings/{id}/move_up




> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/kcp/settings/aut/move_up" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/kcp/settings/aut/move_up"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (302):

```json

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="refresh" content="0;url='http://127.0.0.1:8000/kcp/login'" />

        <title>Redirecting to http://127.0.0.1:8000/kcp/login</title>
    </head>
    <body>
        Redirecting to <a href="http://127.0.0.1:8000/kcp/login">http://127.0.0.1:8000/kcp/login</a>.
    </body>
</html>
```
<div id="execution-results-GETkcp-settings--id--move_up" hidden>
    <blockquote>Received response<span id="execution-response-status-GETkcp-settings--id--move_up"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETkcp-settings--id--move_up"></code></pre>
</div>
<div id="execution-error-GETkcp-settings--id--move_up" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETkcp-settings--id--move_up"></code></pre>
</div>
<form id="form-GETkcp-settings--id--move_up" data-method="GET" data-path="kcp/settings/{id}/move_up" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETkcp-settings--id--move_up', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETkcp-settings--id--move_up" onclick="tryItOut('GETkcp-settings--id--move_up');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETkcp-settings--id--move_up" onclick="cancelTryOut('GETkcp-settings--id--move_up');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETkcp-settings--id--move_up" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>kcp/settings/{id}/move_up</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="GETkcp-settings--id--move_up" data-component="url" required  hidden>
<br>

</p>
</form>


## kcp/settings/{id}/move_down




> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/kcp/settings/est/move_down" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/kcp/settings/est/move_down"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (302):

```json

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="refresh" content="0;url='http://127.0.0.1:8000/kcp/login'" />

        <title>Redirecting to http://127.0.0.1:8000/kcp/login</title>
    </head>
    <body>
        Redirecting to <a href="http://127.0.0.1:8000/kcp/login">http://127.0.0.1:8000/kcp/login</a>.
    </body>
</html>
```
<div id="execution-results-GETkcp-settings--id--move_down" hidden>
    <blockquote>Received response<span id="execution-response-status-GETkcp-settings--id--move_down"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETkcp-settings--id--move_down"></code></pre>
</div>
<div id="execution-error-GETkcp-settings--id--move_down" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETkcp-settings--id--move_down"></code></pre>
</div>
<form id="form-GETkcp-settings--id--move_down" data-method="GET" data-path="kcp/settings/{id}/move_down" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETkcp-settings--id--move_down', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETkcp-settings--id--move_down" onclick="tryItOut('GETkcp-settings--id--move_down');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETkcp-settings--id--move_down" onclick="cancelTryOut('GETkcp-settings--id--move_down');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETkcp-settings--id--move_down" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>kcp/settings/{id}/move_down</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="GETkcp-settings--id--move_down" data-component="url" required  hidden>
<br>

</p>
</form>


## kcp/settings/{id}/delete_value




> Example request:

```bash
curl -X PUT \
    "http://127.0.0.1:8000/kcp/settings/sunt/delete_value" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/kcp/settings/sunt/delete_value"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "PUT",
    headers,
}).then(response => response.json());
```


<div id="execution-results-PUTkcp-settings--id--delete_value" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTkcp-settings--id--delete_value"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTkcp-settings--id--delete_value"></code></pre>
</div>
<div id="execution-error-PUTkcp-settings--id--delete_value" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTkcp-settings--id--delete_value"></code></pre>
</div>
<form id="form-PUTkcp-settings--id--delete_value" data-method="PUT" data-path="kcp/settings/{id}/delete_value" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PUTkcp-settings--id--delete_value', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PUTkcp-settings--id--delete_value" onclick="tryItOut('PUTkcp-settings--id--delete_value');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PUTkcp-settings--id--delete_value" onclick="cancelTryOut('PUTkcp-settings--id--delete_value');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PUTkcp-settings--id--delete_value" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>kcp/settings/{id}/delete_value</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="PUTkcp-settings--id--delete_value" data-component="url" required  hidden>
<br>

</p>
</form>


## kcp/media




> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/kcp/media" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/kcp/media"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (302):

```json

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="refresh" content="0;url='http://127.0.0.1:8000/kcp/login'" />

        <title>Redirecting to http://127.0.0.1:8000/kcp/login</title>
    </head>
    <body>
        Redirecting to <a href="http://127.0.0.1:8000/kcp/login">http://127.0.0.1:8000/kcp/login</a>.
    </body>
</html>
```
<div id="execution-results-GETkcp-media" hidden>
    <blockquote>Received response<span id="execution-response-status-GETkcp-media"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETkcp-media"></code></pre>
</div>
<div id="execution-error-GETkcp-media" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETkcp-media"></code></pre>
</div>
<form id="form-GETkcp-media" data-method="GET" data-path="kcp/media" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETkcp-media', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETkcp-media" onclick="tryItOut('GETkcp-media');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETkcp-media" onclick="cancelTryOut('GETkcp-media');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETkcp-media" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>kcp/media</code></b>
</p>
</form>


## kcp/media/files




> Example request:

```bash
curl -X POST \
    "http://127.0.0.1:8000/kcp/media/files" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/kcp/media/files"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response => response.json());
```


<div id="execution-results-POSTkcp-media-files" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTkcp-media-files"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTkcp-media-files"></code></pre>
</div>
<div id="execution-error-POSTkcp-media-files" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTkcp-media-files"></code></pre>
</div>
<form id="form-POSTkcp-media-files" data-method="POST" data-path="kcp/media/files" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTkcp-media-files', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTkcp-media-files" onclick="tryItOut('POSTkcp-media-files');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTkcp-media-files" onclick="cancelTryOut('POSTkcp-media-files');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTkcp-media-files" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>kcp/media/files</code></b>
</p>
</form>


## kcp/media/new_folder




> Example request:

```bash
curl -X POST \
    "http://127.0.0.1:8000/kcp/media/new_folder" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/kcp/media/new_folder"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response => response.json());
```


<div id="execution-results-POSTkcp-media-new_folder" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTkcp-media-new_folder"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTkcp-media-new_folder"></code></pre>
</div>
<div id="execution-error-POSTkcp-media-new_folder" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTkcp-media-new_folder"></code></pre>
</div>
<form id="form-POSTkcp-media-new_folder" data-method="POST" data-path="kcp/media/new_folder" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTkcp-media-new_folder', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTkcp-media-new_folder" onclick="tryItOut('POSTkcp-media-new_folder');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTkcp-media-new_folder" onclick="cancelTryOut('POSTkcp-media-new_folder');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTkcp-media-new_folder" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>kcp/media/new_folder</code></b>
</p>
</form>


## kcp/media/delete_file_folder




> Example request:

```bash
curl -X POST \
    "http://127.0.0.1:8000/kcp/media/delete_file_folder" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/kcp/media/delete_file_folder"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response => response.json());
```


<div id="execution-results-POSTkcp-media-delete_file_folder" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTkcp-media-delete_file_folder"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTkcp-media-delete_file_folder"></code></pre>
</div>
<div id="execution-error-POSTkcp-media-delete_file_folder" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTkcp-media-delete_file_folder"></code></pre>
</div>
<form id="form-POSTkcp-media-delete_file_folder" data-method="POST" data-path="kcp/media/delete_file_folder" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTkcp-media-delete_file_folder', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTkcp-media-delete_file_folder" onclick="tryItOut('POSTkcp-media-delete_file_folder');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTkcp-media-delete_file_folder" onclick="cancelTryOut('POSTkcp-media-delete_file_folder');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTkcp-media-delete_file_folder" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>kcp/media/delete_file_folder</code></b>
</p>
</form>


## kcp/media/move_file




> Example request:

```bash
curl -X POST \
    "http://127.0.0.1:8000/kcp/media/move_file" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/kcp/media/move_file"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response => response.json());
```


<div id="execution-results-POSTkcp-media-move_file" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTkcp-media-move_file"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTkcp-media-move_file"></code></pre>
</div>
<div id="execution-error-POSTkcp-media-move_file" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTkcp-media-move_file"></code></pre>
</div>
<form id="form-POSTkcp-media-move_file" data-method="POST" data-path="kcp/media/move_file" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTkcp-media-move_file', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTkcp-media-move_file" onclick="tryItOut('POSTkcp-media-move_file');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTkcp-media-move_file" onclick="cancelTryOut('POSTkcp-media-move_file');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTkcp-media-move_file" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>kcp/media/move_file</code></b>
</p>
</form>


## kcp/media/rename_file




> Example request:

```bash
curl -X POST \
    "http://127.0.0.1:8000/kcp/media/rename_file" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/kcp/media/rename_file"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response => response.json());
```


<div id="execution-results-POSTkcp-media-rename_file" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTkcp-media-rename_file"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTkcp-media-rename_file"></code></pre>
</div>
<div id="execution-error-POSTkcp-media-rename_file" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTkcp-media-rename_file"></code></pre>
</div>
<form id="form-POSTkcp-media-rename_file" data-method="POST" data-path="kcp/media/rename_file" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTkcp-media-rename_file', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTkcp-media-rename_file" onclick="tryItOut('POSTkcp-media-rename_file');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTkcp-media-rename_file" onclick="cancelTryOut('POSTkcp-media-rename_file');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTkcp-media-rename_file" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>kcp/media/rename_file</code></b>
</p>
</form>


## kcp/media/upload




> Example request:

```bash
curl -X POST \
    "http://127.0.0.1:8000/kcp/media/upload" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/kcp/media/upload"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response => response.json());
```


<div id="execution-results-POSTkcp-media-upload" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTkcp-media-upload"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTkcp-media-upload"></code></pre>
</div>
<div id="execution-error-POSTkcp-media-upload" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTkcp-media-upload"></code></pre>
</div>
<form id="form-POSTkcp-media-upload" data-method="POST" data-path="kcp/media/upload" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTkcp-media-upload', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTkcp-media-upload" onclick="tryItOut('POSTkcp-media-upload');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTkcp-media-upload" onclick="cancelTryOut('POSTkcp-media-upload');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTkcp-media-upload" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>kcp/media/upload</code></b>
</p>
</form>


## kcp/media/crop




> Example request:

```bash
curl -X POST \
    "http://127.0.0.1:8000/kcp/media/crop" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/kcp/media/crop"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response => response.json());
```


<div id="execution-results-POSTkcp-media-crop" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTkcp-media-crop"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTkcp-media-crop"></code></pre>
</div>
<div id="execution-error-POSTkcp-media-crop" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTkcp-media-crop"></code></pre>
</div>
<form id="form-POSTkcp-media-crop" data-method="POST" data-path="kcp/media/crop" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTkcp-media-crop', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTkcp-media-crop" onclick="tryItOut('POSTkcp-media-crop');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTkcp-media-crop" onclick="cancelTryOut('POSTkcp-media-crop');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTkcp-media-crop" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>kcp/media/crop</code></b>
</p>
</form>


## kcp/bread




> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/kcp/bread" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/kcp/bread"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (302):

```json

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="refresh" content="0;url='http://127.0.0.1:8000/kcp/login'" />

        <title>Redirecting to http://127.0.0.1:8000/kcp/login</title>
    </head>
    <body>
        Redirecting to <a href="http://127.0.0.1:8000/kcp/login">http://127.0.0.1:8000/kcp/login</a>.
    </body>
</html>
```
<div id="execution-results-GETkcp-bread" hidden>
    <blockquote>Received response<span id="execution-response-status-GETkcp-bread"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETkcp-bread"></code></pre>
</div>
<div id="execution-error-GETkcp-bread" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETkcp-bread"></code></pre>
</div>
<form id="form-GETkcp-bread" data-method="GET" data-path="kcp/bread" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETkcp-bread', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETkcp-bread" onclick="tryItOut('GETkcp-bread');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETkcp-bread" onclick="cancelTryOut('GETkcp-bread');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETkcp-bread" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>kcp/bread</code></b>
</p>
</form>


## Create BREAD.




> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/kcp/bread/maiores/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/kcp/bread/maiores/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (302):

```json

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="refresh" content="0;url='http://127.0.0.1:8000/kcp/login'" />

        <title>Redirecting to http://127.0.0.1:8000/kcp/login</title>
    </head>
    <body>
        Redirecting to <a href="http://127.0.0.1:8000/kcp/login">http://127.0.0.1:8000/kcp/login</a>.
    </body>
</html>
```
<div id="execution-results-GETkcp-bread--table--create" hidden>
    <blockquote>Received response<span id="execution-response-status-GETkcp-bread--table--create"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETkcp-bread--table--create"></code></pre>
</div>
<div id="execution-error-GETkcp-bread--table--create" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETkcp-bread--table--create"></code></pre>
</div>
<form id="form-GETkcp-bread--table--create" data-method="GET" data-path="kcp/bread/{table}/create" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETkcp-bread--table--create', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETkcp-bread--table--create" onclick="tryItOut('GETkcp-bread--table--create');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETkcp-bread--table--create" onclick="cancelTryOut('GETkcp-bread--table--create');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETkcp-bread--table--create" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>kcp/bread/{table}/create</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>table</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="table" data-endpoint="GETkcp-bread--table--create" data-component="url" required  hidden>
<br>

</p>
</form>


## Store BREAD.




> Example request:

```bash
curl -X POST \
    "http://127.0.0.1:8000/kcp/bread" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/kcp/bread"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response => response.json());
```


<div id="execution-results-POSTkcp-bread" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTkcp-bread"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTkcp-bread"></code></pre>
</div>
<div id="execution-error-POSTkcp-bread" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTkcp-bread"></code></pre>
</div>
<form id="form-POSTkcp-bread" data-method="POST" data-path="kcp/bread" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTkcp-bread', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTkcp-bread" onclick="tryItOut('POSTkcp-bread');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTkcp-bread" onclick="cancelTryOut('POSTkcp-bread');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTkcp-bread" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>kcp/bread</code></b>
</p>
</form>


## Edit BREAD.




> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/kcp/bread/sed/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/kcp/bread/sed/edit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (302):

```json

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="refresh" content="0;url='http://127.0.0.1:8000/kcp/login'" />

        <title>Redirecting to http://127.0.0.1:8000/kcp/login</title>
    </head>
    <body>
        Redirecting to <a href="http://127.0.0.1:8000/kcp/login">http://127.0.0.1:8000/kcp/login</a>.
    </body>
</html>
```
<div id="execution-results-GETkcp-bread--table--edit" hidden>
    <blockquote>Received response<span id="execution-response-status-GETkcp-bread--table--edit"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETkcp-bread--table--edit"></code></pre>
</div>
<div id="execution-error-GETkcp-bread--table--edit" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETkcp-bread--table--edit"></code></pre>
</div>
<form id="form-GETkcp-bread--table--edit" data-method="GET" data-path="kcp/bread/{table}/edit" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETkcp-bread--table--edit', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETkcp-bread--table--edit" onclick="tryItOut('GETkcp-bread--table--edit');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETkcp-bread--table--edit" onclick="cancelTryOut('GETkcp-bread--table--edit');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETkcp-bread--table--edit" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>kcp/bread/{table}/edit</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>table</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="table" data-endpoint="GETkcp-bread--table--edit" data-component="url" required  hidden>
<br>

</p>
</form>


## Update BREAD.




> Example request:

```bash
curl -X PUT \
    "http://127.0.0.1:8000/kcp/bread/nihil" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/kcp/bread/nihil"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "PUT",
    headers,
}).then(response => response.json());
```


<div id="execution-results-PUTkcp-bread--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTkcp-bread--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTkcp-bread--id-"></code></pre>
</div>
<div id="execution-error-PUTkcp-bread--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTkcp-bread--id-"></code></pre>
</div>
<form id="form-PUTkcp-bread--id-" data-method="PUT" data-path="kcp/bread/{id}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PUTkcp-bread--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PUTkcp-bread--id-" onclick="tryItOut('PUTkcp-bread--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PUTkcp-bread--id-" onclick="cancelTryOut('PUTkcp-bread--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PUTkcp-bread--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>kcp/bread/{id}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="PUTkcp-bread--id-" data-component="url" required  hidden>
<br>

</p>
</form>


## Delete BREAD.




> Example request:

```bash
curl -X DELETE \
    "http://127.0.0.1:8000/kcp/bread/commodi" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/kcp/bread/commodi"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "DELETE",
    headers,
}).then(response => response.json());
```


<div id="execution-results-DELETEkcp-bread--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEkcp-bread--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEkcp-bread--id-"></code></pre>
</div>
<div id="execution-error-DELETEkcp-bread--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEkcp-bread--id-"></code></pre>
</div>
<form id="form-DELETEkcp-bread--id-" data-method="DELETE" data-path="kcp/bread/{id}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEkcp-bread--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEkcp-bread--id-" onclick="tryItOut('DELETEkcp-bread--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEkcp-bread--id-" onclick="cancelTryOut('DELETEkcp-bread--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEkcp-bread--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>kcp/bread/{id}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="DELETEkcp-bread--id-" data-component="url" required  hidden>
<br>

</p>
</form>


## Add Relationship.




> Example request:

```bash
curl -X POST \
    "http://127.0.0.1:8000/kcp/bread/relationship" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/kcp/bread/relationship"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response => response.json());
```


<div id="execution-results-POSTkcp-bread-relationship" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTkcp-bread-relationship"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTkcp-bread-relationship"></code></pre>
</div>
<div id="execution-error-POSTkcp-bread-relationship" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTkcp-bread-relationship"></code></pre>
</div>
<form id="form-POSTkcp-bread-relationship" data-method="POST" data-path="kcp/bread/relationship" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTkcp-bread-relationship', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTkcp-bread-relationship" onclick="tryItOut('POSTkcp-bread-relationship');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTkcp-bread-relationship" onclick="cancelTryOut('POSTkcp-bread-relationship');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTkcp-bread-relationship" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>kcp/bread/relationship</code></b>
</p>
</form>


## Delete Relationship.




> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/kcp/bread/delete_relationship/eos" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/kcp/bread/delete_relationship/eos"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (302):

```json

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="refresh" content="0;url='http://127.0.0.1:8000/kcp/login'" />

        <title>Redirecting to http://127.0.0.1:8000/kcp/login</title>
    </head>
    <body>
        Redirecting to <a href="http://127.0.0.1:8000/kcp/login">http://127.0.0.1:8000/kcp/login</a>.
    </body>
</html>
```
<div id="execution-results-GETkcp-bread-delete_relationship--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETkcp-bread-delete_relationship--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETkcp-bread-delete_relationship--id-"></code></pre>
</div>
<div id="execution-error-GETkcp-bread-delete_relationship--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETkcp-bread-delete_relationship--id-"></code></pre>
</div>
<form id="form-GETkcp-bread-delete_relationship--id-" data-method="GET" data-path="kcp/bread/delete_relationship/{id}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETkcp-bread-delete_relationship--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETkcp-bread-delete_relationship--id-" onclick="tryItOut('GETkcp-bread-delete_relationship--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETkcp-bread-delete_relationship--id-" onclick="cancelTryOut('GETkcp-bread-delete_relationship--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETkcp-bread-delete_relationship--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>kcp/bread/delete_relationship/{id}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="GETkcp-bread-delete_relationship--id-" data-component="url" required  hidden>
<br>

</p>
</form>


## kcp/database




> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/kcp/database" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/kcp/database"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (302):

```json

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="refresh" content="0;url='http://127.0.0.1:8000/kcp/login'" />

        <title>Redirecting to http://127.0.0.1:8000/kcp/login</title>
    </head>
    <body>
        Redirecting to <a href="http://127.0.0.1:8000/kcp/login">http://127.0.0.1:8000/kcp/login</a>.
    </body>
</html>
```
<div id="execution-results-GETkcp-database" hidden>
    <blockquote>Received response<span id="execution-response-status-GETkcp-database"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETkcp-database"></code></pre>
</div>
<div id="execution-error-GETkcp-database" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETkcp-database"></code></pre>
</div>
<form id="form-GETkcp-database" data-method="GET" data-path="kcp/database" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETkcp-database', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETkcp-database" onclick="tryItOut('GETkcp-database');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETkcp-database" onclick="cancelTryOut('GETkcp-database');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETkcp-database" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>kcp/database</code></b>
</p>
</form>


## Create database table.




> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/kcp/database/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/kcp/database/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (302):

```json

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="refresh" content="0;url='http://127.0.0.1:8000/kcp/login'" />

        <title>Redirecting to http://127.0.0.1:8000/kcp/login</title>
    </head>
    <body>
        Redirecting to <a href="http://127.0.0.1:8000/kcp/login">http://127.0.0.1:8000/kcp/login</a>.
    </body>
</html>
```
<div id="execution-results-GETkcp-database-create" hidden>
    <blockquote>Received response<span id="execution-response-status-GETkcp-database-create"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETkcp-database-create"></code></pre>
</div>
<div id="execution-error-GETkcp-database-create" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETkcp-database-create"></code></pre>
</div>
<form id="form-GETkcp-database-create" data-method="GET" data-path="kcp/database/create" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETkcp-database-create', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETkcp-database-create" onclick="tryItOut('GETkcp-database-create');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETkcp-database-create" onclick="cancelTryOut('GETkcp-database-create');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETkcp-database-create" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>kcp/database/create</code></b>
</p>
</form>


## Store new database table.




> Example request:

```bash
curl -X POST \
    "http://127.0.0.1:8000/kcp/database" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/kcp/database"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response => response.json());
```


<div id="execution-results-POSTkcp-database" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTkcp-database"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTkcp-database"></code></pre>
</div>
<div id="execution-error-POSTkcp-database" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTkcp-database"></code></pre>
</div>
<form id="form-POSTkcp-database" data-method="POST" data-path="kcp/database" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTkcp-database', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTkcp-database" onclick="tryItOut('POSTkcp-database');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTkcp-database" onclick="cancelTryOut('POSTkcp-database');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTkcp-database" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>kcp/database</code></b>
</p>
</form>


## Show table.




> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/kcp/database/repudiandae" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/kcp/database/repudiandae"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (302):

```json

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="refresh" content="0;url='http://127.0.0.1:8000/kcp/login'" />

        <title>Redirecting to http://127.0.0.1:8000/kcp/login</title>
    </head>
    <body>
        Redirecting to <a href="http://127.0.0.1:8000/kcp/login">http://127.0.0.1:8000/kcp/login</a>.
    </body>
</html>
```
<div id="execution-results-GETkcp-database--database-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETkcp-database--database-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETkcp-database--database-"></code></pre>
</div>
<div id="execution-error-GETkcp-database--database-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETkcp-database--database-"></code></pre>
</div>
<form id="form-GETkcp-database--database-" data-method="GET" data-path="kcp/database/{database}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETkcp-database--database-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETkcp-database--database-" onclick="tryItOut('GETkcp-database--database-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETkcp-database--database-" onclick="cancelTryOut('GETkcp-database--database-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETkcp-database--database-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>kcp/database/{database}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>database</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="database" data-endpoint="GETkcp-database--database-" data-component="url" required  hidden>
<br>

</p>
</form>


## Edit database table.




> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/kcp/database/vitae/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/kcp/database/vitae/edit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (302):

```json

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="refresh" content="0;url='http://127.0.0.1:8000/kcp/login'" />

        <title>Redirecting to http://127.0.0.1:8000/kcp/login</title>
    </head>
    <body>
        Redirecting to <a href="http://127.0.0.1:8000/kcp/login">http://127.0.0.1:8000/kcp/login</a>.
    </body>
</html>
```
<div id="execution-results-GETkcp-database--database--edit" hidden>
    <blockquote>Received response<span id="execution-response-status-GETkcp-database--database--edit"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETkcp-database--database--edit"></code></pre>
</div>
<div id="execution-error-GETkcp-database--database--edit" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETkcp-database--database--edit"></code></pre>
</div>
<form id="form-GETkcp-database--database--edit" data-method="GET" data-path="kcp/database/{database}/edit" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETkcp-database--database--edit', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETkcp-database--database--edit" onclick="tryItOut('GETkcp-database--database--edit');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETkcp-database--database--edit" onclick="cancelTryOut('GETkcp-database--database--edit');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETkcp-database--database--edit" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>kcp/database/{database}/edit</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>database</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="database" data-endpoint="GETkcp-database--database--edit" data-component="url" required  hidden>
<br>

</p>
</form>


## Update database table.




> Example request:

```bash
curl -X PUT \
    "http://127.0.0.1:8000/kcp/database/iste" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/kcp/database/iste"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "PUT",
    headers,
}).then(response => response.json());
```


<div id="execution-results-PUTkcp-database--database-" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTkcp-database--database-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTkcp-database--database-"></code></pre>
</div>
<div id="execution-error-PUTkcp-database--database-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTkcp-database--database-"></code></pre>
</div>
<form id="form-PUTkcp-database--database-" data-method="PUT" data-path="kcp/database/{database}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PUTkcp-database--database-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PUTkcp-database--database-" onclick="tryItOut('PUTkcp-database--database-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PUTkcp-database--database-" onclick="cancelTryOut('PUTkcp-database--database-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PUTkcp-database--database-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>kcp/database/{database}</code></b>
</p>
<p>
<small class="badge badge-purple">PATCH</small>
 <b><code>kcp/database/{database}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>database</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="database" data-endpoint="PUTkcp-database--database-" data-component="url" required  hidden>
<br>

</p>
</form>


## Destroy table.




> Example request:

```bash
curl -X DELETE \
    "http://127.0.0.1:8000/kcp/database/aut" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/kcp/database/aut"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "DELETE",
    headers,
}).then(response => response.json());
```


<div id="execution-results-DELETEkcp-database--database-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEkcp-database--database-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEkcp-database--database-"></code></pre>
</div>
<div id="execution-error-DELETEkcp-database--database-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEkcp-database--database-"></code></pre>
</div>
<form id="form-DELETEkcp-database--database-" data-method="DELETE" data-path="kcp/database/{database}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEkcp-database--database-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEkcp-database--database-" onclick="tryItOut('DELETEkcp-database--database-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEkcp-database--database-" onclick="cancelTryOut('DELETEkcp-database--database-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEkcp-database--database-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>kcp/database/{database}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>database</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="database" data-endpoint="DELETEkcp-database--database-" data-component="url" required  hidden>
<br>

</p>
</form>


## kcp/compass




> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/kcp/compass" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/kcp/compass"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (302):

```json

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="refresh" content="0;url='http://127.0.0.1:8000/kcp/login'" />

        <title>Redirecting to http://127.0.0.1:8000/kcp/login</title>
    </head>
    <body>
        Redirecting to <a href="http://127.0.0.1:8000/kcp/login">http://127.0.0.1:8000/kcp/login</a>.
    </body>
</html>
```
<div id="execution-results-GETkcp-compass" hidden>
    <blockquote>Received response<span id="execution-response-status-GETkcp-compass"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETkcp-compass"></code></pre>
</div>
<div id="execution-error-GETkcp-compass" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETkcp-compass"></code></pre>
</div>
<form id="form-GETkcp-compass" data-method="GET" data-path="kcp/compass" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETkcp-compass', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETkcp-compass" onclick="tryItOut('GETkcp-compass');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETkcp-compass" onclick="cancelTryOut('GETkcp-compass');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETkcp-compass" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>kcp/compass</code></b>
</p>
</form>


## kcp/compass




> Example request:

```bash
curl -X POST \
    "http://127.0.0.1:8000/kcp/compass" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/kcp/compass"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response => response.json());
```


<div id="execution-results-POSTkcp-compass" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTkcp-compass"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTkcp-compass"></code></pre>
</div>
<div id="execution-error-POSTkcp-compass" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTkcp-compass"></code></pre>
</div>
<form id="form-POSTkcp-compass" data-method="POST" data-path="kcp/compass" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTkcp-compass', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTkcp-compass" onclick="tryItOut('POSTkcp-compass');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTkcp-compass" onclick="cancelTryOut('POSTkcp-compass');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTkcp-compass" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>kcp/compass</code></b>
</p>
</form>


## kcp/personalizemenus/set




> Example request:

```bash
curl -X POST \
    "http://127.0.0.1:8000/kcp/personalizemenus/set" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/kcp/personalizemenus/set"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response => response.json());
```


<div id="execution-results-POSTkcp-personalizemenus-set" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTkcp-personalizemenus-set"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTkcp-personalizemenus-set"></code></pre>
</div>
<div id="execution-error-POSTkcp-personalizemenus-set" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTkcp-personalizemenus-set"></code></pre>
</div>
<form id="form-POSTkcp-personalizemenus-set" data-method="POST" data-path="kcp/personalizemenus/set" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTkcp-personalizemenus-set', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTkcp-personalizemenus-set" onclick="tryItOut('POSTkcp-personalizemenus-set');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTkcp-personalizemenus-set" onclick="cancelTryOut('POSTkcp-personalizemenus-set');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTkcp-personalizemenus-set" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>kcp/personalizemenus/set</code></b>
</p>
</form>


## kcp/personalizemenus/delete




> Example request:

```bash
curl -X POST \
    "http://127.0.0.1:8000/kcp/personalizemenus/delete" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/kcp/personalizemenus/delete"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response => response.json());
```


<div id="execution-results-POSTkcp-personalizemenus-delete" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTkcp-personalizemenus-delete"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTkcp-personalizemenus-delete"></code></pre>
</div>
<div id="execution-error-POSTkcp-personalizemenus-delete" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTkcp-personalizemenus-delete"></code></pre>
</div>
<form id="form-POSTkcp-personalizemenus-delete" data-method="POST" data-path="kcp/personalizemenus/delete" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTkcp-personalizemenus-delete', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTkcp-personalizemenus-delete" onclick="tryItOut('POSTkcp-personalizemenus-delete');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTkcp-personalizemenus-delete" onclick="cancelTryOut('POSTkcp-personalizemenus-delete');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTkcp-personalizemenus-delete" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>kcp/personalizemenus/delete</code></b>
</p>
</form>


## kcp/personalizemenus/update




> Example request:

```bash
curl -X POST \
    "http://127.0.0.1:8000/kcp/personalizemenus/update" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/kcp/personalizemenus/update"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response => response.json());
```


<div id="execution-results-POSTkcp-personalizemenus-update" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTkcp-personalizemenus-update"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTkcp-personalizemenus-update"></code></pre>
</div>
<div id="execution-error-POSTkcp-personalizemenus-update" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTkcp-personalizemenus-update"></code></pre>
</div>
<form id="form-POSTkcp-personalizemenus-update" data-method="POST" data-path="kcp/personalizemenus/update" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTkcp-personalizemenus-update', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTkcp-personalizemenus-update" onclick="tryItOut('POSTkcp-personalizemenus-update');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTkcp-personalizemenus-update" onclick="cancelTryOut('POSTkcp-personalizemenus-update');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTkcp-personalizemenus-update" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>kcp/personalizemenus/update</code></b>
</p>
</form>


## kcp/notes/set




> Example request:

```bash
curl -X POST \
    "http://127.0.0.1:8000/kcp/notes/set" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/kcp/notes/set"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response => response.json());
```


<div id="execution-results-POSTkcp-notes-set" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTkcp-notes-set"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTkcp-notes-set"></code></pre>
</div>
<div id="execution-error-POSTkcp-notes-set" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTkcp-notes-set"></code></pre>
</div>
<form id="form-POSTkcp-notes-set" data-method="POST" data-path="kcp/notes/set" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTkcp-notes-set', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTkcp-notes-set" onclick="tryItOut('POSTkcp-notes-set');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTkcp-notes-set" onclick="cancelTryOut('POSTkcp-notes-set');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTkcp-notes-set" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>kcp/notes/set</code></b>
</p>
</form>


## kcp/notes/delete




> Example request:

```bash
curl -X POST \
    "http://127.0.0.1:8000/kcp/notes/delete" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/kcp/notes/delete"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response => response.json());
```


<div id="execution-results-POSTkcp-notes-delete" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTkcp-notes-delete"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTkcp-notes-delete"></code></pre>
</div>
<div id="execution-error-POSTkcp-notes-delete" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTkcp-notes-delete"></code></pre>
</div>
<form id="form-POSTkcp-notes-delete" data-method="POST" data-path="kcp/notes/delete" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTkcp-notes-delete', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTkcp-notes-delete" onclick="tryItOut('POSTkcp-notes-delete');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTkcp-notes-delete" onclick="cancelTryOut('POSTkcp-notes-delete');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTkcp-notes-delete" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>kcp/notes/delete</code></b>
</p>
</form>


## kcp/chartdata




> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/kcp/chartdata" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/kcp/chartdata"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (302):

```json

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="refresh" content="0;url='http://127.0.0.1:8000/kcp/login'" />

        <title>Redirecting to http://127.0.0.1:8000/kcp/login</title>
    </head>
    <body>
        Redirecting to <a href="http://127.0.0.1:8000/kcp/login">http://127.0.0.1:8000/kcp/login</a>.
    </body>
</html>
```
<div id="execution-results-GETkcp-chartdata" hidden>
    <blockquote>Received response<span id="execution-response-status-GETkcp-chartdata"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETkcp-chartdata"></code></pre>
</div>
<div id="execution-error-GETkcp-chartdata" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETkcp-chartdata"></code></pre>
</div>
<form id="form-GETkcp-chartdata" data-method="GET" data-path="kcp/chartdata" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETkcp-chartdata', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETkcp-chartdata" onclick="tryItOut('GETkcp-chartdata');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETkcp-chartdata" onclick="cancelTryOut('GETkcp-chartdata');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETkcp-chartdata" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>kcp/chartdata</code></b>
</p>
</form>


## kcp/messagetemplate/set




> Example request:

```bash
curl -X POST \
    "http://127.0.0.1:8000/kcp/messagetemplate/set" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/kcp/messagetemplate/set"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response => response.json());
```


<div id="execution-results-POSTkcp-messagetemplate-set" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTkcp-messagetemplate-set"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTkcp-messagetemplate-set"></code></pre>
</div>
<div id="execution-error-POSTkcp-messagetemplate-set" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTkcp-messagetemplate-set"></code></pre>
</div>
<form id="form-POSTkcp-messagetemplate-set" data-method="POST" data-path="kcp/messagetemplate/set" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTkcp-messagetemplate-set', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTkcp-messagetemplate-set" onclick="tryItOut('POSTkcp-messagetemplate-set');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTkcp-messagetemplate-set" onclick="cancelTryOut('POSTkcp-messagetemplate-set');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTkcp-messagetemplate-set" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>kcp/messagetemplate/set</code></b>
</p>
</form>


## kcp/messagetemplate/delete




> Example request:

```bash
curl -X POST \
    "http://127.0.0.1:8000/kcp/messagetemplate/delete" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/kcp/messagetemplate/delete"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response => response.json());
```


<div id="execution-results-POSTkcp-messagetemplate-delete" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTkcp-messagetemplate-delete"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTkcp-messagetemplate-delete"></code></pre>
</div>
<div id="execution-error-POSTkcp-messagetemplate-delete" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTkcp-messagetemplate-delete"></code></pre>
</div>
<form id="form-POSTkcp-messagetemplate-delete" data-method="POST" data-path="kcp/messagetemplate/delete" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTkcp-messagetemplate-delete', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTkcp-messagetemplate-delete" onclick="tryItOut('POSTkcp-messagetemplate-delete');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTkcp-messagetemplate-delete" onclick="cancelTryOut('POSTkcp-messagetemplate-delete');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTkcp-messagetemplate-delete" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>kcp/messagetemplate/delete</code></b>
</p>
</form>


## kcp/support/sendmessage




> Example request:

```bash
curl -X POST \
    "http://127.0.0.1:8000/kcp/support/sendmessage" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/kcp/support/sendmessage"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response => response.json());
```


<div id="execution-results-POSTkcp-support-sendmessage" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTkcp-support-sendmessage"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTkcp-support-sendmessage"></code></pre>
</div>
<div id="execution-error-POSTkcp-support-sendmessage" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTkcp-support-sendmessage"></code></pre>
</div>
<form id="form-POSTkcp-support-sendmessage" data-method="POST" data-path="kcp/support/sendmessage" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTkcp-support-sendmessage', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTkcp-support-sendmessage" onclick="tryItOut('POSTkcp-support-sendmessage');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTkcp-support-sendmessage" onclick="cancelTryOut('POSTkcp-support-sendmessage');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTkcp-support-sendmessage" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>kcp/support/sendmessage</code></b>
</p>
</form>


## kcp/support/readmessage




> Example request:

```bash
curl -X POST \
    "http://127.0.0.1:8000/kcp/support/readmessage" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/kcp/support/readmessage"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response => response.json());
```


<div id="execution-results-POSTkcp-support-readmessage" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTkcp-support-readmessage"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTkcp-support-readmessage"></code></pre>
</div>
<div id="execution-error-POSTkcp-support-readmessage" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTkcp-support-readmessage"></code></pre>
</div>
<form id="form-POSTkcp-support-readmessage" data-method="POST" data-path="kcp/support/readmessage" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTkcp-support-readmessage', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTkcp-support-readmessage" onclick="tryItOut('POSTkcp-support-readmessage');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTkcp-support-readmessage" onclick="cancelTryOut('POSTkcp-support-readmessage');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTkcp-support-readmessage" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>kcp/support/readmessage</code></b>
</p>
</form>


## kcp/support/getmessage




> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/kcp/support/getmessage" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/kcp/support/getmessage"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (302):

```json

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="refresh" content="0;url='http://127.0.0.1:8000/kcp/login'" />

        <title>Redirecting to http://127.0.0.1:8000/kcp/login</title>
    </head>
    <body>
        Redirecting to <a href="http://127.0.0.1:8000/kcp/login">http://127.0.0.1:8000/kcp/login</a>.
    </body>
</html>
```
<div id="execution-results-GETkcp-support-getmessage" hidden>
    <blockquote>Received response<span id="execution-response-status-GETkcp-support-getmessage"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETkcp-support-getmessage"></code></pre>
</div>
<div id="execution-error-GETkcp-support-getmessage" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETkcp-support-getmessage"></code></pre>
</div>
<form id="form-GETkcp-support-getmessage" data-method="GET" data-path="kcp/support/getmessage" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETkcp-support-getmessage', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETkcp-support-getmessage" onclick="tryItOut('GETkcp-support-getmessage');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETkcp-support-getmessage" onclick="cancelTryOut('GETkcp-support-getmessage');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETkcp-support-getmessage" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>kcp/support/getmessage</code></b>
</p>
</form>


## kcp/support/lockmessage




> Example request:

```bash
curl -X POST \
    "http://127.0.0.1:8000/kcp/support/lockmessage" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/kcp/support/lockmessage"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response => response.json());
```


<div id="execution-results-POSTkcp-support-lockmessage" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTkcp-support-lockmessage"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTkcp-support-lockmessage"></code></pre>
</div>
<div id="execution-error-POSTkcp-support-lockmessage" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTkcp-support-lockmessage"></code></pre>
</div>
<form id="form-POSTkcp-support-lockmessage" data-method="POST" data-path="kcp/support/lockmessage" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTkcp-support-lockmessage', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTkcp-support-lockmessage" onclick="tryItOut('POSTkcp-support-lockmessage');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTkcp-support-lockmessage" onclick="cancelTryOut('POSTkcp-support-lockmessage');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTkcp-support-lockmessage" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>kcp/support/lockmessage</code></b>
</p>
</form>


## kcp/support/banuser




> Example request:

```bash
curl -X POST \
    "http://127.0.0.1:8000/kcp/support/banuser" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/kcp/support/banuser"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response => response.json());
```


<div id="execution-results-POSTkcp-support-banuser" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTkcp-support-banuser"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTkcp-support-banuser"></code></pre>
</div>
<div id="execution-error-POSTkcp-support-banuser" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTkcp-support-banuser"></code></pre>
</div>
<form id="form-POSTkcp-support-banuser" data-method="POST" data-path="kcp/support/banuser" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTkcp-support-banuser', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTkcp-support-banuser" onclick="tryItOut('POSTkcp-support-banuser');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTkcp-support-banuser" onclick="cancelTryOut('POSTkcp-support-banuser');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTkcp-support-banuser" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>kcp/support/banuser</code></b>
</p>
</form>


## kcp/metas/{meta}/builder




> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/kcp/metas/iste/builder" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/kcp/metas/iste/builder"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (302):

```json

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="refresh" content="0;url='http://127.0.0.1:8000/kcp/login'" />

        <title>Redirecting to http://127.0.0.1:8000/kcp/login</title>
    </head>
    <body>
        Redirecting to <a href="http://127.0.0.1:8000/kcp/login">http://127.0.0.1:8000/kcp/login</a>.
    </body>
</html>
```
<div id="execution-results-GETkcp-metas--meta--builder" hidden>
    <blockquote>Received response<span id="execution-response-status-GETkcp-metas--meta--builder"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETkcp-metas--meta--builder"></code></pre>
</div>
<div id="execution-error-GETkcp-metas--meta--builder" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETkcp-metas--meta--builder"></code></pre>
</div>
<form id="form-GETkcp-metas--meta--builder" data-method="GET" data-path="kcp/metas/{meta}/builder" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETkcp-metas--meta--builder', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETkcp-metas--meta--builder" onclick="tryItOut('GETkcp-metas--meta--builder');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETkcp-metas--meta--builder" onclick="cancelTryOut('GETkcp-metas--meta--builder');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETkcp-metas--meta--builder" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>kcp/metas/{meta}/builder</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>meta</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="meta" data-endpoint="GETkcp-metas--meta--builder" data-component="url" required  hidden>
<br>

</p>
</form>


## kcp/metas/{meta}/order




> Example request:

```bash
curl -X POST \
    "http://127.0.0.1:8000/kcp/metas/sed/order" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/kcp/metas/sed/order"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response => response.json());
```


<div id="execution-results-POSTkcp-metas--meta--order" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTkcp-metas--meta--order"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTkcp-metas--meta--order"></code></pre>
</div>
<div id="execution-error-POSTkcp-metas--meta--order" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTkcp-metas--meta--order"></code></pre>
</div>
<form id="form-POSTkcp-metas--meta--order" data-method="POST" data-path="kcp/metas/{meta}/order" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTkcp-metas--meta--order', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTkcp-metas--meta--order" onclick="tryItOut('POSTkcp-metas--meta--order');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTkcp-metas--meta--order" onclick="cancelTryOut('POSTkcp-metas--meta--order');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTkcp-metas--meta--order" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>kcp/metas/{meta}/order</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>meta</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="meta" data-endpoint="POSTkcp-metas--meta--order" data-component="url" required  hidden>
<br>

</p>
</form>


## kcp/metas/{meta}/item/{id}




> Example request:

```bash
curl -X DELETE \
    "http://127.0.0.1:8000/kcp/metas/ut/item/rerum" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/kcp/metas/ut/item/rerum"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "DELETE",
    headers,
}).then(response => response.json());
```


<div id="execution-results-DELETEkcp-metas--meta--item--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEkcp-metas--meta--item--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEkcp-metas--meta--item--id-"></code></pre>
</div>
<div id="execution-error-DELETEkcp-metas--meta--item--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEkcp-metas--meta--item--id-"></code></pre>
</div>
<form id="form-DELETEkcp-metas--meta--item--id-" data-method="DELETE" data-path="kcp/metas/{meta}/item/{id}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEkcp-metas--meta--item--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEkcp-metas--meta--item--id-" onclick="tryItOut('DELETEkcp-metas--meta--item--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEkcp-metas--meta--item--id-" onclick="cancelTryOut('DELETEkcp-metas--meta--item--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEkcp-metas--meta--item--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>kcp/metas/{meta}/item/{id}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>meta</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="meta" data-endpoint="DELETEkcp-metas--meta--item--id-" data-component="url" required  hidden>
<br>

</p>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="DELETEkcp-metas--meta--item--id-" data-component="url" required  hidden>
<br>

</p>
</form>


## kcp/metas/{meta}/item




> Example request:

```bash
curl -X POST \
    "http://127.0.0.1:8000/kcp/metas/ex/item" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/kcp/metas/ex/item"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response => response.json());
```


<div id="execution-results-POSTkcp-metas--meta--item" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTkcp-metas--meta--item"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTkcp-metas--meta--item"></code></pre>
</div>
<div id="execution-error-POSTkcp-metas--meta--item" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTkcp-metas--meta--item"></code></pre>
</div>
<form id="form-POSTkcp-metas--meta--item" data-method="POST" data-path="kcp/metas/{meta}/item" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTkcp-metas--meta--item', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTkcp-metas--meta--item" onclick="tryItOut('POSTkcp-metas--meta--item');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTkcp-metas--meta--item" onclick="cancelTryOut('POSTkcp-metas--meta--item');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTkcp-metas--meta--item" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>kcp/metas/{meta}/item</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>meta</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="meta" data-endpoint="POSTkcp-metas--meta--item" data-component="url" required  hidden>
<br>

</p>
</form>


## kcp/metas/{meta}/item




> Example request:

```bash
curl -X PUT \
    "http://127.0.0.1:8000/kcp/metas/voluptatem/item" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/kcp/metas/voluptatem/item"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "PUT",
    headers,
}).then(response => response.json());
```


<div id="execution-results-PUTkcp-metas--meta--item" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTkcp-metas--meta--item"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTkcp-metas--meta--item"></code></pre>
</div>
<div id="execution-error-PUTkcp-metas--meta--item" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTkcp-metas--meta--item"></code></pre>
</div>
<form id="form-PUTkcp-metas--meta--item" data-method="PUT" data-path="kcp/metas/{meta}/item" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PUTkcp-metas--meta--item', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PUTkcp-metas--meta--item" onclick="tryItOut('PUTkcp-metas--meta--item');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PUTkcp-metas--meta--item" onclick="cancelTryOut('PUTkcp-metas--meta--item');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PUTkcp-metas--meta--item" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>kcp/metas/{meta}/item</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>meta</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="meta" data-endpoint="PUTkcp-metas--meta--item" data-component="url" required  hidden>
<br>

</p>
</form>


## kcp/voyager-assets




> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/kcp/voyager-assets" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/kcp/voyager-assets"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (500):

```json
{
    "message": "File does not exist at path C:\\Users\\User\\Desktop\\karoostudio\\vendor\\karo\\kcp\/publishable\/assets\/.",
    "exception": "Illuminate\\Contracts\\Filesystem\\FileNotFoundException",
    "file": "C:\\Users\\User\\Desktop\\karoostudio\\vendor\\laravel\\framework\\src\\Illuminate\\Filesystem\\Filesystem.php",
    "line": 57,
    "trace": [
        {
            "file": "C:\\Users\\User\\Desktop\\karoostudio\\vendor\\laravel\\framework\\src\\Illuminate\\Support\\Facades\\Facade.php",
            "line": 261,
            "function": "get",
            "class": "Illuminate\\Filesystem\\Filesystem",
            "type": "->"
        },
        {
            "file": "C:\\Users\\User\\Desktop\\karoostudio\\vendor\\karo\\kcp\\src\\Http\\Controllers\\VoyagerController.php",
            "line": 107,
            "function": "__callStatic",
            "class": "Illuminate\\Support\\Facades\\Facade",
            "type": "::"
        },
        {
            "file": "C:\\Users\\User\\Desktop\\karoostudio\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Controller.php",
            "line": 54,
            "function": "assets",
            "class": "TCG\\Voyager\\Http\\Controllers\\VoyagerController",
            "type": "->"
        },
        {
            "file": "C:\\Users\\User\\Desktop\\karoostudio\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\ControllerDispatcher.php",
            "line": 45,
            "function": "callAction",
            "class": "Illuminate\\Routing\\Controller",
            "type": "->"
        },
        {
            "file": "C:\\Users\\User\\Desktop\\karoostudio\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Route.php",
            "line": 262,
            "function": "dispatch",
            "class": "Illuminate\\Routing\\ControllerDispatcher",
            "type": "->"
        },
        {
            "file": "C:\\Users\\User\\Desktop\\karoostudio\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Route.php",
            "line": 205,
            "function": "runController",
            "class": "Illuminate\\Routing\\Route",
            "type": "->"
        },
        {
            "file": "C:\\Users\\User\\Desktop\\karoostudio\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 721,
            "function": "run",
            "class": "Illuminate\\Routing\\Route",
            "type": "->"
        },
        {
            "file": "C:\\Users\\User\\Desktop\\karoostudio\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 128,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "C:\\Users\\User\\Desktop\\karoostudio\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Middleware\\SubstituteBindings.php",
            "line": 50,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "C:\\Users\\User\\Desktop\\karoostudio\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Routing\\Middleware\\SubstituteBindings",
            "type": "->"
        },
        {
            "file": "C:\\Users\\User\\Desktop\\karoostudio\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\VerifyCsrfToken.php",
            "line": 78,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "C:\\Users\\User\\Desktop\\karoostudio\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\VerifyCsrfToken",
            "type": "->"
        },
        {
            "file": "C:\\Users\\User\\Desktop\\karoostudio\\vendor\\laravel\\framework\\src\\Illuminate\\View\\Middleware\\ShareErrorsFromSession.php",
            "line": 49,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "C:\\Users\\User\\Desktop\\karoostudio\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\View\\Middleware\\ShareErrorsFromSession",
            "type": "->"
        },
        {
            "file": "C:\\Users\\User\\Desktop\\karoostudio\\vendor\\laravel\\framework\\src\\Illuminate\\Session\\Middleware\\StartSession.php",
            "line": 121,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "C:\\Users\\User\\Desktop\\karoostudio\\vendor\\laravel\\framework\\src\\Illuminate\\Session\\Middleware\\StartSession.php",
            "line": 64,
            "function": "handleStatefulRequest",
            "class": "Illuminate\\Session\\Middleware\\StartSession",
            "type": "->"
        },
        {
            "file": "C:\\Users\\User\\Desktop\\karoostudio\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Session\\Middleware\\StartSession",
            "type": "->"
        },
        {
            "file": "C:\\Users\\User\\Desktop\\karoostudio\\vendor\\laravel\\framework\\src\\Illuminate\\Cookie\\Middleware\\AddQueuedCookiesToResponse.php",
            "line": 37,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "C:\\Users\\User\\Desktop\\karoostudio\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Cookie\\Middleware\\AddQueuedCookiesToResponse",
            "type": "->"
        },
        {
            "file": "C:\\Users\\User\\Desktop\\karoostudio\\vendor\\laravel\\framework\\src\\Illuminate\\Cookie\\Middleware\\EncryptCookies.php",
            "line": 67,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "C:\\Users\\User\\Desktop\\karoostudio\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Cookie\\Middleware\\EncryptCookies",
            "type": "->"
        },
        {
            "file": "C:\\Users\\User\\Desktop\\karoostudio\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 103,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "C:\\Users\\User\\Desktop\\karoostudio\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 723,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "C:\\Users\\User\\Desktop\\karoostudio\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 698,
            "function": "runRouteWithinStack",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "C:\\Users\\User\\Desktop\\karoostudio\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 662,
            "function": "runRoute",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "C:\\Users\\User\\Desktop\\karoostudio\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 651,
            "function": "dispatchToRoute",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "C:\\Users\\User\\Desktop\\karoostudio\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php",
            "line": 167,
            "function": "dispatch",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "C:\\Users\\User\\Desktop\\karoostudio\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 128,
            "function": "Illuminate\\Foundation\\Http\\{closure}",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "C:\\Users\\User\\Desktop\\karoostudio\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest.php",
            "line": 21,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "C:\\Users\\User\\Desktop\\karoostudio\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\ConvertEmptyStringsToNull.php",
            "line": 31,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest",
            "type": "->"
        },
        {
            "file": "C:\\Users\\User\\Desktop\\karoostudio\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\ConvertEmptyStringsToNull",
            "type": "->"
        },
        {
            "file": "C:\\Users\\User\\Desktop\\karoostudio\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest.php",
            "line": 21,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "C:\\Users\\User\\Desktop\\karoostudio\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TrimStrings.php",
            "line": 40,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest",
            "type": "->"
        },
        {
            "file": "C:\\Users\\User\\Desktop\\karoostudio\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TrimStrings",
            "type": "->"
        },
        {
            "file": "C:\\Users\\User\\Desktop\\karoostudio\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize.php",
            "line": 27,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "C:\\Users\\User\\Desktop\\karoostudio\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize",
            "type": "->"
        },
        {
            "file": "C:\\Users\\User\\Desktop\\karoostudio\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\PreventRequestsDuringMaintenance.php",
            "line": 86,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "C:\\Users\\User\\Desktop\\karoostudio\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\PreventRequestsDuringMaintenance",
            "type": "->"
        },
        {
            "file": "C:\\Users\\User\\Desktop\\karoostudio\\vendor\\fruitcake\\laravel-cors\\src\\HandleCors.php",
            "line": 38,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "C:\\Users\\User\\Desktop\\karoostudio\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Fruitcake\\Cors\\HandleCors",
            "type": "->"
        },
        {
            "file": "C:\\Users\\User\\Desktop\\karoostudio\\vendor\\laravel\\framework\\src\\Illuminate\\Http\\Middleware\\TrustProxies.php",
            "line": 39,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "C:\\Users\\User\\Desktop\\karoostudio\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Http\\Middleware\\TrustProxies",
            "type": "->"
        },
        {
            "file": "C:\\Users\\User\\Desktop\\karoostudio\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 103,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "C:\\Users\\User\\Desktop\\karoostudio\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php",
            "line": 142,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "C:\\Users\\User\\Desktop\\karoostudio\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php",
            "line": 111,
            "function": "sendRequestThroughRouter",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "C:\\Users\\User\\Desktop\\karoostudio\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php",
            "line": 324,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "C:\\Users\\User\\Desktop\\karoostudio\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php",
            "line": 305,
            "function": "callLaravelOrLumenRoute",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "C:\\Users\\User\\Desktop\\karoostudio\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php",
            "line": 76,
            "function": "makeApiCall",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "C:\\Users\\User\\Desktop\\karoostudio\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php",
            "line": 51,
            "function": "makeResponseCall",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "C:\\Users\\User\\Desktop\\karoostudio\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php",
            "line": 41,
            "function": "makeResponseCallIfEnabledAndNoSuccessResponses",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "C:\\Users\\User\\Desktop\\karoostudio\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Generator.php",
            "line": 236,
            "function": "__invoke",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "C:\\Users\\User\\Desktop\\karoostudio\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Generator.php",
            "line": 172,
            "function": "iterateThroughStrategies",
            "class": "Knuckles\\Scribe\\Extracting\\Generator",
            "type": "->"
        },
        {
            "file": "C:\\Users\\User\\Desktop\\karoostudio\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Generator.php",
            "line": 127,
            "function": "fetchResponses",
            "class": "Knuckles\\Scribe\\Extracting\\Generator",
            "type": "->"
        },
        {
            "file": "C:\\Users\\User\\Desktop\\karoostudio\\vendor\\knuckleswtf\\scribe\\src\\Commands\\GenerateDocumentation.php",
            "line": 119,
            "function": "processRoute",
            "class": "Knuckles\\Scribe\\Extracting\\Generator",
            "type": "->"
        },
        {
            "file": "C:\\Users\\User\\Desktop\\karoostudio\\vendor\\knuckleswtf\\scribe\\src\\Commands\\GenerateDocumentation.php",
            "line": 73,
            "function": "processRoutes",
            "class": "Knuckles\\Scribe\\Commands\\GenerateDocumentation",
            "type": "->"
        },
        {
            "file": "C:\\Users\\User\\Desktop\\karoostudio\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php",
            "line": 36,
            "function": "handle",
            "class": "Knuckles\\Scribe\\Commands\\GenerateDocumentation",
            "type": "->"
        },
        {
            "file": "C:\\Users\\User\\Desktop\\karoostudio\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Util.php",
            "line": 40,
            "function": "Illuminate\\Container\\{closure}",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "C:\\Users\\User\\Desktop\\karoostudio\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php",
            "line": 93,
            "function": "unwrapIfClosure",
            "class": "Illuminate\\Container\\Util",
            "type": "::"
        },
        {
            "file": "C:\\Users\\User\\Desktop\\karoostudio\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php",
            "line": 37,
            "function": "callBoundMethod",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "C:\\Users\\User\\Desktop\\karoostudio\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php",
            "line": 653,
            "function": "call",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "C:\\Users\\User\\Desktop\\karoostudio\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php",
            "line": 136,
            "function": "call",
            "class": "Illuminate\\Container\\Container",
            "type": "->"
        },
        {
            "file": "C:\\Users\\User\\Desktop\\karoostudio\\vendor\\symfony\\console\\Command\\Command.php",
            "line": 298,
            "function": "execute",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "C:\\Users\\User\\Desktop\\karoostudio\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php",
            "line": 121,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Command\\Command",
            "type": "->"
        },
        {
            "file": "C:\\Users\\User\\Desktop\\karoostudio\\vendor\\symfony\\console\\Application.php",
            "line": 1024,
            "function": "run",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "C:\\Users\\User\\Desktop\\karoostudio\\vendor\\symfony\\console\\Application.php",
            "line": 299,
            "function": "doRunCommand",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "C:\\Users\\User\\Desktop\\karoostudio\\vendor\\symfony\\console\\Application.php",
            "line": 171,
            "function": "doRun",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "C:\\Users\\User\\Desktop\\karoostudio\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Application.php",
            "line": 94,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "C:\\Users\\User\\Desktop\\karoostudio\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Console\\Kernel.php",
            "line": 129,
            "function": "run",
            "class": "Illuminate\\Console\\Application",
            "type": "->"
        },
        {
            "file": "C:\\Users\\User\\Desktop\\karoostudio\\artisan",
            "line": 37,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Console\\Kernel",
            "type": "->"
        }
    ]
}
```
<div id="execution-results-GETkcp-voyager-assets" hidden>
    <blockquote>Received response<span id="execution-response-status-GETkcp-voyager-assets"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETkcp-voyager-assets"></code></pre>
</div>
<div id="execution-error-GETkcp-voyager-assets" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETkcp-voyager-assets"></code></pre>
</div>
<form id="form-GETkcp-voyager-assets" data-method="GET" data-path="kcp/voyager-assets" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETkcp-voyager-assets', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETkcp-voyager-assets" onclick="tryItOut('GETkcp-voyager-assets');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETkcp-voyager-assets" onclick="cancelTryOut('GETkcp-voyager-assets');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETkcp-voyager-assets" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>kcp/voyager-assets</code></b>
</p>
</form>



