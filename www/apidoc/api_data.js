define({ "api": [
  {
    "type": "post",
    "url": "/linephlits",
    "title": "",
    "name": "CreateLinephlit",
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "Object",
            "optional": false,
            "field": "data",
            "description": ""
          }
        ]
      }
    },
    "group": "linephlit",
    "version": "0.0.0",
    "filename": "www/application/controllers/api/LinephlitController.php",
    "groupTitle": "linephlit"
  },
  {
    "type": "get",
    "url": "/linephlits",
    "title": "",
    "name": "GetLinephlitList",
    "success": {
      "fields": {
        "Success 200": [
          {
            "group": "Success 200",
            "type": "string",
            "optional": false,
            "field": "linephlit_id",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "string",
            "optional": false,
            "field": "linephlit_name",
            "description": ""
          }
        ]
      }
    },
    "group": "linephlit",
    "description": "<p>Get linephlit list</p>",
    "version": "0.0.0",
    "filename": "www/application/controllers/api/LinephlitController.php",
    "groupTitle": "linephlit"
  },
  {
    "type": "get",
    "url": "/api/worksheet/line/list",
    "title": "",
    "name": "lineList",
    "success": {
      "fields": {
        "Success 200": [
          {
            "group": "Success 200",
            "type": "string",
            "optional": false,
            "field": "linephlit_id",
            "description": ""
          },
          {
            "group": "Success 200",
            "type": "string",
            "optional": false,
            "field": "linephlit_name",
            "description": ""
          }
        ]
      }
    },
    "group": "worksheet",
    "version": "0.0.0",
    "filename": "www/application/controllers/api/WorksheetController.php",
    "groupTitle": "worksheet"
  }
] });
