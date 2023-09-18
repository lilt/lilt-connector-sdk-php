# # NewJobOptions

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**project_prefix** | **string** | A string value to include in the Project name. | [optional]
**project_name_template** | **string** | The template string to use when generating Project names.  The available template options are:  - **today** - Today&#39;s date. Formatted as YYYY-MM-DD. - **trglocale** - The target locale for the given project. - **filename** - The name of the current file being uploaded. - **project_prefix** - The project_prefix value provided in the   configuration. - **project_name** - The project_name value assigned to the file in   the code. - **connector_id** - The Connector ID. - **connector_type** - The Connector Type (e.g. \&quot;xtm\&quot;, \&quot;salesforce\&quot;). | [optional]
**lilt_translation_workflow** | **string** |  | [optional]
**lilt_default_due_date** | **string** | The due date to use when creating Lilt Jobs/Projects if no specific due date is specified on the file level. | [optional]
**lilt_target_languages** | **string[]** | The list of target languages to use for the new job. The values provided should be present in the target_memories section of the configuration. | [optional]
**handle_credit_transactions** | **bool** | If true, credit transactions will be handled by the connector. If false, no credit transactions will be created for the job. | [optional] [default to false]
**source_word_count** | **float** | The source word count to use when creating credits transaction for instant transaltion jobs. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
