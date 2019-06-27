
In config/packages/sonata_media.yaml
```yaml
sonata_media:
    db_driver: doctrine_orm
    class:
        media: SfadlessCMF\MediaBundle\Entity\Media
        gallery: SfadlessCMF\MediaBundle\Entity\Gallery
        gallery_has_media: SfadlessCMF\MediaBundle\Entity\GalleryHasMedia

```