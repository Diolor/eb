#!/bin/sh
# Assemble the migration deliverables into migration/dist/ from a git tree-ish
# (default: HEAD). Run manually or via the pre-commit hook (.githooks/pre-commit),
# which passes the staged index tree so dist/ always matches the commit.
set -e

TREEISH="${1:-HEAD}"
REPO_ROOT="$(git rev-parse --show-toplevel)"
DIST="$REPO_ROOT/migration/dist"
mkdir -p "$DIST"

git -C "$REPO_ROOT" archive --format=zip --prefix=emmauswald-bleibt/ \
  -o "$DIST/emmauswald-bleibt-theme.zip" "$TREEISH"
git -C "$REPO_ROOT" cat-file blob "$TREEISH:data/content.xml" > "$DIST/content.xml"
git -C "$REPO_ROOT" cat-file blob "$TREEISH:HANDBOOK.md" > "$DIST/HANDBOOK.md"

echo "Built migration/dist from $TREEISH:"
ls -lh "$DIST"
