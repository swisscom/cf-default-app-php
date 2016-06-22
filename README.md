# DESCRIPTION

php default Application to be pushed when the developer does not upload any WAR or ZIP file during creation of an application in the portal.

# BUILD

    zip the folder

# DEPLOY with CLOUDFOUNDRY

    cf push <APP-NAME> -p target/default-app.zip

