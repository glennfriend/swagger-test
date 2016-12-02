<?php
$httpHost = $_SERVER['HTTP_HOST'] ?? 'localhost';
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST, DELETE, PUT, PATCH, OPTIONS');
header('Access-Control-Allow-Headers: Content-Type, api_key, Authorization');
header('Content-Type: application/json');
?>{
    "swagger": "2.0",
    "info": {
        "description": "this is document",
        "title": "Swagger Petstore",
        "contact": {
        }
    },
    "host": "<?php echo $httpHost; ?>",
    "basePath": "/project/api",
    "tags": [
        {
            "name": "EcSystem",
            "description": "Electronic Commerce 電子商務"
        }
    ],
    "schemes": [
        "https"
    ],
    "paths": {
        "/orders": {
            "get": {
                "tags": [
                    "EcSystem"
                ],
                "summary": "find appointments",
                "description": "",
                "produces": [
                    "application/json"
                ],
                "parameters": [
                    {
                        "name": "id",
                        "in": "query",
                        "description": "",
                        "required": true,
                        "type": "string"
                    }
                ],
                "responses": {
                    "200": {
                        "description": "successful operation",
                        "schema": {
                            "type": "object"
                        }
                    },
                    "400": {
                        "description": "Invalid status value"
                    }
                }
            }
        },
        "/users": {
            "get": {
                "tags": [
                    "EcSystem"
                ],
                "summary": "find appointments",
                "description": "",
                "produces": [
                    "application/json"
                ],
                "parameters": [
                    {
                        "name": "id",
                        "in": "query",
                        "description": "",
                        "required": true,
                        "type": "string"
                    }
                ],
                "responses": {
                    "200": {
                        "description": "successful operation",
                        "schema": {
                            "type": "object"
                        }
                    },
                    "400": {
                        "description": "Invalid status value"
                    }
                }
            }
        }
    },
    "securityDefinitions": {
        "petstore_auth": {
            "type": "oauth2",
            "authorizationUrl": "http://petstore.swagger.io/oauth/dialog",
            "flow": "implicit",
            "scopes": {
                "write:pets": "modify pets in your account",
                "read:pets": "read your pets"
            }
        },
        "api_key": {
            "type": "apiKey",
            "name": "api_key",
            "in": "header"
        }
    },
    "definitions": {
        "Tag": {
            "type": "object",
            "properties": {
                "id": {
                    "type": "integer",
                    "format": "int64"
                },
                "name": {
                    "type": "string"
                }
            },
            "xml": {
                "name": "Tag"
            }
        },
        "EcSystem": {
            "type": "object",
            "required": [
                "name",
                "photoUrls"
            ],
            "properties": {
                "store_id": {
                    "type": "string",
                    "example": "1"
                },
                "category": {
                    "$ref": "#/definitions/Category"
                },
                "name": {
                    "type": "string",
                    "example": "doggie"
                },
                "photoUrls": {
                    "type": "array",
                    "xml": {
                        "name": "photoUrl",
                        "wrapped": true
                    },
                    "items": {
                        "type": "string"
                    }
                },
                "tags": {
                    "type": "array",
                    "xml": {
                        "name": "tag",
                        "wrapped": true
                    },
                    "items": {
                        "$ref": "#/definitions/Tag"
                    }
                },
                "status": {
                    "type": "string",
                    "description": "pet status in the store",
                    "enum": [
                        "available",
                        "pending",
                        "sold"
                    ]
                }
            },
            "xml": {
                "name": "Pet"
            }
        },
        "ApiResponse": {
            "type": "object",
            "properties": {
                "code": {
                    "type": "integer",
                    "format": "int32"
                },
                "type": {
                    "type": "string"
                },
                "message": {
                    "type": "string"
                }
            }
        }
    }
}