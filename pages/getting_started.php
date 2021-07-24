<section class="page-section" data-id="getting-started">
  <div class="container">
    <div class="row">
      <div class="col-sm-8 scroll-reveal slide-up">
        <h2 class="pb-3">Get Started</h2>
        <h4>You can deploy ACCESS localy on your system by following this steps:</h4>
      </div>
    </div>
    <br>
    <div class="row pt-3 scroll-reveal slide-up">
      <div class="col-sm-12">
        <h4>Infrastructure</h4>
        <p>First you need to define the following valiables</p>
        <pre><code class="env hljs">DB_USER=database_user
DB_PASSWORD=database_password
MONGO_DB_NAME=mongodb
MONGO_DB_USER=mongodb_user
MONGO_DB_PASSWORD=mongodb_password
KEYCLOAK_REALM
KEYCLOAK_USER=keycloak_user
KEYCLOAK_PASSWORD=keycloak_password
GITLAB_WEBHOOK_SECRET
DOCKER_WORKER_HOST
AUTH_SERVER
JWK_URI
FRONTEND_REALM
REDIRECT_URI_EMAIL
BACKEND_VERSION
NGINX_CONF
</code>
</pre>
        <div class="scroll-reveal slide-up">
          <p>Next, download and spin up the docker images</p>
          <pre><code class="lang-bash hljs"><span class="hljs-comment"># Download the Infrastructure</span>
git <span class="hljs-built_in">clone</span> https://github.com/mp-access/Infrastructure.git

<span class="hljs-comment"># Start up the Infrastructure Docker images</span>
docker-compose -f docker-compose-prod.yml up
</code>
</pre>
        </div>
      </div>
    </div>
  </div>
</section>