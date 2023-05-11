# Authentication

API endpoints for managing authentication

## register new client




> Example request:

```bash
curl -X POST \
    "http://127.0.0.1:8000/api/v1/application/auth/register" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"name":"ducimus","email":"bmurray@example.com","password":"quae","password_confirmation":"sit"}'

```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/api/v1/application/auth/register"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "ducimus",
    "email": "bmurray@example.com",
    "password": "quae",
    "password_confirmation": "sit"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


> Example response (200):

```json
{
    "success": true,
    "message": "Create User Done Successfully!",
    "data": {
        "user": {
            "name": "zahra",
            "email": "zahsrssas1@gmail.com",
            "updated_at": "2022-06-24 16:26:31",
            "created_at": "2022-06-24 16:26:31",
            "id": 6
        },
        "token": "8|WN4NgbCkxa0Xva9AyyUBD763l28lTMHH1h3HUEOW"
    }
}
```
> Example response (200):

```json
{
    "success": false,
    "message": "The email has already been taken."
}
```
<div id="execution-results-POSTapi-v1-application-auth-register" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-v1-application-auth-register"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-application-auth-register"></code></pre>
</div>
<div id="execution-error-POSTapi-v1-application-auth-register" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-application-auth-register"></code></pre>
</div>
<form id="form-POSTapi-v1-application-auth-register" data-method="POST" data-path="api/v1/application/auth/register" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-application-auth-register', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-v1-application-auth-register" onclick="tryItOut('POSTapi-v1-application-auth-register');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-v1-application-auth-register" onclick="cancelTryOut('POSTapi-v1-application-auth-register');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-v1-application-auth-register" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/v1/application/auth/register</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="name" data-endpoint="POSTapi-v1-application-auth-register" data-component="body" required  hidden>
<br>

</p>
<p>
<b><code>email</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="email" data-endpoint="POSTapi-v1-application-auth-register" data-component="body" required  hidden>
<br>
The value must be a valid email address.
</p>
<p>
<b><code>password</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="password" name="password" data-endpoint="POSTapi-v1-application-auth-register" data-component="body" required  hidden>
<br>

</p>
<p>
<b><code>password_confirmation</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="password" name="password_confirmation" data-endpoint="POSTapi-v1-application-auth-register" data-component="body" required  hidden>
<br>

</p>

</form>


## login client




> Example request:

```bash
curl -X POST \
    "http://127.0.0.1:8000/api/v1/application/auth/login" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"email":"chelsie.hegmann@example.net","password":"harum"}'

```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/api/v1/application/auth/login"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "email": "chelsie.hegmann@example.net",
    "password": "harum"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
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
<div id="execution-results-POSTapi-v1-application-auth-login" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-v1-application-auth-login"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-application-auth-login"></code></pre>
</div>
<div id="execution-error-POSTapi-v1-application-auth-login" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-application-auth-login"></code></pre>
</div>
<form id="form-POSTapi-v1-application-auth-login" data-method="POST" data-path="api/v1/application/auth/login" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-application-auth-login', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-v1-application-auth-login" onclick="tryItOut('POSTapi-v1-application-auth-login');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-v1-application-auth-login" onclick="cancelTryOut('POSTapi-v1-application-auth-login');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-v1-application-auth-login" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/v1/application/auth/login</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>email</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="email" data-endpoint="POSTapi-v1-application-auth-login" data-component="body" required  hidden>
<br>
The value must be a valid email address.
</p>
<p>
<b><code>password</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="password" name="password" data-endpoint="POSTapi-v1-application-auth-login" data-component="body" required  hidden>
<br>

</p>

</form>


## forget password




> Example request:

```bash
curl -X POST \
    "http://127.0.0.1:8000/api/v1/application/auth/forget-password" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"email":"conn.imelda@example.com"}'

```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/api/v1/application/auth/forget-password"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "email": "conn.imelda@example.com"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


> Example response (200):

```json
{
    "success": true,
    "message": "Forget Password Done Successfully!",
    "data": {
        "email": "zahsrsas1@gmail.com",
        "token": "Pgo9uCfdWhW3nms87TfKDidl6lH2S1aEn4sToFNUWjiz6U1Rqj3As2asdpNJ"
    }
}
```
> Example response (200):

