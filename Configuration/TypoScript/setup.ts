
plugin.tx_nsdisquscomments_comment {
	view {
	    templateRootPaths.0 = EXT:ns_disqus_comments/Resources/Private/Templates/
	    templateRootPaths.1 = {$plugin.tx_nsdisquscomments_comment.view.templateRootPath}
	    partialRootPaths.0 = EXT:ns_disqus_comments/Resources/Private/Partials/
	    partialRootPaths.1 = {$plugin.tx_nsdisquscomments_comment.view.partialRootPath}
	    layoutRootPaths.0 = EXT:ns_disqus_comments/Resources/Private/Layouts/
	    layoutRootPaths.1 = {$plugin.tx_nsdisquscomments_comment.view.layoutRootPath}
	}
    settings{
        ShortName = {$plugin.tx_nsdisquscomments_comment.settings.ShortName}
    }
}

