# slugify-cli

## Installation

Clone repository:

`git clone https://github.com/mihaliak/slugify-cli.git && cd slugify-cli`

Create symlink to user bin directory (may be different for you, check your PATH variable):

`ln -s "$(pwd)/builds/slugify" /usr/local/bin/slugify`

## Usage

`slugify make "Some kind of crázý štring"`

or

`slugify make` - without string argument command will be asking for inputs forever (ie make multiple slugs at once)