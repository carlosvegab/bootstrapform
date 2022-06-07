
# Bootstrap Form

Components for a bootstrap form fields.

[![MIT License](https://img.shields.io/apm/l/atomic-design-ui.svg?)](https://github.com/tterb/atomic-design-ui/blob/master/LICENSEs)


## Author

- [Carlos Vega](https://www.carlosvega.net)


## Installation

Install Bootstrapform with Composer

```bash
  composer require cvega/bootstrapform
```

And run Laravel Artisan command to publish content

```bash
  php artisan vendor:publish --provider="Cvega\Bootstrapform\src\BootstrapformServiceProvider.php" --tag="bootstrapform_components"
```

You need to use Bootstrap 5.
## Documentation

After installed, you will have the following files:

	- some components located in resources/views/components/bootstrapform

How Can You Use This Components?

You must use it in your views:

```bash
<form enctype="multipart/form-data" action="ROUTE_FOR_YOUR_FORM" method="post">
    @csrf
    <x-bootstrapform.inputs type="text" fieldname="NAME_FOR_NAME_AND_ID" labelname="TEXT FOR LABEL" value="VALUE FOR INPUT" />
    <x-bootstrapform.select type="text" fieldname="NAME_FOR_NAME_AND_ID" labelname="TEXT FOR LABEL" :values="json_encode(['Opt. 1', 'Opt. 2', 'Opt. 3', 'Opt. 4', 'Opt. 5', 'Opt. 6', 'Opt. 7'])" selectedvalue="Opt. 4" />
    <x-bootstrapform.color-picker nombrecampo="color" labelname="TEXT FOR LABEL" value="#HEXCOL" />
    <x-bootstrapform.file tipo="text" fieldname="NAME_FOR_NAME_AND_ID" labelname="TEXT FOR LABEL" />
    <x-bootstrapform.checkbox nombrecampo="check" labelname="TEXT FOR LABEL" checked="1" />
    <x-bootstrapform.textarea nombrecampo="textarea" labelname="TEXT FOR LABEL" value="CONTENT FOR TEXTAREA" />
    <x-bootstrapform.button type="submit" value="BUTTON LABEL" />
</form>
```

Each one of this components will render the following code.

Inputs:

```bash
    <x-bootstrapform.inputs type="text" fieldname="NAME_FOR_NAME_AND_ID" labelname="TEXT FOR LABEL" value="VALUE FOR INPUT" />
```
```bash
    <div class="mb-3">
      <label for="NAME_FOR_NAME_AND_ID" class="form-label">TEXT FOR LABEL</label>
      <input type="text" class="form-control" name="NAME_FOR_NAME_AND_ID" id="NAME_FOR_NAME_AND_ID" placeholder="TEXT FOR LABEL" value="VALOR">
    </div>
```

Select (values need to be formatted with json_encode function):

```bash
    <x-bootstrapform.select type="text" fieldname="NAME_FOR_NAME_AND_ID" labelname="TEXT FOR LABEL" :values="json_encode(['Opt. 1', 'Opt. 2', 'Opt. 3', 'Opt. 4', 'Opt. 5', 'Opt. 6', 'Opt. 7'])" selectedvalue="Opt. 4" />
```
```bash
    <div class="mb-3">
      <label for="NAME_FOR_NAME_AND_ID" class="form-label">TEXT FOR LABEL</label>
      <select name="NAME_FOR_NAME_AND_ID" id="NAME_FOR_NAME_AND_ID" class="form-select">
            <option value="Opt. 1">Opt. 1</option>
            <option value="Opt. 2">Opt. 2</option>
            <option value="Opt. 3">Opt. 3</option>
            <option value="Opt. 4" selected="selected">Opt. 4</option>
            <option value="Opt. 5">Opt. 5</option>
            <option value="Opt. 6">Opt. 6</option>
            <option value="Opt. 7">Opt. 7</option>
      </select>
    </div>
```

Color picker:

```bash
    <x-bootstrapform.color-picker nombrecampo="color" labelname="TEXT FOR LABEL" value="#HEXCOL" />
```
```bash
    <div class="mb-3">
      <label for="NAME_FOR_NAME_AND_ID" class="form-label">TEXT FOR LABEL</label>
      <input type="color" class="form-control form-control-color" name="NAME_FOR_NAME_AND_ID" id="NAME_FOR_NAME_AND_ID" value="HEXCOL" title="NAME_FOR_NAME_AND_ID">
    </div>
```

File:

```bash
    <x-bootstrapform.file tipo="text" fieldname="NAME_FOR_NAME_AND_ID" labelname="TEXT FOR LABEL" />
```
```bash
    <div class="mb-3">
      <label for="NAME_FOR_NAME_AND_ID" class="form-label">TEXT FOR LABEL</label>
      <input class="form-control" type="file" id="NAME_FOR_NAME_AND_ID" name="NAME_FOR_NAME_AND_ID">
    </div>
```

Checkbox (checked possible values are "1" for "checked" and "0")
```bash
    <x-bootstrapform.checkbox nombrecampo="check" labelname="TEXT FOR LABEL" checked="1" />
```
```bash
    <div class="mb-3 form-check">
      <input type="checkbox" class="form-check-input" name="NAME_FOR_NAME_AND_ID" id="NAME_FOR_NAME_AND_ID">
      <label class="form-check-label" for="NAME_FOR_NAME_AND_ID">TEXT FOR LABEL</label>
    </div>
```

Textarea:

```bash
  <x-bootstrapform.textarea nombrecampo="textarea" labelname="TEXT FOR LABEL" value="CONTENT FOR TEXTAREA" />
```
```bash
    <div class="mb-3">
      <label for="textarea" class="form-label">TEXT FOR LABEL</label>
      <textarea class="form-control" name="NAME_FOR_NAME_AND_ID" id="NAME_FOR_NAME_AND_ID" rows="3">CONTENT FOR TEXTAREA</textarea>
    </div>
```

Button:

```bash
    <x-bootstrapform.button type="submit" value="BUTTON LABEL" />
```
```bash
    <input class="btn btn-primary" type="submit" value="ENVIAR">
```

Make sure you are using Bootstrap 5.