```json
{
    "success": false,
    "message": "The selected email is invalid."
}
```
<div id="execution-results-POSTapi-v1-application-auth-forget-password" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-v1-application-auth-forget-password"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-application-auth-forget-password"></code></pre>
</div>
<div id="execution-error-POSTapi-v1-application-auth-forget-password" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-application-auth-forget-password"></code></pre>
</div>
<form id="form-POSTapi-v1-application-auth-forget-password" data-method="POST" data-path="api/v1/application/auth/forget-password" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-application-auth-forget-password', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-v1-application-auth-forget-password" onclick="tryItOut('POSTapi-v1-application-auth-forget-password');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-v1-application-auth-forget-password" onclick="cancelTryOut('POSTapi-v1-application-auth-forget-password');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-v1-application-auth-forget-password" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/v1/application/auth/forget-password</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>email</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="email" data-endpoint="POSTapi-v1-application-auth-forget-password" data-component="body" required  hidden>
<br>
The value must be a valid email address.
</p>

</form>


## reset password




> Example request:

```bash
curl -X POST \
    "http://127.0.0.1:8000/api/v1/application/auth/reset-password" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"email":"laila.flatley@example.com","password":"sit","password_confirmation":"ea","token":"qui"}'

```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/api/v1/application/auth/reset-password"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "email": "laila.flatley@example.com",
    "password": "sit",
    "password_confirmation": "ea",
    "token": "qui"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


> Example response (200):

```json
{
    "success": true,
    "message": "Forget Password Done Successfully!",
    "data": {
        "user": {
            "id": 5,
            "name": "zahra",
            "email": "zahsrsas1@gmail.com",
            "created_at": "2022-06-24 13:18:47",
            "updated_at": "2022-06-24 16:34:39"
        }
    }
}
```
> Example response (200):

```json
{
    "success": false,
    "message": "The selected email is invalid."
}
```
<div id="execution-results-POSTapi-v1-application-auth-reset-password" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-v1-application-auth-reset-password"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-application-auth-reset-password"></code></pre>
</div>
<div id="execution-error-POSTapi-v1-application-auth-reset-password" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-application-auth-reset-password"></code></pre>
</div>
<form id="form-POSTapi-v1-application-auth-reset-password" data-method="POST" data-path="api/v1/application/auth/reset-password" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-application-auth-reset-password', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-v1-application-auth-reset-password" onclick="tryItOut('POSTapi-v1-application-auth-reset-password');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-v1-application-auth-reset-password" onclick="cancelTryOut('POSTapi-v1-application-auth-reset-password');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-v1-application-auth-reset-password" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/v1/application/auth/reset-password</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>email</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="email" data-endpoint="POSTapi-v1-application-auth-reset-password" data-component="body" required  hidden>
<br>
The value must be a valid email address.
</p>
<p>
<b><code>password</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="password" name="password" data-endpoint="POSTapi-v1-application-auth-reset-password" data-component="body" required  hidden>
<br>

</p>
<p>
<b><code>password_confirmation</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="password" name="password_confirmation" data-endpoint="POSTapi-v1-application-auth-reset-password" data-component="body" required  hidden>
<br>

</p>
<p>
<b><code>token</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="token" data-endpoint="POSTapi-v1-application-auth-reset-password" data-component="body" required  hidden>
<br>

</p>

</form>


## resend email verification token




> Example request:

```bash
curl -X POST \
    "http://127.0.0.1:8000/api/v1/application/auth/verify/resend" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"email":"kulas.hulda@example.org"}'

```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/api/v1/application/auth/verify/resend"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "email": "kulas.hulda@example.org"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


> Example response (200):

```json
{
    "success": true,
    "message": "Forget Password Done Successfully!",
    "data": {
        "user": {
            "id": 5,
            "name": "zahra",
            "email": "zahsrsas1@gmail.com",
            "created_at": "2022-06-24 13:18:47",
            "updated_at": "2022-06-24 16:34:39"
        }
    }
}
```
> Example response (200):

```json
{
    "success": false,
    "message": "The selected email is invalid."
}
```
<div id="execution-results-POSTapi-v1-application-auth-verify-resend" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-v1-application-auth-verify-resend"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-application-auth-verify-resend"></code></pre>
</div>
<div id="execution-error-POSTapi-v1-application-auth-verify-resend" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-application-auth-verify-resend"></code></pre>
</div>
<form id="form-POSTapi-v1-application-auth-verify-resend" data-method="POST" data-path="api/v1/application/auth/verify/resend" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-application-auth-verify-resend', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-v1-application-auth-verify-resend" onclick="tryItOut('POSTapi-v1-application-auth-verify-resend');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-v1-application-auth-verify-resend" onclick="cancelTryOut('POSTapi-v1-application-auth-verify-resend');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-v1-application-auth-verify-resend" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/v1/application/auth/verify/resend</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>email</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="email" data-endpoint="POSTapi-v1-application-auth-verify-resend" data-component="body" required  hidden>
<br>
The value must be a valid email address.
</p>

</form>


## email verification




> Example request:

