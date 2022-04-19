docker run --rm -v "${PWD}:/local" openapitools/openapi-generator-cli generate \
    --git-repo-id lilt-connector-sdk-php \
    --git-user-id lilt \
    -p packageName=lilt-connector-sdk \
    -p invokerPackage=LiltConnectorSDK \
    -i https://connectors-admin.lilt.com/docs/api/_specs/plugin_api.json \
    -g php \
    -o /local/
