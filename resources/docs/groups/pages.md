# Pages


## api/v1/application/profile/about_us




> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/api/v1/application/profile/about_us" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/api/v1/application/profile/about_us"
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
    "message": "You Are Successfully Login!",
    "data": {
        "user": {
            "id": 5,
            "name": "zahra",
            "email": "zahsrsas1@gmail.com",
            "created_at": "2022-06-24 13:18:47",
            "updated_at": "2022-06-24 15:09:50"
        },
        "token": "7|7ofBu5fL7khZ7cyr6xJM1MARCdeS8PqXsDod1riv"
    }
}
```
> Example response (200):

```json
{
    "success": false,
    "message": "Your Email Or Password Is Incorrect!"
}
```
<div id="execution-results-GETapi-v1-application-profile-about_us" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-v1-application-profile-about_us"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-application-profile-about_us"></code></pre>
</div>
<div id="execution-error-GETapi-v1-application-profile-about_us" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-application-profile-about_us"></code></pre>
</div>
<form id="form-GETapi-v1-application-profile-about_us" data-method="GET" data-path="api/v1/application/profile/about_us" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-application-profile-about_us', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-v1-application-profile-about_us" onclick="tryItOut('GETapi-v1-application-profile-about_us');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-v1-application-profile-about_us" onclick="cancelTryOut('GETapi-v1-application-profile-about_us');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-v1-application-profile-about_us" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/v1/application/profile/about_us</code></b>
</p>
</form>


## api/v1/landing/pages/about_us




> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/api/v1/landing/pages/about_us" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/api/v1/landing/pages/about_us"
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
    "message": "You Are Successfully Login!",
    "data": {
        "user": {
            "id": 5,
            "name": "zahra",
            "email": "zahsrsas1@gmail.com",
            "created_at": "2022-06-24 13:18:47",
            "updated_at": "2022-06-24 15:09:50"
        },
        "token": "7|7ofBu5fL7khZ7cyr6xJM1MARCdeS8PqXsDod1riv"
    }
}
```
> Example response (200):

```json
{
    "success": false,
    "message": "Your Email Or Password Is Incorrect!"
}
```
<div id="execution-results-GETapi-v1-landing-pages-about_us" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-v1-landing-pages-about_us"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-landing-pages-about_us"></code></pre>
</div>
<div id="execution-error-GETapi-v1-landing-pages-about_us" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-landing-pages-about_us"></code></pre>
</div>
<form id="form-GETapi-v1-landing-pages-about_us" data-method="GET" data-path="api/v1/landing/pages/about_us" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-landing-pages-about_us', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-v1-landing-pages-about_us" onclick="tryItOut('GETapi-v1-landing-pages-about_us');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-v1-landing-pages-about_us" onclick="cancelTryOut('GETapi-v1-landing-pages-about_us');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-v1-landing-pages-about_us" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/v1/landing/pages/about_us</code></b>
</p>
</form>