```bash
curl -X POST \
    "http://127.0.0.1:8000/api/v1/application/auth/verify" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"email":"howe.giovanny@example.com","token":"autem"}'

```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/api/v1/application/auth/verify"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "email": "howe.giovanny@example.com",
    "token": "autem"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


> Example response (200):

```json
{
    "success": true,
    "message": "Forget Password Done Successfully!",
    "data": {
        "user": {
            "id": 5,
            "name": "zahra",
            "email": "zahsrsas1@gmail.com",
            "created_at": "2022-06-24 13:18:47",
            "updated_at": "2022-06-24 16:34:39"
        }
    }
}
```
> Example response (200):

```json
{
    "success": false,
    "message": "The selected email is invalid."
}
```
<div id="execution-results-POSTapi-v1-application-auth-verify" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-v1-application-auth-verify"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-application-auth-verify"></code></pre>
</div>
<div id="execution-error-POSTapi-v1-application-auth-verify" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-application-auth-verify"></code></pre>
</div>
<form id="form-POSTapi-v1-application-auth-verify" data-method="POST" data-path="api/v1/application/auth/verify" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-application-auth-verify', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-v1-application-auth-verify" onclick="tryItOut('POSTapi-v1-application-auth-verify');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-v1-application-auth-verify" onclick="cancelTryOut('POSTapi-v1-application-auth-verify');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-v1-application-auth-verify" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/v1/application/auth/verify</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>email</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="email" data-endpoint="POSTapi-v1-application-auth-verify" data-component="body" required  hidden>
<br>
The value must be a valid email address.
</p>
<p>
<b><code>token</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="token" data-endpoint="POSTapi-v1-application-auth-verify" data-component="body" required  hidden>
<br>

</p>

</form>


## logout a user




> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/api/v1/application/profile/logout" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/api/v1/application/profile/logout"
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
<div id="execution-results-GETapi-v1-application-profile-logout" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-v1-application-profile-logout"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-application-profile-logout"></code></pre>
</div>
<div id="execution-error-GETapi-v1-application-profile-logout" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-application-profile-logout"></code></pre>
</div>
<form id="form-GETapi-v1-application-profile-logout" data-method="GET" data-path="api/v1/application/profile/logout" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-application-profile-logout', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-v1-application-profile-logout" onclick="tryItOut('GETapi-v1-application-profile-logout');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-v1-application-profile-logout" onclick="cancelTryOut('GETapi-v1-application-profile-logout');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-v1-application-profile-logout" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/v1/application/profile/logout</code></b>
</p>
</form>


## login admin




> Example request:

```bash
curl -X POST \
    "http://127.0.0.1:8000/api/v1/panel/auth/login" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"email":"jakubowski.zackery@example.com","password":"iusto"}'

```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/api/v1/panel/auth/login"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "email": "jakubowski.zackery@example.com",
    "password": "iusto"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
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
<div id="execution-results-POSTapi-v1-panel-auth-login" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-v1-panel-auth-login"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-panel-auth-login"></code></pre>
</div>
<div id="execution-error-POSTapi-v1-panel-auth-login" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-panel-auth-login"></code></pre>
</div>
<form id="form-POSTapi-v1-panel-auth-login" data-method="POST" data-path="api/v1/panel/auth/login" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-panel-auth-login', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-v1-panel-auth-login" onclick="tryItOut('POSTapi-v1-panel-auth-login');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-v1-panel-auth-login" onclick="cancelTryOut('POSTapi-v1-panel-auth-login');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-v1-panel-auth-login" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/v1/panel/auth/login</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>email</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="email" data-endpoint="POSTapi-v1-panel-auth-login" data-component="body" required  hidden>
<br>
The value must be a valid email address.
</p>
<p>
<b><code>password</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="password" name="password" data-endpoint="POSTapi-v1-panel-auth-login" data-component="body" required  hidden>
<br>

</p>

</form>


## logout a user




> Example request:

```bash
curl -X POST \
    "http://127.0.0.1:8000/api/v1/panel/auth/logout" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/api/v1/panel/auth/logout"
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


<div id="execution-results-POSTapi-v1-panel-auth-logout" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-v1-panel-auth-logout"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-panel-auth-logout"></code></pre>
</div>
<div id="execution-error-POSTapi-v1-panel-auth-logout" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-panel-auth-logout"></code></pre>
</div>
<form id="form-POSTapi-v1-panel-auth-logout" data-method="POST" data-path="api/v1/panel/auth/logout" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-panel-auth-logout', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-v1-panel-auth-logout" onclick="tryItOut('POSTapi-v1-panel-auth-logout');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-v1-panel-auth-logout" onclick="cancelTryOut('POSTapi-v1-panel-auth-logout');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-v1-panel-auth-logout" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/v1/panel/auth/logout</code></b>
</p>
</form>



