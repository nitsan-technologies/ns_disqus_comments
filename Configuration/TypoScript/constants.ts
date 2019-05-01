
plugin.tx_nsdisquscomments_comment {
	view {
	    # cat=plugin.tx_nsdisquscomments/file; type=string; label=Path to template root (FE)
	    templateRootPath = EXT:ns_disqus_comments/Resources/Private/Templates/
	    # cat=plugin.tx_nsdisquscomments/file; type=string; label=Path to template partials (FE)
	    partialRootPath = EXT:ns_disqus_comments/Resources/Private/Partials/
	    # cat=plugin.tx_nsdisquscomments/file; type=string; label=Path to template layouts (FE)
	    layoutRootPath = EXT:ns_disqus_comments/Resources/Private/Layouts/
	}
    settings{
      # cat=plugin.tx_nsdisquscomments//b; type=string; label=Disqus comments short Name
      ShortName =
    }
}
