### Elements

#### Traits for objects state controls:

  - LockedTrait - Used to lock an object
  ```php
  use ComponentBundle\Model\Traits\Active\LockedTrait;
  ```
  - ShowInMenuTrait - Used to show in menu an object (for example: some menu of categories or pages)
  ```php
  use ComponentBundle\Model\Traits\Active\ShowInMenuTrait;
  ```
  - ShowOnFooterTrait - Used for show on footer (for example: some menu of categories or pages)
  ```php
  use ComponentBundle\Model\Traits\Active\ShowOnFooterTrait;
  ```
  - ShowOnWebsiteTrait - Used for show object on website (active / inactive)
  ```php
  use ComponentBundle\Model\Traits\Active\ShowOnWebsiteTrait;
  ```
  - ToggleableTrait - Used to toggle the state of an object (active / inactive)
  ```php
  use ComponentBundle\Model\Traits\Active\ToggleableTrait;
  ```
  - UseForGoogleNewsTrait - Used to google news
  ```php
  use ComponentBundle\Model\Traits\Active\UseForGoogleNewsTrait;
  ```

#### Traits for objects date:

  - DeadLineTrait  - Deadline
  ```php
  use ComponentBundle\Model\Traits\Date\DeadLineTrait;
  ```
  - ExpiresAtTrait - Expires at
  ```php
  use ComponentBundle\Model\Traits\Date\ExpiresAtTrait;
  ```
  - OrderAtTrait - Order at
  ```php
  use ComponentBundle\Model\Traits\Date\OrderAtTrait;
  ```
  - PublishAtTrait - Publish at
  ```php
  use ComponentBundle\Model\Traits\Date\PublishAtTrait;
  ```
  - VerifiedAtTrait - Verified at
  ```php
  use ComponentBundle\Model\Traits\Date\VerifiedAtTrait;
  ```

#### Traits for identify objects:

  - IdAutoTrait
  ```php
  use ComponentBundle\Model\Traits\Id\IdAutoTrait;
  ```
  - TransitIdTrait
  ```php
  use ComponentBundle\Model\Traits\TransitIdTrait;
  ```

#### Traits for objects price:

  - DiscountPriceTrait - Discount price
  ```php
  use ComponentBundle\Model\Traits\Money\DiscountPriceTrait;
  ```
  - FilterPriceTrait - Filter price
  ```php
  use ComponentBundle\Model\Traits\Money\FilterPriceTrait;
  ```
  - ManagerDiscountTrait - Manager discount price
  ```php
  use ComponentBundle\Model\Traits\Money\ManagerDiscountTrait;
  ```
  - PriceTrait - Price
  ```php
  use ComponentBundle\Model\Traits\Money\PriceTrait;
  ```
  - TotalPriceTrait - Total price
  ```php
  use ComponentBundle\Model\Traits\Money\TotalPriceTrait;
  ```

#### Traits for text fields:

  - SlugTrait - Slug
  ```php
  use ComponentBundle\Model\Traits\Translatable\Slug\SlugTrait;
  ```
  - SlugUniqueTrueTrait - Slug
  ```php
  use ComponentBundle\Model\Traits\Translatable\Slug\SlugUniqueTrueTrait;
  ```
  - SlugUniqueFalseTrait - Slug
  ```php
  use ComponentBundle\Model\Traits\Translatable\Slug\SlugUniqueFalseTrait;
  ```
  - DescriptionTrait - Description
  ```php
  use ComponentBundle\Model\Traits\Translatable\DescriptionTrait;
  ```
  - GenitiveTrait - Genitive title
  ```php
  use ComponentBundle\Model\Traits\Translatable\GenitiveTrait;
  ```
  - ShortDescriptionTrait - Short description
  ```php
  use ComponentBundle\Model\Traits\Translatable\ShortDescriptionTrait;
  ```
  - ShortTitleTrait - Short title
  ```php
  use ComponentBundle\Model\Traits\Translatable\ShortTitleTrait;
  ```
  - TitleTrait - Title
  ```php
  use ComponentBundle\Model\Traits\Translatable\TitleTrait;
  ```

#### Traits for user fields:

  - EmailBlankTrait - Email
  ```php
  use ComponentBundle\Model\Traits\User\Email\EmailBlankTrait;
  ```
  - EmailCanonicalTrait - Email canonical
  ```php
  use ComponentBundle\Model\Traits\User\Email\EmailCanonicalTrait;
  ```
  - EmailNotBlankUniqueTrait - Email
  ```php
  use ComponentBundle\Model\Traits\User\Email\EmailNotBlankUniqueTrait;
  ```
  - NameTrait - Name
  ```php
  use ComponentBundle\Model\Traits\User\Name\NameTrait;
  ```
  - PhoneNumberTrait - Phone number
  ```php
  use ComponentBundle\Model\Traits\User\PhoneNumber\PhoneNumberTrait;
  ```
  - SurnameTrait - Surname
  ```php
  use ComponentBundle\Model\Traits\User\Surname\SurnameTrait;
  ```
  - UsernameTrait - Username
  ```php
  use ComponentBundle\Model\Traits\User\Username\UsernameTrait;
  ```
  - UsernameCanonicalTrait - Username canonical
  ```php
  use ComponentBundle\Model\Traits\User\Username\UsernameCanonicalTrait;
  ```

#### Other traits for objects:

  - ImgTrait - Img
  ```php
  use ComponentBundle\Model\Traits\Img\ImgTrait;
  ```
  - VideoUrlTrait - Video url
  ```php
  use ComponentBundle\Model\Traits\Video\VideoUrlTrait;
  ```
  - VideoPathTrait - Video path
  ```php
  use ComponentBundle\Dto\Traits\Video\VideoPathTrait;
  ```
  - LinkTrait - Link
  ```php
  use ComponentBundle\Model\Traits\LinkTrait;
  ```
  - ManagerCommentTrait - Manager comment
  ```php
  use ComponentBundle\Model\Traits\ManagerCommentTrait;
  ```
  - MessageTrait - Message
  ```php
  use ComponentBundle\Model\Traits\MessageTrait;
  ```
  - PositionTrait - Position
  ```php
  use ComponentBundle\Model\Traits\PositionTrait;
  ```
  - SystemNameTrait - System name
  ```php
  use ComponentBundle\Model\Traits\SystemNameTrait;
  ```
  - ViewsTrait - Views
  ```php
  use ComponentBundle\Model\Traits\ViewsTrait;
  ```
