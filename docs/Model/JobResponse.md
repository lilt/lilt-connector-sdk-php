# # JobResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  | [optional]
**project_prefix** | **string** |  | [optional]
**status** | **string** | This value tracks the async processing status of the job. | [optional]
**order_status** | **string** | This value tracks the completion status of the translation order. | [optional]
**target_languages** | **string[]** |  | [optional]
**translation_workflow** | **string** | This indicates the translation workflow being used. UNKNOWN will only be displayed in exceptional cases. | [optional]
**due_date** | **\DateTime** |  | [optional]
**error_msg** | **string** |  | [optional]
**created_at** | **\DateTime** |  | [optional]
**updated_at** | **\DateTime** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
