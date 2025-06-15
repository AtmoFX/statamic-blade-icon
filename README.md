# Troubleshooting `raw` modifier on blade templates

The [raw modifier](https://statamic.dev/modifiers/raw) is documented to work on Markdown fields.

However, it was shared several times on Discord that it could be applied on icon fieldtypes too. In that case, it turns the svg content into the icon name or url.
`{{ svg src="{ icon | raw } }}` is valid in Antlers and makes it possible to use the modifiers provided by the `svg` tag (anything is accepted but adding a `class` is an obvious thing to do).

This [Discord conversation](https://discord.com/channels/489818810157891584/1381990087121834087) has been opened to clarify how the same thing could be done in Blade, with no success so far.

# The website

## Configuration

This demonstration website was created with the `statamic new` command, then the following elements were added:
 - 1 blueprint to contain a replicator to show icons.
 - 2 templates demonstrating the templating of an `Icon` fieldtype vs what is possible when using the `svg` tag, respectively rendered in Antlers and Blade.
 - 2 entries with the same content, except for the template supposed to render them.

## URLs

The 2 added entries are at URL:
 - `/antlers` (working page)
 - `/blade` (includes the suggested snippet from the Discord conversation and therefore shows an error)

## Control panel connection

You can use the below credentials to access the control panel:
 - Login: `admin-user@statamic.dev`
 - Password: `Admin`